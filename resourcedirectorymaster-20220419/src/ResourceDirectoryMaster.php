<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ResourceDirectoryMaster extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Accepts an invitation.
     *  *
     * @description After an invited Alibaba Cloud account joins a resource directory, it becomes a member of the resource directory. By default, the name of the invited Alibaba Cloud account is used as the display name of the account in the resource directory.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Accepts an invitation.
     *  *
     * @description After an invited Alibaba Cloud account joins a resource directory, it becomes a member of the resource directory. By default, the name of the invited Alibaba Cloud account is used as the display name of the account in the resource directory.
     *  *
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
     * @summary Adds a contact.
     *  *
     * @param AddMessageContactRequest $request AddMessageContactRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMessageContactResponse AddMessageContactResponse
     */
    public function addMessageContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->emailAddress)) {
            $query['EmailAddress'] = $request->emailAddress;
        }
        if (!Utils::isUnset($request->messageTypes)) {
            $query['MessageTypes'] = $request->messageTypes;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMessageContact',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a contact.
     *  *
     * @param AddMessageContactRequest $request AddMessageContactRequest
     *
     * @return AddMessageContactResponse AddMessageContactResponse
     */
    public function addMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMessageContactWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a contact to a resource directory, folder, or member.
     *  *
     * @param AssociateMembersRequest $request AssociateMembersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateMembersResponse AssociateMembersResponse
     */
    public function associateMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->members)) {
            $query['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateMembers',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a contact to a resource directory, folder, or member.
     *  *
     * @param AssociateMembersRequest $request AssociateMembersRequest
     *
     * @return AssociateMembersResponse AssociateMembersResponse
     */
    public function associateMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches an access control policy.
     *  *
     * @description After you attach a custom access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     * A maximum of 10 access control policies can be attached to a folder or member.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Attaches an access control policy.
     *  *
     * @description After you attach a custom access control policy, the operations performed on resources by using members are limited by the policy. Make sure that the attached policy meets your expectations. Otherwise, your business may be affected.
     * By default, the system access control policy FullAliyunAccess is attached to each folder and member.
     * The access control policy that is attached to a folder also applies to all its subfolders and all members in the subfolders.
     * A maximum of 10 access control policies can be attached to a folder or member.
     *  *
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
     * @summary Binds a mobile phone number to a member of the resource account type in a resource directory for security purposes.
     *  *
     * @description You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Binds a mobile phone number to a member of the resource account type in a resource directory for security purposes.
     *  *
     * @description You can call this API operation only to bind a mobile phone number to a member of the resource account type. You cannot call this API operation to change the mobile phone number that is bound to a member of the resource account type.
     * To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     *  *
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
     * @summary Cancels the email address change of a member.
     *  *
     * @param CancelChangeAccountEmailRequest $request CancelChangeAccountEmailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelChangeAccountEmailResponse CancelChangeAccountEmailResponse
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
            'version'     => '2022-04-19',
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
     * @summary Cancels the email address change of a member.
     *  *
     * @param CancelChangeAccountEmailRequest $request CancelChangeAccountEmailRequest
     *
     * @return CancelChangeAccountEmailResponse CancelChangeAccountEmailResponse
     */
    public function cancelChangeAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelChangeAccountEmailWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels an invitation.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Cancels an invitation.
     *  *
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
     * @summary Cancels the update of the mobile phone number or email address of a contact.
     *  *
     * @param CancelMessageContactUpdateRequest $request CancelMessageContactUpdateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelMessageContactUpdateResponse CancelMessageContactUpdateResponse
     */
    public function cancelMessageContactUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->emailAddress)) {
            $query['EmailAddress'] = $request->emailAddress;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelMessageContactUpdate',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelMessageContactUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels the update of the mobile phone number or email address of a contact.
     *  *
     * @param CancelMessageContactUpdateRequest $request CancelMessageContactUpdateRequest
     *
     * @return CancelMessageContactUpdateResponse CancelMessageContactUpdateResponse
     */
    public function cancelMessageContactUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelMessageContactUpdateWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the email address that is bound to a member.
     *  *
     * @param ChangeAccountEmailRequest $request ChangeAccountEmailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeAccountEmailResponse ChangeAccountEmailResponse
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
            'version'     => '2022-04-19',
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
     * @summary Changes the email address that is bound to a member.
     *  *
     * @param ChangeAccountEmailRequest $request ChangeAccountEmailRequest
     *
     * @return ChangeAccountEmailResponse ChangeAccountEmailResponse
     */
    public function changeAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAccountEmailWithOptions($request, $runtime);
    }

    /**
     * @summary Performs a member deletion check.
     *  *
     * @description Before you delete a member, you must call this API operation to check whether the member can be deleted.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Performs a member deletion check.
     *  *
     * @description Before you delete a member, you must call this API operation to check whether the member can be deleted.
     *  *
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
     * @summary Creates a custom access control policy.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateControlPolicy',
            'version'     => '2022-04-19',
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
     * @summary Creates a custom access control policy.
     *  *
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
     * @summary Creates a folder.
     *  *
     * @description A maximum of five levels of folders can be created under the Root folder.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFolder',
            'version'     => '2022-04-19',
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
     * @summary Creates a folder.
     *  *
     * @description A maximum of five levels of folders can be created under the Root folder.
     *  *
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
     * @summary Creates a member of the resource account type.
     *  *
     * @description A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     * This topic provides an example on how to call the API operation to create a member in the `fd-r23M55****` folder. The display name of the member is `Dev`, and the prefix for the Alibaba Cloud account name of the member is `alice`.
     *  *
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
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
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
            'version'     => '2022-04-19',
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
     * @summary Creates a member of the resource account type.
     *  *
     * @description A member serves as a container for resources and is also an organizational unit in a resource directory. A member indicates a project or application. The resources of different members are isolated.
     * This topic provides an example on how to call the API operation to create a member in the `fd-r23M55****` folder. The display name of the member is `Dev`, and the prefix for the Alibaba Cloud account name of the member is `alice`.
     *  *
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
     * @summary Rejects an invitation.
     *  *
     * @param DeclineHandshakeRequest $request DeclineHandshakeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeclineHandshakeResponse DeclineHandshakeResponse
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
            'version'     => '2022-04-19',
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
     * @summary Rejects an invitation.
     *  *
     * @param DeclineHandshakeRequest $request DeclineHandshakeRequest
     *
     * @return DeclineHandshakeResponse DeclineHandshakeResponse
     */
    public function declineHandshake($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->declineHandshakeWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a member of the resource account type.
     *  *
     * @description Before you delete a member, we recommend that you call the [CheckAccountDelete](~~CheckAccountDelete~~) and [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operations to check whether the member meets deletion requirements. You can call the DeleteAccount operation to delete only members that meet the deletion requirements.
     * After you submit a deletion request for a member, you can call the [GetAccountDeletionStatus](~~GetAccountDeletionStatus~~) operation to query the deletion status of the member. After a member is deleted, the resources and data within the member are deleted, and you can no longer use the member to log on to the Alibaba Cloud Management Console. In addition, the member cannot be recovered. Proceed with caution. For more information about how to delete a member, see [Delete a member of the resource account type](https://help.aliyun.com/document_detail/446078.html).
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Deletes a member of the resource account type.
     *  *
     * @description Before you delete a member, we recommend that you call the [CheckAccountDelete](~~CheckAccountDelete~~) and [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operations to check whether the member meets deletion requirements. You can call the DeleteAccount operation to delete only members that meet the deletion requirements.
     * After you submit a deletion request for a member, you can call the [GetAccountDeletionStatus](~~GetAccountDeletionStatus~~) operation to query the deletion status of the member. After a member is deleted, the resources and data within the member are deleted, and you can no longer use the member to log on to the Alibaba Cloud Management Console. In addition, the member cannot be recovered. Proceed with caution. For more information about how to delete a member, see [Delete a member of the resource account type](https://help.aliyun.com/document_detail/446078.html).
     *  *
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
     * @summary Deletes a custom access control policy.
     *  *
     * @description If you want to delete a custom access control policy that is attached to folders or members, you must call the [DetachControlPolicy](~~DetachControlPolicy~~) operation to detach the policy before you delete it.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Deletes a custom access control policy.
     *  *
     * @description If you want to delete a custom access control policy that is attached to folders or members, you must call the [DetachControlPolicy](~~DetachControlPolicy~~) operation to detach the policy before you delete it.
     *  *
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
     * @summary Deletes a folder.
     *  *
     * @description Before you delete a folder, you must make sure that the folder does not contain members or subfolders.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Deletes a folder.
     *  *
     * @description Before you delete a folder, you must make sure that the folder does not contain members or subfolders.
     *  *
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
     * @summary Deletes a contact.
     *  *
     * @param DeleteMessageContactRequest $request DeleteMessageContactRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMessageContactResponse DeleteMessageContactResponse
     */
    public function deleteMessageContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->retainContactInMembers)) {
            $query['RetainContactInMembers'] = $request->retainContactInMembers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMessageContact',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a contact.
     *  *
     * @param DeleteMessageContactRequest $request DeleteMessageContactRequest
     *
     * @return DeleteMessageContactResponse DeleteMessageContactResponse
     */
    public function deleteMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageContactWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a delegated administrator account for a trusted service.
     *  *
     * @description If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Removes a delegated administrator account for a trusted service.
     *  *
     * @description If the delegated administrator account that you want to remove has historical management tasks in the related trusted service, the trusted service may be affected after the delegated administrator account is removed. Therefore, proceed with caution.
     *  *
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
     * @summary Disables a resource directory. This operation cannot be undone. Therefore, proceed with caution.
     *  *
     * @description Before you disable a resource directory, you must make sure that the following requirements are met:
     * *   All members of the cloud account type in the resource directory are removed. You can call the [RemoveCloudAccount](~~RemoveCloudAccount~~) operation to remove a member of the cloud account type.
     * *   All folders except the Root folder are deleted from the resource directory. You can call the [DeleteFolder](~~DeleteFolder~~) operation to delete a folder.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DestroyResourceDirectoryResponse DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DestroyResourceDirectory',
            'version'     => '2022-04-19',
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
     * @summary Disables a resource directory. This operation cannot be undone. Therefore, proceed with caution.
     *  *
     * @description Before you disable a resource directory, you must make sure that the following requirements are met:
     * *   All members of the cloud account type in the resource directory are removed. You can call the [RemoveCloudAccount](~~RemoveCloudAccount~~) operation to remove a member of the cloud account type.
     * *   All folders except the Root folder are deleted from the resource directory. You can call the [DeleteFolder](~~DeleteFolder~~) operation to delete a folder.
     *  *
     * @return DestroyResourceDirectoryResponse DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyResourceDirectoryWithOptions($runtime);
    }

    /**
     * @summary Detaches an access control policy.
     *  *
     * @description After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Detaches an access control policy.
     *  *
     * @description After you detach an access control policy, the operations performed on resources by using members are not limited by the policy. Make sure that the detached policy meets your expectations. Otherwise, your business may be affected.
     * Both the system and custom access control policies can be detached. If an object has only one access control policy attached, the policy cannot be detached.
     *  *
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
     * @summary Disables the Control Policy feature.
     *  *
     * @description After you disable the Control Policy feature, the system automatically detaches all access control policies that are attached to folders and members. The system does not delete these access control policies, but you cannot attach them to folders or members again.
     * > If you disable the Control Policy feature, the permissions of all folders and members in your resource directory are affected. Therefore, proceed with caution.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableControlPolicyResponse DisableControlPolicyResponse
     */
    public function disableControlPolicyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableControlPolicy',
            'version'     => '2022-04-19',
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
     * @summary Disables the Control Policy feature.
     *  *
     * @description After you disable the Control Policy feature, the system automatically detaches all access control policies that are attached to folders and members. The system does not delete these access control policies, but you cannot attach them to folders or members again.
     * > If you disable the Control Policy feature, the permissions of all folders and members in your resource directory are affected. Therefore, proceed with caution.
     *  *
     * @return DisableControlPolicyResponse DisableControlPolicyResponse
     */
    public function disableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableControlPolicyWithOptions($runtime);
    }

    /**
     * @summary Unbinds a contact from a resource directory, folder, or member.
     *  *
     * @param DisassociateMembersRequest $request DisassociateMembersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisassociateMembersResponse DisassociateMembersResponse
     */
    public function disassociateMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->members)) {
            $query['Members'] = $request->members;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisassociateMembers',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds a contact from a resource directory, folder, or member.
     *  *
     * @param DisassociateMembersRequest $request DisassociateMembersRequest
     *
     * @return DisassociateMembersResponse DisassociateMembersResponse
     */
    public function disassociateMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the Control Policy feature.
     *  *
     * @description The Control Policy feature provided by the Resource Directory service allows you to manage the permission boundaries of the folders or members in your resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](https://help.aliyun.com/document_detail/178671.html).
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableControlPolicyResponse EnableControlPolicyResponse
     */
    public function enableControlPolicyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableControlPolicy',
            'version'     => '2022-04-19',
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
     * @summary Enables the Control Policy feature.
     *  *
     * @description The Control Policy feature provided by the Resource Directory service allows you to manage the permission boundaries of the folders or members in your resource directory in a centralized manner. This feature is implemented based on the resource directory. You can use this feature to develop common or dedicated rules for access control. The Control Policy feature does not grant permissions but only defines permission boundaries. A member in a resource directory can be used to access resources only after it is granted the required permissions by using the Resource Access Management (RAM) service. For more information, see [Overview of the Control Policy feature](https://help.aliyun.com/document_detail/178671.html).
     *  *
     * @return EnableControlPolicyResponse EnableControlPolicyResponse
     */
    public function enableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableControlPolicyWithOptions($runtime);
    }

    /**
     * @summary Enables a resource directory.
     *  *
     * @description You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
     *  *
     * @param EnableResourceDirectoryRequest $request EnableResourceDirectoryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableResourceDirectoryResponse EnableResourceDirectoryResponse
     */
    public function enableResourceDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
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
            'version'     => '2022-04-19',
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
     * @summary Enables a resource directory.
     *  *
     * @description You can use the current account or a newly created account to enable a resource directory. For more information, see [Enable a resource directory](https://help.aliyun.com/document_detail/111215.html).
     *  *
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
     * @summary Queries the information of a member.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information of a member.
     *  *
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
     * @summary Queries the result of a member deletion check.
     *  *
     * @description After you call the [CheckAccountDelete](~~CheckAccountDelete~~) operation to perform a member deletion check, you can call the [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the result of a member deletion check.
     *  *
     * @description After you call the [CheckAccountDelete](~~CheckAccountDelete~~) operation to perform a member deletion check, you can call the [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operation to query the check result. If the check result shows that the member meets deletion requirements, you can delete the member. Otherwise, you need to first modify the items that do not meet requirements.
     *  *
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
     * @summary Queries the deletion status of a member.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the deletion status of a member.
     *  *
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
     * @summary Queries the details of an access control policy.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the details of an access control policy.
     *  *
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
     * @summary Queries the status of the Control Policy feature.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetControlPolicyEnablementStatusResponse GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetControlPolicyEnablementStatus',
            'version'     => '2022-04-19',
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
     * @summary Queries the status of the Control Policy feature.
     *  *
     * @return GetControlPolicyEnablementStatusResponse GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlPolicyEnablementStatusWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a folder.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information about a folder.
     *  *
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
     * @summary Queries the information of an invitation.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information of an invitation.
     *  *
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
     * @summary Queries the information about a contact.
     *  *
     * @param GetMessageContactRequest $request GetMessageContactRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMessageContactResponse GetMessageContactResponse
     */
    public function getMessageContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMessageContact',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a contact.
     *  *
     * @param GetMessageContactRequest $request GetMessageContactRequest
     *
     * @return GetMessageContactResponse GetMessageContactResponse
     */
    public function getMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageContactWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deletion status of a contact.
     *  *
     * @param GetMessageContactDeletionStatusRequest $request GetMessageContactDeletionStatusRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMessageContactDeletionStatusResponse GetMessageContactDeletionStatusResponse
     */
    public function getMessageContactDeletionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMessageContactDeletionStatus',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMessageContactDeletionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the deletion status of a contact.
     *  *
     * @param GetMessageContactDeletionStatusRequest $request GetMessageContactDeletionStatusRequest
     *
     * @return GetMessageContactDeletionStatusResponse GetMessageContactDeletionStatusResponse
     */
    public function getMessageContactDeletionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageContactDeletionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a billing account.
     *  *
     * @param GetPayerForAccountRequest $request GetPayerForAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPayerForAccountResponse GetPayerForAccountResponse
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information of a billing account.
     *  *
     * @param GetPayerForAccountRequest $request GetPayerForAccountRequest
     *
     * @return GetPayerForAccountResponse GetPayerForAccountResponse
     */
    public function getPayerForAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPayerForAccountWithOptions($request, $runtime);
    }

    /**
     * @summary \\*\\*\\* Co., Ltd.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceDirectoryResponse GetResourceDirectoryResponse
     */
    public function getResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetResourceDirectory',
            'version'     => '2022-04-19',
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
     * @summary \\*\\*\\* Co., Ltd.
     *  *
     * @return GetResourceDirectoryResponse GetResourceDirectoryResponse
     */
    public function getResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryWithOptions($runtime);
    }

    /**
     * @summary Invites an account to join a resource directory.
     *  *
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
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
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
            'version'     => '2022-04-19',
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
     * @summary Invites an account to join a resource directory.
     *  *
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
     * @summary Queries all the members in a resource directory.
     *  *
     * @description You can use only the management account of a resource directory or a delegated administrator account of a trusted service to call this operation.
     *  *
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
            'action'      => 'ListAccounts',
            'version'     => '2022-04-19',
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
     * @summary Queries all the members in a resource directory.
     *  *
     * @description You can use only the management account of a resource directory or a delegated administrator account of a trusted service to call this operation.
     *  *
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
     * @summary Queries the information of members in a folder.
     *  *
     * @param ListAccountsForParentRequest $request ListAccountsForParentRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountsForParentResponse ListAccountsForParentResponse
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information of members in a folder.
     *  *
     * @param ListAccountsForParentRequest $request ListAccountsForParentRequest
     *
     * @return ListAccountsForParentResponse ListAccountsForParentResponse
     */
    public function listAccountsForParent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsForParentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of all the parent folders of a specified folder.
     *  *
     * @param ListAncestorsRequest $request ListAncestorsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAncestorsResponse ListAncestorsResponse
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information of all the parent folders of a specified folder.
     *  *
     * @param ListAncestorsRequest $request ListAncestorsRequest
     *
     * @return ListAncestorsResponse ListAncestorsResponse
     */
    public function listAncestors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAncestorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries access control policies.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries access control policies.
     *  *
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
     * @summary Queries the access control policies that are attached to a folder or member.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the access control policies that are attached to a folder or member.
     *  *
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
     * @summary Queries delegated administrator accounts.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries delegated administrator accounts.
     *  *
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
     * @summary Queries the trusted services for which a member is specified as a delegated administrator account.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the trusted services for which a member is specified as a delegated administrator account.
     *  *
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
     * @summary Queries the information of all subfolders of a folder.
     *  *
     * @description You can call this API operation to view the information of only the first-level subfolders of a folder.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the information of all subfolders of a folder.
     *  *
     * @description You can call this API operation to view the information of only the first-level subfolders of a folder.
     *  *
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
     * @summary Queries the invitations that are associated with an account.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the invitations that are associated with an account.
     *  *
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
     * @summary Queries invitations in a resource directory.
     *  *
     * @param ListHandshakesForResourceDirectoryRequest $request ListHandshakesForResourceDirectoryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHandshakesForResourceDirectoryResponse ListHandshakesForResourceDirectoryResponse
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
            'version'     => '2022-04-19',
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
     * @summary Queries invitations in a resource directory.
     *  *
     * @param ListHandshakesForResourceDirectoryRequest $request ListHandshakesForResourceDirectoryRequest
     *
     * @return ListHandshakesForResourceDirectoryResponse ListHandshakesForResourceDirectoryResponse
     */
    public function listHandshakesForResourceDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHandshakesForResourceDirectoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the mobile phone number or email address to be verified for a contact.
     *  *
     * @param ListMessageContactVerificationsRequest $request ListMessageContactVerificationsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMessageContactVerificationsResponse ListMessageContactVerificationsResponse
     */
    public function listMessageContactVerificationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
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
            'action'      => 'ListMessageContactVerifications',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMessageContactVerificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the mobile phone number or email address to be verified for a contact.
     *  *
     * @param ListMessageContactVerificationsRequest $request ListMessageContactVerificationsRequest
     *
     * @return ListMessageContactVerificationsResponse ListMessageContactVerificationsResponse
     */
    public function listMessageContactVerifications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageContactVerificationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries contacts.
     *  *
     * @param ListMessageContactsRequest $request ListMessageContactsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMessageContactsResponse ListMessageContactsResponse
     */
    public function listMessageContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->member)) {
            $query['Member'] = $request->member;
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
            'action'      => 'ListMessageContacts',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMessageContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries contacts.
     *  *
     * @param ListMessageContactsRequest $request ListMessageContactsRequest
     *
     * @return ListMessageContactsResponse ListMessageContactsResponse
     */
    public function listMessageContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMessageContactsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tag keys.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries tag keys.
     *  *
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
     * @summary Queries the tags that are added to the members in a resource directory.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the tags that are added to the members in a resource directory.
     *  *
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
     * @summary Queries the tag values of a tag key.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the tag values of a tag key.
     *  *
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
     * @summary Queries the objects to which an access control policy is attached.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the objects to which an access control policy is attached.
     *  *
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
     * @summary Queries the trusted services that are enabled within a management account or delegated administrator account.
     *  *
     * @description Only a management account or delegated administrator account can be used to call this operation.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Queries the trusted services that are enabled within a management account or delegated administrator account.
     *  *
     * @description Only a management account or delegated administrator account can be used to call this operation.
     *  *
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
     * @summary Moves a member from a folder to another.
     *  *
     * @param MoveAccountRequest $request MoveAccountRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveAccountResponse MoveAccountResponse
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
            'version'     => '2022-04-19',
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
     * @summary Moves a member from a folder to another.
     *  *
     * @param MoveAccountRequest $request MoveAccountRequest
     *
     * @return MoveAccountResponse MoveAccountResponse
     */
    public function moveAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a management account or member can be used as a main financial account.
     *  *
     * @param PrecheckForConsolidatedBillingAccountRequest $request PrecheckForConsolidatedBillingAccountRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return PrecheckForConsolidatedBillingAccountResponse PrecheckForConsolidatedBillingAccountResponse
     */
    public function precheckForConsolidatedBillingAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billingAccountId)) {
            $query['BillingAccountId'] = $request->billingAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PrecheckForConsolidatedBillingAccount',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PrecheckForConsolidatedBillingAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether a management account or member can be used as a main financial account.
     *  *
     * @param PrecheckForConsolidatedBillingAccountRequest $request PrecheckForConsolidatedBillingAccountRequest
     *
     * @return PrecheckForConsolidatedBillingAccountResponse PrecheckForConsolidatedBillingAccountResponse
     */
    public function precheckForConsolidatedBillingAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->precheckForConsolidatedBillingAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies a member in a resource directory as a delegated administrator account of a trusted service.
     *  *
     * @description The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory. When you call this operation, you must take note of the following limits:
     * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Specifies a member in a resource directory as a delegated administrator account of a trusted service.
     *  *
     * @description The delegated administrator account can be used to access the information of the resource directory and view the structure and members of the resource directory. The delegated administrator account can also be used to perform service-related management operations in the trusted service on behalf of the management account of the resource directory. When you call this operation, you must take note of the following limits:
     * *   Only some trusted services support delegated administrator accounts. For more information, see [Supported trusted services](https://help.aliyun.com/document_detail/208133.html).
     * *   Only the management account of a resource directory or an authorized RAM user or RAM role of the management account can be used to call this operation.
     * *   The number of delegated administrator accounts that are allowed for a trusted service is defined by the trusted service.
     *  *
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
     * @summary Removes a member of the cloud account type.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Removes a member of the cloud account type.
     *  *
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
     * @summary Resends a verification email for the email address change of a member.
     *  *
     * @param RetryChangeAccountEmailRequest $request RetryChangeAccountEmailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RetryChangeAccountEmailResponse RetryChangeAccountEmailResponse
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
            'version'     => '2022-04-19',
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
     * @summary Resends a verification email for the email address change of a member.
     *  *
     * @param RetryChangeAccountEmailRequest $request RetryChangeAccountEmailRequest
     *
     * @return RetryChangeAccountEmailResponse RetryChangeAccountEmailResponse
     */
    public function retryChangeAccountEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryChangeAccountEmailWithOptions($request, $runtime);
    }

    /**
     * @summary Sends verification information to the email address of a contact.
     *  *
     * @param SendEmailVerificationForMessageContactRequest $request SendEmailVerificationForMessageContactRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SendEmailVerificationForMessageContactResponse SendEmailVerificationForMessageContactResponse
     */
    public function sendEmailVerificationForMessageContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->emailAddress)) {
            $query['EmailAddress'] = $request->emailAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendEmailVerificationForMessageContact',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendEmailVerificationForMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends verification information to the email address of a contact.
     *  *
     * @param SendEmailVerificationForMessageContactRequest $request SendEmailVerificationForMessageContactRequest
     *
     * @return SendEmailVerificationForMessageContactResponse SendEmailVerificationForMessageContactResponse
     */
    public function sendEmailVerificationForMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendEmailVerificationForMessageContactWithOptions($request, $runtime);
    }

    /**
     * @summary Sends verification information to the mobile phone number of a contact.
     *  *
     * @param SendPhoneVerificationForMessageContactRequest $request SendPhoneVerificationForMessageContactRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SendPhoneVerificationForMessageContactResponse SendPhoneVerificationForMessageContactResponse
     */
    public function sendPhoneVerificationForMessageContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendPhoneVerificationForMessageContact',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendPhoneVerificationForMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends verification information to the mobile phone number of a contact.
     *  *
     * @param SendPhoneVerificationForMessageContactRequest $request SendPhoneVerificationForMessageContactRequest
     *
     * @return SendPhoneVerificationForMessageContactResponse SendPhoneVerificationForMessageContactResponse
     */
    public function sendPhoneVerificationForMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendPhoneVerificationForMessageContactWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a verification code to the mobile phone number that you want to bind to a member of the resource account type in a resource directory for security purposes.
     *  *
     * @description To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Sends a verification code to the mobile phone number that you want to bind to a member of the resource account type in a resource directory for security purposes.
     *  *
     * @description To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this API operation.
     *  *
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
     * @summary Sends a verification code to the mobile phone number bound to a newly created account when you use the account to enable a resource directory.
     *  *
     * @description Each Alibaba Cloud account can be used to send a maximum of 100 verification codes per day.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Sends a verification code to the mobile phone number bound to a newly created account when you use the account to enable a resource directory.
     *  *
     * @description Each Alibaba Cloud account can be used to send a maximum of 100 verification codes per day.
     *  *
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
     * @summary Enables or disables the member deletion feature.
     *  *
     * @description Members of the resource account type can be deleted only after the member deletion feature is enabled.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Enables or disables the member deletion feature.
     *  *
     * @description Members of the resource account type can be deleted only after the member deletion feature is enabled.
     *  *
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
     * @summary Adds tags to the members in a resource directory.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Adds tags to the members in a resource directory.
     *  *
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
     * @summary Removes tags from the members in a resource directory.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Removes tags from the members in a resource directory.
     *  *
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
     * @summary Changes the display name of a member, or switches the type of a member.
     *  *
     * @description *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
     *  *
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
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
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
            'version'     => '2022-04-19',
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
     * @summary Changes the display name of a member, or switches the type of a member.
     *  *
     * @description *   To ensure that the system can record the operators of management operations, you must use a RAM user or RAM role to which the AliyunResourceDirectoryFullAccess policy is attached within the management account of your resource directory to call this operation.
     * *   Before you switch the type of a member from resource account to cloud account, make sure that specific conditions are met. For more information about the conditions, see [Switch a resource account to a cloud account](https://help.aliyun.com/document_detail/111233.html).
     * *   Before you switch the type of a member from cloud account to resource account, make sure that specific conditions are met. For more information about the conditions, see [Switch a cloud account to a resource account](https://help.aliyun.com/document_detail/209980.html).
     *  *
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
     * @summary Updates a custom access control policy.
     *  *
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
            'version'     => '2022-04-19',
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
     * @summary Updates a custom access control policy.
     *  *
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
     * @summary Changes the name of a folder.
     *  *
     * @param UpdateFolderRequest $request UpdateFolderRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFolderResponse UpdateFolderResponse
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
            'version'     => '2022-04-19',
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
     * @summary Changes the name of a folder.
     *  *
     * @param UpdateFolderRequest $request UpdateFolderRequest
     *
     * @return UpdateFolderResponse UpdateFolderResponse
     */
    public function updateFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolderWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a contact.
     *  *
     * @param UpdateMessageContactRequest $request UpdateMessageContactRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMessageContactResponse UpdateMessageContactResponse
     */
    public function updateMessageContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->emailAddress)) {
            $query['EmailAddress'] = $request->emailAddress;
        }
        if (!Utils::isUnset($request->messageTypes)) {
            $query['MessageTypes'] = $request->messageTypes;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMessageContact',
            'version'     => '2022-04-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMessageContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a contact.
     *  *
     * @param UpdateMessageContactRequest $request UpdateMessageContactRequest
     *
     * @return UpdateMessageContactResponse UpdateMessageContactResponse
     */
    public function updateMessageContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMessageContactWithOptions($request, $runtime);
    }
}
