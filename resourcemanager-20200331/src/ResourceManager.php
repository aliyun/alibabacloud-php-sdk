<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AcceptHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AcceptHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AttachPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AttachPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelCreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelCreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelPromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelPromoteResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreatePolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeclineHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeclineHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeletePolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeletePolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteServiceLinkedRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteServiceLinkedRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DestroyResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DestroyResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DetachPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DetachPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPayerForAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPayerForAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InitResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InitResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InviteAccountToResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InviteAccountToResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsForParentRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsForParentResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListFoldersForParentRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListFoldersForParentResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyVersionsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyVersionsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\PromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\PromoteResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RemoveCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RemoveCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendCreateCloudAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendCreateCloudAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendPromoteResourceAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendPromoteResourceAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SetDefaultPolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SetDefaultPolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ResourceManager extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resourcemanager', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateServiceLinkedRoleResponse::fromMap($this->doRequest('CreateServiceLinkedRole', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceLinkedRoleDeletionStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetServiceLinkedRoleDeletionStatusResponse
     */
    public function getServiceLinkedRoleDeletionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetServiceLinkedRoleDeletionStatusResponse::fromMap($this->doRequest('GetServiceLinkedRoleDeletionStatus', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetServiceLinkedRoleDeletionStatusRequest $request
     *
     * @return GetServiceLinkedRoleDeletionStatusResponse
     */
    public function getServiceLinkedRoleDeletionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLinkedRoleDeletionStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListTrustedServiceStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListTrustedServiceStatusResponse
     */
    public function listTrustedServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTrustedServiceStatusResponse::fromMap($this->doRequest('ListTrustedServiceStatus', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTrustedServiceStatusRequest $request
     *
     * @return ListTrustedServiceStatusResponse
     */
    public function listTrustedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrustedServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServiceLinkedRoleResponse
     */
    public function deleteServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteServiceLinkedRoleResponse::fromMap($this->doRequest('DeleteServiceLinkedRole', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteServiceLinkedRoleRequest $request
     *
     * @return DeleteServiceLinkedRoleResponse
     */
    public function deleteServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateRoleResponse::fromMap($this->doRequest('UpdateRole', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourcesResponse::fromMap($this->doRequest('ListResources', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesWithOptions($request, $runtime);
    }

    /**
     * @param CreateCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCloudAccountResponse
     */
    public function createCloudAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCloudAccountResponse::fromMap($this->doRequest('CreateCloudAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateCloudAccountRequest $request
     *
     * @return CreateCloudAccountResponse
     */
    public function createCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteRoleResponse::fromMap($this->doRequest('DeleteRole', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteRoleRequest $request
     *
     * @return DeleteRoleResponse
     */
    public function deleteRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoleWithOptions($request, $runtime);
    }

    /**
     * @param GetRoleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetRoleResponse::fromMap($this->doRequest('GetRole', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetRoleRequest $request
     *
     * @return GetRoleResponse
     */
    public function getRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListRolesResponse::fromMap($this->doRequest('ListRoles', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @param CreateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRoleResponse::fromMap($this->doRequest('CreateRole', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListPolicyAttachmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPolicyAttachmentsResponse
     */
    public function listPolicyAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPolicyAttachmentsResponse::fromMap($this->doRequest('ListPolicyAttachments', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListPolicyAttachmentsRequest $request
     *
     * @return ListPolicyAttachmentsResponse
     */
    public function listPolicyAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyAttachmentsWithOptions($request, $runtime);
    }

    /**
     * @param DetachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachPolicyResponse
     */
    public function detachPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetachPolicyResponse::fromMap($this->doRequest('DetachPolicy', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetachPolicyRequest $request
     *
     * @return DetachPolicyResponse
     */
    public function detachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachPolicyWithOptions($request, $runtime);
    }

    /**
     * @param AttachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPolicyResponse
     */
    public function attachPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AttachPolicyResponse::fromMap($this->doRequest('AttachPolicy', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AttachPolicyRequest $request
     *
     * @return AttachPolicyResponse
     */
    public function attachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetPolicyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPolicyVersionResponse::fromMap($this->doRequest('GetPolicyVersion', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetPolicyVersionRequest $request
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultPolicyVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDefaultPolicyVersionResponse::fromMap($this->doRequest('SetDefaultPolicyVersion', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDefaultPolicyVersionRequest $request
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteResourceGroupResponse::fromMap($this->doRequest('DeleteResourceGroup', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteResourceGroupRequest $request
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPolicyResponse::fromMap($this->doRequest('GetPolicy', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetPolicyRequest $request
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateResourceGroupResponse::fromMap($this->doRequest('UpdateResourceGroup', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateResourceGroupRequest $request
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListResourceGroupsResponse::fromMap($this->doRequest('ListResourceGroups', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListResourceGroupsRequest $request
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPoliciesResponse::fromMap($this->doRequest('ListPolicies', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListPolicyVersionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListPolicyVersionsResponse::fromMap($this->doRequest('ListPolicyVersions', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListPolicyVersionsRequest $request
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyVersionsWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourceAccountResponse
     */
    public function createResourceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateResourceAccountResponse::fromMap($this->doRequest('CreateResourceAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateResourceAccountRequest $request
     *
     * @return CreateResourceAccountResponse
     */
    public function createResourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceAccountWithOptions($request, $runtime);
    }

    /**
     * @param ListHandshakesForResourceDirectoryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListHandshakesForResourceDirectoryResponse
     */
    public function listHandshakesForResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListHandshakesForResourceDirectoryResponse::fromMap($this->doRequest('ListHandshakesForResourceDirectory', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListHandshakesForResourceDirectoryRequest $request
     *
     * @return ListHandshakesForResourceDirectoryResponse
     */
    public function listHandshakesForResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHandshakesForResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param DestroyResourceDirectoryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DestroyResourceDirectoryResponse::fromMap($this->doRequest('DestroyResourceDirectory', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DestroyResourceDirectoryRequest $request
     *
     * @return DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param CreatePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePolicyVersionResponse::fromMap($this->doRequest('CreatePolicyVersion', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreatePolicyVersionRequest $request
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeletePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePolicyVersionResponse::fromMap($this->doRequest('DeletePolicyVersion', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeletePolicyVersionRequest $request
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetResourceGroupResponse::fromMap($this->doRequest('GetResourceGroup', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetResourceGroupRequest $request
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param InitResourceDirectoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return InitResourceDirectoryResponse
     */
    public function initResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InitResourceDirectoryResponse::fromMap($this->doRequest('InitResourceDirectory', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InitResourceDirectoryRequest $request
     *
     * @return InitResourceDirectoryResponse
     */
    public function initResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param GetHandshakeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetHandshakeResponse
     */
    public function getHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetHandshakeResponse::fromMap($this->doRequest('GetHandshake', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetHandshakeRequest $request
     *
     * @return GetHandshakeResponse
     */
    public function getHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHandshakeWithOptions($request, $runtime);
    }

    /**
     * @param CancelHandshakeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelHandshakeResponse
     */
    public function cancelHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelHandshakeResponse::fromMap($this->doRequest('CancelHandshake', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelHandshakeRequest $request
     *
     * @return CancelHandshakeResponse
     */
    public function cancelHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelHandshakeWithOptions($request, $runtime);
    }

    /**
     * @param CreatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePolicyResponse::fromMap($this->doRequest('CreatePolicy', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreatePolicyRequest $request
     *
     * @return CreatePolicyResponse
     */
    public function createPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeclineHandshakeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeclineHandshakeResponse
     */
    public function declineHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeclineHandshakeResponse::fromMap($this->doRequest('DeclineHandshake', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeclineHandshakeRequest $request
     *
     * @return DeclineHandshakeResponse
     */
    public function declineHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->declineHandshakeWithOptions($request, $runtime);
    }

    /**
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePolicyResponse::fromMap($this->doRequest('DeletePolicy', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeletePolicyRequest $request
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * @param ListHandshakesForAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHandshakesForAccountResponse
     */
    public function listHandshakesForAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListHandshakesForAccountResponse::fromMap($this->doRequest('ListHandshakesForAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListHandshakesForAccountRequest $request
     *
     * @return ListHandshakesForAccountResponse
     */
    public function listHandshakesForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHandshakesForAccountWithOptions($request, $runtime);
    }

    /**
     * @param InviteAccountToResourceDirectoryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return InviteAccountToResourceDirectoryResponse
     */
    public function inviteAccountToResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InviteAccountToResourceDirectoryResponse::fromMap($this->doRequest('InviteAccountToResourceDirectory', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InviteAccountToResourceDirectoryRequest $request
     *
     * @return InviteAccountToResourceDirectoryResponse
     */
    public function inviteAccountToResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteAccountToResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param AcceptHandshakeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AcceptHandshakeResponse
     */
    public function acceptHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AcceptHandshakeResponse::fromMap($this->doRequest('AcceptHandshake', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AcceptHandshakeRequest $request
     *
     * @return AcceptHandshakeResponse
     */
    public function acceptHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptHandshakeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAccountResponse
     */
    public function updateAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateAccountResponse::fromMap($this->doRequest('UpdateAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateAccountRequest $request
     *
     * @return UpdateAccountResponse
     */
    public function updateAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetFolderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetFolderResponse
     */
    public function getFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetFolderResponse::fromMap($this->doRequest('GetFolder', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetFolderRequest $request
     *
     * @return GetFolderResponse
     */
    public function getFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFolderWithOptions($request, $runtime);
    }

    /**
     * @param ListAccountsForParentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAccountsForParentResponse
     */
    public function listAccountsForParentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAccountsForParentResponse::fromMap($this->doRequest('ListAccountsForParent', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListAccountsForParentRequest $request
     *
     * @return ListAccountsForParentResponse
     */
    public function listAccountsForParent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsForParentWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateResourceGroupResponse::fromMap($this->doRequest('CreateResourceGroup', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateResourceGroupRequest $request
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param PromoteResourceAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PromoteResourceAccountResponse
     */
    public function promoteResourceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PromoteResourceAccountResponse::fromMap($this->doRequest('PromoteResourceAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PromoteResourceAccountRequest $request
     *
     * @return PromoteResourceAccountResponse
     */
    public function promoteResourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->promoteResourceAccountWithOptions($request, $runtime);
    }

    /**
     * @param ListAccountsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAccountsResponse
     */
    public function listAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAccountsResponse::fromMap($this->doRequest('ListAccounts', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListAccountsRequest $request
     *
     * @return ListAccountsResponse
     */
    public function listAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsWithOptions($request, $runtime);
    }

    /**
     * @param CancelPromoteResourceAccountRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelPromoteResourceAccountResponse
     */
    public function cancelPromoteResourceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelPromoteResourceAccountResponse::fromMap($this->doRequest('CancelPromoteResourceAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelPromoteResourceAccountRequest $request
     *
     * @return CancelPromoteResourceAccountResponse
     */
    public function cancelPromoteResourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPromoteResourceAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFolderResponse::fromMap($this->doRequest('CreateFolder', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateFolderRequest $request
     *
     * @return CreateFolderResponse
     */
    public function createFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFolderWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFolderResponse::fromMap($this->doRequest('DeleteFolder', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteFolderRequest $request
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFolderWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAccountResponse
     */
    public function getAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAccountResponse::fromMap($this->doRequest('GetAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAccountRequest $request
     *
     * @return GetAccountResponse
     */
    public function getAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceDirectoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetResourceDirectoryResponse
     */
    public function getResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetResourceDirectoryResponse::fromMap($this->doRequest('GetResourceDirectory', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetResourceDirectoryRequest $request
     *
     * @return GetResourceDirectoryResponse
     */
    public function getResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFolderResponse::fromMap($this->doRequest('UpdateFolder', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateFolderRequest $request
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolderWithOptions($request, $runtime);
    }

    /**
     * @param MoveAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MoveAccountResponse
     */
    public function moveAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return MoveAccountResponse::fromMap($this->doRequest('MoveAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param MoveAccountRequest $request
     *
     * @return MoveAccountResponse
     */
    public function moveAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveAccountWithOptions($request, $runtime);
    }

    /**
     * @param ListAncestorsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAncestorsResponse
     */
    public function listAncestorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAncestorsResponse::fromMap($this->doRequest('ListAncestors', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListAncestorsRequest $request
     *
     * @return ListAncestorsResponse
     */
    public function listAncestors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAncestorsWithOptions($request, $runtime);
    }

    /**
     * @param ResendCreateCloudAccountEmailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ResendCreateCloudAccountEmailResponse
     */
    public function resendCreateCloudAccountEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResendCreateCloudAccountEmailResponse::fromMap($this->doRequest('ResendCreateCloudAccountEmail', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResendCreateCloudAccountEmailRequest $request
     *
     * @return ResendCreateCloudAccountEmailResponse
     */
    public function resendCreateCloudAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendCreateCloudAccountEmailWithOptions($request, $runtime);
    }

    /**
     * @param GetPayerForAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPayerForAccountResponse
     */
    public function getPayerForAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPayerForAccountResponse::fromMap($this->doRequest('GetPayerForAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetPayerForAccountRequest $request
     *
     * @return GetPayerForAccountResponse
     */
    public function getPayerForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPayerForAccountWithOptions($request, $runtime);
    }

    /**
     * @param ResendPromoteResourceAccountEmailRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ResendPromoteResourceAccountEmailResponse
     */
    public function resendPromoteResourceAccountEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResendPromoteResourceAccountEmailResponse::fromMap($this->doRequest('ResendPromoteResourceAccountEmail', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResendPromoteResourceAccountEmailRequest $request
     *
     * @return ResendPromoteResourceAccountEmailResponse
     */
    public function resendPromoteResourceAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendPromoteResourceAccountEmailWithOptions($request, $runtime);
    }

    /**
     * @param ListFoldersForParentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListFoldersForParentResponse
     */
    public function listFoldersForParentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFoldersForParentResponse::fromMap($this->doRequest('ListFoldersForParent', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListFoldersForParentRequest $request
     *
     * @return ListFoldersForParentResponse
     */
    public function listFoldersForParent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoldersForParentWithOptions($request, $runtime);
    }

    /**
     * @param RemoveCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveCloudAccountResponse
     */
    public function removeCloudAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveCloudAccountResponse::fromMap($this->doRequest('RemoveCloudAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveCloudAccountRequest $request
     *
     * @return RemoveCloudAccountResponse
     */
    public function removeCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCloudAccountWithOptions($request, $runtime);
    }

    /**
     * @param CancelCreateCloudAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelCreateCloudAccountResponse
     */
    public function cancelCreateCloudAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelCreateCloudAccountResponse::fromMap($this->doRequest('CancelCreateCloudAccount', 'HTTPS', 'POST', '2020-03-31', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CancelCreateCloudAccountRequest $request
     *
     * @return CancelCreateCloudAccountResponse
     */
    public function cancelCreateCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCreateCloudAccountWithOptions($request, $runtime);
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
}
