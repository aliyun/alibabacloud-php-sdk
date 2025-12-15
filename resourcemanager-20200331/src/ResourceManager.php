<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AcceptHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AcceptHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AttachControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AttachControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AttachPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\AttachPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\BindSecureMobilePhoneRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\BindSecureMobilePhoneResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelCreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelCreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelPromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelPromoteResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CheckAccountDeleteRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CheckAccountDeleteResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateAutoGroupingRuleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateAutoGroupingRuleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateControlPolicyResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteAccountShrinkRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteAutoGroupingRuleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteAutoGroupingRuleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteControlPolicyResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeregisterDelegatedAdministratorRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeregisterDelegatedAdministratorResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DestroyResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DetachControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DetachControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DetachPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DetachPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DisableAssociatedTransferResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DisableAutoGroupingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DisableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DisableResourceGroupNotificationResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableAssociatedTransferResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableAutoGroupingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceGroupNotificationResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAutoGroupingRuleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAutoGroupingRuleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAutoGroupingStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetControlPolicyEnablementStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetControlPolicyResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupAdminSettingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupNotificationSettingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupResourceCountsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupResourceCountsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InitResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InviteAccountToResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InviteAccountToResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsForParentRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsForParentResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAccountsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAncestorsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAssociatedTransferSettingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAutoGroupingRemediationsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAutoGroupingRemediationsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAutoGroupingRulesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListAutoGroupingRulesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPoliciesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPoliciesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedAdministratorsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedAdministratorsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupCapabilityRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupCapabilityResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsWithAuthDetailsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTargetAttachmentsForControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTargetAttachmentsForControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\LookupResourceGroupEventsResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveResourcesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveResourcesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\PromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\PromoteResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RegisterDelegatedAdministratorRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RegisterDelegatedAdministratorResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RemoveCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RemoveCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendCreateCloudAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendCreateCloudAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendPromoteResourceAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendPromoteResourceAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RetryChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\RetryChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SendVerificationCodeForBindSecureMobilePhoneRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SendVerificationCodeForBindSecureMobilePhoneResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SendVerificationCodeForEnableRDRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SendVerificationCodeForEnableRDResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SetDefaultPolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SetDefaultPolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SetMemberDeletionPermissionRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\SetMemberDeletionPermissionResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAssociatedTransferSettingRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAssociatedTransferSettingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAutoGroupingConfigRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAutoGroupingConfigResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAutoGroupingRuleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAutoGroupingRuleResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupAdminSettingRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupAdminSettingResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ResourceManager extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resourcemanager', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Accepts an invitation.
     *
     * @remarks
     * After an invited Alibaba Cloud account joins a resource directory, it becomes a member of the resource directory. By default, the name of the invited Alibaba Cloud account is used as the display name of the account in the resource directory.
     * This topic provides an example on how to call the API operation to accept the invitation `h-Ih8IuPfvV0t0****` that is initiated to invite the Alibaba Cloud account `177242285274****` to join the resource directory `rd-3G****`.
     *
     * @param request - AcceptHandshakeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptHandshakeResponse
     *
     * @param AcceptHandshakeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AcceptHandshakeResponse
     */
    public function acceptHandshakeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->handshakeId) {
            @$query['HandshakeId'] = $request->handshakeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AcceptHandshake',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Accepts an invitation.
     *
     * @remarks
     * After an invited Alibaba Cloud account joins a resource directory, it becomes a member of the resource directory. By default, the name of the invited Alibaba Cloud account is used as the display name of the account in the resource directory.
     * This topic provides an example on how to call the API operation to accept the invitation `h-Ih8IuPfvV0t0****` that is initiated to invite the Alibaba Cloud account `177242285274****` to join the resource directory `rd-3G****`.
     *
     * @param request - AcceptHandshakeRequest
     *
     * @returns AcceptHandshakeResponse
     *
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
     * @remarks
     * After you attach an access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     * A maximum of 10 access control policies can be attached to a folder or member.
     * This topic provides an example on how to call the API operation to attach the custom access control policy `cp-jExXAqIYkwHN****` to the folder `fd-ZDNPiT****`.
     *
     * @param request - AttachControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachControlPolicyResponse
     *
     * @param AttachControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachControlPolicyResponse
     */
    public function attachControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * After you attach an access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     * A maximum of 10 access control policies can be attached to a folder or member.
     * This topic provides an example on how to call the API operation to attach the custom access control policy `cp-jExXAqIYkwHN****` to the folder `fd-ZDNPiT****`.
     *
     * @param request - AttachControlPolicyRequest
     *
     * @returns AttachControlPolicyResponse
     *
     * @param AttachControlPolicyRequest $request
     *
     * @return AttachControlPolicyResponse
     */
    public function attachControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Attaches a permission policy to an object, which can be a RAM user, RAM user group, or RAM role. After you attach a permission policy to an object, the object has the operation permissions on the resources in a specific resource group or within a specific Alibaba Cloud account.
     *
     * @remarks
     * In this example, the policy `AdministratorAccess` is attached to the RAM user `alice@demo.onaliyun.com` and takes effect only for resources in the `rg-9gLOoK****` resource group.
     *
     * @param request - AttachPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachPolicyResponse
     *
     * @param AttachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPolicyResponse
     */
    public function attachPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->principalName) {
            @$query['PrincipalName'] = $request->principalName;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a permission policy to an object, which can be a RAM user, RAM user group, or RAM role. After you attach a permission policy to an object, the object has the operation permissions on the resources in a specific resource group or within a specific Alibaba Cloud account.
     *
     * @remarks
     * In this example, the policy `AdministratorAccess` is attached to the RAM user `alice@demo.onaliyun.com` and takes effect only for resources in the `rg-9gLOoK****` resource group.
     *
     * @param request - AttachPolicyRequest
     *
     * @returns AttachPolicyResponse
     *
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
     * 设置安全手机号.
     *
     * @remarks
     * You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     * This topic provides an example on how to call the API operation to bind a mobile phone number to the member `138660628348****` for security purposes.
     *
     * @param request - BindSecureMobilePhoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindSecureMobilePhoneResponse
     *
     * @param BindSecureMobilePhoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BindSecureMobilePhoneResponse
     */
    public function bindSecureMobilePhoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->secureMobilePhone) {
            @$query['SecureMobilePhone'] = $request->secureMobilePhone;
        }

        if (null !== $request->verificationCode) {
            @$query['VerificationCode'] = $request->verificationCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindSecureMobilePhone',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindSecureMobilePhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置安全手机号.
     *
     * @remarks
     * You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     * This topic provides an example on how to call the API operation to bind a mobile phone number to the member `138660628348****` for security purposes.
     *
     * @param request - BindSecureMobilePhoneRequest
     *
     * @returns BindSecureMobilePhoneResponse
     *
     * @param BindSecureMobilePhoneRequest $request
     *
     * @return BindSecureMobilePhoneResponse
     */
    public function bindSecureMobilePhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSecureMobilePhoneWithOptions($request, $runtime);
    }

    /**
     * 取消修改邮箱.
     *
     * @param request - CancelChangeAccountEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelChangeAccountEmailResponse
     *
     * @param CancelChangeAccountEmailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelChangeAccountEmailResponse
     */
    public function cancelChangeAccountEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelChangeAccountEmail',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelChangeAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消修改邮箱.
     *
     * @param request - CancelChangeAccountEmailRequest
     *
     * @returns CancelChangeAccountEmailResponse
     *
     * @param CancelChangeAccountEmailRequest $request
     *
     * @return CancelChangeAccountEmailResponse
     */
    public function cancelChangeAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelChangeAccountEmailWithOptions($request, $runtime);
    }

    /**
     * 取消创建云账号类型的成员.
     *
     * @param request - CancelCreateCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCreateCloudAccountResponse
     *
     * @param CancelCreateCloudAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelCreateCloudAccountResponse
     */
    public function cancelCreateCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCreateCloudAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCreateCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消创建云账号类型的成员.
     *
     * @param request - CancelCreateCloudAccountRequest
     *
     * @returns CancelCreateCloudAccountResponse
     *
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
     * Cancels an invitation.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to cancel the invitation whose ID is `h-ycm4rp****`.
     *
     * @param request - CancelHandshakeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelHandshakeResponse
     *
     * @param CancelHandshakeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelHandshakeResponse
     */
    public function cancelHandshakeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->handshakeId) {
            @$query['HandshakeId'] = $request->handshakeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelHandshake',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an invitation.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to cancel the invitation whose ID is `h-ycm4rp****`.
     *
     * @param request - CancelHandshakeRequest
     *
     * @returns CancelHandshakeResponse
     *
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
     * 取消升级资源账号.
     *
     * @param request - CancelPromoteResourceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPromoteResourceAccountResponse
     *
     * @param CancelPromoteResourceAccountRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelPromoteResourceAccountResponse
     */
    public function cancelPromoteResourceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelPromoteResourceAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPromoteResourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消升级资源账号.
     *
     * @param request - CancelPromoteResourceAccountRequest
     *
     * @returns CancelPromoteResourceAccountResponse
     *
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
     * 成员账号设置安全邮箱.
     *
     * @param request - ChangeAccountEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeAccountEmailResponse
     *
     * @param ChangeAccountEmailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeAccountEmailResponse
     */
    public function changeAccountEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeAccountEmail',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 成员账号设置安全邮箱.
     *
     * @param request - ChangeAccountEmailRequest
     *
     * @returns ChangeAccountEmailResponse
     *
     * @param ChangeAccountEmailRequest $request
     *
     * @return ChangeAccountEmailResponse
     */
    public function changeAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAccountEmailWithOptions($request, $runtime);
    }

    /**
     * Performs a member deletion check.
     *
     * @remarks
     * Before you delete a member, you must call this API operation to check whether the member can be deleted.
     * This topic provides an example on how to call the API operation to perform a deletion check on the member whose ID is `179855839641****`.
     *
     * @param request - CheckAccountDeleteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAccountDeleteResponse
     *
     * @param CheckAccountDeleteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckAccountDeleteResponse
     */
    public function checkAccountDeleteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckAccountDelete',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAccountDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a member deletion check.
     *
     * @remarks
     * Before you delete a member, you must call this API operation to check whether the member can be deleted.
     * This topic provides an example on how to call the API operation to perform a deletion check on the member whose ID is `179855839641****`.
     *
     * @param request - CheckAccountDeleteRequest
     *
     * @returns CheckAccountDeleteResponse
     *
     * @param CheckAccountDeleteRequest $request
     *
     * @return CheckAccountDeleteResponse
     */
    public function checkAccountDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountDeleteWithOptions($request, $runtime);
    }

    /**
     * Creates a transfer rule. Custom transfer rules and transfer rules for associated resources are supported.
     *
     * @remarks
     * You can create up to 10 custom transfer rules. Each custom transfer rule can contain up to 10 content records.
     *
     * @param request - CreateAutoGroupingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoGroupingRuleResponse
     *
     * @param CreateAutoGroupingRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAutoGroupingRuleResponse
     */
    public function createAutoGroupingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->excludeRegionIdsScope) {
            @$query['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$query['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$query['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        if (null !== $request->excludeResourceTypesScope) {
            @$query['ExcludeResourceTypesScope'] = $request->excludeResourceTypesScope;
        }

        if (null !== $request->regionIdsScope) {
            @$query['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$query['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$query['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->resourceTypesScope) {
            @$query['ResourceTypesScope'] = $request->resourceTypesScope;
        }

        if (null !== $request->ruleContents) {
            @$query['RuleContents'] = $request->ruleContents;
        }

        if (null !== $request->ruleDesc) {
            @$query['RuleDesc'] = $request->ruleDesc;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAutoGroupingRule',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoGroupingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a transfer rule. Custom transfer rules and transfer rules for associated resources are supported.
     *
     * @remarks
     * You can create up to 10 custom transfer rules. Each custom transfer rule can contain up to 10 content records.
     *
     * @param request - CreateAutoGroupingRuleRequest
     *
     * @returns CreateAutoGroupingRuleResponse
     *
     * @param CreateAutoGroupingRuleRequest $request
     *
     * @return CreateAutoGroupingRuleResponse
     */
    public function createAutoGroupingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoGroupingRuleWithOptions($request, $runtime);
    }

    /**
     * 创建云账号.
     *
     * @remarks
     * A resource directory supports two types of member accounts: resource accounts and cloud accounts.
     * *   Resource account (recommended): A resource account is only used as a resource container and fully depends on a resource directory. Such member accounts are secure and easy-to-create. For more information about how to create a resource account, see [CreateResourceAccount](https://help.aliyun.com/document_detail/159392.html).
     * >  A resource account can be upgraded to a cloud account. For more information, see [PromoteResourceAccount](https://help.aliyun.com/document_detail/159395.html) .
     * *   Cloud account: A cloud account has all the features of an Alibaba Cloud account, including root permissions.
     *
     * @param request - CreateCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudAccountResponse
     *
     * @param CreateCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCloudAccountResponse
     */
    public function createCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->payerAccountId) {
            @$query['PayerAccountId'] = $request->payerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云账号.
     *
     * @remarks
     * A resource directory supports two types of member accounts: resource accounts and cloud accounts.
     * *   Resource account (recommended): A resource account is only used as a resource container and fully depends on a resource directory. Such member accounts are secure and easy-to-create. For more information about how to create a resource account, see [CreateResourceAccount](https://help.aliyun.com/document_detail/159392.html).
     * >  A resource account can be upgraded to a cloud account. For more information, see [PromoteResourceAccount](https://help.aliyun.com/document_detail/159395.html) .
     * *   Cloud account: A cloud account has all the features of an Alibaba Cloud account, including root permissions.
     *
     * @param request - CreateCloudAccountRequest
     *
     * @returns CreateCloudAccountResponse
     *
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
     * @remarks
     * This topic provides an example on how to call the API operation to create a custom access control policy named `ExampleControlPolicy`. This access control policy is used to prohibit modifications to the ResourceDirectoryAccountAccessRole role and the permissions of the role.
     *
     * @param request - CreateControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateControlPolicyResponse
     *
     * @param CreateControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateControlPolicyResponse
     */
    public function createControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->effectScope) {
            @$query['EffectScope'] = $request->effectScope;
        }

        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to create a custom access control policy named `ExampleControlPolicy`. This access control policy is used to prohibit modifications to the ResourceDirectoryAccountAccessRole role and the permissions of the role.
     *
     * @param request - CreateControlPolicyRequest
     *
     * @returns CreateControlPolicyResponse
     *
     * @param CreateControlPolicyRequest $request
     *
     * @return CreateControlPolicyResponse
     */
    public function createControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * >  A maximum of five levels of folders can be created under the root folder.
     * In this example, a folder named `rdFolder` is created under the root folder.
     *
     * @param request - CreateFolderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFolderResponse
     *
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->folderName) {
            @$query['FolderName'] = $request->folderName;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFolder',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * >  A maximum of five levels of folders can be created under the root folder.
     * In this example, a folder named `rdFolder` is created under the root folder.
     *
     * @param request - CreateFolderRequest
     *
     * @returns CreateFolderResponse
     *
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
     * Creates a permission policy.
     *
     * @param request - CreatePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyResponse
     *
     * @param CreatePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePolicyResponse
     */
    public function createPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a permission policy.
     *
     * @param request - CreatePolicyRequest
     *
     * @returns CreatePolicyResponse
     *
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
     * Creates a version for a permission policy.
     *
     * @param request - CreatePolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyVersionResponse
     *
     * @param CreatePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyDocument) {
            @$query['PolicyDocument'] = $request->policyDocument;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->setAsDefault) {
            @$query['SetAsDefault'] = $request->setAsDefault;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyVersion',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a version for a permission policy.
     *
     * @param request - CreatePolicyVersionRequest
     *
     * @returns CreatePolicyVersionResponse
     *
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
     * Creates a member of the resource account type.
     *
     * @remarks
     * A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     *
     * @param request - CreateResourceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceAccountResponse
     *
     * @param CreateResourceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourceAccountResponse
     */
    public function createResourceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountNamePrefix) {
            @$query['AccountNamePrefix'] = $request->accountNamePrefix;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->payerAccountId) {
            @$query['PayerAccountId'] = $request->payerAccountId;
        }

        if (null !== $request->resellAccountType) {
            @$query['ResellAccountType'] = $request->resellAccountType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourceAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a member of the resource account type.
     *
     * @remarks
     * A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     *
     * @param request - CreateResourceAccountRequest
     *
     * @returns CreateResourceAccountResponse
     *
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
     * Creates a resource group.
     *
     * @remarks
     * > A maximum of 30 resource groups can be created within an Alibaba Cloud account.
     *
     * @param request - CreateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourceGroup',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource group.
     *
     * @remarks
     * > A maximum of 30 resource groups can be created within an Alibaba Cloud account.
     *
     * @param request - CreateResourceGroupRequest
     *
     * @returns CreateResourceGroupResponse
     *
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
     * Creates a RAM role.
     *
     * @param request - CreateRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assumeRolePolicyDocument) {
            @$query['AssumeRolePolicyDocument'] = $request->assumeRolePolicyDocument;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->maxSessionDuration) {
            @$query['MaxSessionDuration'] = $request->maxSessionDuration;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a RAM role.
     *
     * @param request - CreateRoleRequest
     *
     * @returns CreateRoleResponse
     *
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
     * Creates a service-linked role.
     *
     * @param request - CreateServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customSuffix) {
            @$query['CustomSuffix'] = $request->customSuffix;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role.
     *
     * @param request - CreateServiceLinkedRoleRequest
     *
     * @returns CreateServiceLinkedRoleResponse
     *
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
     * Rejects an invitation.
     *
     * @param request - DeclineHandshakeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeclineHandshakeResponse
     *
     * @param DeclineHandshakeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeclineHandshakeResponse
     */
    public function declineHandshakeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->handshakeId) {
            @$query['HandshakeId'] = $request->handshakeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeclineHandshake',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeclineHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rejects an invitation.
     *
     * @param request - DeclineHandshakeRequest
     *
     * @returns DeclineHandshakeResponse
     *
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
     * 账号一键删除.
     *
     * @remarks
     * The ID of the member that you want to delete.
     *
     * @param tmpReq - DeleteAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAccountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->abandonableCheckId) {
            $request->abandonableCheckIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->abandonableCheckId, 'AbandonableCheckId', 'json');
        }

        $query = [];
        if (null !== $request->abandonableCheckIdShrink) {
            @$query['AbandonableCheckId'] = $request->abandonableCheckIdShrink;
        }

        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 账号一键删除.
     *
     * @remarks
     * The ID of the member that you want to delete.
     *
     * @param request - DeleteAccountRequest
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * Deletes a transfer rule.
     *
     * @param request - DeleteAutoGroupingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoGroupingRuleResponse
     *
     * @param DeleteAutoGroupingRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAutoGroupingRuleResponse
     */
    public function deleteAutoGroupingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoGroupingRule',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoGroupingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a transfer rule.
     *
     * @param request - DeleteAutoGroupingRuleRequest
     *
     * @returns DeleteAutoGroupingRuleResponse
     *
     * @param DeleteAutoGroupingRuleRequest $request
     *
     * @return DeleteAutoGroupingRuleResponse
     */
    public function deleteAutoGroupingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoGroupingRuleWithOptions($request, $runtime);
    }

    /**
     * 删除管控策略.
     *
     * @remarks
     * If you want to delete a custom control policy that is attached to folders or member accounts, you must call the [DetachControlPolicy](https://help.aliyun.com/document_detail/208331.html) operation to detach the policy before you delete it.
     * In this example, the custom control policy `cp-SImPt8GCEwiq****` is deleted.
     *
     * @param request - DeleteControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteControlPolicyResponse
     *
     * @param DeleteControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteControlPolicyResponse
     */
    public function deleteControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除管控策略.
     *
     * @remarks
     * If you want to delete a custom control policy that is attached to folders or member accounts, you must call the [DetachControlPolicy](https://help.aliyun.com/document_detail/208331.html) operation to detach the policy before you delete it.
     * In this example, the custom control policy `cp-SImPt8GCEwiq****` is deleted.
     *
     * @param request - DeleteControlPolicyRequest
     *
     * @returns DeleteControlPolicyResponse
     *
     * @param DeleteControlPolicyRequest $request
     *
     * @return DeleteControlPolicyResponse
     */
    public function deleteControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * >  Before you delete a folder, make sure that the folder does not contain any member accounts or child folders.
     *
     * @param request - DeleteFolderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFolderResponse
     *
     * @param DeleteFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
     */
    public function deleteFolderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFolder',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * >  Before you delete a folder, make sure that the folder does not contain any member accounts or child folders.
     *
     * @param request - DeleteFolderRequest
     *
     * @returns DeleteFolderResponse
     *
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
     * Deletes a permission policy.
     *
     * @remarks
     * >
     * *   Before you delete a permission policy, you must delete its all non-default versions. For information about how to delete a policy version, see [DeletePolicyVersion](https://help.aliyun.com/document_detail/159041.html).
     * *   Before you delete a permission policy, you must make sure that the policy is not attached to a RAM user, a RAM user group, or a RAM role. For information about how to detach a policy, see [DetachPolicy](https://help.aliyun.com/document_detail/159168.html).
     *
     * @param request - DeletePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyResponse
     *
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a permission policy.
     *
     * @remarks
     * >
     * *   Before you delete a permission policy, you must delete its all non-default versions. For information about how to delete a policy version, see [DeletePolicyVersion](https://help.aliyun.com/document_detail/159041.html).
     * *   Before you delete a permission policy, you must make sure that the policy is not attached to a RAM user, a RAM user group, or a RAM role. For information about how to detach a policy, see [DetachPolicy](https://help.aliyun.com/document_detail/159168.html).
     *
     * @param request - DeletePolicyRequest
     *
     * @returns DeletePolicyResponse
     *
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
     * Deletes a version of a permission policy.
     *
     * @remarks
     * >  The default version of a policy cannot be deleted.
     *
     * @param request - DeletePolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyVersionResponse
     *
     * @param DeletePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyVersion',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a version of a permission policy.
     *
     * @remarks
     * >  The default version of a policy cannot be deleted.
     *
     * @param request - DeletePolicyVersionRequest
     *
     * @returns DeletePolicyVersionResponse
     *
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
     * Deletes a resource group.
     *
     * @remarks
     * >  Before you delete a resource group, you must delete all the resources in it.
     * In this example, the resource group whose ID is `rg-9gLOoK****` is deleted.
     *
     * @param request - DeleteResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceGroupResponse
     *
     * @param DeleteResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceGroup',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource group.
     *
     * @remarks
     * >  Before you delete a resource group, you must delete all the resources in it.
     * In this example, the resource group whose ID is `rg-9gLOoK****` is deleted.
     *
     * @param request - DeleteResourceGroupRequest
     *
     * @returns DeleteResourceGroupResponse
     *
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
     * Deletes a RAM role.
     *
     * @param request - DeleteRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoleResponse
     *
     * @param DeleteRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRole',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a RAM role.
     *
     * @param request - DeleteRoleRequest
     *
     * @returns DeleteRoleResponse
     *
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
     * Deletes a service-linked role.
     *
     * @param request - DeleteServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceLinkedRoleResponse
     *
     * @param DeleteServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServiceLinkedRoleResponse
     */
    public function deleteServiceLinkedRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceLinkedRole',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service-linked role.
     *
     * @param request - DeleteServiceLinkedRoleRequest
     *
     * @returns DeleteServiceLinkedRoleResponse
     *
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
     * 注销代理管理员.
     *
     * @remarks
     * >  If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
     * This topic provides an example on how to call the API operation to remove the delegated administrator account `181761095690****` for Cloud Firewall.
     *
     * @param request - DeregisterDelegatedAdministratorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeregisterDelegatedAdministratorResponse
     *
     * @param DeregisterDelegatedAdministratorRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeregisterDelegatedAdministratorResponse
     */
    public function deregisterDelegatedAdministratorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->servicePrincipal) {
            @$query['ServicePrincipal'] = $request->servicePrincipal;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeregisterDelegatedAdministrator',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeregisterDelegatedAdministratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注销代理管理员.
     *
     * @remarks
     * >  If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
     * This topic provides an example on how to call the API operation to remove the delegated administrator account `181761095690****` for Cloud Firewall.
     *
     * @param request - DeregisterDelegatedAdministratorRequest
     *
     * @returns DeregisterDelegatedAdministratorResponse
     *
     * @param DeregisterDelegatedAdministratorRequest $request
     *
     * @return DeregisterDelegatedAdministratorResponse
     */
    public function deregisterDelegatedAdministrator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterDelegatedAdministratorWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * Before you disable a resource directory, make sure that the following requirements are met:
     * *   All member accounts must be removed from the resource directory. For more information about how to remove a member account, see [RemoveCloudAccount](https://help.aliyun.com/document_detail/159431.html).
     * *   All folders except the root folder must be deleted from the resource directory. For more information about how to delete a folder, see [DeleteFolder](https://help.aliyun.com/document_detail/159432.html).
     *
     * @param request - DestroyResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DestroyResourceDirectoryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DestroyResourceDirectory',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DestroyResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Before you disable a resource directory, make sure that the following requirements are met:
     * *   All member accounts must be removed from the resource directory. For more information about how to remove a member account, see [RemoveCloudAccount](https://help.aliyun.com/document_detail/159431.html).
     * *   All folders except the root folder must be deleted from the resource directory. For more information about how to delete a folder, see [DeleteFolder](https://help.aliyun.com/document_detail/159432.html).
     *
     * @returns DestroyResourceDirectoryResponse
     *
     * @return DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyResourceDirectoryWithOptions($runtime);
    }

    /**
     * 解绑管控策略.
     *
     * @remarks
     * After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
     * This topic provides an example on how to call the API operation to detach the custom control policy `cp-jExXAqIYkwHN****` from the folder `fd-ZDNPiT****`.
     *
     * @param request - DetachControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachControlPolicyResponse
     *
     * @param DetachControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachControlPolicyResponse
     */
    public function detachControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑管控策略.
     *
     * @remarks
     * After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
     * This topic provides an example on how to call the API operation to detach the custom control policy `cp-jExXAqIYkwHN****` from the folder `fd-ZDNPiT****`.
     *
     * @param request - DetachControlPolicyRequest
     *
     * @returns DetachControlPolicyResponse
     *
     * @param DetachControlPolicyRequest $request
     *
     * @return DetachControlPolicyResponse
     */
    public function detachControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Detaches a permission policy from an object. After you detach a policy from an object, the object does not have the operation permissions on the current resource group or the resources within the current account.
     *
     * @param request - DetachPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachPolicyResponse
     *
     * @param DetachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachPolicyResponse
     */
    public function detachPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->principalName) {
            @$query['PrincipalName'] = $request->principalName;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a permission policy from an object. After you detach a policy from an object, the object does not have the operation permissions on the current resource group or the resources within the current account.
     *
     * @param request - DetachPolicyRequest
     *
     * @returns DetachPolicyResponse
     *
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
     * Disables the Transfer Associated Resources feature.
     *
     * @param request - DisableAssociatedTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAssociatedTransferResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableAssociatedTransferResponse
     */
    public function disableAssociatedTransferWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableAssociatedTransfer',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAssociatedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the Transfer Associated Resources feature.
     *
     * @returns DisableAssociatedTransferResponse
     *
     * @return DisableAssociatedTransferResponse
     */
    public function disableAssociatedTransfer()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAssociatedTransferWithOptions($runtime);
    }

    /**
     * Disables the Automatic Resource Transfer feature. After the feature is disabled, existing custom transfer rules and existing transfer rules for associated resources are deleted. However, existing relationships between resources and resource groups are not affected. If you still want to use this feature, you can enable it again 1 minute later.
     *
     * @param request - DisableAutoGroupingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAutoGroupingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableAutoGroupingResponse
     */
    public function disableAutoGroupingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableAutoGrouping',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAutoGroupingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the Automatic Resource Transfer feature. After the feature is disabled, existing custom transfer rules and existing transfer rules for associated resources are deleted. However, existing relationships between resources and resource groups are not affected. If you still want to use this feature, you can enable it again 1 minute later.
     *
     * @returns DisableAutoGroupingResponse
     *
     * @return DisableAutoGroupingResponse
     */
    public function disableAutoGrouping()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoGroupingWithOptions($runtime);
    }

    /**
     * 禁用管控策略.
     *
     * @remarks
     * After you disable the Control Policy feature, the system automatically detaches all control policies that are attached to folders and member accounts. The system does not delete these control policies, but you cannot attach them to folders or member accounts again.
     * >  If you disable the Control Policy feature, the permissions of all folders and member accounts in a resource directory are affected. You must proceed with caution.
     *
     * @param request - DisableControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableControlPolicyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableControlPolicyResponse
     */
    public function disableControlPolicyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用管控策略.
     *
     * @remarks
     * After you disable the Control Policy feature, the system automatically detaches all control policies that are attached to folders and member accounts. The system does not delete these control policies, but you cannot attach them to folders or member accounts again.
     * >  If you disable the Control Policy feature, the permissions of all folders and member accounts in a resource directory are affected. You must proceed with caution.
     *
     * @returns DisableControlPolicyResponse
     *
     * @return DisableControlPolicyResponse
     */
    public function disableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableControlPolicyWithOptions($runtime);
    }

    /**
     * Disables group event notification.
     *
     * @param request - DisableResourceGroupNotificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableResourceGroupNotificationResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableResourceGroupNotificationResponse
     */
    public function disableResourceGroupNotificationWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableResourceGroupNotification',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableResourceGroupNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables group event notification.
     *
     * @returns DisableResourceGroupNotificationResponse
     *
     * @return DisableResourceGroupNotificationResponse
     */
    public function disableResourceGroupNotification()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableResourceGroupNotificationWithOptions($runtime);
    }

    /**
     * Enables the Transfer Associated Resources feature.
     *
     * @param request - EnableAssociatedTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAssociatedTransferResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableAssociatedTransferResponse
     */
    public function enableAssociatedTransferWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableAssociatedTransfer',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAssociatedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Transfer Associated Resources feature.
     *
     * @returns EnableAssociatedTransferResponse
     *
     * @return EnableAssociatedTransferResponse
     */
    public function enableAssociatedTransfer()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAssociatedTransferWithOptions($runtime);
    }

    /**
     * Enables the Automatic Resource Transfer feature. After the feature is enabled, you can create, update, delete, and query transfer rules.
     *
     * @param request - EnableAutoGroupingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAutoGroupingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableAutoGroupingResponse
     */
    public function enableAutoGroupingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableAutoGrouping',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAutoGroupingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Automatic Resource Transfer feature. After the feature is enabled, you can create, update, delete, and query transfer rules.
     *
     * @returns EnableAutoGroupingResponse
     *
     * @return EnableAutoGroupingResponse
     */
    public function enableAutoGrouping()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoGroupingWithOptions($runtime);
    }

    /**
     * Enables the Control Policy feature.
     *
     * @remarks
     * The Control Policy feature allows you to manage the permission boundaries of the folders or member accounts in a resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member account in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](https://help.aliyun.com/document_detail/178671.html).
     *
     * @param request - EnableControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableControlPolicyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableControlPolicyResponse
     */
    public function enableControlPolicyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Control Policy feature.
     *
     * @remarks
     * The Control Policy feature allows you to manage the permission boundaries of the folders or member accounts in a resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member account in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](https://help.aliyun.com/document_detail/178671.html).
     *
     * @returns EnableControlPolicyResponse
     *
     * @return EnableControlPolicyResponse
     */
    public function enableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableControlPolicyWithOptions($runtime);
    }

    /**
     * 开启RD.
     *
     * @remarks
     * You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
     * In this example, the current account is used to enable a resource directory.
     *
     * @param request - EnableResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableResourceDirectoryResponse
     *
     * @param EnableResourceDirectoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableResourceDirectoryResponse
     */
    public function enableResourceDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableMode) {
            @$query['EnableMode'] = $request->enableMode;
        }

        if (null !== $request->MAName) {
            @$query['MAName'] = $request->MAName;
        }

        if (null !== $request->MASecureMobilePhone) {
            @$query['MASecureMobilePhone'] = $request->MASecureMobilePhone;
        }

        if (null !== $request->verificationCode) {
            @$query['VerificationCode'] = $request->verificationCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableResourceDirectory',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启RD.
     *
     * @remarks
     * You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
     * In this example, the current account is used to enable a resource directory.
     *
     * @param request - EnableResourceDirectoryRequest
     *
     * @returns EnableResourceDirectoryResponse
     *
     * @param EnableResourceDirectoryRequest $request
     *
     * @return EnableResourceDirectoryResponse
     */
    public function enableResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * Enables group event notification.
     *
     * @param request - EnableResourceGroupNotificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableResourceGroupNotificationResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableResourceGroupNotificationResponse
     */
    public function enableResourceGroupNotificationWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableResourceGroupNotification',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableResourceGroupNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables group event notification.
     *
     * @returns EnableResourceGroupNotificationResponse
     *
     * @return EnableResourceGroupNotificationResponse
     */
    public function enableResourceGroupNotification()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceGroupNotificationWithOptions($runtime);
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to query the information of the member whose Alibaba Cloud account ID is `181761095690****`.
     *
     * @param request - GetAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountResponse
     *
     * @param GetAccountRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAccountResponse
     */
    public function getAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to query the information of the member whose Alibaba Cloud account ID is `181761095690****`.
     *
     * @param request - GetAccountRequest
     *
     * @returns GetAccountResponse
     *
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
     * Queries the result of a member deletion check.
     *
     * @remarks
     * After you call the [CheckAccountDelete](https://help.aliyun.com/document_detail/448542.html) operation to perform a member deletion check, you can call the GetAccountDeletionCheckResult operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
     * This topic provides an example on how to call the API operation to query the result of the deletion check for the member whose ID is `179855839641****`. The response shows that the member does not meet deletion requirements.
     *
     * @param request - GetAccountDeletionCheckResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountDeletionCheckResultResponse
     *
     * @param GetAccountDeletionCheckResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAccountDeletionCheckResultResponse
     */
    public function getAccountDeletionCheckResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountDeletionCheckResult',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountDeletionCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of a member deletion check.
     *
     * @remarks
     * After you call the [CheckAccountDelete](https://help.aliyun.com/document_detail/448542.html) operation to perform a member deletion check, you can call the GetAccountDeletionCheckResult operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
     * This topic provides an example on how to call the API operation to query the result of the deletion check for the member whose ID is `179855839641****`. The response shows that the member does not meet deletion requirements.
     *
     * @param request - GetAccountDeletionCheckResultRequest
     *
     * @returns GetAccountDeletionCheckResultResponse
     *
     * @param GetAccountDeletionCheckResultRequest $request
     *
     * @return GetAccountDeletionCheckResultResponse
     */
    public function getAccountDeletionCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountDeletionCheckResultWithOptions($request, $runtime);
    }

    /**
     * 获取账号删除状态
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the deletion status of the member whose Alibaba Cloud account ID is `169946124551****`. The response shows that the member is deleted.
     *
     * @param request - GetAccountDeletionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountDeletionStatusResponse
     *
     * @param GetAccountDeletionStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAccountDeletionStatusResponse
     */
    public function getAccountDeletionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountDeletionStatus',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountDeletionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取账号删除状态
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the deletion status of the member whose Alibaba Cloud account ID is `169946124551****`. The response shows that the member is deleted.
     *
     * @param request - GetAccountDeletionStatusRequest
     *
     * @returns GetAccountDeletionStatusResponse
     *
     * @param GetAccountDeletionStatusRequest $request
     *
     * @return GetAccountDeletionStatusResponse
     */
    public function getAccountDeletionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountDeletionStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a transfer rule.
     *
     * @param request - GetAutoGroupingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoGroupingRuleResponse
     *
     * @param GetAutoGroupingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAutoGroupingRuleResponse
     */
    public function getAutoGroupingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoGroupingRule',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoGroupingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a transfer rule.
     *
     * @param request - GetAutoGroupingRuleRequest
     *
     * @returns GetAutoGroupingRuleResponse
     *
     * @param GetAutoGroupingRuleRequest $request
     *
     * @return GetAutoGroupingRuleResponse
     */
    public function getAutoGroupingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoGroupingRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the Automatic Resource Transfer feature.
     *
     * @param request - GetAutoGroupingStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoGroupingStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetAutoGroupingStatusResponse
     */
    public function getAutoGroupingStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetAutoGroupingStatus',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoGroupingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the Automatic Resource Transfer feature.
     *
     * @returns GetAutoGroupingStatusResponse
     *
     * @return GetAutoGroupingStatusResponse
     */
    public function getAutoGroupingStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoGroupingStatusWithOptions($runtime);
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to query the details of the access control policy whose ID is `cp-SImPt8GCEwiq****`.
     *
     * @param request - GetControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetControlPolicyResponse
     *
     * @param GetControlPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetControlPolicyResponse
     */
    public function getControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to query the details of the access control policy whose ID is `cp-SImPt8GCEwiq****`.
     *
     * @param request - GetControlPolicyRequest
     *
     * @returns GetControlPolicyResponse
     *
     * @param GetControlPolicyRequest $request
     *
     * @return GetControlPolicyResponse
     */
    public function getControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the Control Policy feature.
     *
     * @param request - GetControlPolicyEnablementStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetControlPolicyEnablementStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetControlPolicyEnablementStatus',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetControlPolicyEnablementStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the Control Policy feature.
     *
     * @returns GetControlPolicyEnablementStatusResponse
     *
     * @return GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlPolicyEnablementStatusWithOptions($runtime);
    }

    /**
     * @remarks
     * In this example, the information of the folder `fd-Jyl5U7****` is queried.
     *
     * @param request - GetFolderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFolderResponse
     *
     * @param GetFolderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetFolderResponse
     */
    public function getFolderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFolder',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, the information of the folder `fd-Jyl5U7****` is queried.
     *
     * @param request - GetFolderRequest
     *
     * @returns GetFolderResponse
     *
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
     * Queries the information of an invitation.
     *
     * @remarks
     * In this example, the information of the invitation whose ID is `h-ycm4rp****` is queried.
     *
     * @param request - GetHandshakeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHandshakeResponse
     *
     * @param GetHandshakeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetHandshakeResponse
     */
    public function getHandshakeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->handshakeId) {
            @$query['HandshakeId'] = $request->handshakeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHandshake',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of an invitation.
     *
     * @remarks
     * In this example, the information of the invitation whose ID is `h-ycm4rp****` is queried.
     *
     * @param request - GetHandshakeRequest
     *
     * @returns GetHandshakeResponse
     *
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
     * @param request - GetPayerForAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPayerForAccountResponse
     *
     * @param GetPayerForAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPayerForAccountResponse
     */
    public function getPayerForAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPayerForAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPayerForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetPayerForAccountRequest
     *
     * @returns GetPayerForAccountResponse
     *
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
     * Queries the information about a permission policy.
     *
     * @param request - GetPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyResponse
     *
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a permission policy.
     *
     * @param request - GetPolicyRequest
     *
     * @returns GetPolicyResponse
     *
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
     * Queries the information about a version of a permission policy.
     *
     * @param request - GetPolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPolicyVersionResponse
     *
     * @param GetPolicyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPolicyVersion',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a version of a permission policy.
     *
     * @param request - GetPolicyVersionRequest
     *
     * @returns GetPolicyVersionResponse
     *
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
     * Queries the information of a resource directory. If you use a management account to call this API operation, the system returns the information of the resource directory that is enabled by using the management account. If you use a member to call this operation, the system returns the information of.
     *
     * @remarks
     * This topic provides an example on how to use a management account to call the API operation to query the information of the resource directory that is enabled by using the management account.
     *
     * @param request - GetResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceDirectoryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceDirectoryResponse
     */
    public function getResourceDirectoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetResourceDirectory',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a resource directory. If you use a management account to call this API operation, the system returns the information of the resource directory that is enabled by using the management account. If you use a member to call this operation, the system returns the information of.
     *
     * @remarks
     * This topic provides an example on how to use a management account to call the API operation to query the information of the resource directory that is enabled by using the management account.
     *
     * @returns GetResourceDirectoryResponse
     *
     * @return GetResourceDirectoryResponse
     */
    public function getResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryWithOptions($runtime);
    }

    /**
     * Queries the information of a resource group.
     *
     * @param request - GetResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupResponse
     *
     * @param GetResourceGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroup',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a resource group.
     *
     * @param request - GetResourceGroupRequest
     *
     * @returns GetResourceGroupResponse
     *
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
     * Queries the configurations of a resource group administrator.
     *
     * @param request - GetResourceGroupAdminSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupAdminSettingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceGroupAdminSettingResponse
     */
    public function getResourceGroupAdminSettingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetResourceGroupAdminSetting',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupAdminSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a resource group administrator.
     *
     * @returns GetResourceGroupAdminSettingResponse
     *
     * @return GetResourceGroupAdminSettingResponse
     */
    public function getResourceGroupAdminSetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupAdminSettingWithOptions($runtime);
    }

    /**
     * Queries the notification settings of a resource group.
     *
     * @param request - GetResourceGroupNotificationSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupNotificationSettingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceGroupNotificationSettingResponse
     */
    public function getResourceGroupNotificationSettingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetResourceGroupNotificationSetting',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupNotificationSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the notification settings of a resource group.
     *
     * @returns GetResourceGroupNotificationSettingResponse
     *
     * @return GetResourceGroupNotificationSettingResponse
     */
    public function getResourceGroupNotificationSetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupNotificationSettingWithOptions($runtime);
    }

    /**
     * Queries the number of resources in a visible resource group.
     *
     * @param request - GetResourceGroupResourceCountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupResourceCountsResponse
     *
     * @param GetResourceGroupResourceCountsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetResourceGroupResourceCountsResponse
     */
    public function getResourceGroupResourceCountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupByKey) {
            @$query['GroupByKey'] = $request->groupByKey;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupResourceCounts',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupResourceCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of resources in a visible resource group.
     *
     * @param request - GetResourceGroupResourceCountsRequest
     *
     * @returns GetResourceGroupResourceCountsResponse
     *
     * @param GetResourceGroupResourceCountsRequest $request
     *
     * @return GetResourceGroupResourceCountsResponse
     */
    public function getResourceGroupResourceCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupResourceCountsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a RAM role.
     *
     * @param request - GetRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoleResponse
     *
     * @param GetRoleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRole',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a RAM role.
     *
     * @param request - GetRoleRequest
     *
     * @returns GetRoleResponse
     *
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
     * Queries the status of the task that is used to delete a service-linked role.
     *
     * @param request - GetServiceLinkedRoleDeletionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceLinkedRoleDeletionStatusResponse
     *
     * @param GetServiceLinkedRoleDeletionStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetServiceLinkedRoleDeletionStatusResponse
     */
    public function getServiceLinkedRoleDeletionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionTaskId) {
            @$query['DeletionTaskId'] = $request->deletionTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceLinkedRoleDeletionStatus',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceLinkedRoleDeletionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the task that is used to delete a service-linked role.
     *
     * @param request - GetServiceLinkedRoleDeletionStatusRequest
     *
     * @returns GetServiceLinkedRoleDeletionStatusResponse
     *
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
     * Enables a resource directory. After you enable a resource directory, the system automatically creates a root folder and sets the current account as the enterprise management account of the resource directory. The enterprise management account has all administrative permissions on this resource direc.
     *
     * @remarks
     * >
     * *   An account can be used to enable a resource directory only after it passes enterprise real-name verification. An account that only passed individual real-name verification cannot be used to enable a resource directory.
     * *   We recommend that you only use the enterprise management account as the administrator of the resource directory. Do not use the enterprise management account to purchase cloud resources.
     *
     * @param request - InitResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitResourceDirectoryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return InitResourceDirectoryResponse
     */
    public function initResourceDirectoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'InitResourceDirectory',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a resource directory. After you enable a resource directory, the system automatically creates a root folder and sets the current account as the enterprise management account of the resource directory. The enterprise management account has all administrative permissions on this resource direc.
     *
     * @remarks
     * >
     * *   An account can be used to enable a resource directory only after it passes enterprise real-name verification. An account that only passed individual real-name verification cannot be used to enable a resource directory.
     * *   We recommend that you only use the enterprise management account as the administrator of the resource directory. Do not use the enterprise management account to purchase cloud resources.
     *
     * @returns InitResourceDirectoryResponse
     *
     * @return InitResourceDirectoryResponse
     */
    public function initResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initResourceDirectoryWithOptions($runtime);
    }

    /**
     * Invites an account to join a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to invite the account `someone@example.com` to join a resource directory.
     *
     * @param request - InviteAccountToResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InviteAccountToResourceDirectoryResponse
     *
     * @param InviteAccountToResourceDirectoryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return InviteAccountToResourceDirectoryResponse
     */
    public function inviteAccountToResourceDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->note) {
            @$query['Note'] = $request->note;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetEntity) {
            @$query['TargetEntity'] = $request->targetEntity;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InviteAccountToResourceDirectory',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InviteAccountToResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invites an account to join a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to invite the account `someone@example.com` to join a resource directory.
     *
     * @param request - InviteAccountToResourceDirectoryRequest
     *
     * @returns InviteAccountToResourceDirectoryResponse
     *
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
     * Queries all the members in a resource directory.
     *
     * @remarks
     * You can use only the management account of a resource directory or a delegated administrator account of a trusted service to call this operation.
     *
     * @param request - ListAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountsResponse
     *
     * @param ListAccountsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAccountsResponse
     */
    public function listAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccounts',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all the members in a resource directory.
     *
     * @remarks
     * You can use only the management account of a resource directory or a delegated administrator account of a trusted service to call this operation.
     *
     * @param request - ListAccountsRequest
     *
     * @returns ListAccountsResponse
     *
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
     * Queries the information of members in a folder.
     *
     * @param request - ListAccountsForParentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountsForParentResponse
     *
     * @param ListAccountsForParentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAccountsForParentResponse
     */
    public function listAccountsForParentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->queryKeyword) {
            @$query['QueryKeyword'] = $request->queryKeyword;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccountsForParent',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountsForParentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of members in a folder.
     *
     * @param request - ListAccountsForParentRequest
     *
     * @returns ListAccountsForParentResponse
     *
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
     * @param request - ListAncestorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAncestorsResponse
     *
     * @param ListAncestorsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAncestorsResponse
     */
    public function listAncestorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->childId) {
            @$query['ChildId'] = $request->childId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAncestors',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAncestorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAncestorsRequest
     *
     * @returns ListAncestorsResponse
     *
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
     * Queries the settings of the Transfer Associated Resources feature.
     *
     * @param request - ListAssociatedTransferSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAssociatedTransferSettingResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListAssociatedTransferSettingResponse
     */
    public function listAssociatedTransferSettingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListAssociatedTransferSetting',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAssociatedTransferSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the settings of the Transfer Associated Resources feature.
     *
     * @returns ListAssociatedTransferSettingResponse
     *
     * @return ListAssociatedTransferSettingResponse
     */
    public function listAssociatedTransferSetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssociatedTransferSettingWithOptions($runtime);
    }

    /**
     * Queries a list of automatic grouping remediation records.
     *
     * @param request - ListAutoGroupingRemediationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoGroupingRemediationsResponse
     *
     * @param ListAutoGroupingRemediationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAutoGroupingRemediationsResponse
     */
    public function listAutoGroupingRemediationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->earliestRemediationTime) {
            @$query['EarliestRemediationTime'] = $request->earliestRemediationTime;
        }

        if (null !== $request->latestRemediationTime) {
            @$query['LatestRemediationTime'] = $request->latestRemediationTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->targetResourceGroupId) {
            @$query['TargetResourceGroupId'] = $request->targetResourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAutoGroupingRemediations',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutoGroupingRemediationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of automatic grouping remediation records.
     *
     * @param request - ListAutoGroupingRemediationsRequest
     *
     * @returns ListAutoGroupingRemediationsResponse
     *
     * @param ListAutoGroupingRemediationsRequest $request
     *
     * @return ListAutoGroupingRemediationsResponse
     */
    public function listAutoGroupingRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoGroupingRemediationsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of transfer rules.
     *
     * @param request - ListAutoGroupingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoGroupingRulesResponse
     *
     * @param ListAutoGroupingRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAutoGroupingRulesResponse
     */
    public function listAutoGroupingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAutoGroupingRules',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutoGroupingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of transfer rules.
     *
     * @param request - ListAutoGroupingRulesRequest
     *
     * @returns ListAutoGroupingRulesResponse
     *
     * @param ListAutoGroupingRulesRequest $request
     *
     * @return ListAutoGroupingRulesResponse
     */
    public function listAutoGroupingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoGroupingRulesWithOptions($request, $runtime);
    }

    /**
     * Queries access control policies.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the system access control policies within a resource directory. The response shows that the resource directory has only one system access control policy. The policy is named `FullAliyunAccess`.
     *
     * @param request - ListControlPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListControlPoliciesResponse
     *
     * @param ListControlPoliciesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListControlPoliciesResponse
     */
    public function listControlPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListControlPolicies',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListControlPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access control policies.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the system access control policies within a resource directory. The response shows that the resource directory has only one system access control policy. The policy is named `FullAliyunAccess`.
     *
     * @param request - ListControlPoliciesRequest
     *
     * @returns ListControlPoliciesResponse
     *
     * @param ListControlPoliciesRequest $request
     *
     * @return ListControlPoliciesResponse
     */
    public function listControlPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listControlPoliciesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to query the access control policies that are attached to the folder `fd-ZDNPiT****`.
     *
     * @param request - ListControlPolicyAttachmentsForTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListControlPolicyAttachmentsForTargetResponse
     *
     * @param ListControlPolicyAttachmentsForTargetRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListControlPolicyAttachmentsForTargetResponse
     */
    public function listControlPolicyAttachmentsForTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListControlPolicyAttachmentsForTarget',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListControlPolicyAttachmentsForTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to query the access control policies that are attached to the folder `fd-ZDNPiT****`.
     *
     * @param request - ListControlPolicyAttachmentsForTargetRequest
     *
     * @returns ListControlPolicyAttachmentsForTargetResponse
     *
     * @param ListControlPolicyAttachmentsForTargetRequest $request
     *
     * @return ListControlPolicyAttachmentsForTargetResponse
     */
    public function listControlPolicyAttachmentsForTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listControlPolicyAttachmentsForTargetWithOptions($request, $runtime);
    }

    /**
     * 列出所有的代理管理员.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query all delegated administrator accounts in a resource directory. The response shows that two delegated administrator accounts for Cloud Firewall exist in the resource directory.
     *
     * @param request - ListDelegatedAdministratorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDelegatedAdministratorsResponse
     *
     * @param ListDelegatedAdministratorsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDelegatedAdministratorsResponse
     */
    public function listDelegatedAdministratorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->servicePrincipal) {
            @$query['ServicePrincipal'] = $request->servicePrincipal;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDelegatedAdministrators',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDelegatedAdministratorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出所有的代理管理员.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query all delegated administrator accounts in a resource directory. The response shows that two delegated administrator accounts for Cloud Firewall exist in the resource directory.
     *
     * @param request - ListDelegatedAdministratorsRequest
     *
     * @returns ListDelegatedAdministratorsResponse
     *
     * @param ListDelegatedAdministratorsRequest $request
     *
     * @return ListDelegatedAdministratorsResponse
     */
    public function listDelegatedAdministrators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDelegatedAdministratorsWithOptions($request, $runtime);
    }

    /**
     * 查看指定账号被设置为哪些可信服务的委派管理员.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the trusted services for which the member `138660628348****` is specified as a delegated administrator account. The response shows that the member is specified as a delegated administrator account of Cloud Firewall.
     *
     * @param request - ListDelegatedServicesForAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDelegatedServicesForAccountResponse
     *
     * @param ListDelegatedServicesForAccountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDelegatedServicesForAccountResponse
     */
    public function listDelegatedServicesForAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDelegatedServicesForAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDelegatedServicesForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看指定账号被设置为哪些可信服务的委派管理员.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the trusted services for which the member `138660628348****` is specified as a delegated administrator account. The response shows that the member is specified as a delegated administrator account of Cloud Firewall.
     *
     * @param request - ListDelegatedServicesForAccountRequest
     *
     * @returns ListDelegatedServicesForAccountResponse
     *
     * @param ListDelegatedServicesForAccountRequest $request
     *
     * @return ListDelegatedServicesForAccountResponse
     */
    public function listDelegatedServicesForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDelegatedServicesForAccountWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * >  You can view the information of only the first-level subfolders of a folder.
     *
     * @param request - ListFoldersForParentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFoldersForParentResponse
     *
     * @param ListFoldersForParentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListFoldersForParentResponse
     */
    public function listFoldersForParentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->queryKeyword) {
            @$query['QueryKeyword'] = $request->queryKeyword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFoldersForParent',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFoldersForParentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * >  You can view the information of only the first-level subfolders of a folder.
     *
     * @param request - ListFoldersForParentRequest
     *
     * @returns ListFoldersForParentResponse
     *
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
     * Queries the invitations that are associated with an account.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the invitations that are associated with the management account `172841235500****`. The response shows that two invitations are associated with the management account.
     *
     * @param request - ListHandshakesForAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHandshakesForAccountResponse
     *
     * @param ListHandshakesForAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHandshakesForAccountResponse
     */
    public function listHandshakesForAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHandshakesForAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHandshakesForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the invitations that are associated with an account.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the invitations that are associated with the management account `172841235500****`. The response shows that two invitations are associated with the management account.
     *
     * @param request - ListHandshakesForAccountRequest
     *
     * @returns ListHandshakesForAccountResponse
     *
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
     * Queries invitations in a resource directory.
     *
     * @param request - ListHandshakesForResourceDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHandshakesForResourceDirectoryResponse
     *
     * @param ListHandshakesForResourceDirectoryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListHandshakesForResourceDirectoryResponse
     */
    public function listHandshakesForResourceDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHandshakesForResourceDirectory',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHandshakesForResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries invitations in a resource directory.
     *
     * @param request - ListHandshakesForResourceDirectoryRequest
     *
     * @returns ListHandshakesForResourceDirectoryResponse
     *
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
     * Queries a list of permission policies.
     *
     * @param request - ListPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPoliciesResponse
     *
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicies',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of permission policies.
     *
     * @param request - ListPoliciesRequest
     *
     * @returns ListPoliciesResponse
     *
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
     * Queries policy attachment records.
     *
     * @remarks
     * You can view the following information:
     * *   Policy attachment records within an Alibaba Cloud account or a resource group
     * *   Permission policies attached to RAM users, RAM user groups, or RAM roles
     * *   RAM users, RAM user groups, or RAM roles to which permission policies are attached within an Alibaba Cloud account or a resource group
     *
     * @param request - ListPolicyAttachmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyAttachmentsResponse
     *
     * @param ListPolicyAttachmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPolicyAttachmentsResponse
     */
    public function listPolicyAttachmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->principalName) {
            @$query['PrincipalName'] = $request->principalName;
        }

        if (null !== $request->principalType) {
            @$query['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyAttachments',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries policy attachment records.
     *
     * @remarks
     * You can view the following information:
     * *   Policy attachment records within an Alibaba Cloud account or a resource group
     * *   Permission policies attached to RAM users, RAM user groups, or RAM roles
     * *   RAM users, RAM user groups, or RAM roles to which permission policies are attached within an Alibaba Cloud account or a resource group
     *
     * @param request - ListPolicyAttachmentsRequest
     *
     * @returns ListPolicyAttachmentsResponse
     *
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
     * Queries a list of versions of a policy.
     *
     * @param request - ListPolicyVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPolicyVersionsResponse
     *
     * @param ListPolicyVersionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPolicyVersions',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPolicyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of versions of a policy.
     *
     * @param request - ListPolicyVersionsRequest
     *
     * @returns ListPolicyVersionsResponse
     *
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
     * 列出资源组能力项.
     *
     * @param request - ListResourceGroupCapabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupCapabilityResponse
     *
     * @param ListResourceGroupCapabilityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListResourceGroupCapabilityResponse
     */
    public function listResourceGroupCapabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->supportResourceGroupEvent) {
            @$query['SupportResourceGroupEvent'] = $request->supportResourceGroupEvent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroupCapability',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源组能力项.
     *
     * @param request - ListResourceGroupCapabilityRequest
     *
     * @returns ListResourceGroupCapabilityResponse
     *
     * @param ListResourceGroupCapabilityRequest $request
     *
     * @return ListResourceGroupCapabilityResponse
     */
    public function listResourceGroupCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupCapabilityWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * You can call this API operation to query all resource groups within the current account. You can also call this API operation to query a specific resource group based on the status, ID, identifier, or display name of the resource group.
     * This topic provides an example on how to call the API operation to query the basic information about the resource groups `rg-1hSBH2****` and `rg-9gLOoK****` within the current account.
     *
     * @param request - ListResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupsResponse
     *
     * @param ListResourceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroups',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * You can call this API operation to query all resource groups within the current account. You can also call this API operation to query a specific resource group based on the status, ID, identifier, or display name of the resource group.
     * This topic provides an example on how to call the API operation to query the basic information about the resource groups `rg-1hSBH2****` and `rg-9gLOoK****` within the current account.
     *
     * @param request - ListResourceGroupsRequest
     *
     * @returns ListResourceGroupsResponse
     *
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
     * 列出资源组与用户授权信息.
     *
     * @param request - ListResourceGroupsWithAuthDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupsWithAuthDetailsResponse
     *
     * @param ListResourceGroupsWithAuthDetailsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListResourceGroupsWithAuthDetailsResponse
     */
    public function listResourceGroupsWithAuthDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->includeTags) {
            @$query['IncludeTags'] = $request->includeTags;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroupsWithAuthDetails',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupsWithAuthDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源组与用户授权信息.
     *
     * @param request - ListResourceGroupsWithAuthDetailsRequest
     *
     * @returns ListResourceGroupsWithAuthDetailsResponse
     *
     * @param ListResourceGroupsWithAuthDetailsRequest $request
     *
     * @return ListResourceGroupsWithAuthDetailsResponse
     */
    public function listResourceGroupsWithAuthDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithAuthDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries resources that can be accessed by the current account in resource groups.
     *
     * @remarks
     * >  You can use a RAM role that is not associated with a session policy to call this API operation.
     * This topic provides an example on how to call the API operation to query resources that can be accessed by the current account in resource groups. The response shows that the current account can access only the Elastic Compute Service (ECS) instance `i-23v38****` in the resource group `rg-uPJpP****`.
     *
     * @param request - ListResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resources that can be accessed by the current account in resource groups.
     *
     * @remarks
     * >  You can use a RAM role that is not associated with a session policy to call this API operation.
     * This topic provides an example on how to call the API operation to query resources that can be accessed by the current account in resource groups. The response shows that the current account can access only the Elastic Compute Service (ECS) instance `i-23v38****` in the resource group `rg-uPJpP****`.
     *
     * @param request - ListResourcesRequest
     *
     * @returns ListResourcesResponse
     *
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
     * Queries a list of RAM roles.
     *
     * @param request - ListRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of RAM roles.
     *
     * @param request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
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
     * 列出所有的Tag key.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query tag keys. The response shows that the custom tag key team exists.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyFilter) {
            @$query['KeyFilter'] = $request->keyFilter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出所有的Tag key.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query tag keys. The response shows that the custom tag key team exists.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
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
     * Queries the tags that are added to resource groups or the members in a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the tags that are added to the resource group with an ID of `rg-aekz6bre2uq****`. The response shows that only the `k1:v1` tag is added to the resource group.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to resource groups or the members in a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the tags that are added to the resource group with an ID of `rg-aekz6bre2uq****`. The response shows that only the `k1:v1` tag is added to the resource group.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * 列出所有的Tag values.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the tag values of the tag key k1. The response shows that the tag value of the tag key k1 is v1.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->valueFilter) {
            @$query['ValueFilter'] = $request->valueFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagValues',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出所有的Tag values.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to query the tag values of the tag key k1. The response shows that the tag value of the tag key k1 is v1.
     *
     * @param request - ListTagValuesRequest
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * Queries the objects to which a specific control policy is attached.
     *
     * @remarks
     * In this example, the folders or member accounts to which the control policy `cp-jExXAqIYkwHN****` is attached are queried. The returned result shows that the control policy is attached to the folder `fd-ZDNPiT****`.
     *
     * @param request - ListTargetAttachmentsForControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTargetAttachmentsForControlPolicyResponse
     *
     * @param ListTargetAttachmentsForControlPolicyRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListTargetAttachmentsForControlPolicyResponse
     */
    public function listTargetAttachmentsForControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTargetAttachmentsForControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTargetAttachmentsForControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the objects to which a specific control policy is attached.
     *
     * @remarks
     * In this example, the folders or member accounts to which the control policy `cp-jExXAqIYkwHN****` is attached are queried. The returned result shows that the control policy is attached to the folder `fd-ZDNPiT****`.
     *
     * @param request - ListTargetAttachmentsForControlPolicyRequest
     *
     * @returns ListTargetAttachmentsForControlPolicyResponse
     *
     * @param ListTargetAttachmentsForControlPolicyRequest $request
     *
     * @return ListTargetAttachmentsForControlPolicyResponse
     */
    public function listTargetAttachmentsForControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTargetAttachmentsForControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * >  Only an enterprise management account or delegated administrator account can be used to call this operation.
     * In this example, the trusted services that are enabled within an enterprise management account are queried. The returned result shows that the trusted services Cloud Config and ActionTrail are enabled within the enterprise management account.
     *
     * @param request - ListTrustedServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrustedServiceStatusResponse
     *
     * @param ListTrustedServiceStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListTrustedServiceStatusResponse
     */
    public function listTrustedServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminAccountId) {
            @$query['AdminAccountId'] = $request->adminAccountId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrustedServiceStatus',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTrustedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * >  Only an enterprise management account or delegated administrator account can be used to call this operation.
     * In this example, the trusted services that are enabled within an enterprise management account are queried. The returned result shows that the trusted services Cloud Config and ActionTrail are enabled within the enterprise management account.
     *
     * @param request - ListTrustedServiceStatusRequest
     *
     * @returns ListTrustedServiceStatusResponse
     *
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
     * 查询资源组事件.
     *
     * @param request - LookupResourceGroupEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LookupResourceGroupEventsResponse
     *
     * @param LookupResourceGroupEventsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return LookupResourceGroupEventsResponse
     */
    public function lookupResourceGroupEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventCategory) {
            @$query['EventCategory'] = $request->eventCategory;
        }

        if (null !== $request->lookupAttributes) {
            @$query['LookupAttributes'] = $request->lookupAttributes;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupDisplayName) {
            @$query['ResourceGroupDisplayName'] = $request->resourceGroupDisplayName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LookupResourceGroupEvents',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LookupResourceGroupEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询资源组事件.
     *
     * @param request - LookupResourceGroupEventsRequest
     *
     * @returns LookupResourceGroupEventsResponse
     *
     * @param LookupResourceGroupEventsRequest $request
     *
     * @return LookupResourceGroupEventsResponse
     */
    public function lookupResourceGroupEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lookupResourceGroupEventsWithOptions($request, $runtime);
    }

    /**
     * 移动账号.
     *
     * @param request - MoveAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveAccountResponse
     *
     * @param MoveAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MoveAccountResponse
     */
    public function moveAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->destinationFolderId) {
            @$query['DestinationFolderId'] = $request->destinationFolderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移动账号.
     *
     * @param request - MoveAccountRequest
     *
     * @returns MoveAccountResponse
     *
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
     * Moves resources from one resource group to another. You can move multiple resources that reside in different regions, are used by different Alibaba Cloud services, or belong to different resource groups.
     *
     * @remarks
     * For more information about Alibaba Cloud services whose resources can be moved between resource groups, see the **Supported by the API** column in [Alibaba Cloud services that support resource groups](https://help.aliyun.com/document_detail/94479.html).
     * In this example, two virtual private clouds (VPCs) `vpc-bp1sig0mjktx5ewx1****` and `vpc-bp1visxm225pv49dz****` that reside in different regions and belong to different resource groups are moved to the resource group `rg-aekzmeobk5w****`.
     *
     * @param request - MoveResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourcesResponse
     *
     * @param MoveResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return MoveResourcesResponse
     */
    public function moveResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResources',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves resources from one resource group to another. You can move multiple resources that reside in different regions, are used by different Alibaba Cloud services, or belong to different resource groups.
     *
     * @remarks
     * For more information about Alibaba Cloud services whose resources can be moved between resource groups, see the **Supported by the API** column in [Alibaba Cloud services that support resource groups](https://help.aliyun.com/document_detail/94479.html).
     * In this example, two virtual private clouds (VPCs) `vpc-bp1sig0mjktx5ewx1****` and `vpc-bp1visxm225pv49dz****` that reside in different regions and belong to different resource groups are moved to the resource group `rg-aekzmeobk5w****`.
     *
     * @param request - MoveResourcesRequest
     *
     * @returns MoveResourcesResponse
     *
     * @param MoveResourcesRequest $request
     *
     * @return MoveResourcesResponse
     */
    public function moveResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourcesWithOptions($request, $runtime);
    }

    /**
     * 升级资源账号.
     *
     * @param request - PromoteResourceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PromoteResourceAccountResponse
     *
     * @param PromoteResourceAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PromoteResourceAccountResponse
     */
    public function promoteResourceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PromoteResourceAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PromoteResourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 升级资源账号.
     *
     * @param request - PromoteResourceAccountRequest
     *
     * @returns PromoteResourceAccountResponse
     *
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
     * @remarks
     * The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory.
     * When you call this operation, you must take note of the following limits:
     * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
     * This topic provides an example on how to call the API operation to specify the member `181761095690****` as a delegated administrator account of Cloud Firewall.
     *
     * @param request - RegisterDelegatedAdministratorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterDelegatedAdministratorResponse
     *
     * @param RegisterDelegatedAdministratorRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RegisterDelegatedAdministratorResponse
     */
    public function registerDelegatedAdministratorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->servicePrincipal) {
            @$query['ServicePrincipal'] = $request->servicePrincipal;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterDelegatedAdministrator',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterDelegatedAdministratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory.
     * When you call this operation, you must take note of the following limits:
     * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
     * This topic provides an example on how to call the API operation to specify the member `181761095690****` as a delegated administrator account of Cloud Firewall.
     *
     * @param request - RegisterDelegatedAdministratorRequest
     *
     * @returns RegisterDelegatedAdministratorResponse
     *
     * @param RegisterDelegatedAdministratorRequest $request
     *
     * @return RegisterDelegatedAdministratorResponse
     */
    public function registerDelegatedAdministrator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDelegatedAdministratorWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to remove the member `177242285274****` from a resource directory.
     *
     * @param request - RemoveCloudAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveCloudAccountResponse
     *
     * @param RemoveCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveCloudAccountResponse
     */
    public function removeCloudAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveCloudAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * This topic provides an example on how to call the API operation to remove the member `177242285274****` from a resource directory.
     *
     * @param request - RemoveCloudAccountRequest
     *
     * @returns RemoveCloudAccountResponse
     *
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
     * 重新发送创建云账号的邮箱验证
     *
     * @param request - ResendCreateCloudAccountEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResendCreateCloudAccountEmailResponse
     *
     * @param ResendCreateCloudAccountEmailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ResendCreateCloudAccountEmailResponse
     */
    public function resendCreateCloudAccountEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResendCreateCloudAccountEmail',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResendCreateCloudAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新发送创建云账号的邮箱验证
     *
     * @param request - ResendCreateCloudAccountEmailRequest
     *
     * @returns ResendCreateCloudAccountEmailResponse
     *
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
     * 重新发送升级资源账号的邮箱验证
     *
     * @param request - ResendPromoteResourceAccountEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResendPromoteResourceAccountEmailResponse
     *
     * @param ResendPromoteResourceAccountEmailRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ResendPromoteResourceAccountEmailResponse
     */
    public function resendPromoteResourceAccountEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResendPromoteResourceAccountEmail',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResendPromoteResourceAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新发送升级资源账号的邮箱验证
     *
     * @param request - ResendPromoteResourceAccountEmailRequest
     *
     * @returns ResendPromoteResourceAccountEmailResponse
     *
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
     * 重新发送确认邮件.
     *
     * @param request - RetryChangeAccountEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryChangeAccountEmailResponse
     *
     * @param RetryChangeAccountEmailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RetryChangeAccountEmailResponse
     */
    public function retryChangeAccountEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetryChangeAccountEmail',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetryChangeAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新发送确认邮件.
     *
     * @param request - RetryChangeAccountEmailRequest
     *
     * @returns RetryChangeAccountEmailResponse
     *
     * @param RetryChangeAccountEmailRequest $request
     *
     * @return RetryChangeAccountEmailResponse
     */
    public function retryChangeAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryChangeAccountEmailWithOptions($request, $runtime);
    }

    /**
     * 发送绑定安全手机验证码
     *
     * @remarks
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * In this example, a verification code is sent to the mobile phone number that you want to bind to the resource account `138660628348****`.
     *
     * @param request - SendVerificationCodeForBindSecureMobilePhoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendVerificationCodeForBindSecureMobilePhoneResponse
     *
     * @param SendVerificationCodeForBindSecureMobilePhoneRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneResponse
     */
    public function sendVerificationCodeForBindSecureMobilePhoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->secureMobilePhone) {
            @$query['SecureMobilePhone'] = $request->secureMobilePhone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendVerificationCodeForBindSecureMobilePhone',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendVerificationCodeForBindSecureMobilePhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送绑定安全手机验证码
     *
     * @remarks
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * In this example, a verification code is sent to the mobile phone number that you want to bind to the resource account `138660628348****`.
     *
     * @param request - SendVerificationCodeForBindSecureMobilePhoneRequest
     *
     * @returns SendVerificationCodeForBindSecureMobilePhoneResponse
     *
     * @param SendVerificationCodeForBindSecureMobilePhoneRequest $request
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneResponse
     */
    public function sendVerificationCodeForBindSecureMobilePhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationCodeForBindSecureMobilePhoneWithOptions($request, $runtime);
    }

    /**
     * 发送开启资源目录短信
     *
     * @remarks
     * Each Alibaba Cloud account can be used to send a maximum of 100 verification codes per day.
     *
     * @param request - SendVerificationCodeForEnableRDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendVerificationCodeForEnableRDResponse
     *
     * @param SendVerificationCodeForEnableRDRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SendVerificationCodeForEnableRDResponse
     */
    public function sendVerificationCodeForEnableRDWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->secureMobilePhone) {
            @$query['SecureMobilePhone'] = $request->secureMobilePhone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendVerificationCodeForEnableRD',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendVerificationCodeForEnableRDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送开启资源目录短信
     *
     * @remarks
     * Each Alibaba Cloud account can be used to send a maximum of 100 verification codes per day.
     *
     * @param request - SendVerificationCodeForEnableRDRequest
     *
     * @returns SendVerificationCodeForEnableRDResponse
     *
     * @param SendVerificationCodeForEnableRDRequest $request
     *
     * @return SendVerificationCodeForEnableRDResponse
     */
    public function sendVerificationCodeForEnableRD($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationCodeForEnableRDWithOptions($request, $runtime);
    }

    /**
     * Sets a default version for a permission policy.
     *
     * @param request - SetDefaultPolicyVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultPolicyVersionResponse
     *
     * @param SetDefaultPolicyVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetDefaultPolicyVersionResponse
     */
    public function setDefaultPolicyVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultPolicyVersion',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a default version for a permission policy.
     *
     * @param request - SetDefaultPolicyVersionRequest
     *
     * @returns SetDefaultPolicyVersionResponse
     *
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
     * 开启或关闭成员删除许可.
     *
     * @remarks
     * Members of the resource account type can be deleted only after the member deletion feature is enabled.
     *
     * @param request - SetMemberDeletionPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetMemberDeletionPermissionResponse
     *
     * @param SetMemberDeletionPermissionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetMemberDeletionPermissionResponse
     */
    public function setMemberDeletionPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetMemberDeletionPermission',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetMemberDeletionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启或关闭成员删除许可.
     *
     * @remarks
     * Members of the resource account type can be deleted only after the member deletion feature is enabled.
     *
     * @param request - SetMemberDeletionPermissionRequest
     *
     * @returns SetMemberDeletionPermissionResponse
     *
     * @param SetMemberDeletionPermissionRequest $request
     *
     * @return SetMemberDeletionPermissionResponse
     */
    public function setMemberDeletionPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMemberDeletionPermissionWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resource groups or the members in a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to add the tag `k1:v1` to the resource group with an ID of `rg-aekz6bre2uq****`.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to resource groups or the members in a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to add the tag `k1:v1` to the resource group with an ID of `rg-aekz6bre2uq****`.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Removes tags from resource groups or the members in a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to remove the tag whose tag key is `k1` from the resource group whose ID is `rg-aek2dpwyrfr****`.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resource groups or the members in a resource directory.
     *
     * @remarks
     * This topic provides an example on how to call the API operation to remove the tag whose tag key is `k1` from the resource group whose ID is `rg-aek2dpwyrfr****`.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
     * This example provides an example on how to call the API operation to change the display name of the member `12323344****` to `admin`.
     *
     * @param request - UpdateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccountResponse
     *
     * @param UpdateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAccountResponse
     */
    public function updateAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->newAccountType) {
            @$query['NewAccountType'] = $request->newAccountType;
        }

        if (null !== $request->newDisplayName) {
            @$query['NewDisplayName'] = $request->newDisplayName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccount',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
     * This example provides an example on how to call the API operation to change the display name of the member `12323344****` to `admin`.
     *
     * @param request - UpdateAccountRequest
     *
     * @returns UpdateAccountResponse
     *
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
     * Updates the settings of the Transfer Associated Resources feature.
     *
     * @remarks
     * For information about the resources that support the Transfer Associated Resources feature, see [Use the Transfer Associated Resources feature](https://help.aliyun.com/document_detail/606232.html).
     *
     * @param request - UpdateAssociatedTransferSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAssociatedTransferSettingResponse
     *
     * @param UpdateAssociatedTransferSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateAssociatedTransferSettingResponse
     */
    public function updateAssociatedTransferSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableExistingResourcesTransfer) {
            @$query['EnableExistingResourcesTransfer'] = $request->enableExistingResourcesTransfer;
        }

        if (null !== $request->ruleSettings) {
            @$query['RuleSettings'] = $request->ruleSettings;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAssociatedTransferSetting',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAssociatedTransferSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the settings of the Transfer Associated Resources feature.
     *
     * @remarks
     * For information about the resources that support the Transfer Associated Resources feature, see [Use the Transfer Associated Resources feature](https://help.aliyun.com/document_detail/606232.html).
     *
     * @param request - UpdateAssociatedTransferSettingRequest
     *
     * @returns UpdateAssociatedTransferSettingResponse
     *
     * @param UpdateAssociatedTransferSettingRequest $request
     *
     * @return UpdateAssociatedTransferSettingResponse
     */
    public function updateAssociatedTransferSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAssociatedTransferSettingWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of the Automatic Resource Transfer feature. You can update only the configuration of the Transfer Existing Associated Resources feature.
     *
     * @param request - UpdateAutoGroupingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoGroupingConfigResponse
     *
     * @param UpdateAutoGroupingConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAutoGroupingConfigResponse
     */
    public function updateAutoGroupingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableExistingResourcesTransfer) {
            @$query['EnableExistingResourcesTransfer'] = $request->enableExistingResourcesTransfer;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoGroupingConfig',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoGroupingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of the Automatic Resource Transfer feature. You can update only the configuration of the Transfer Existing Associated Resources feature.
     *
     * @param request - UpdateAutoGroupingConfigRequest
     *
     * @returns UpdateAutoGroupingConfigResponse
     *
     * @param UpdateAutoGroupingConfigRequest $request
     *
     * @return UpdateAutoGroupingConfigResponse
     */
    public function updateAutoGroupingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoGroupingConfigWithOptions($request, $runtime);
    }

    /**
     * Updates a transfer rule.
     *
     * @param request - UpdateAutoGroupingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoGroupingRuleResponse
     *
     * @param UpdateAutoGroupingRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAutoGroupingRuleResponse
     */
    public function updateAutoGroupingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->excludeRegionIdsScope) {
            @$query['ExcludeRegionIdsScope'] = $request->excludeRegionIdsScope;
        }

        if (null !== $request->excludeResourceGroupIdsScope) {
            @$query['ExcludeResourceGroupIdsScope'] = $request->excludeResourceGroupIdsScope;
        }

        if (null !== $request->excludeResourceIdsScope) {
            @$query['ExcludeResourceIdsScope'] = $request->excludeResourceIdsScope;
        }

        if (null !== $request->excludeResourceTypesScope) {
            @$query['ExcludeResourceTypesScope'] = $request->excludeResourceTypesScope;
        }

        if (null !== $request->regionIdsScope) {
            @$query['RegionIdsScope'] = $request->regionIdsScope;
        }

        if (null !== $request->resourceGroupIdsScope) {
            @$query['ResourceGroupIdsScope'] = $request->resourceGroupIdsScope;
        }

        if (null !== $request->resourceIdsScope) {
            @$query['ResourceIdsScope'] = $request->resourceIdsScope;
        }

        if (null !== $request->resourceTypesScope) {
            @$query['ResourceTypesScope'] = $request->resourceTypesScope;
        }

        if (null !== $request->ruleContents) {
            @$query['RuleContents'] = $request->ruleContents;
        }

        if (null !== $request->ruleDesc) {
            @$query['RuleDesc'] = $request->ruleDesc;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoGroupingRule',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutoGroupingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a transfer rule.
     *
     * @param request - UpdateAutoGroupingRuleRequest
     *
     * @returns UpdateAutoGroupingRuleResponse
     *
     * @param UpdateAutoGroupingRuleRequest $request
     *
     * @return UpdateAutoGroupingRuleResponse
     */
    public function updateAutoGroupingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoGroupingRuleWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * In this example, the name of the access control policy whose ID is `cp-jExXAqIYkwHN****` is changed to `NewControlPolicy`.
     *
     * @param request - UpdateControlPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateControlPolicyResponse
     *
     * @param UpdateControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateControlPolicyResponse
     */
    public function updateControlPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newPolicyDocument) {
            @$query['NewPolicyDocument'] = $request->newPolicyDocument;
        }

        if (null !== $request->newPolicyName) {
            @$query['NewPolicyName'] = $request->newPolicyName;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateControlPolicy',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, the name of the access control policy whose ID is `cp-jExXAqIYkwHN****` is changed to `NewControlPolicy`.
     *
     * @param request - UpdateControlPolicyRequest
     *
     * @returns UpdateControlPolicyResponse
     *
     * @param UpdateControlPolicyRequest $request
     *
     * @return UpdateControlPolicyResponse
     */
    public function updateControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateFolderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFolderResponse
     *
     * @param UpdateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFolderResponse
     */
    public function updateFolderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        if (null !== $request->newFolderName) {
            @$query['NewFolderName'] = $request->newFolderName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFolder',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateFolderRequest
     *
     * @returns UpdateFolderResponse
     *
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
     * @remarks
     * In this example, the display name of the resource group `rg-9gLOoK****` is changed to `project`.
     *
     * @param request - UpdateResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceGroupResponse
     *
     * @param UpdateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newDisplayName) {
            @$query['NewDisplayName'] = $request->newDisplayName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceGroup',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * In this example, the display name of the resource group `rg-9gLOoK****` is changed to `project`.
     *
     * @param request - UpdateResourceGroupRequest
     *
     * @returns UpdateResourceGroupResponse
     *
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
     * Updates the configurations of a resource group administrator.
     *
     * @param request - UpdateResourceGroupAdminSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceGroupAdminSettingResponse
     *
     * @param UpdateResourceGroupAdminSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateResourceGroupAdminSettingResponse
     */
    public function updateResourceGroupAdminSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creatorAsAdmin) {
            @$query['CreatorAsAdmin'] = $request->creatorAsAdmin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceGroupAdminSetting',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceGroupAdminSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a resource group administrator.
     *
     * @param request - UpdateResourceGroupAdminSettingRequest
     *
     * @returns UpdateResourceGroupAdminSettingResponse
     *
     * @param UpdateResourceGroupAdminSettingRequest $request
     *
     * @return UpdateResourceGroupAdminSettingResponse
     */
    public function updateResourceGroupAdminSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupAdminSettingWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a Resource Access Management (RAM) role.
     *
     * @remarks
     * In this example, the description of the RAM role `ECSAdmin` is updated to `ECS administrator`.
     *
     * @param request - UpdateRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newAssumeRolePolicyDocument) {
            @$query['NewAssumeRolePolicyDocument'] = $request->newAssumeRolePolicyDocument;
        }

        if (null !== $request->newDescription) {
            @$query['NewDescription'] = $request->newDescription;
        }

        if (null !== $request->newMaxSessionDuration) {
            @$query['NewMaxSessionDuration'] = $request->newMaxSessionDuration;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRole',
            'version' => '2020-03-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a Resource Access Management (RAM) role.
     *
     * @remarks
     * In this example, the description of the RAM role `ECSAdmin` is updated to `ECS administrator`.
     *
     * @param request - UpdateRoleRequest
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }
}
