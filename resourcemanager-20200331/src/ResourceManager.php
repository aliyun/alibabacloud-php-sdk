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
     * Accepts an invitation by the invited Alibaba Cloud account by calling AcceptHandshake.
     *
     * @remarks
     * After the invited Alibaba Cloud account successfully joins a resource directory, the account becomes a member of the resource directory. The resource directory uses the name of the invited Alibaba Cloud account as the display name and account name of the member by default.
     * This topic provides an example on how the invited Alibaba Cloud account `177242285274****` accepts an invitation from the resource directory `rd-3G****`. The handshake ID is `h-Ih8IuPfvV0t0****`.
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
     * Accepts an invitation by the invited Alibaba Cloud account by calling AcceptHandshake.
     *
     * @remarks
     * After the invited Alibaba Cloud account successfully joins a resource directory, the account becomes a member of the resource directory. The resource directory uses the name of the invited Alibaba Cloud account as the display name and account name of the member by default.
     * This topic provides an example on how the invited Alibaba Cloud account `177242285274****` accepts an invitation from the resource directory `rd-3G****`. The handshake ID is `h-Ih8IuPfvV0t0****`.
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
     * Attaches a control policy to a specified target.
     *
     * @remarks
     * After the control policy is attached, the resource folder or member immediately becomes subject to the control policy. Make sure that the result of the attach operation is as expected to avoid affecting your business.
     * The system attaches the system policy FullAliyunAccess to resource folders and members by default.
     * A control policy takes effect on the entire node to which it is attached. A control policy attached to a parent resource folder also takes effect on its child resource folders and members.
     * Each node (resource folder or member) can have a maximum of 10 control policies attached.
     * This topic provides an example on how to attach the custom policy `cp-jExXAqIYkwHN****` to the resource folder `fd-ZDNPiT****`.
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
     * Attaches a control policy to a specified target.
     *
     * @remarks
     * After the control policy is attached, the resource folder or member immediately becomes subject to the control policy. Make sure that the result of the attach operation is as expected to avoid affecting your business.
     * The system attaches the system policy FullAliyunAccess to resource folders and members by default.
     * A control policy takes effect on the entire node to which it is attached. A control policy attached to a parent resource folder also takes effect on its child resource folders and members.
     * Each node (resource folder or member) can have a maximum of 10 control policies attached.
     * This topic provides an example on how to attach the custom policy `cp-jExXAqIYkwHN****` to the resource folder `fd-ZDNPiT****`.
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
     * Invokes AttachPolicy to add an access policy to an authorization object (a Resource Access Management (RAM) user, RAM user group, or RAM role), which is authorization. After the authorization is complete, the authorized object obtains access permissions on resources within the specified resource group or Alibaba Cloud account.
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
     * Invokes AttachPolicy to add an access policy to an authorization object (a Resource Access Management (RAM) user, RAM user group, or RAM role), which is authorization. After the authorization is complete, the authorized object obtains access permissions on resources within the specified resource group or Alibaba Cloud account.
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
     * Sets a secure phone number for a member of the resource account type.
     *
     * @remarks
     * This API operation is used only to set a secure phone number for a resource account for the first time. It cannot be used to modify an existing secure phone number.
     * To ensure that the system can record the specific author of management operations, use a Resource Access Management (RAM) user or RAM role under the management account that has the resource folder management permission (AliyunResourceDirectoryFullAccess) to invoke this API operation.
     * This topic provides an example of how to set a secure phone number for the member `138660628348****`.
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
     * Sets a secure phone number for a member of the resource account type.
     *
     * @remarks
     * This API operation is used only to set a secure phone number for a resource account for the first time. It cannot be used to modify an existing secure phone number.
     * To ensure that the system can record the specific author of management operations, use a Resource Access Management (RAM) user or RAM role under the management account that has the resource folder management permission (AliyunResourceDirectoryFullAccess) to invoke this API operation.
     * This topic provides an example of how to set a secure phone number for the member `138660628348****`.
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
     * Cancels the modification of a member account email address.
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
     * Cancels the modification of a member account email address.
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
     * Cancels the creation of a member of the cloud account type in a resource directory.
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
     * Cancels the creation of a member of the cloud account type in a resource directory.
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
     * Cancels a handshake.
     *
     * @remarks
     * This topic provides an example on how to cancel the handshake whose ID is `h-ycm4rp****`.
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
     * Cancels a handshake.
     *
     * @remarks
     * This topic provides an example on how to cancel the handshake whose ID is `h-ycm4rp****`.
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
     * Cancels the upgrade of a resource directory resource account to an Alibaba Cloud account.
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
     * Cancels the upgrade of a resource directory resource account to an Alibaba Cloud account.
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
     * Modifies the email address of a member account by calling ChangeAccountEmail.
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
     * Modifies the email address of a member account by calling ChangeAccountEmail.
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
     * Calls CheckAccountDelete to perform a member account deletion check task.
     *
     * @remarks
     * Before deleting a member account, call this API to perform a pre-deletion condition check on the target member account.
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
     * Calls CheckAccountDelete to perform a member account deletion check task.
     *
     * @remarks
     * Before deleting a member account, call this API to perform a pre-deletion condition check on the target member account.
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
     * Creates an automatic allocation rule by calling CreateAutoGroupingRule. Two types are supported: custom allocation rules and attached-resource allocation rules.
     *
     * @remarks
     * You can create up to 10 custom allocation rules, and each custom allocation rule supports up to 10 rule content entries.
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
     * Creates an automatic allocation rule by calling CreateAutoGroupingRule. Two types are supported: custom allocation rules and attached-resource allocation rules.
     *
     * @remarks
     * You can create up to 10 custom allocation rules, and each custom allocation rule supports up to 10 rule content entries.
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
     * Creates a member of the cloud account type in a resource directory.
     *
     * @remarks
     * A resource directory contains two types of members: resource accounts and cloud accounts.
     * - Resource account (recommended): A resource account serves only as a resource container and fully depends on the resource directory. It is a more secure account type that is easier to create. To create a resource account type member, see [CreateResourceAccount](https://help.aliyun.com/document_detail/159392.html).
     * > A resource account can also be upgraded to a cloud account. For more information, see [PromoteResourceAccount](https://help.aliyun.com/document_detail/159395.html).
     * - Cloud account: A cloud account has all the features of an Alibaba Cloud account, including root logon access.
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
     * Creates a member of the cloud account type in a resource directory.
     *
     * @remarks
     * A resource directory contains two types of members: resource accounts and cloud accounts.
     * - Resource account (recommended): A resource account serves only as a resource container and fully depends on the resource directory. It is a more secure account type that is easier to create. To create a resource account type member, see [CreateResourceAccount](https://help.aliyun.com/document_detail/159392.html).
     * > A resource account can also be upgraded to a cloud account. For more information, see [PromoteResourceAccount](https://help.aliyun.com/document_detail/159395.html).
     * - Cloud account: A cloud account has all the features of an Alibaba Cloud account, including root logon access.
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
     * Calls CreateControlPolicy to create a custom control policy.
     *
     * @remarks
     * This topic provides an example on how to create a control policy named `ExampleControlPolicy` that prohibits modifications to the ResourceDirectoryAccountAccessRole role and its permissions.
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
     * Calls CreateControlPolicy to create a custom control policy.
     *
     * @remarks
     * This topic provides an example on how to create a control policy named `ExampleControlPolicy` that prohibits modifications to the ResourceDirectoryAccountAccessRole role and its permissions.
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
     * Creates a resource folder by calling CreateFolder.
     *
     * @remarks
     * > You can create a maximum of five levels of resource folders.
     * This topic provides an example of how to create a resource folder named `rdFolder` under the Root folder.
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
     * Creates a resource folder by calling CreateFolder.
     *
     * @remarks
     * > You can create a maximum of five levels of resource folders.
     * This topic provides an example of how to create a resource folder named `rdFolder` under the Root folder.
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
     * Creates an access policy.
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
     * Creates an access policy.
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
     * Creates a version of an access policy by calling CreatePolicyVersion.
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
     * Creates a version of an access policy by calling CreatePolicyVersion.
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
     * Creates a member of the resource account type by calling CreateResourceAccount.
     *
     * @remarks
     * In a resource directory, a member serves as a resource container and is a resource grouping unit. A member typically represents a project or application. Resources in each member are physically isolated from resources in other members.
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
     * Creates a member of the resource account type by calling CreateResourceAccount.
     *
     * @remarks
     * In a resource directory, a member serves as a resource container and is a resource grouping unit. A member typically represents a project or application. Resources in each member are physically isolated from resources in other members.
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
     * > You can create a maximum of 30 resource groups within an Alibaba Cloud account.
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
     * > You can create a maximum of 30 resource groups within an Alibaba Cloud account.
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
     * Creates a role by calling CreateRole.
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
     * Creates a role by calling CreateRole.
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
     * Declines a handshake invitation by the invited Alibaba Cloud account.
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
     * Declines a handshake invitation by the invited Alibaba Cloud account.
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
     * Deletes a member of the resource account type by calling DeleteAccount.
     *
     * @remarks
     * Before deleting a member, call [CheckAccountDelete](https://help.aliyun.com/document_detail/448542.html) and [GetAccountDeletionCheckResult](https://help.aliyun.com/document_detail/448775.html) to perform a pre-deletion check on the member. Only members that meet the deletion conditions can be successfully deleted by calling DeleteAccount.
     * After you successfully submit a member deletion request, you can call [GetAccountDeletionStatus](https://help.aliyun.com/document_detail/449001.html) to query the deletion status. Once a member is deleted, all resources and data in the member are deleted. You can no longer log on to or use the member, and the data cannot be recovered. Proceed with caution. For more information about member deletion, see [Delete a member of the resource account type](https://help.aliyun.com/document_detail/446078.html).
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
     * Deletes a member of the resource account type by calling DeleteAccount.
     *
     * @remarks
     * Before deleting a member, call [CheckAccountDelete](https://help.aliyun.com/document_detail/448542.html) and [GetAccountDeletionCheckResult](https://help.aliyun.com/document_detail/448775.html) to perform a pre-deletion check on the member. Only members that meet the deletion conditions can be successfully deleted by calling DeleteAccount.
     * After you successfully submit a member deletion request, you can call [GetAccountDeletionStatus](https://help.aliyun.com/document_detail/449001.html) to query the deletion status. Once a member is deleted, all resources and data in the member are deleted. You can no longer log on to or use the member, and the data cannot be recovered. Proceed with caution. For more information about member deletion, see [Delete a member of the resource account type](https://help.aliyun.com/document_detail/446078.html).
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
     * Deletes an automatic group transfer rule.
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
     * Deletes an automatic group transfer rule.
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
     * Deletes a custom control policy.
     *
     * @remarks
     * To delete a custom control policy that is attached to a resource folder or member accounts, invoke [DetachControlPolicy](https://help.aliyun.com/document_detail/208331.html) to detach the policy first.
     * This topic provides an example on how to delete the custom control policy cp-SImPt8GCEwiq****.
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
     * Deletes a custom control policy.
     *
     * @remarks
     * To delete a custom control policy that is attached to a resource folder or member accounts, invoke [DetachControlPolicy](https://help.aliyun.com/document_detail/208331.html) to detach the policy first.
     * This topic provides an example on how to delete the custom control policy cp-SImPt8GCEwiq****.
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
     * Deletes a folder.
     *
     * @remarks
     * > Before deleting a folder, make sure that the folder does not contain any member accounts or subfolders.
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
     * Deletes a folder.
     *
     * @remarks
     * > Before deleting a folder, make sure that the folder does not contain any member accounts or subfolders.
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
     * Deletes a specified access policy.
     *
     * @remarks
     * > - Before deleting an access policy, delete all non-default versions of the policy. For information about how to delete a policy version, see [DeletePolicyVersion](https://help.aliyun.com/document_detail/159041.html).
     * > - Before deleting an access policy, make sure that the policy is not referenced, meaning it is not attached to any Resource Access Management (RAM) user, user group, or RAM role. For information about how to remove an authorization, see [DetachPolicy](https://help.aliyun.com/document_detail/159168.html).
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
     * Deletes a specified access policy.
     *
     * @remarks
     * > - Before deleting an access policy, delete all non-default versions of the policy. For information about how to delete a policy version, see [DeletePolicyVersion](https://help.aliyun.com/document_detail/159041.html).
     * > - Before deleting an access policy, make sure that the policy is not referenced, meaning it is not attached to any Resource Access Management (RAM) user, user group, or RAM role. For information about how to remove an authorization, see [DetachPolicy](https://help.aliyun.com/document_detail/159168.html).
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
     * Deletes a version of an access policy.
     *
     * @remarks
     * > The default version of an access policy cannot be deleted.
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
     * Deletes a version of an access policy.
     *
     * @remarks
     * > The default version of an access policy cannot be deleted.
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
     * > Before you delete a resource group, delete all resources in the resource group.
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
     * > Before you delete a resource group, delete all resources in the resource group.
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
     * Deletes a role.
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
     * Deletes a role.
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
     * Calls the DeregisterDelegatedAdministrator operation to remove the delegated administrator account of a trusted service.
     *
     * @remarks
     * > If the delegated administrator account being removed has historical management tasks in the trusted service, the removal may affect the normal use of the trusted service. Carefully consider the potential impact before performing the removal.
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
     * Calls the DeregisterDelegatedAdministrator operation to remove the delegated administrator account of a trusted service.
     *
     * @remarks
     * > If the delegated administrator account being removed has historical management tasks in the trusted service, the removal may affect the normal use of the trusted service. Carefully consider the potential impact before performing the removal.
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
     * Closes a resource directory by calling DestroyResourceDirectory. This operation is irreversible. Proceed with caution.
     *
     * @remarks
     * Before closing a resource directory, make sure that you have completed the following operations:
     * - All members in the resource directory have been removed. For information about how to remove a member, see [RemoveCloudAccount](https://help.aliyun.com/document_detail/159431.html).
     * - All folders except the Root folder in the resource directory have been deleted. For information about how to delete a folder, see [DeleteFolder](https://help.aliyun.com/document_detail/159432.html).
     *
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
     * Closes a resource directory by calling DestroyResourceDirectory. This operation is irreversible. Proceed with caution.
     *
     * @remarks
     * Before closing a resource directory, make sure that you have completed the following operations:
     * - All members in the resource directory have been removed. For information about how to remove a member, see [RemoveCloudAccount](https://help.aliyun.com/document_detail/159431.html).
     * - All folders except the Root folder in the resource directory have been deleted. For information about how to delete a folder, see [DeleteFolder](https://help.aliyun.com/document_detail/159432.html).
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
     * Detaches a control policy from a resource folder or member.
     *
     * @remarks
     * After the control policy is detached, the resource folder or member that was previously associated with the policy immediately loses the governance enforced by the policy. Make sure that the result of the detach operation is as expected to avoid impact on your business.
     * Both system policies and custom control policies can be detached. However, the last control policy associated with a resource folder or member cannot be detached.
     * This topic provides an example on how to detach the custom policy `cp-jExXAqIYkwHN****` from the resource folder `fd-ZDNPiT****`.
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
     * Detaches a control policy from a resource folder or member.
     *
     * @remarks
     * After the control policy is detached, the resource folder or member that was previously associated with the policy immediately loses the governance enforced by the policy. Make sure that the result of the detach operation is as expected to avoid impact on your business.
     * Both system policies and custom control policies can be detached. However, the last control policy associated with a resource folder or member cannot be detached.
     * This topic provides an example on how to detach the custom policy `cp-jExXAqIYkwHN****` from the resource folder `fd-ZDNPiT****`.
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
     * Detaches an access policy from a specified identity. After the policy is detached, the identity loses the permissions to manage resources in the specified resource group or Alibaba Cloud account.
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
     * Detaches an access policy from a specified identity. After the policy is detached, the identity loses the permissions to manage resources in the specified resource group or Alibaba Cloud account.
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
     * Disables the attached-resource allocation feature for associated resources.
     *
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
     * Disables the attached-resource allocation feature for associated resources.
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
     * Disables automatic resource group transfer. After this feature is disabled, the custom condition rules and attached-resource transfer rules that have been configured are deleted. The resource groups of existing resources are not affected. If needed, you can re-enable this feature 1 minute after disabling it.
     *
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
     * Disables automatic resource group transfer. After this feature is disabled, the custom condition rules and attached-resource transfer rules that have been configured are deleted. The resource groups of existing resources are not affected. If needed, you can re-enable this feature 1 minute after disabling it.
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
     * Disables the control policy feature.
     *
     * @remarks
     * After you disable the control policy feature, all control policies that are attached to resource folders and member accounts are automatically detached. However, the control policies are not deleted. They cannot be attached to any target nodes.
     * > Disabling the control policy feature affects the permissions of resource folders and member accounts in the entire resource directory. Proceed with caution.
     *
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
     * Disables the control policy feature.
     *
     * @remarks
     * After you disable the control policy feature, all control policies that are attached to resource folders and member accounts are automatically detached. However, the control policies are not deleted. They cannot be attached to any target nodes.
     * > Disabling the control policy feature affects the permissions of resource folders and member accounts in the entire resource directory. Proceed with caution.
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
     * Disables a resource group event notification that is currently enabled. If the notification is already disabled, the error code `UnsupportedOperation.RepeatDisableResourceGroupNotification` is returned. You can call `EnableResourceGroupNotification` to enable the notification first.
     *
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
     * Disables a resource group event notification that is currently enabled. If the notification is already disabled, the error code `UnsupportedOperation.RepeatDisableResourceGroupNotification` is returned. You can call `EnableResourceGroupNotification` to enable the notification first.
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
     * Enables the attached-resource allocation feature for resource group transfers.
     *
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
     * Enables the attached-resource allocation feature for resource group transfers.
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
     * Enables automatic grouping. After automatic grouping is enabled, you can create, update, delete, and query automatic grouping rules.
     *
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
     * Enables automatic grouping. After automatic grouping is enabled, you can create, update, delete, and query automatic grouping rules.
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
     * Enables the control policy feature by calling EnableControlPolicy.
     *
     * @remarks
     * A resource directory control policy is an access control policy based on the resource structure (resource folders or member accounts). It allows you to centrally manage the access permissions border for resource access at each level of the resource directory and establish overall or localized access control principles for your enterprise. Control policies define only the access permissions border and do not actually grant permissions. You must also set permissions by using Resource Access Management (RAM) in a member account before the corresponding identity can have access permissions to resources. For more information, see [Overview of control policies](https://help.aliyun.com/document_detail/178671.html).
     *
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
     * Enables the control policy feature by calling EnableControlPolicy.
     *
     * @remarks
     * A resource directory control policy is an access control policy based on the resource structure (resource folders or member accounts). It allows you to centrally manage the access permissions border for resource access at each level of the resource directory and establish overall or localized access control principles for your enterprise. Control policies define only the access permissions border and do not actually grant permissions. You must also set permissions by using Resource Access Management (RAM) in a member account before the corresponding identity can have access permissions to resources. For more information, see [Overview of control policies](https://help.aliyun.com/document_detail/178671.html).
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
     * Enables a resource directory.
     *
     * @remarks
     * You can enable a resource directory by using the current logon account or by creating a new management account. For more information, refer to [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
     * This topic provides an example of how to enable a resource directory by using the current logon account.
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
     * Enables a resource directory.
     *
     * @remarks
     * You can enable a resource directory by using the current logon account or by creating a new management account. For more information, refer to [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
     * This topic provides an example of how to enable a resource directory by using the current logon account.
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
     * Enables resource group event notifications by calling EnableResourceGroupNotification.
     *
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
     * Enables resource group event notifications by calling EnableResourceGroupNotification.
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
     * Calls GetAccount to retrieve member account information.
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
     * Calls GetAccount to retrieve member account information.
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
     * Queries the result of a member deletion check by calling GetAccountDeletionCheckResult.
     *
     * @remarks
     * After you call [CheckAccountDelete](https://help.aliyun.com/document_detail/448542.html) to perform a member deletion check task, you can call GetAccountDeletionCheckResult to query the result of the member deletion check. If the deletion check requirements are met, the member account can be deleted. Otherwise, manually handle the non-compliant items until all requirements are met.
     * This topic provides an example on how to query the deletion check result of the member account `179855839641****` that you want to delete. The response shows that the member account does not meet the deletion requirements.
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
     * Queries the result of a member deletion check by calling GetAccountDeletionCheckResult.
     *
     * @remarks
     * After you call [CheckAccountDelete](https://help.aliyun.com/document_detail/448542.html) to perform a member deletion check task, you can call GetAccountDeletionCheckResult to query the result of the member deletion check. If the deletion check requirements are met, the member account can be deleted. Otherwise, manually handle the non-compliant items until all requirements are met.
     * This topic provides an example on how to query the deletion check result of the member account `179855839641****` that you want to delete. The response shows that the member account does not meet the deletion requirements.
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
     * Queries the deletion status of a member account.
     *
     * @remarks
     * This topic provides an example on how to query the deletion status of the member account `169946124551****`. The response shows that the member account has been successfully deleted.
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
     * Queries the deletion status of a member account.
     *
     * @remarks
     * This topic provides an example on how to query the deletion status of the member account `169946124551****`. The response shows that the member account has been successfully deleted.
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
     * Queries the information about an automatic resource group transfer rule.
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
     * Queries the information about an automatic resource group transfer rule.
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
     * Queries the status of automatic resource group transfer settings by calling GetAutoGroupingStatus.
     *
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
     * Queries the status of automatic resource group transfer settings by calling GetAutoGroupingStatus.
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
     * Queries the details of a control policy.
     *
     * @remarks
     * This topic provides an example on how to query the details of the control policy whose ID is `cp-SImPt8GCEwiq****`.
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
     * Queries the details of a control policy.
     *
     * @remarks
     * This topic provides an example on how to query the details of the control policy whose ID is `cp-SImPt8GCEwiq****`.
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
     * Queries the enabling status of the control policy feature.
     *
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
     * Queries the enabling status of the control policy feature.
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
     * Calls GetFolder to retrieve the information about a folder.
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
     * Calls GetFolder to retrieve the information about a folder.
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
     * Retrieves handshake information by calling GetHandshake.
     *
     * @remarks
     * This topic provides an example on how to retrieve the information about the handshake whose ID is `h-ycm4rp****`.
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
     * Retrieves handshake information by calling GetHandshake.
     *
     * @remarks
     * This topic provides an example on how to retrieve the information about the handshake whose ID is `h-ycm4rp****`.
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
     * Retrieves the billing account information of a member account by calling GetPayerForAccount.
     *
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
     * Retrieves the billing account information of a member account by calling GetPayerForAccount.
     *
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
     * Retrieves information about a specified access policy.
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
     * Retrieves information about a specified access policy.
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
     * Retrieves a version of an access policy.
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
     * Retrieves a version of an access policy.
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
     * Queries resource directory information. When called by a management account, returns the details of the resource directory created by the management account. When called by a member, returns the details of the resource directory to which the member belongs.
     *
     * @remarks
     * This topic provides an example of how to use a management account to query the details of the resource directory created by the management account.
     *
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
     * Queries resource directory information. When called by a management account, returns the details of the resource directory created by the management account. When called by a member, returns the details of the resource directory to which the member belongs.
     *
     * @remarks
     * This topic provides an example of how to use a management account to query the details of the resource directory created by the management account.
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
     * Queries the information about a resource group.
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
     * Queries the information about a resource group.
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
     * Queries the administrator settings of a resource group.
     *
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
     * Queries the administrator settings of a resource group.
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
     * Queries the notification settings of a resource group by calling GetResourceGroupNotificationSetting.
     *
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
     * Queries the notification settings of a resource group by calling GetResourceGroupNotificationSetting.
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
     * Queries the resource count in visible resource groups.
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
     * Queries the resource count in visible resource groups.
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
     * Queries the information about a role by calling GetRole.
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
     * Queries the information about a role by calling GetRole.
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
     * Queries the status of a task that deletes a service-linked role.
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
     * Queries the status of a task that deletes a service-linked role.
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
     * Calls InitResourceDirectory to enable a resource directory. After you enable a resource directory, the system creates a Root folder and sets the current account as the management account. The management account has all permissions to manage the resource directory.
     *
     * @remarks
     * > - Use an account that has passed enterprise real-name verification to enable a resource directory. An account that has passed only individual real-name verification cannot enable a resource directory.
     * > - Use the management account only as the administrator of the resource directory. Do not purchase cloud service resources with the management account.
     *
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
     * Calls InitResourceDirectory to enable a resource directory. After you enable a resource directory, the system creates a Root folder and sets the current account as the management account. The management account has all permissions to manage the resource directory.
     *
     * @remarks
     * > - Use an account that has passed enterprise real-name verification to enable a resource directory. An account that has passed only individual real-name verification cannot enable a resource directory.
     * > - Use the management account only as the administrator of the resource directory. Do not purchase cloud service resources with the management account.
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
     * Invites an external account to join a resource directory.
     *
     * @remarks
     * This topic provides an example on how to invite the external account `someone@example.com` to join a resource directory.
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
     * Invites an external account to join a resource directory.
     *
     * @remarks
     * This topic provides an example on how to invite the external account `someone@example.com` to join a resource directory.
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
     * Queries the list of all member accounts in a resource directory by calling ListAccounts.
     *
     * @remarks
     * The management account of the resource directory and the delegated administrator accounts of trusted services can call this operation.
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
     * Queries the list of all member accounts in a resource directory by calling ListAccounts.
     *
     * @remarks
     * The management account of the resource directory and the delegated administrator accounts of trusted services can call this operation.
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
     * Queries the list of member accounts in a resource folder by calling ListAccountsForParent.
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
     * Queries the list of member accounts in a resource folder by calling ListAccountsForParent.
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
     * Queries information about all parent folders of a specified folder. The results are displayed in order from top to bottom.
     *
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
     * Queries information about all parent folders of a specified folder. The results are displayed in order from top to bottom.
     *
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
     * Retrieves the settings of the associated resource group transfer feature.
     *
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
     * Retrieves the settings of the associated resource group transfer feature.
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
     * Lists auto-grouping remediation records.
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
     * Lists auto-grouping remediation records.
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
     * Queries the list of automatic group transfer rules.
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
     * Queries the list of automatic group transfer rules.
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
     * Queries a list of control policies.
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
     * Queries a list of control policies.
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
     * Queries the list of control policies attached to a resource folder or member account.
     *
     * @remarks
     * This topic provides an example on how to query the list of control policies attached to the resource folder `fd-ZDNPiT****`.
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
     * Queries the list of control policies attached to a resource folder or member account.
     *
     * @remarks
     * This topic provides an example on how to query the list of control policies attached to the resource folder `fd-ZDNPiT****`.
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
     * Queries the list of delegated administrator accounts for a trusted service.
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
     * Queries the list of delegated administrator accounts for a trusted service.
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
     * Queries the trusted services for which a specified member is set as a delegated administrator account.
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
     * Queries the trusted services for which a specified member is set as a delegated administrator account.
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
     * Queries the subfolders of a specified folder.
     *
     * @remarks
     * > You can query only the subfolders at the next level of the specified folder. You cannot query subfolders at deeper levels.
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
     * Queries the subfolders of a specified folder.
     *
     * @remarks
     * > You can query only the subfolders at the next level of the specified folder. You cannot query subfolders at deeper levels.
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
     * Queries the invitation records under the current account.
     *
     * @remarks
     * This topic provides an example on how to query the invitation records of the current management account `172841235500****`.
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
     * Queries the invitation records under the current account.
     *
     * @remarks
     * This topic provides an example on how to query the invitation records of the current management account `172841235500****`.
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
     * Queries all invitations in a resource directory.
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
     * Queries all invitations in a resource directory.
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
     * Calls ListPolicies to query a list of access policies.
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
     * Calls ListPolicies to query a list of access policies.
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
     * Queries the list of policy attachments by calling ListPolicyAttachments.
     *
     * @remarks
     * You can query the following information:
     * - All authorization records under an Alibaba Cloud account or a resource group.
     * - All access policies granted to a Resource Access Management (RAM) user, RAM user group, or RAM role.
     * - RAM users, RAM user groups, and RAM roles that have a specific permission under an Alibaba Cloud account or a resource group.
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
     * Queries the list of policy attachments by calling ListPolicyAttachments.
     *
     * @remarks
     * You can query the following information:
     * - All authorization records under an Alibaba Cloud account or a resource group.
     * - All access policies granted to a Resource Access Management (RAM) user, RAM user group, or RAM role.
     * - RAM users, RAM user groups, and RAM roles that have a specific permission under an Alibaba Cloud account or a resource group.
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
     * Queries the versions of an access policy.
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
     * Queries the versions of an access policy.
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
     * Lists the capability items of resource groups.
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
     * Lists the capability items of resource groups.
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
     * Queries the list of resource groups.
     *
     * @remarks
     * You can call this operation to query all resource groups under the current account. You can also filter resource groups by resource group status, resource group ID, resource group identifier, or resource group display name.
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
     * Queries the list of resource groups.
     *
     * @remarks
     * You can call this operation to query all resource groups under the current account. You can also filter resource groups by resource group status, resource group ID, resource group identifier, or resource group display name.
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
     * Lists resource groups along with user authorization details.
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
     * Lists resource groups along with user authorization details.
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
     * Queries the resources in the resource groups accessible to the current account.
     *
     * @remarks
     * > This API can be called by assuming a RAM role, but session policies for the role are not supported.
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
        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

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
     * Queries the resources in the resource groups accessible to the current account.
     *
     * @remarks
     * > This API can be called by assuming a RAM role, but session policies for the role are not supported.
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
     * Queries the list of roles by calling ListRoles.
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
     * Queries the list of roles by calling ListRoles.
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
     * Queries the tag key list of resource directory member accounts by calling ListTagKeys.
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
     * Queries the tag key list of resource directory member accounts by calling ListTagKeys.
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
     * Queries the tags that are attached to a resource group or a resource directory member.
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
     * Queries the tags that are attached to a resource group or a resource directory member.
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
     * Queries the tag values of a specified tag key by calling ListTagValues.
     *
     * @remarks
     * ### Usage notes
     * This topic provides an example on how to query the tag values of the tag key k1. The response shows that the tag value corresponding to the tag key k1 is v1.
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
     * Queries the tag values of a specified tag key by calling ListTagValues.
     *
     * @remarks
     * ### Usage notes
     * This topic provides an example on how to query the tag values of the tag key k1. The response shows that the tag value corresponding to the tag key k1 is v1.
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
     * Queries the nodes to which a control policy is attached.
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
     * Queries the nodes to which a control policy is attached.
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
     * Queries the list of trusted services enabled by the management account or a delegated administrator account.
     *
     * @remarks
     * > This operation can be called only by the management account or a delegated administrator account.
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
     * Queries the list of trusted services enabled by the management account or a delegated administrator account.
     *
     * @remarks
     * > This operation can be called only by the management account or a delegated administrator account.
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
     * Queries resource group events.
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
     * Queries resource group events.
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
     * Moves a member to another folder.
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
     * Moves a member to another folder.
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
     * Calls MoveResources to move resources from one resource group to another.
     *
     * @remarks
     * Supports batch transfer of resources across regions, cloud services, and resource groups.
     * For cloud services that support resource group transfer, see the **API** column in [Cloud services that support resource groups](https://help.aliyun.com/document_detail/94479.html).
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
     * Calls MoveResources to move resources from one resource group to another.
     *
     * @remarks
     * Supports batch transfer of resources across regions, cloud services, and resource groups.
     * For cloud services that support resource group transfer, see the **API** column in [Cloud services that support resource groups](https://help.aliyun.com/document_detail/94479.html).
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
     * Upgrades a resource account to an Alibaba Cloud account. This is an asynchronous operation.
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
     * Upgrades a resource account to an Alibaba Cloud account. This is an asynchronous operation.
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
     * Sets a member account in a resource directory as a delegated administrator account for a trusted service.
     *
     * @remarks
     * After the settings are complete, the delegated administrator account is granted authorization to access the organizational information of the resource directory, which provides visibility into the organization members and structure. The delegated administrator account executes service-related management operations on behalf of the management account in the specified trusted service.
     * Limits:
     * - Only some trusted services support the delegated administrator feature. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * - Only the management account of the resource directory and authorized Resource Access Management (RAM) users and RAM roles under the management account can invoke this API operation.
     * - The maximum number of delegated administrator accounts that can be added is defined by each trusted service.
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
     * Sets a member account in a resource directory as a delegated administrator account for a trusted service.
     *
     * @remarks
     * After the settings are complete, the delegated administrator account is granted authorization to access the organizational information of the resource directory, which provides visibility into the organization members and structure. The delegated administrator account executes service-related management operations on behalf of the management account in the specified trusted service.
     * Limits:
     * - Only some trusted services support the delegated administrator feature. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * - Only the management account of the resource directory and authorized Resource Access Management (RAM) users and RAM roles under the management account can invoke this API operation.
     * - The maximum number of delegated administrator accounts that can be added is defined by each trusted service.
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
     * Removes a member of the cloud account type. After the member is removed, it exists as an independent Alibaba Cloud account and is no longer managed by the management account of the resource directory.
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
     * Removes a member of the cloud account type. After the member is removed, it exists as an independent Alibaba Cloud account and is no longer managed by the management account of the resource directory.
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
     * Resends the confirmation email for creating a cloud account.
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
     * Resends the confirmation email for creating a cloud account.
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
     * Resends the confirmation email for upgrading a resource account to a cloud account.
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
     * Resends the confirmation email for upgrading a resource account to a cloud account.
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
     * Resends the confirmation email for changing the email address of a member account.
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
     * Resends the confirmation email for changing the email address of a member account.
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
     * Sends a verification code to a secure phone number when you set the secure phone number for a member of the resource account type by calling SendVerificationCodeForBindSecureMobilePhone.
     *
     * @remarks
     * To ensure that the system can record the specific operator of management operations, use a Resource Access Management (RAM) user or RAM role under the management account that has the resource directory management permission (AliyunResourceDirectoryFullAccess) to call this API operation.
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
     * Sends a verification code to a secure phone number when you set the secure phone number for a member of the resource account type by calling SendVerificationCodeForBindSecureMobilePhone.
     *
     * @remarks
     * To ensure that the system can record the specific operator of management operations, use a Resource Access Management (RAM) user or RAM role under the management account that has the resource directory management permission (AliyunResourceDirectoryFullAccess) to call this API operation.
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
     * Sends a verification code to the secure phone number of a new management account when you call SendVerificationCodeForEnableRD to enable a resource directory by creating a new management account.
     *
     * @remarks
     * Each Alibaba Cloud account can send up to 100 verification codes per day.
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
     * Sends a verification code to the secure phone number of a new management account when you call SendVerificationCodeForEnableRD to enable a resource directory by creating a new management account.
     *
     * @remarks
     * Each Alibaba Cloud account can send up to 100 verification codes per day.
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
     * Sets the default version of an access policy.
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
     * Sets the default version of an access policy.
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
     * Enables or disables the member deletion permission by calling SetMemberDeletionPermission.
     *
     * @remarks
     * You can delete members of the resource account type only after the member deletion permission is enabled.
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
     * Enables or disables the member deletion permission by calling SetMemberDeletionPermission.
     *
     * @remarks
     * You can delete members of the resource account type only after the member deletion permission is enabled.
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
     * Attaches labels to resource groups or member accounts of a resource directory.
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
     * Attaches labels to resource groups or member accounts of a resource directory.
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
     * Unbinds tags from resource groups or resource directory members.
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
     * Unbinds tags from resource groups or resource directory members.
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
     * Modifies the name of a member or switches the member type by calling UpdateAccount.
     *
     * @remarks
     * ### Before you begin
     * - To ensure that the system can record the specific operator of management operations, use a Resource Access Management (RAM) user or RAM role under the management account that has the resource folder management permission (AliyunResourceDirectoryFullAccess) to invoke this API operation.
     * - For the conditions that must be met to switch a resource account to a cloud account, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * - For the conditions that must be met to switch a cloud account to a resource account, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
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
     * Modifies the name of a member or switches the member type by calling UpdateAccount.
     *
     * @remarks
     * ### Before you begin
     * - To ensure that the system can record the specific operator of management operations, use a Resource Access Management (RAM) user or RAM role under the management account that has the resource folder management permission (AliyunResourceDirectoryFullAccess) to invoke this API operation.
     * - For the conditions that must be met to switch a resource account to a cloud account, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * - For the conditions that must be met to switch a cloud account to a resource account, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
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
     * Updates the settings of the associated resource group transfer feature by calling UpdateAssociatedTransferSetting.
     *
     * @remarks
     * For cloud resources that support the attached-resource allocation feature, see [Attached-resource allocation](https://help.aliyun.com/document_detail/606232.html).
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
     * Updates the settings of the associated resource group transfer feature by calling UpdateAssociatedTransferSetting.
     *
     * @remarks
     * For cloud resources that support the attached-resource allocation feature, see [Attached-resource allocation](https://help.aliyun.com/document_detail/606232.html).
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
     * Calls UpdateAutoGroupingConfig to update the automatic group transfer settings. Currently, only the setting for whether to enable existing associated resources to follow the group transfer task is supported.
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
     * Calls UpdateAutoGroupingConfig to update the automatic group transfer settings. Currently, only the setting for whether to enable existing associated resources to follow the group transfer task is supported.
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
     * Updates an automatic resource group transfer rule by calling UpdateAutoGroupingRule.
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
     * Updates an automatic resource group transfer rule by calling UpdateAutoGroupingRule.
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
     * Modifies a custom control policy by calling UpdateControlPolicy.
     *
     * @remarks
     * This topic provides an example on how to modify the name of the control policy `cp-jExXAqIYkwHN****` to `NewControlPolicy`.
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
     * Modifies a custom control policy by calling UpdateControlPolicy.
     *
     * @remarks
     * This topic provides an example on how to modify the name of the control policy `cp-jExXAqIYkwHN****` to `NewControlPolicy`.
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
     * Modifies the name of a folder by calling UpdateFolder.
     *
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
     * Modifies the name of a folder by calling UpdateFolder.
     *
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
     * Modifies the display name of a resource group.
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
     * Modifies the display name of a resource group.
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
     * Updates the administrator settings of a resource group by calling UpdateResourceGroupAdminSetting.
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
     * Updates the administrator settings of a resource group by calling UpdateResourceGroupAdminSetting.
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
     * Updates the information of a RAM role.
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
     * Updates the information of a RAM role.
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
