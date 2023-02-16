<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AcceptHandshakeRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AcceptHandshakeResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AttachControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AttachControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\BindSecureMobilePhoneRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\BindSecureMobilePhoneResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelChangeAccountEmailResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelHandshakeRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CancelHandshakeResponse;
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
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeregisterDelegatedAdministratorRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DeregisterDelegatedAdministratorResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DestroyResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DetachControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DetachControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DisableControlPolicyResponse;
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
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTargetAttachmentsForControlPolicyRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTargetAttachmentsForControlPolicyResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTrustedServiceStatusResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\MoveAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\MoveAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RegisterDelegatedAdministratorRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RegisterDelegatedAdministratorResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RemoveCloudAccountRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RemoveCloudAccountResponse;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RetryChangeAccountEmailRequest;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\RetryChangeAccountEmailResponse;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
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
     * @param AttachControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachControlPolicyResponse
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
     * @param BindSecureMobilePhoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BindSecureMobilePhoneResponse
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
     * @param CancelHandshakeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelHandshakeResponse
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
     * @param CheckAccountDeleteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckAccountDeleteResponse
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
     * @param CreateControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateControlPolicyResponse
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
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
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
     * @param CreateResourceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourceAccountResponse
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
     * @param DeleteAccountRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
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
     * @param DeleteControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteControlPolicyResponse
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
     * @param DeleteFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFolderResponse
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
     * @param DeregisterDelegatedAdministratorRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DeregisterDelegatedAdministratorResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DestroyResourceDirectoryResponse
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
     * @return DestroyResourceDirectoryResponse
     */
    public function destroyResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->destroyResourceDirectoryWithOptions($runtime);
    }

    /**
     * @param DetachControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachControlPolicyResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DisableControlPolicyResponse
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
     * @return DisableControlPolicyResponse
     */
    public function disableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableControlPolicyWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return EnableControlPolicyResponse
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
     * @return EnableControlPolicyResponse
     */
    public function enableControlPolicy()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableControlPolicyWithOptions($runtime);
    }

    /**
     * @param EnableResourceDirectoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableResourceDirectoryResponse
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
     * @param GetAccountRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAccountResponse
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
     * @param GetAccountDeletionCheckResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAccountDeletionCheckResultResponse
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
     * @param GetAccountDeletionStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAccountDeletionStatusResponse
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
     * @param GetControlPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetControlPolicyResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return GetControlPolicyEnablementStatusResponse
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
     * @return GetControlPolicyEnablementStatusResponse
     */
    public function getControlPolicyEnablementStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getControlPolicyEnablementStatusWithOptions($runtime);
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
     * @param GetHandshakeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetHandshakeResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceDirectoryResponse
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
     * @return GetResourceDirectoryResponse
     */
    public function getResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryWithOptions($runtime);
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
     * @param ListAccountsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAccountsResponse
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
     * @param ListControlPoliciesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListControlPoliciesResponse
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
     * @param ListControlPolicyAttachmentsForTargetRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListControlPolicyAttachmentsForTargetResponse
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
     * @param ListDelegatedAdministratorsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDelegatedAdministratorsResponse
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
     * @param ListDelegatedServicesForAccountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDelegatedServicesForAccountResponse
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
     * @param ListFoldersForParentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListFoldersForParentResponse
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
     * @param ListHandshakesForAccountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHandshakesForAccountResponse
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
     * @param ListTargetAttachmentsForControlPolicyRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListTargetAttachmentsForControlPolicyResponse
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
     * @param ListTrustedServiceStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListTrustedServiceStatusResponse
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
     * @param RegisterDelegatedAdministratorRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RegisterDelegatedAdministratorResponse
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
     * @param RemoveCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveCloudAccountResponse
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
     * @param SendVerificationCodeForBindSecureMobilePhoneRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneResponse
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
     * @param SendVerificationCodeForEnableRDRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SendVerificationCodeForEnableRDResponse
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
     * @param SetMemberDeletionPermissionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetMemberDeletionPermissionResponse
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param UpdateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateAccountResponse
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
     * @param UpdateControlPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateControlPolicyResponse
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
     * @param UpdateFolderRequest $request
     *
     * @return UpdateFolderResponse
     */
    public function updateFolder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFolderWithOptions($request, $runtime);
    }
}
