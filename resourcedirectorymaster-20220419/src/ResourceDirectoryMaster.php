<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AcceptHandshakeRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AcceptHandshakeResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AddMessageContactRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AddMessageContactResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AssociateMembersRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AssociateMembersResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AttachControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AttachControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\BindSecureMobilePhoneRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\BindSecureMobilePhoneResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelHandshakeRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelHandshakeResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelMessageContactUpdateRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelMessageContactUpdateResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CheckAccountDeleteRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CheckAccountDeleteResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateFolderRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateFolderResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateResourceAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateResourceAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeclineHandshakeRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeclineHandshakeResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteAccountShrinkRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteFolderRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteMessageContactRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeleteMessageContactResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeregisterDelegatedAdministratorRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeregisterDelegatedAdministratorResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DestroyResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DetachControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DetachControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DisableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DisassociateMembersRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DisassociateMembersResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\EnableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\EnableResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\EnableResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionCheckResultRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionCheckResultResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetControlPolicyEnablementStatusResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetFolderRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetFolderResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetHandshakeRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetHandshakeResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetPayerForAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetPayerForAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\InviteAccountToResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\InviteAccountToResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAccountsForParentRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAccountsForParentResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAccountsRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAccountsResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAncestorsRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListAncestorsResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPoliciesRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPoliciesResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPolicyAttachmentsForTargetRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPolicyAttachmentsForTargetResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedAdministratorsRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedAdministratorsResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedServicesForAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedServicesForAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListFoldersForParentRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListFoldersForParentResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListHandshakesForAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListHandshakesForAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListHandshakesForResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListHandshakesForResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactsRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactsResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactVerificationsRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactVerificationsResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTargetAttachmentsForControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTargetAttachmentsForControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\MoveAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\MoveAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\PrecheckForConsolidatedBillingAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\PrecheckForConsolidatedBillingAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RegisterDelegatedAdministratorRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RegisterDelegatedAdministratorResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RemoveCloudAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RemoveCloudAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RetryChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RetryChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendEmailVerificationForMessageContactRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendEmailVerificationForMessageContactResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendPhoneVerificationForMessageContactRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendPhoneVerificationForMessageContactResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendVerificationCodeForBindSecureMobilePhoneRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendVerificationCodeForBindSecureMobilePhoneResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendVerificationCodeForEnableRDRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SendVerificationCodeForEnableRDResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SetMemberDeletionPermissionRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SetMemberDeletionPermissionResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SetMemberDisplayNameSyncStatusRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\SetMemberDisplayNameSyncStatusResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\TagResourcesResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateMessageContactRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateMessageContactResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdatePayerForAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdatePayerForAccountResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ResourceDirectoryMaster extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resourcedirectorymaster', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
            'version' => '2022-04-19',
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
     * Adds a contact.
     *
     * @param request - AddMessageContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMessageContactResponse
     *
     * @param AddMessageContactRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddMessageContactResponse
     */
    public function addMessageContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->emailAddress) {
            @$query['EmailAddress'] = $request->emailAddress;
        }

        if (null !== $request->messageTypes) {
            @$query['MessageTypes'] = $request->messageTypes;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMessageContact',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a contact.
     *
     * @param request - AddMessageContactRequest
     *
     * @returns AddMessageContactResponse
     *
     * @param AddMessageContactRequest $request
     *
     * @return AddMessageContactResponse
     */
    public function addMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMessageContactWithOptions($request, $runtime);
    }

    /**
     * Binds a contact to a resource directory, folder, or member.
     *
     * @param request - AssociateMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateMembersResponse
     *
     * @param AssociateMembersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AssociateMembersResponse
     */
    public function associateMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->members) {
            @$query['Members'] = $request->members;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateMembers',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a contact to a resource directory, folder, or member.
     *
     * @param request - AssociateMembersRequest
     *
     * @returns AssociateMembersResponse
     *
     * @param AssociateMembersRequest $request
     *
     * @return AssociateMembersResponse
     */
    public function associateMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateMembersWithOptions($request, $runtime);
    }

    /**
     * Attaches an access control policy.
     *
     * @remarks
     * After you attach a custom access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     * A maximum of 10 access control policies can be attached to a folder or member.
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
            'version' => '2022-04-19',
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
     * Attaches an access control policy.
     *
     * @remarks
     * After you attach a custom access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     * A maximum of 10 access control policies can be attached to a folder or member.
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
     * Binds a mobile phone number to a member of the resource account type in a resource directory for security purposes.
     *
     * @remarks
     * You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
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
            'version' => '2022-04-19',
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
     * Binds a mobile phone number to a member of the resource account type in a resource directory for security purposes.
     *
     * @remarks
     * You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
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
     * Cancels the email address change of a member.
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
            'version' => '2022-04-19',
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
     * Cancels the email address change of a member.
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
     * Cancels an invitation.
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
            'version' => '2022-04-19',
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
     * Cancels the update of the mobile phone number or email address of a contact.
     *
     * @param request - CancelMessageContactUpdateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelMessageContactUpdateResponse
     *
     * @param CancelMessageContactUpdateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CancelMessageContactUpdateResponse
     */
    public function cancelMessageContactUpdateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->emailAddress) {
            @$query['EmailAddress'] = $request->emailAddress;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelMessageContactUpdate',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelMessageContactUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the update of the mobile phone number or email address of a contact.
     *
     * @param request - CancelMessageContactUpdateRequest
     *
     * @returns CancelMessageContactUpdateResponse
     *
     * @param CancelMessageContactUpdateRequest $request
     *
     * @return CancelMessageContactUpdateResponse
     */
    public function cancelMessageContactUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelMessageContactUpdateWithOptions($request, $runtime);
    }

    /**
     * Changes the email address that is bound to a member.
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
            'version' => '2022-04-19',
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
     * Changes the email address that is bound to a member.
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
            'version' => '2022-04-19',
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
     * Creates a custom access control policy.
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateControlPolicy',
            'version' => '2022-04-19',
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
     * Creates a custom access control policy.
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
     * Creates a folder.
     *
     * @remarks
     * A maximum of five levels of folders can be created under the Root folder.
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFolder',
            'version' => '2022-04-19',
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
     * Creates a folder.
     *
     * @remarks
     * A maximum of five levels of folders can be created under the Root folder.
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
     * Creates a member of the resource account type.
     *
     * @remarks
     * A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     * This topic provides an example on how to call the API operation to create a member in the `fd-r23M55****` folder. The display name of the member is `Dev`, and the prefix for the Alibaba Cloud account name of the member is `alice`.
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

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
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
            'version' => '2022-04-19',
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
     * This topic provides an example on how to call the API operation to create a member in the `fd-r23M55****` folder. The display name of the member is `Dev`, and the prefix for the Alibaba Cloud account name of the member is `alice`.
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
            'version' => '2022-04-19',
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
     * Deletes a member of the resource account type.
     *
     * @remarks
     * Before you delete a member, we recommend that you call the [CheckAccountDelete](~~CheckAccountDelete~~) and [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operations to check whether the member meets deletion requirements. You can call the DeleteAccount operation to delete only members that meet the deletion requirements.
     * After you submit a deletion request for a member, you can call the [GetAccountDeletionStatus](~~GetAccountDeletionStatus~~) operation to query the deletion status of the member. After a member is deleted, the resources and data within the member are deleted, and you can no longer use the member to log on to the Alibaba Cloud Management Console. In addition, the member cannot be recovered. Proceed with caution. For more information about how to delete a member, see [Delete a member of the resource account type](https://help.aliyun.com/document_detail/446078.html).
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
            'version' => '2022-04-19',
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
     * Deletes a member of the resource account type.
     *
     * @remarks
     * Before you delete a member, we recommend that you call the [CheckAccountDelete](~~CheckAccountDelete~~) and [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operations to check whether the member meets deletion requirements. You can call the DeleteAccount operation to delete only members that meet the deletion requirements.
     * After you submit a deletion request for a member, you can call the [GetAccountDeletionStatus](~~GetAccountDeletionStatus~~) operation to query the deletion status of the member. After a member is deleted, the resources and data within the member are deleted, and you can no longer use the member to log on to the Alibaba Cloud Management Console. In addition, the member cannot be recovered. Proceed with caution. For more information about how to delete a member, see [Delete a member of the resource account type](https://help.aliyun.com/document_detail/446078.html).
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
     * Deletes a custom access control policy.
     *
     * @remarks
     * If you want to delete a custom access control policy that is attached to folders or members, you must call the [DetachControlPolicy](~~DetachControlPolicy~~) operation to detach the policy before you delete it.
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
            'version' => '2022-04-19',
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
     * Deletes a custom access control policy.
     *
     * @remarks
     * If you want to delete a custom access control policy that is attached to folders or members, you must call the [DetachControlPolicy](~~DetachControlPolicy~~) operation to detach the policy before you delete it.
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
     * Before you delete a folder, you must make sure that the folder does not contain members or subfolders.
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
            'version' => '2022-04-19',
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
     * Before you delete a folder, you must make sure that the folder does not contain members or subfolders.
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
     * Deletes a contact.
     *
     * @param request - DeleteMessageContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMessageContactResponse
     *
     * @param DeleteMessageContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMessageContactResponse
     */
    public function deleteMessageContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->retainContactInMembers) {
            @$query['RetainContactInMembers'] = $request->retainContactInMembers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMessageContact',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a contact.
     *
     * @param request - DeleteMessageContactRequest
     *
     * @returns DeleteMessageContactResponse
     *
     * @param DeleteMessageContactRequest $request
     *
     * @return DeleteMessageContactResponse
     */
    public function deleteMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageContactWithOptions($request, $runtime);
    }

    /**
     * Removes a delegated administrator account for a trusted service.
     *
     * @remarks
     * If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
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
            'version' => '2022-04-19',
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
     * Removes a delegated administrator account for a trusted service.
     *
     * @remarks
     * If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
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
     * Disables a resource directory. This operation cannot be undone. Therefore, proceed with caution.
     *
     * @remarks
     * Before you disable a resource directory, you must make sure that the following requirements are met:
     * *   All members of the cloud account type in the resource directory are removed. You can call the [RemoveCloudAccount](~~RemoveCloudAccount~~) operation to remove a member of the cloud account type.
     * *   All folders except the Root folder are deleted from the resource directory. You can call the [DeleteFolder](~~DeleteFolder~~) operation to delete a folder.
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
            'version' => '2022-04-19',
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
     * Disables a resource directory. This operation cannot be undone. Therefore, proceed with caution.
     *
     * @remarks
     * Before you disable a resource directory, you must make sure that the following requirements are met:
     * *   All members of the cloud account type in the resource directory are removed. You can call the [RemoveCloudAccount](~~RemoveCloudAccount~~) operation to remove a member of the cloud account type.
     * *   All folders except the Root folder are deleted from the resource directory. You can call the [DeleteFolder](~~DeleteFolder~~) operation to delete a folder.
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
     * Detaches an access control policy.
     *
     * @remarks
     * After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
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
            'version' => '2022-04-19',
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
     * Detaches an access control policy.
     *
     * @remarks
     * After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
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
     * Disables the Control Policy feature.
     *
     * @remarks
     * After you disable the Control Policy feature, the system automatically detaches all access control policies that are attached to folders and members. The system does not delete these access control policies, but you cannot attach them to folders or members again.
     * > If you disable the Control Policy feature, the permissions of all folders and members in your resource directory are affected. Therefore, proceed with caution.
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
            'version' => '2022-04-19',
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
     * Disables the Control Policy feature.
     *
     * @remarks
     * After you disable the Control Policy feature, the system automatically detaches all access control policies that are attached to folders and members. The system does not delete these access control policies, but you cannot attach them to folders or members again.
     * > If you disable the Control Policy feature, the permissions of all folders and members in your resource directory are affected. Therefore, proceed with caution.
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
     * Unbinds a contact from a resource directory, folder, or member.
     *
     * @param request - DisassociateMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateMembersResponse
     *
     * @param DisassociateMembersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisassociateMembersResponse
     */
    public function disassociateMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->members) {
            @$query['Members'] = $request->members;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisassociateMembers',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a contact from a resource directory, folder, or member.
     *
     * @param request - DisassociateMembersRequest
     *
     * @returns DisassociateMembersResponse
     *
     * @param DisassociateMembersRequest $request
     *
     * @return DisassociateMembersResponse
     */
    public function disassociateMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateMembersWithOptions($request, $runtime);
    }

    /**
     * Enables the Control Policy feature.
     *
     * @remarks
     * The Control Policy feature provided by the Resource Directory service allows you to manage the permission boundaries of the folders or members in your resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](https://help.aliyun.com/document_detail/178671.html).
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
            'version' => '2022-04-19',
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
     * The Control Policy feature provided by the Resource Directory service allows you to manage the permission boundaries of the folders or members in your resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](https://help.aliyun.com/document_detail/178671.html).
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
     * You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
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
        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

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
            'version' => '2022-04-19',
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
     * You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
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
     * Queries the information of a member.
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
            'version' => '2022-04-19',
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
     * Queries the information of a member.
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
     * After you call the [CheckAccountDelete](~~CheckAccountDelete~~) operation to perform a member deletion check, you can call the [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
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
            'version' => '2022-04-19',
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
     * After you call the [CheckAccountDelete](~~CheckAccountDelete~~) operation to perform a member deletion check, you can call the [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
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
     * Queries the deletion status of a member.
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
            'version' => '2022-04-19',
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
     * Queries the deletion status of a member.
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
     * Queries the details of an access control policy.
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
            'version' => '2022-04-19',
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
     * Queries the details of an access control policy.
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
            'version' => '2022-04-19',
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
     * Queries the information about a folder.
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
            'version' => '2022-04-19',
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
     * Queries the information about a folder.
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
            'version' => '2022-04-19',
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
     * Queries the information about a contact.
     *
     * @param request - GetMessageContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessageContactResponse
     *
     * @param GetMessageContactRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMessageContactResponse
     */
    public function getMessageContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMessageContact',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a contact.
     *
     * @param request - GetMessageContactRequest
     *
     * @returns GetMessageContactResponse
     *
     * @param GetMessageContactRequest $request
     *
     * @return GetMessageContactResponse
     */
    public function getMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageContactWithOptions($request, $runtime);
    }

    /**
     * Queries the deletion status of a contact.
     *
     * @param request - GetMessageContactDeletionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessageContactDeletionStatusResponse
     *
     * @param GetMessageContactDeletionStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetMessageContactDeletionStatusResponse
     */
    public function getMessageContactDeletionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMessageContactDeletionStatus',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMessageContactDeletionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deletion status of a contact.
     *
     * @param request - GetMessageContactDeletionStatusRequest
     *
     * @returns GetMessageContactDeletionStatusResponse
     *
     * @param GetMessageContactDeletionStatusRequest $request
     *
     * @return GetMessageContactDeletionStatusResponse
     */
    public function getMessageContactDeletionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageContactDeletionStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information of a billing account.
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
            'version' => '2022-04-19',
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
     * Queries the information of a billing account.
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
     * Queries the information of a resource directory. If you use a management account to call this API operation, the system returns the information of the resource directory that is enabled by using the management account. If you use a member to call this operation, the system returns the information of.
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
            'version' => '2022-04-19',
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
     * Invites an account to join a resource directory.
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

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
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
            'version' => '2022-04-19',
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
     * Queries a list of members in a resource directory.
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

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'ListAccounts',
            'version' => '2022-04-19',
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
     * Queries a list of members in a resource directory.
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
            'version' => '2022-04-19',
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
     * Queries the information of all the parent folders of a specified folder.
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
            'version' => '2022-04-19',
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
     * Queries the information of all the parent folders of a specified folder.
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
     * Queries access control policies.
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListControlPolicies',
            'version' => '2022-04-19',
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
     * Queries the access control policies that are attached to a folder or member.
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
            'version' => '2022-04-19',
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
     * Queries the access control policies that are attached to a folder or member.
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
     * Queries delegated administrator accounts.
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
            'version' => '2022-04-19',
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
     * Queries delegated administrator accounts.
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
     * Queries the trusted services for which a member is specified as a delegated administrator account.
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
            'version' => '2022-04-19',
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
     * Queries the trusted services for which a member is specified as a delegated administrator account.
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
     * Queries the information of all subfolders of a folder.
     *
     * @remarks
     * You can call this API operation to view the information of only the first-level subfolders of a folder.
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFoldersForParent',
            'version' => '2022-04-19',
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
     * Queries the information of all subfolders of a folder.
     *
     * @remarks
     * You can call this API operation to view the information of only the first-level subfolders of a folder.
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
            'version' => '2022-04-19',
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
            'version' => '2022-04-19',
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
     * Queries the mobile phone number or email address to be verified for a contact.
     *
     * @param request - ListMessageContactVerificationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMessageContactVerificationsResponse
     *
     * @param ListMessageContactVerificationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListMessageContactVerificationsResponse
     */
    public function listMessageContactVerificationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
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
            'action' => 'ListMessageContactVerifications',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMessageContactVerificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the mobile phone number or email address to be verified for a contact.
     *
     * @param request - ListMessageContactVerificationsRequest
     *
     * @returns ListMessageContactVerificationsResponse
     *
     * @param ListMessageContactVerificationsRequest $request
     *
     * @return ListMessageContactVerificationsResponse
     */
    public function listMessageContactVerifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageContactVerificationsWithOptions($request, $runtime);
    }

    /**
     * Queries contacts.
     *
     * @param request - ListMessageContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMessageContactsResponse
     *
     * @param ListMessageContactsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMessageContactsResponse
     */
    public function listMessageContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->member) {
            @$query['Member'] = $request->member;
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
            'action' => 'ListMessageContacts',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMessageContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries contacts.
     *
     * @param request - ListMessageContactsRequest
     *
     * @returns ListMessageContactsResponse
     *
     * @param ListMessageContactsRequest $request
     *
     * @return ListMessageContactsResponse
     */
    public function listMessageContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageContactsWithOptions($request, $runtime);
    }

    /**
     * Queries tag keys.
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
            'version' => '2022-04-19',
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
     * Queries tag keys.
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
     * Queries the tags that are added to the members in a resource directory.
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
            'version' => '2022-04-19',
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
     * Queries the tags that are added to the members in a resource directory.
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
     * Queries the tag values of a tag key.
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
            'version' => '2022-04-19',
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
     * Queries the tag values of a tag key.
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
     * Queries the objects to which an access control policy is attached.
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
            'version' => '2022-04-19',
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
     * Queries the objects to which an access control policy is attached.
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
     * Queries the trusted services that are enabled within a management account or delegated administrator account.
     *
     * @remarks
     * Only a management account or delegated administrator account can be used to call this operation.
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
            'version' => '2022-04-19',
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
     * Queries the trusted services that are enabled within a management account or delegated administrator account.
     *
     * @remarks
     * Only a management account or delegated administrator account can be used to call this operation.
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
     * Moves a member from a folder to another.
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
            'version' => '2022-04-19',
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
     * Moves a member from a folder to another.
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
     * Checks whether a management account or member can be used as a main financial account.
     *
     * @param request - PrecheckForConsolidatedBillingAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrecheckForConsolidatedBillingAccountResponse
     *
     * @param PrecheckForConsolidatedBillingAccountRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return PrecheckForConsolidatedBillingAccountResponse
     */
    public function precheckForConsolidatedBillingAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingAccountId) {
            @$query['BillingAccountId'] = $request->billingAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PrecheckForConsolidatedBillingAccount',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrecheckForConsolidatedBillingAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a management account or member can be used as a main financial account.
     *
     * @param request - PrecheckForConsolidatedBillingAccountRequest
     *
     * @returns PrecheckForConsolidatedBillingAccountResponse
     *
     * @param PrecheckForConsolidatedBillingAccountRequest $request
     *
     * @return PrecheckForConsolidatedBillingAccountResponse
     */
    public function precheckForConsolidatedBillingAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->precheckForConsolidatedBillingAccountWithOptions($request, $runtime);
    }

    /**
     * Specifies a member in a resource directory as a delegated administrator account of a trusted service.
     *
     * @remarks
     * The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory. When you call this operation, you must take note of the following limits:
     * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
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
            'version' => '2022-04-19',
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
     * Specifies a member in a resource directory as a delegated administrator account of a trusted service.
     *
     * @remarks
     * The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory. When you call this operation, you must take note of the following limits:
     * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
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
     * Removes a member of the cloud account type.
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
            'version' => '2022-04-19',
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
     * Removes a member of the cloud account type.
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
     * Resends a verification email for the email address change of a member.
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
            'version' => '2022-04-19',
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
     * Resends a verification email for the email address change of a member.
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
     * Sends verification information to the email address of a contact.
     *
     * @param request - SendEmailVerificationForMessageContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendEmailVerificationForMessageContactResponse
     *
     * @param SendEmailVerificationForMessageContactRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SendEmailVerificationForMessageContactResponse
     */
    public function sendEmailVerificationForMessageContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->emailAddress) {
            @$query['EmailAddress'] = $request->emailAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendEmailVerificationForMessageContact',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendEmailVerificationForMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends verification information to the email address of a contact.
     *
     * @param request - SendEmailVerificationForMessageContactRequest
     *
     * @returns SendEmailVerificationForMessageContactResponse
     *
     * @param SendEmailVerificationForMessageContactRequest $request
     *
     * @return SendEmailVerificationForMessageContactResponse
     */
    public function sendEmailVerificationForMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendEmailVerificationForMessageContactWithOptions($request, $runtime);
    }

    /**
     * Sends verification information to the mobile phone number of a contact.
     *
     * @param request - SendPhoneVerificationForMessageContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendPhoneVerificationForMessageContactResponse
     *
     * @param SendPhoneVerificationForMessageContactRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SendPhoneVerificationForMessageContactResponse
     */
    public function sendPhoneVerificationForMessageContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendPhoneVerificationForMessageContact',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendPhoneVerificationForMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends verification information to the mobile phone number of a contact.
     *
     * @param request - SendPhoneVerificationForMessageContactRequest
     *
     * @returns SendPhoneVerificationForMessageContactResponse
     *
     * @param SendPhoneVerificationForMessageContactRequest $request
     *
     * @return SendPhoneVerificationForMessageContactResponse
     */
    public function sendPhoneVerificationForMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendPhoneVerificationForMessageContactWithOptions($request, $runtime);
    }

    /**
     * Sends a verification code to the mobile phone number that you want to bind to a member of the resource account type in a resource directory for security purposes.
     *
     * @remarks
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
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
            'version' => '2022-04-19',
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
     * Sends a verification code to the mobile phone number that you want to bind to a member of the resource account type in a resource directory for security purposes.
     *
     * @remarks
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
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
     * Sends a verification code to the mobile phone number bound to a newly created account when you use the account to enable a resource directory.
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
            'version' => '2022-04-19',
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
     * Sends a verification code to the mobile phone number bound to a newly created account when you use the account to enable a resource directory.
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
     * Enables or disables the member deletion feature.
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
            'version' => '2022-04-19',
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
     * Enables or disables the member deletion feature.
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
     * Enables or disables the Member Display Name Synchronization feature.
     *
     * @param request - SetMemberDisplayNameSyncStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetMemberDisplayNameSyncStatusResponse
     *
     * @param SetMemberDisplayNameSyncStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SetMemberDisplayNameSyncStatusResponse
     */
    public function setMemberDisplayNameSyncStatusWithOptions($request, $runtime)
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
            'action' => 'SetMemberDisplayNameSyncStatus',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetMemberDisplayNameSyncStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the Member Display Name Synchronization feature.
     *
     * @param request - SetMemberDisplayNameSyncStatusRequest
     *
     * @returns SetMemberDisplayNameSyncStatusResponse
     *
     * @param SetMemberDisplayNameSyncStatusRequest $request
     *
     * @return SetMemberDisplayNameSyncStatusResponse
     */
    public function setMemberDisplayNameSyncStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMemberDisplayNameSyncStatusWithOptions($request, $runtime);
    }

    /**
     * Adds tags to the members in a resource directory.
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
            'version' => '2022-04-19',
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
     * Adds tags to the members in a resource directory.
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
     * Removes tags from the members in a resource directory.
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
            'version' => '2022-04-19',
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
     * Removes tags from the members in a resource directory.
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
     * Changes the display name of a member, or switches the type of a member.
     *
     * @remarks
     *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
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

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
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
            'version' => '2022-04-19',
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
     * Changes the display name of a member, or switches the type of a member.
     *
     * @remarks
     *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
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
     * Updates a custom access control policy.
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
            'version' => '2022-04-19',
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
     * Updates a custom access control policy.
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
     * Changes the name of a folder.
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
            'version' => '2022-04-19',
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
     * Changes the name of a folder.
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
     * Updates a contact.
     *
     * @param request - UpdateMessageContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMessageContactResponse
     *
     * @param UpdateMessageContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMessageContactResponse
     */
    public function updateMessageContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->emailAddress) {
            @$query['EmailAddress'] = $request->emailAddress;
        }

        if (null !== $request->messageTypes) {
            @$query['MessageTypes'] = $request->messageTypes;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMessageContact',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a contact.
     *
     * @param request - UpdateMessageContactRequest
     *
     * @returns UpdateMessageContactResponse
     *
     * @param UpdateMessageContactRequest $request
     *
     * @return UpdateMessageContactResponse
     */
    public function updateMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMessageContactWithOptions($request, $runtime);
    }

    /**
     * Updates the billing account of a member.
     *
     * @param request - UpdatePayerForAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePayerForAccountResponse
     *
     * @param UpdatePayerForAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePayerForAccountResponse
     */
    public function updatePayerForAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->payerAccountId) {
            @$query['PayerAccountId'] = $request->payerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePayerForAccount',
            'version' => '2022-04-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePayerForAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the billing account of a member.
     *
     * @param request - UpdatePayerForAccountRequest
     *
     * @returns UpdatePayerForAccountResponse
     *
     * @param UpdatePayerForAccountRequest $request
     *
     * @return UpdatePayerForAccountResponse
     */
    public function updatePayerForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePayerForAccountWithOptions($request, $runtime);
    }
}
