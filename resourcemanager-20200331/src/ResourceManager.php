<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DisableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableAssociatedTransferResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupRequest;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateControlPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateRoleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * After an invited Alibaba Cloud account joins a resource directory, it becomes a member of the resource directory. By default, the name of the invited Alibaba Cloud account is used as the display name of the account in the resource directory.
     *   * This topic provides an example on how to call the API operation to accept the invitation `h-Ih8IuPfvV0t0****` that is initiated to invite the Alibaba Cloud account `177242285274****` to join the resource directory `rd-3G****`.
     *   *
     * @param AcceptHandshakeRequest $request AcceptHandshakeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptHandshakeResponse AcceptHandshakeResponse
     */
    public function acceptHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->handshakeId)) {
            $query['HandshakeId'] = $request->handshakeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptHandshake',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After an invited Alibaba Cloud account joins a resource directory, it becomes a member of the resource directory. By default, the name of the invited Alibaba Cloud account is used as the display name of the account in the resource directory.
     *   * This topic provides an example on how to call the API operation to accept the invitation `h-Ih8IuPfvV0t0****` that is initiated to invite the Alibaba Cloud account `177242285274****` to join the resource directory `rd-3G****`.
     *   *
     * @param AcceptHandshakeRequest $request AcceptHandshakeRequest
     *
     * @return AcceptHandshakeResponse AcceptHandshakeResponse
     */
    public function acceptHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptHandshakeWithOptions($request, $runtime);
    }

    /**
     * After you attach an access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     *   * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     *   * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     *   * A maximum of 10 access control policies can be attached to a folder or member.
     *   * This topic provides an example on how to call the API operation to attach the custom access control policy `cp-jExXAqIYkwHN****` to the folder `fd-ZDNPiT****`.
     *   *
     * @param AttachControlPolicyRequest $request AttachControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachControlPolicyResponse AttachControlPolicyResponse
     */
    public function attachControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you attach an access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     *   * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     *   * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     *   * A maximum of 10 access control policies can be attached to a folder or member.
     *   * This topic provides an example on how to call the API operation to attach the custom access control policy `cp-jExXAqIYkwHN****` to the folder `fd-ZDNPiT****`.
     *   *
     * @param AttachControlPolicyRequest $request AttachControlPolicyRequest
     *
     * @return AttachControlPolicyResponse AttachControlPolicyResponse
     */
    public function attachControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachControlPolicyWithOptions($request, $runtime);
    }

    /**
     * In this example, the policy `AdministratorAccess` is attached to the RAM user `alice@demo.onaliyun.com` and takes effect only for resources in the `rg-9gLOoK****` resource group.
     *   *
     * @param AttachPolicyRequest $request AttachPolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachPolicyResponse AttachPolicyResponse
     */
    public function attachPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the policy `AdministratorAccess` is attached to the RAM user `alice@demo.onaliyun.com` and takes effect only for resources in the `rg-9gLOoK****` resource group.
     *   *
     * @param AttachPolicyRequest $request AttachPolicyRequest
     *
     * @return AttachPolicyResponse AttachPolicyResponse
     */
    public function attachPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachPolicyWithOptions($request, $runtime);
    }

    /**
     * You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     *   * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     *   * This topic provides an example on how to call the API operation to bind a mobile phone number to the member `138660628348****` for security purposes.
     *   *
     * @param BindSecureMobilePhoneRequest $request BindSecureMobilePhoneRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BindSecureMobilePhoneResponse BindSecureMobilePhoneResponse
     */
    public function bindSecureMobilePhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->secureMobilePhone)) {
            $query['SecureMobilePhone'] = $request->secureMobilePhone;
        }
        if (!Utils::isUnset($request->verificationCode)) {
            $query['VerificationCode'] = $request->verificationCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindSecureMobilePhone',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindSecureMobilePhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     *   * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     *   * This topic provides an example on how to call the API operation to bind a mobile phone number to the member `138660628348****` for security purposes.
     *   *
     * @param BindSecureMobilePhoneRequest $request BindSecureMobilePhoneRequest
     *
     * @return BindSecureMobilePhoneResponse BindSecureMobilePhoneResponse
     */
    public function bindSecureMobilePhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindSecureMobilePhoneWithOptions($request, $runtime);
    }

    /**
     * @param CancelChangeAccountEmailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelChangeAccountEmailResponse
     */
    public function cancelChangeAccountEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelChangeAccountEmail',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelChangeAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CancelCreateCloudAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelCreateCloudAccountResponse
     */
    public function cancelCreateCloudAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCreateCloudAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCreateCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * This topic provides an example on how to call the API operation to cancel the invitation whose ID is `h-ycm4rp****`.
     *   *
     * @param CancelHandshakeRequest $request CancelHandshakeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelHandshakeResponse CancelHandshakeResponse
     */
    public function cancelHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->handshakeId)) {
            $query['HandshakeId'] = $request->handshakeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelHandshake',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to cancel the invitation whose ID is `h-ycm4rp****`.
     *   *
     * @param CancelHandshakeRequest $request CancelHandshakeRequest
     *
     * @return CancelHandshakeResponse CancelHandshakeResponse
     */
    public function cancelHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelHandshakeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelPromoteResourceAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelPromoteResourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ChangeAccountEmailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeAccountEmailResponse
     */
    public function changeAccountEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeAccountEmail',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you delete a member, you must call this API operation to check whether the member can be deleted.
     *   * This topic provides an example on how to call the API operation to perform a deletion check on the member whose ID is `179855839641****`.
     *   *
     * @param CheckAccountDeleteRequest $request CheckAccountDeleteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckAccountDeleteResponse CheckAccountDeleteResponse
     */
    public function checkAccountDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckAccountDelete',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckAccountDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete a member, you must call this API operation to check whether the member can be deleted.
     *   * This topic provides an example on how to call the API operation to perform a deletion check on the member whose ID is `179855839641****`.
     *   *
     * @param CheckAccountDeleteRequest $request CheckAccountDeleteRequest
     *
     * @return CheckAccountDeleteResponse CheckAccountDeleteResponse
     */
    public function checkAccountDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountDeleteWithOptions($request, $runtime);
    }

    /**
     * A resource directory supports two types of member accounts: resource accounts and cloud accounts.
     *   * *   Resource account (recommended): A resource account is only used as a resource container and fully depends on a resource directory. Such member accounts are secure and easy-to-create. For more information about how to create a resource account, see [CreateResourceAccount](~~159392~~).
     *   * >  A resource account can be upgraded to a cloud account. For more information, see [PromoteResourceAccount](~~159395~~) .
     *   * *   Cloud account: A cloud account has all the features of an Alibaba Cloud account, including root permissions.
     *   *
     * @param CreateCloudAccountRequest $request CreateCloudAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudAccountResponse CreateCloudAccountResponse
     */
    public function createCloudAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->payerAccountId)) {
            $query['PayerAccountId'] = $request->payerAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A resource directory supports two types of member accounts: resource accounts and cloud accounts.
     *   * *   Resource account (recommended): A resource account is only used as a resource container and fully depends on a resource directory. Such member accounts are secure and easy-to-create. For more information about how to create a resource account, see [CreateResourceAccount](~~159392~~).
     *   * >  A resource account can be upgraded to a cloud account. For more information, see [PromoteResourceAccount](~~159395~~) .
     *   * *   Cloud account: A cloud account has all the features of an Alibaba Cloud account, including root permissions.
     *   *
     * @param CreateCloudAccountRequest $request CreateCloudAccountRequest
     *
     * @return CreateCloudAccountResponse CreateCloudAccountResponse
     */
    public function createCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudAccountWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to create a custom access control policy named `ExampleControlPolicy`. This access control policy is used to prohibit modifications to the ResourceDirectoryAccountAccessRole role and the permissions of the role.
     *   *
     * @param CreateControlPolicyRequest $request CreateControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateControlPolicyResponse CreateControlPolicyResponse
     */
    public function createControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->effectScope)) {
            $query['EffectScope'] = $request->effectScope;
        }
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to create a custom access control policy named `ExampleControlPolicy`. This access control policy is used to prohibit modifications to the ResourceDirectoryAccountAccessRole role and the permissions of the role.
     *   *
     * @param CreateControlPolicyRequest $request CreateControlPolicyRequest
     *
     * @return CreateControlPolicyResponse CreateControlPolicyResponse
     */
    public function createControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createControlPolicyWithOptions($request, $runtime);
    }

    /**
     * >  A maximum of five levels of folders can be created under the root folder.
     *   * In this example, a folder named `rdFolder` is created under the root folder.
     *   *
     * @param CreateFolderRequest $request CreateFolderRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFolderResponse CreateFolderResponse
     */
    public function createFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->folderName)) {
            $query['FolderName'] = $request->folderName;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFolder',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  A maximum of five levels of folders can be created under the root folder.
     *   * In this example, a folder named `rdFolder` is created under the root folder.
     *   *
     * @param CreateFolderRequest $request CreateFolderRequest
     *
     * @return CreateFolderResponse CreateFolderResponse
     */
    public function createFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFolderWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreatePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyDocument)) {
            $query['PolicyDocument'] = $request->policyDocument;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->setAsDefault)) {
            $query['SetAsDefault'] = $request->setAsDefault;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicyVersion',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     *   * This topic provides an example on how to call the API operation to create a member in the `fd-r23M55****` folder. The display name of the member is `Dev`, and the prefix for the Alibaba Cloud account name of the member is `alice`.
     *   *
     * @param CreateResourceAccountRequest $request CreateResourceAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceAccountResponse CreateResourceAccountResponse
     */
    public function createResourceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNamePrefix)) {
            $query['AccountNamePrefix'] = $request->accountNamePrefix;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->payerAccountId)) {
            $query['PayerAccountId'] = $request->payerAccountId;
        }
        if (!Utils::isUnset($request->resellAccountType)) {
            $query['ResellAccountType'] = $request->resellAccountType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     *   * This topic provides an example on how to call the API operation to create a member in the `fd-r23M55****` folder. The display name of the member is `Dev`, and the prefix for the Alibaba Cloud account name of the member is `alice`.
     *   *
     * @param CreateResourceAccountRequest $request CreateResourceAccountRequest
     *
     * @return CreateResourceAccountResponse CreateResourceAccountResponse
     */
    public function createResourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceAccountWithOptions($request, $runtime);
    }

    /**
     * For more information about common request parameters, see [Common parameters](~~159973~~).
     *   *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceGroup',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about common request parameters, see [Common parameters](~~159973~~).
     *   *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->assumeRolePolicyDocument)) {
            $query['AssumeRolePolicyDocument'] = $request->assumeRolePolicyDocument;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->maxSessionDuration)) {
            $query['MaxSessionDuration'] = $request->maxSessionDuration;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRole',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customSuffix)) {
            $query['CustomSuffix'] = $request->customSuffix;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceLinkedRole',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeclineHandshakeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeclineHandshakeResponse
     */
    public function declineHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->handshakeId)) {
            $query['HandshakeId'] = $request->handshakeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeclineHandshake',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeclineHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * The ID of the member that you want to delete.
     *   *
     * @param DeleteAccountRequest $tmpReq  DeleteAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccountWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteAccountShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->abandonableCheckId)) {
            $request->abandonableCheckIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->abandonableCheckId, 'AbandonableCheckId', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->abandonableCheckIdShrink)) {
            $query['AbandonableCheckId'] = $request->abandonableCheckIdShrink;
        }
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the member that you want to delete.
     *   *
     * @param DeleteAccountRequest $request DeleteAccountRequest
     *
     * @return DeleteAccountResponse DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * If you want to delete a custom control policy that is attached to folders or member accounts, you must call the [DetachControlPolicy](~~208331~~) operation to detach the policy before you delete it.
     *   * In this example, the custom control policy `cp-SImPt8GCEwiq****` is deleted.
     *   *
     * @param DeleteControlPolicyRequest $request DeleteControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteControlPolicyResponse DeleteControlPolicyResponse
     */
    public function deleteControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you want to delete a custom control policy that is attached to folders or member accounts, you must call the [DetachControlPolicy](~~208331~~) operation to detach the policy before you delete it.
     *   * In this example, the custom control policy `cp-SImPt8GCEwiq****` is deleted.
     *   *
     * @param DeleteControlPolicyRequest $request DeleteControlPolicyRequest
     *
     * @return DeleteControlPolicyResponse DeleteControlPolicyResponse
     */
    public function deleteControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteControlPolicyWithOptions($request, $runtime);
    }

    /**
     * >  Before you delete a folder, make sure that the folder does not contain any member accounts or child folders.
     *   *
     * @param DeleteFolderRequest $request DeleteFolderRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFolderResponse DeleteFolderResponse
     */
    public function deleteFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFolder',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Before you delete a folder, make sure that the folder does not contain any member accounts or child folders.
     *   *
     * @param DeleteFolderRequest $request DeleteFolderRequest
     *
     * @return DeleteFolderResponse DeleteFolderResponse
     */
    public function deleteFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFolderWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Before you delete a policy, you must delete all non-default versions of the policy. For more information about how to delete a policy version, see [DeletePolicyVersion](~~159041~~).
     *   * *   Before you delete a policy, make sure that the policy is not referenced. This means that the policy is not attached to RAM users, RAM user groups, or RAM roles. For more information about how to detach a policy, see [DetachPolicy](~~159168~~).
     *   *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Before you delete a policy, you must delete all non-default versions of the policy. For more information about how to delete a policy version, see [DeletePolicyVersion](~~159041~~).
     *   * *   Before you delete a policy, make sure that the policy is not referenced. This means that the policy is not attached to RAM users, RAM user groups, or RAM roles. For more information about how to detach a policy, see [DetachPolicy](~~159168~~).
     *   *
     * @param DeletePolicyRequest $request DeletePolicyRequest
     *
     * @return DeletePolicyResponse DeletePolicyResponse
     */
    public function deletePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyWithOptions($request, $runtime);
    }

    /**
     * >  The default version of a permission policy cannot be deleted.
     *   *
     * @param DeletePolicyVersionRequest $request DeletePolicyVersionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyVersionResponse DeletePolicyVersionResponse
     */
    public function deletePolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyVersion',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The default version of a permission policy cannot be deleted.
     *   *
     * @param DeletePolicyVersionRequest $request DeletePolicyVersionRequest
     *
     * @return DeletePolicyVersionResponse DeletePolicyVersionResponse
     */
    public function deletePolicyVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyVersionWithOptions($request, $runtime);
    }

    /**
     * >  Before you delete a resource group, you must delete all the resources in it.
     *   * In this example, the resource group whose ID is `rg-9gLOoK****` is deleted.
     *   *
     * @param DeleteResourceGroupRequest $request DeleteResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceGroup',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Before you delete a resource group, you must delete all the resources in it.
     *   * In this example, the resource group whose ID is `rg-9gLOoK****` is deleted.
     *   *
     * @param DeleteResourceGroupRequest $request DeleteResourceGroupRequest
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRole',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteServiceLinkedRoleResponse
     */
    public function deleteServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceLinkedRole',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * >  If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
     *   * This topic provides an example on how to call the API operation to remove the delegated administrator account `181761095690****` for Cloud Firewall.
     *   *
     * @param DeregisterDelegatedAdministratorRequest $request DeregisterDelegatedAdministratorRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeregisterDelegatedAdministratorResponse DeregisterDelegatedAdministratorResponse
     */
    public function deregisterDelegatedAdministratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->servicePrincipal)) {
            $query['ServicePrincipal'] = $request->servicePrincipal;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeregisterDelegatedAdministrator',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeregisterDelegatedAdministratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
     *   * This topic provides an example on how to call the API operation to remove the delegated administrator account `181761095690****` for Cloud Firewall.
     *   *
     * @param DeregisterDelegatedAdministratorRequest $request DeregisterDelegatedAdministratorRequest
     *
     * @return DeregisterDelegatedAdministratorResponse DeregisterDelegatedAdministratorResponse
     */
    public function deregisterDelegatedAdministrator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deregisterDelegatedAdministratorWithOptions($request, $runtime);
    }

    /**
     * Before you disable a resource directory, make sure that the following requirements are met:
     *   * *   All member accounts must be removed from the resource directory. For more information about how to remove a member account, see [RemoveCloudAccount](~~159431~~).
     *   * *   All folders except the root folder must be deleted from the resource directory. For more information about how to delete a folder, see [DeleteFolder](~~159432~~).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DestroyResourceDirectoryResponse DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DestroyResourceDirectory',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestroyResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you disable a resource directory, make sure that the following requirements are met:
     *   * *   All member accounts must be removed from the resource directory. For more information about how to remove a member account, see [RemoveCloudAccount](~~159431~~).
     *   * *   All folders except the root folder must be deleted from the resource directory. For more information about how to delete a folder, see [DeleteFolder](~~159432~~).
     *   *
     * @return DestroyResourceDirectoryResponse DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyResourceDirectoryWithOptions($runtime);
    }

    /**
     * After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     *   * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
     *   * This topic provides an example on how to call the API operation to detach the custom control policy `cp-jExXAqIYkwHN****` from the folder `fd-ZDNPiT****`.
     *   *
     * @param DetachControlPolicyRequest $request DetachControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachControlPolicyResponse DetachControlPolicyResponse
     */
    public function detachControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     *   * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
     *   * This topic provides an example on how to call the API operation to detach the custom control policy `cp-jExXAqIYkwHN****` from the folder `fd-ZDNPiT****`.
     *   *
     * @param DetachControlPolicyRequest $request DetachControlPolicyRequest
     *
     * @return DetachControlPolicyResponse DetachControlPolicyResponse
     */
    public function detachControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachControlPolicyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return DisableAssociatedTransferResponse
     */
    public function disableAssociatedTransferWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableAssociatedTransfer',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAssociatedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DisableAssociatedTransferResponse
     */
    public function disableAssociatedTransfer()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAssociatedTransferWithOptions($runtime);
    }

    /**
     * After you disable the Control Policy feature, the system automatically detaches all control policies that are attached to folders and member accounts. The system does not delete these control policies, but you cannot attach them to folders or member accounts again.
     *   * >  If you disable the Control Policy feature, the permissions of all folders and member accounts in a resource directory are affected. You must proceed with caution.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableControlPolicyResponse DisableControlPolicyResponse
     */
    public function disableControlPolicyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you disable the Control Policy feature, the system automatically detaches all control policies that are attached to folders and member accounts. The system does not delete these control policies, but you cannot attach them to folders or member accounts again.
     *   * >  If you disable the Control Policy feature, the permissions of all folders and member accounts in a resource directory are affected. You must proceed with caution.
     *   *
     * @return DisableControlPolicyResponse DisableControlPolicyResponse
     */
    public function disableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableControlPolicyWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return EnableAssociatedTransferResponse
     */
    public function enableAssociatedTransferWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableAssociatedTransfer',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAssociatedTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return EnableAssociatedTransferResponse
     */
    public function enableAssociatedTransfer()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAssociatedTransferWithOptions($runtime);
    }

    /**
     * The Control Policy feature allows you to manage the permission boundaries of the folders or member accounts in a resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member account in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](~~178671~~).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableControlPolicyResponse EnableControlPolicyResponse
     */
    public function enableControlPolicyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The Control Policy feature allows you to manage the permission boundaries of the folders or member accounts in a resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member account in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](~~178671~~).
     *   *
     * @return EnableControlPolicyResponse EnableControlPolicyResponse
     */
    public function enableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableControlPolicyWithOptions($runtime);
    }

    /**
     * You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](~~111215~~).
     *   * In this example, the current account is used to enable a resource directory.
     *   *
     * @param EnableResourceDirectoryRequest $request EnableResourceDirectoryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableResourceDirectoryResponse EnableResourceDirectoryResponse
     */
    public function enableResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableMode)) {
            $query['EnableMode'] = $request->enableMode;
        }
        if (!Utils::isUnset($request->MAName)) {
            $query['MAName'] = $request->MAName;
        }
        if (!Utils::isUnset($request->MASecureMobilePhone)) {
            $query['MASecureMobilePhone'] = $request->MASecureMobilePhone;
        }
        if (!Utils::isUnset($request->verificationCode)) {
            $query['VerificationCode'] = $request->verificationCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableResourceDirectory',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](~~111215~~).
     *   * In this example, the current account is used to enable a resource directory.
     *   *
     * @param EnableResourceDirectoryRequest $request EnableResourceDirectoryRequest
     *
     * @return EnableResourceDirectoryResponse EnableResourceDirectoryResponse
     */
    public function enableResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the information of the member whose Alibaba Cloud account ID is `181761095690****`.
     *   *
     * @param GetAccountRequest $request GetAccountRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountResponse GetAccountResponse
     */
    public function getAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the information of the member whose Alibaba Cloud account ID is `181761095690****`.
     *   *
     * @param GetAccountRequest $request GetAccountRequest
     *
     * @return GetAccountResponse GetAccountResponse
     */
    public function getAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountWithOptions($request, $runtime);
    }

    /**
     * After you call the [CheckAccountDelete](~~448542~~) operation to perform a member deletion check, you can call the GetAccountDeletionCheckResult operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
     *   * This topic provides an example on how to call the API operation to query the result of the deletion check for the member whose ID is `179855839641****`. The response shows that the member does not meet deletion requirements.
     *   *
     * @param GetAccountDeletionCheckResultRequest $request GetAccountDeletionCheckResultRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountDeletionCheckResultResponse GetAccountDeletionCheckResultResponse
     */
    public function getAccountDeletionCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountDeletionCheckResult',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountDeletionCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you call the [CheckAccountDelete](~~448542~~) operation to perform a member deletion check, you can call the GetAccountDeletionCheckResult operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
     *   * This topic provides an example on how to call the API operation to query the result of the deletion check for the member whose ID is `179855839641****`. The response shows that the member does not meet deletion requirements.
     *   *
     * @param GetAccountDeletionCheckResultRequest $request GetAccountDeletionCheckResultRequest
     *
     * @return GetAccountDeletionCheckResultResponse GetAccountDeletionCheckResultResponse
     */
    public function getAccountDeletionCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountDeletionCheckResultWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the deletion status of the member whose Alibaba Cloud account ID is `169946124551****`. The response shows that the member is deleted.
     *   *
     * @param GetAccountDeletionStatusRequest $request GetAccountDeletionStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountDeletionStatusResponse GetAccountDeletionStatusResponse
     */
    public function getAccountDeletionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountDeletionStatus',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountDeletionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the deletion status of the member whose Alibaba Cloud account ID is `169946124551****`. The response shows that the member is deleted.
     *   *
     * @param GetAccountDeletionStatusRequest $request GetAccountDeletionStatusRequest
     *
     * @return GetAccountDeletionStatusResponse GetAccountDeletionStatusResponse
     */
    public function getAccountDeletionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountDeletionStatusWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the details of the access control policy whose ID is `cp-SImPt8GCEwiq****`.
     *   *
     * @param GetControlPolicyRequest $request GetControlPolicyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetControlPolicyResponse GetControlPolicyResponse
     */
    public function getControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the details of the access control policy whose ID is `cp-SImPt8GCEwiq****`.
     *   *
     * @param GetControlPolicyRequest $request GetControlPolicyRequest
     *
     * @return GetControlPolicyResponse GetControlPolicyResponse
     */
    public function getControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlPolicyWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetControlPolicyEnablementStatus',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetControlPolicyEnablementStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlPolicyEnablementStatusWithOptions($runtime);
    }

    /**
     * In this example, the information of the folder `fd-Jyl5U7****` is queried.
     *   *
     * @param GetFolderRequest $request GetFolderRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFolderResponse GetFolderResponse
     */
    public function getFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFolder',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFolderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the information of the folder `fd-Jyl5U7****` is queried.
     *   *
     * @param GetFolderRequest $request GetFolderRequest
     *
     * @return GetFolderResponse GetFolderResponse
     */
    public function getFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFolderWithOptions($request, $runtime);
    }

    /**
     * In this example, the information of the invitation whose ID is `h-ycm4rp****` is queried.
     *   *
     * @param GetHandshakeRequest $request GetHandshakeRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHandshakeResponse GetHandshakeResponse
     */
    public function getHandshakeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->handshakeId)) {
            $query['HandshakeId'] = $request->handshakeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHandshake',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHandshakeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the information of the invitation whose ID is `h-ycm4rp****` is queried.
     *   *
     * @param GetHandshakeRequest $request GetHandshakeRequest
     *
     * @return GetHandshakeResponse GetHandshakeResponse
     */
    public function getHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHandshakeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPayerForAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPayerForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetPolicyVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPolicyVersion',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * This topic provides an example on how to use a management account to call the API operation to query the information of the resource directory that is enabled by using the management account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceDirectoryResponse GetResourceDirectoryResponse
     */
    public function getResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetResourceDirectory',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to use a management account to call the API operation to query the information of the resource directory that is enabled by using the management account.
     *   *
     * @return GetResourceDirectoryResponse GetResourceDirectoryResponse
     */
    public function getResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryWithOptions($runtime);
    }

    /**
     * For more information about common request parameters, see [Common parameters](~~159973~~).
     *   *
     * @param GetResourceGroupRequest $request GetResourceGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupResponse GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroup',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about common request parameters, see [Common parameters](~~159973~~).
     *   *
     * @param GetResourceGroupRequest $request GetResourceGroupRequest
     *
     * @return GetResourceGroupResponse GetResourceGroupResponse
     */
    public function getResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRole',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetServiceLinkedRoleDeletionStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetServiceLinkedRoleDeletionStatusResponse
     */
    public function getServiceLinkedRoleDeletionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletionTaskId)) {
            $query['DeletionTaskId'] = $request->deletionTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceLinkedRoleDeletionStatus',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceLinkedRoleDeletionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * >
     *   * *   An account can be used to enable a resource directory only after it passes enterprise real-name verification. An account that only passed individual real-name verification cannot be used to enable a resource directory.
     *   * *   We recommend that you only use the enterprise management account as the administrator of the resource directory. Do not use the enterprise management account to purchase cloud resources.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return InitResourceDirectoryResponse InitResourceDirectoryResponse
     */
    public function initResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'InitResourceDirectory',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   An account can be used to enable a resource directory only after it passes enterprise real-name verification. An account that only passed individual real-name verification cannot be used to enable a resource directory.
     *   * *   We recommend that you only use the enterprise management account as the administrator of the resource directory. Do not use the enterprise management account to purchase cloud resources.
     *   *
     * @return InitResourceDirectoryResponse InitResourceDirectoryResponse
     */
    public function initResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initResourceDirectoryWithOptions($runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to invite the account `someone@example.com` to join a resource directory.
     *   *
     * @param InviteAccountToResourceDirectoryRequest $request InviteAccountToResourceDirectoryRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return InviteAccountToResourceDirectoryResponse InviteAccountToResourceDirectoryResponse
     */
    public function inviteAccountToResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetEntity)) {
            $query['TargetEntity'] = $request->targetEntity;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InviteAccountToResourceDirectory',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InviteAccountToResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to invite the account `someone@example.com` to join a resource directory.
     *   *
     * @param InviteAccountToResourceDirectoryRequest $request InviteAccountToResourceDirectoryRequest
     *
     * @return InviteAccountToResourceDirectoryResponse InviteAccountToResourceDirectoryResponse
     */
    public function inviteAccountToResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteAccountToResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * You can use only the management account of a resource directory or a delegated administrator account of a trusted service to call this operation.
     *   *
     * @param ListAccountsRequest $request ListAccountsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountsResponse ListAccountsResponse
     */
    public function listAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccounts',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use only the management account of a resource directory or a delegated administrator account of a trusted service to call this operation.
     *   *
     * @param ListAccountsRequest $request ListAccountsRequest
     *
     * @return ListAccountsResponse ListAccountsResponse
     */
    public function listAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->queryKeyword)) {
            $query['QueryKeyword'] = $request->queryKeyword;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccountsForParent',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountsForParentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListAncestorsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAncestorsResponse
     */
    public function listAncestorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->childId)) {
            $query['ChildId'] = $request->childId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAncestors',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAncestorsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return ListAssociatedTransferSettingResponse
     */
    public function listAssociatedTransferSettingWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListAssociatedTransferSetting',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAssociatedTransferSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListAssociatedTransferSettingResponse
     */
    public function listAssociatedTransferSetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssociatedTransferSettingWithOptions($runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the system access control policies within a resource directory. The response shows that the resource directory has only one system access control policy. The policy is named `FullAliyunAccess`.
     *   *
     * @param ListControlPoliciesRequest $request ListControlPoliciesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListControlPoliciesResponse ListControlPoliciesResponse
     */
    public function listControlPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListControlPolicies',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListControlPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the system access control policies within a resource directory. The response shows that the resource directory has only one system access control policy. The policy is named `FullAliyunAccess`.
     *   *
     * @param ListControlPoliciesRequest $request ListControlPoliciesRequest
     *
     * @return ListControlPoliciesResponse ListControlPoliciesResponse
     */
    public function listControlPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listControlPoliciesWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the access control policies that are attached to the folder `fd-ZDNPiT****`.
     *   *
     * @param ListControlPolicyAttachmentsForTargetRequest $request ListControlPolicyAttachmentsForTargetRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListControlPolicyAttachmentsForTargetResponse ListControlPolicyAttachmentsForTargetResponse
     */
    public function listControlPolicyAttachmentsForTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListControlPolicyAttachmentsForTarget',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListControlPolicyAttachmentsForTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the access control policies that are attached to the folder `fd-ZDNPiT****`.
     *   *
     * @param ListControlPolicyAttachmentsForTargetRequest $request ListControlPolicyAttachmentsForTargetRequest
     *
     * @return ListControlPolicyAttachmentsForTargetResponse ListControlPolicyAttachmentsForTargetResponse
     */
    public function listControlPolicyAttachmentsForTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listControlPolicyAttachmentsForTargetWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query all delegated administrator accounts in a resource directory. The response shows that two delegated administrator accounts for Cloud Firewall exist in the resource directory.
     *   *
     * @param ListDelegatedAdministratorsRequest $request ListDelegatedAdministratorsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDelegatedAdministratorsResponse ListDelegatedAdministratorsResponse
     */
    public function listDelegatedAdministratorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->servicePrincipal)) {
            $query['ServicePrincipal'] = $request->servicePrincipal;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDelegatedAdministrators',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDelegatedAdministratorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query all delegated administrator accounts in a resource directory. The response shows that two delegated administrator accounts for Cloud Firewall exist in the resource directory.
     *   *
     * @param ListDelegatedAdministratorsRequest $request ListDelegatedAdministratorsRequest
     *
     * @return ListDelegatedAdministratorsResponse ListDelegatedAdministratorsResponse
     */
    public function listDelegatedAdministrators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDelegatedAdministratorsWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the trusted services for which the member `138660628348****` is specified as a delegated administrator account. The response shows that the member is specified as a delegated administrator account of Cloud Firewall.
     *   *
     * @param ListDelegatedServicesForAccountRequest $request ListDelegatedServicesForAccountRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDelegatedServicesForAccountResponse ListDelegatedServicesForAccountResponse
     */
    public function listDelegatedServicesForAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDelegatedServicesForAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDelegatedServicesForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the trusted services for which the member `138660628348****` is specified as a delegated administrator account. The response shows that the member is specified as a delegated administrator account of Cloud Firewall.
     *   *
     * @param ListDelegatedServicesForAccountRequest $request ListDelegatedServicesForAccountRequest
     *
     * @return ListDelegatedServicesForAccountResponse ListDelegatedServicesForAccountResponse
     */
    public function listDelegatedServicesForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDelegatedServicesForAccountWithOptions($request, $runtime);
    }

    /**
     * >  You can view the information of only the first-level subfolders of a folder.
     *   *
     * @param ListFoldersForParentRequest $request ListFoldersForParentRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFoldersForParentResponse ListFoldersForParentResponse
     */
    public function listFoldersForParentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->queryKeyword)) {
            $query['QueryKeyword'] = $request->queryKeyword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFoldersForParent',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFoldersForParentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can view the information of only the first-level subfolders of a folder.
     *   *
     * @param ListFoldersForParentRequest $request ListFoldersForParentRequest
     *
     * @return ListFoldersForParentResponse ListFoldersForParentResponse
     */
    public function listFoldersForParent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoldersForParentWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the invitations that are associated with the management account `172841235500****`. The response shows that two invitations are associated with the management account.
     *   *
     * @param ListHandshakesForAccountRequest $request ListHandshakesForAccountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHandshakesForAccountResponse ListHandshakesForAccountResponse
     */
    public function listHandshakesForAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHandshakesForAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHandshakesForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the invitations that are associated with the management account `172841235500****`. The response shows that two invitations are associated with the management account.
     *   *
     * @param ListHandshakesForAccountRequest $request ListHandshakesForAccountRequest
     *
     * @return ListHandshakesForAccountResponse ListHandshakesForAccountResponse
     */
    public function listHandshakesForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHandshakesForAccountWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHandshakesForResourceDirectory',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHandshakesForResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicies',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can view the following information:
     *   * *   Policy attachment records under an Alibaba Cloud account or a resource group
     *   * *   Policies attached to RAM users, RAM user groups, or RAM roles
     *   * *   RAM users, RAM user groups, or RAM roles to which policies are attached under an Alibaba Cloud account or a resource group.
     *   *
     * @param ListPolicyAttachmentsRequest $request ListPolicyAttachmentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPolicyAttachmentsResponse ListPolicyAttachmentsResponse
     */
    public function listPolicyAttachmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->principalType)) {
            $query['PrincipalType'] = $request->principalType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicyAttachments',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicyAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can view the following information:
     *   * *   Policy attachment records under an Alibaba Cloud account or a resource group
     *   * *   Policies attached to RAM users, RAM user groups, or RAM roles
     *   * *   RAM users, RAM user groups, or RAM roles to which policies are attached under an Alibaba Cloud account or a resource group.
     *   *
     * @param ListPolicyAttachmentsRequest $request ListPolicyAttachmentsRequest
     *
     * @return ListPolicyAttachmentsResponse ListPolicyAttachmentsResponse
     */
    public function listPolicyAttachments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPolicyAttachmentsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyType)) {
            $query['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPolicyVersions',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPolicyVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can call this API operation to query all resource groups within the current account. You can also call this API operation to query a specific resource group based on the status, ID, identifier, or display name of the resource group.
     *   * This topic provides an example on how to call the API operation to query the basic information about the resource groups `rg-1hSBH2****` and `rg-9gLOoK****` within the current account.
     *   *
     * @param ListResourceGroupsRequest $request ListResourceGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceGroupsResponse ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->includeTags)) {
            $query['IncludeTags'] = $request->includeTags;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceGroups',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this API operation to query all resource groups within the current account. You can also call this API operation to query a specific resource group based on the status, ID, identifier, or display name of the resource group.
     *   * This topic provides an example on how to call the API operation to query the basic information about the resource groups `rg-1hSBH2****` and `rg-9gLOoK****` within the current account.
     *   *
     * @param ListResourceGroupsRequest $request ListResourceGroupsRequest
     *
     * @return ListResourceGroupsResponse ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * >  You can use a RAM role that is not associated with a session policy to call this API operation.
     *   * This topic provides an example on how to call the API operation to query resources that can be accessed by the current account in resource groups. The response shows that the current account can access only the Elastic Compute Service (ECS) instance `i-23v38****` in the resource group `rg-uPJpP****`.
     *   *
     * @param ListResourcesRequest $request ListResourcesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can use a RAM role that is not associated with a session policy to call this API operation.
     *   * This topic provides an example on how to call the API operation to query resources that can be accessed by the current account in resource groups. The response shows that the current account can access only the Elastic Compute Service (ECS) instance `i-23v38****` in the resource group `rg-uPJpP****`.
     *   *
     * @param ListResourcesRequest $request ListResourcesRequest
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * This topic provides an example on how to call the API operation to query tag keys. The response shows that the custom tag key team exists.
     *   *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyFilter)) {
            $query['KeyFilter'] = $request->keyFilter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2020-03-31',
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
     * This topic provides an example on how to call the API operation to query tag keys. The response shows that the custom tag key team exists.
     *   *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the tags that are added to the resource group with an ID of `rg-aekz6bre2uq****`. The response shows that only the `k1:v1` tag is added to the resource group.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
            'version'     => '2020-03-31',
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
     * This topic provides an example on how to call the API operation to query the tags that are added to the resource group with an ID of `rg-aekz6bre2uq****`. The response shows that only the `k1:v1` tag is added to the resource group.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to query the tag values of the tag key k1. The response shows that the tag value of the tag key k1 is v1.
     *   *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->valueFilter)) {
            $query['ValueFilter'] = $request->valueFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to query the tag values of the tag key k1. The response shows that the tag value of the tag key k1 is v1.
     *   *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * In this example, the folders or member accounts to which the control policy `cp-jExXAqIYkwHN****` is attached are queried. The returned result shows that the control policy is attached to the folder `fd-ZDNPiT****`.
     *   *
     * @param ListTargetAttachmentsForControlPolicyRequest $request ListTargetAttachmentsForControlPolicyRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTargetAttachmentsForControlPolicyResponse ListTargetAttachmentsForControlPolicyResponse
     */
    public function listTargetAttachmentsForControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTargetAttachmentsForControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTargetAttachmentsForControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the folders or member accounts to which the control policy `cp-jExXAqIYkwHN****` is attached are queried. The returned result shows that the control policy is attached to the folder `fd-ZDNPiT****`.
     *   *
     * @param ListTargetAttachmentsForControlPolicyRequest $request ListTargetAttachmentsForControlPolicyRequest
     *
     * @return ListTargetAttachmentsForControlPolicyResponse ListTargetAttachmentsForControlPolicyResponse
     */
    public function listTargetAttachmentsForControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTargetAttachmentsForControlPolicyWithOptions($request, $runtime);
    }

    /**
     * >  Only an enterprise management account or delegated administrator account can be used to call this operation.
     *   * In this example, the trusted services that are enabled within an enterprise management account are queried. The returned result shows that the trusted services Cloud Config and ActionTrail are enabled within the enterprise management account.
     *   *
     * @param ListTrustedServiceStatusRequest $request ListTrustedServiceStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTrustedServiceStatusResponse ListTrustedServiceStatusResponse
     */
    public function listTrustedServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adminAccountId)) {
            $query['AdminAccountId'] = $request->adminAccountId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrustedServiceStatus',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrustedServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  Only an enterprise management account or delegated administrator account can be used to call this operation.
     *   * In this example, the trusted services that are enabled within an enterprise management account are queried. The returned result shows that the trusted services Cloud Config and ActionTrail are enabled within the enterprise management account.
     *   *
     * @param ListTrustedServiceStatusRequest $request ListTrustedServiceStatusRequest
     *
     * @return ListTrustedServiceStatusResponse ListTrustedServiceStatusResponse
     */
    public function listTrustedServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrustedServiceStatusWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->destinationFolderId)) {
            $query['DestinationFolderId'] = $request->destinationFolderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * For more information about Alibaba Cloud services whose resources can be moved between resource groups, see the **Supported by the API** column in [Alibaba Cloud services that support resource groups](~~94479~~).
     *   * In this example, two virtual private clouds (VPCs) `vpc-bp1sig0mjktx5ewx1****` and `vpc-bp1visxm225pv49dz****` that reside in different regions and belong to different resource groups are moved to the resource group `rg-aekzmeobk5w****`.
     *   *
     * @param MoveResourcesRequest $request MoveResourcesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourcesResponse MoveResourcesResponse
     */
    public function moveResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResources',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For more information about Alibaba Cloud services whose resources can be moved between resource groups, see the **Supported by the API** column in [Alibaba Cloud services that support resource groups](~~94479~~).
     *   * In this example, two virtual private clouds (VPCs) `vpc-bp1sig0mjktx5ewx1****` and `vpc-bp1visxm225pv49dz****` that reside in different regions and belong to different resource groups are moved to the resource group `rg-aekzmeobk5w****`.
     *   *
     * @param MoveResourcesRequest $request MoveResourcesRequest
     *
     * @return MoveResourcesResponse MoveResourcesResponse
     */
    public function moveResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourcesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PromoteResourceAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PromoteResourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory.
     *   * When you call this operation, you must take note of the following limits:
     *   * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](~~208133~~).
     *   * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     *   * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
     *   * This topic provides an example on how to call the API operation to specify the member `181761095690****` as a delegated administrator account of Cloud Firewall.
     *   *
     * @param RegisterDelegatedAdministratorRequest $request RegisterDelegatedAdministratorRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterDelegatedAdministratorResponse RegisterDelegatedAdministratorResponse
     */
    public function registerDelegatedAdministratorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->servicePrincipal)) {
            $query['ServicePrincipal'] = $request->servicePrincipal;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterDelegatedAdministrator',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDelegatedAdministratorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory.
     *   * When you call this operation, you must take note of the following limits:
     *   * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](~~208133~~).
     *   * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     *   * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
     *   * This topic provides an example on how to call the API operation to specify the member `181761095690****` as a delegated administrator account of Cloud Firewall.
     *   *
     * @param RegisterDelegatedAdministratorRequest $request RegisterDelegatedAdministratorRequest
     *
     * @return RegisterDelegatedAdministratorResponse RegisterDelegatedAdministratorResponse
     */
    public function registerDelegatedAdministrator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDelegatedAdministratorWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to remove the member `177242285274****` from a resource directory.
     *   *
     * @param RemoveCloudAccountRequest $request RemoveCloudAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveCloudAccountResponse RemoveCloudAccountResponse
     */
    public function removeCloudAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveCloudAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveCloudAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic provides an example on how to call the API operation to remove the member `177242285274****` from a resource directory.
     *   *
     * @param RemoveCloudAccountRequest $request RemoveCloudAccountRequest
     *
     * @return RemoveCloudAccountResponse RemoveCloudAccountResponse
     */
    public function removeCloudAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCloudAccountWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResendCreateCloudAccountEmail',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResendCreateCloudAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ResendPromoteResourceAccountEmailRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ResendPromoteResourceAccountEmailResponse
     */
    public function resendPromoteResourceAccountEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResendPromoteResourceAccountEmail',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResendPromoteResourceAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RetryChangeAccountEmailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RetryChangeAccountEmailResponse
     */
    public function retryChangeAccountEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryChangeAccountEmail',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryChangeAccountEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     *   * In this example, a verification code is sent to the mobile phone number that you want to bind to the resource account `138660628348****`.
     *   *
     * @param SendVerificationCodeForBindSecureMobilePhoneRequest $request SendVerificationCodeForBindSecureMobilePhoneRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneResponse SendVerificationCodeForBindSecureMobilePhoneResponse
     */
    public function sendVerificationCodeForBindSecureMobilePhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->secureMobilePhone)) {
            $query['SecureMobilePhone'] = $request->secureMobilePhone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerificationCodeForBindSecureMobilePhone',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerificationCodeForBindSecureMobilePhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     *   * In this example, a verification code is sent to the mobile phone number that you want to bind to the resource account `138660628348****`.
     *   *
     * @param SendVerificationCodeForBindSecureMobilePhoneRequest $request SendVerificationCodeForBindSecureMobilePhoneRequest
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneResponse SendVerificationCodeForBindSecureMobilePhoneResponse
     */
    public function sendVerificationCodeForBindSecureMobilePhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationCodeForBindSecureMobilePhoneWithOptions($request, $runtime);
    }

    /**
     * Each Alibaba Cloud account can be used to send a maximum of 100 verification codes per day.
     *   *
     * @param SendVerificationCodeForEnableRDRequest $request SendVerificationCodeForEnableRDRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SendVerificationCodeForEnableRDResponse SendVerificationCodeForEnableRDResponse
     */
    public function sendVerificationCodeForEnableRDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->secureMobilePhone)) {
            $query['SecureMobilePhone'] = $request->secureMobilePhone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerificationCodeForEnableRD',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerificationCodeForEnableRDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Each Alibaba Cloud account can be used to send a maximum of 100 verification codes per day.
     *   *
     * @param SendVerificationCodeForEnableRDRequest $request SendVerificationCodeForEnableRDRequest
     *
     * @return SendVerificationCodeForEnableRDResponse SendVerificationCodeForEnableRDResponse
     */
    public function sendVerificationCodeForEnableRD($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationCodeForEnableRDWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultPolicyVersion',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultPolicyVersionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Members of the resource account type can be deleted only after the member deletion feature is enabled.
     *   *
     * @param SetMemberDeletionPermissionRequest $request SetMemberDeletionPermissionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetMemberDeletionPermissionResponse SetMemberDeletionPermissionResponse
     */
    public function setMemberDeletionPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetMemberDeletionPermission',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetMemberDeletionPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Members of the resource account type can be deleted only after the member deletion feature is enabled.
     *   *
     * @param SetMemberDeletionPermissionRequest $request SetMemberDeletionPermissionRequest
     *
     * @return SetMemberDeletionPermissionResponse SetMemberDeletionPermissionResponse
     */
    public function setMemberDeletionPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMemberDeletionPermissionWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to add the tag `k1:v1` to the resource group with an ID of `rg-aekz6bre2uq****`.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2020-03-31',
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
     * This topic provides an example on how to call the API operation to add the tag `k1:v1` to the resource group with an ID of `rg-aekz6bre2uq****`.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * This topic provides an example on how to call the API operation to remove the tag whose tag key is `k1` from the resource group whose ID is `rg-aek2dpwyrfr****`.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
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
            'version'     => '2020-03-31',
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
     * This topic provides an example on how to call the API operation to remove the tag whose tag key is `k1` from the resource group whose ID is `rg-aek2dpwyrfr****`.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     *   * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](~~111233~~).
     *   * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](~~209980~~).
     *   * This example provides an example on how to call the API operation to change the display name of the member `12323344****` to `admin`.
     *   *
     * @param UpdateAccountRequest $request UpdateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccountResponse UpdateAccountResponse
     */
    public function updateAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->newAccountType)) {
            $query['NewAccountType'] = $request->newAccountType;
        }
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccount',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     *   * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](~~111233~~).
     *   * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](~~209980~~).
     *   * This example provides an example on how to call the API operation to change the display name of the member `12323344****` to `admin`.
     *   *
     * @param UpdateAccountRequest $request UpdateAccountRequest
     *
     * @return UpdateAccountResponse UpdateAccountResponse
     */
    public function updateAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAssociatedTransferSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateAssociatedTransferSettingResponse
     */
    public function updateAssociatedTransferSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleSettings)) {
            $query['RuleSettings'] = $request->ruleSettings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAssociatedTransferSetting',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAssociatedTransferSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * In this example, the name of the access control policy whose ID is `cp-jExXAqIYkwHN****` is changed to `NewControlPolicy`.
     *   *
     * @param UpdateControlPolicyRequest $request UpdateControlPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateControlPolicyResponse UpdateControlPolicyResponse
     */
    public function updateControlPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newPolicyDocument)) {
            $query['NewPolicyDocument'] = $request->newPolicyDocument;
        }
        if (!Utils::isUnset($request->newPolicyName)) {
            $query['NewPolicyName'] = $request->newPolicyName;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateControlPolicy',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateControlPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the name of the access control policy whose ID is `cp-jExXAqIYkwHN****` is changed to `NewControlPolicy`.
     *   *
     * @param UpdateControlPolicyRequest $request UpdateControlPolicyRequest
     *
     * @return UpdateControlPolicyResponse UpdateControlPolicyResponse
     */
    public function updateControlPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateControlPolicyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->newFolderName)) {
            $query['NewFolderName'] = $request->newFolderName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFolder',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFolderResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * In this example, the display name of the resource group `rg-9gLOoK****` is changed to `project`.
     *   *
     * @param UpdateResourceGroupRequest $request UpdateResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceGroupResponse UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newDisplayName)) {
            $query['NewDisplayName'] = $request->newDisplayName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceGroup',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the display name of the resource group `rg-9gLOoK****` is changed to `project`.
     *   *
     * @param UpdateResourceGroupRequest $request UpdateResourceGroupRequest
     *
     * @return UpdateResourceGroupResponse UpdateResourceGroupResponse
     */
    public function updateResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupWithOptions($request, $runtime);
    }

    /**
     * In this example, the description of the RAM role `ECSAdmin` is updated to `ECS administrator`.
     *   *
     * @param UpdateRoleRequest $request UpdateRoleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRoleResponse UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newAssumeRolePolicyDocument)) {
            $query['NewAssumeRolePolicyDocument'] = $request->newAssumeRolePolicyDocument;
        }
        if (!Utils::isUnset($request->newDescription)) {
            $query['NewDescription'] = $request->newDescription;
        }
        if (!Utils::isUnset($request->newMaxSessionDuration)) {
            $query['NewMaxSessionDuration'] = $request->newMaxSessionDuration;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRole',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In this example, the description of the RAM role `ECSAdmin` is updated to `ECS administrator`.
     *   *
     * @param UpdateRoleRequest $request UpdateRoleRequest
     *
     * @return UpdateRoleResponse UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoleWithOptions($request, $runtime);
    }
}
