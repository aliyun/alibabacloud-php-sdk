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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelCreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelCreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelHandshakeResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelPromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CancelPromoteResourceAccountResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DisableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableControlPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryRequest;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryResponse;
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
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetResourceGroupListAclModeResponse;
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
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'resourcemanager.ap-northeast-1.aliyuncs.com',
            'ap-south-1'            => 'resourcemanager.ap-south-1.aliyuncs.com',
            'ap-southeast-1'        => 'resourcemanager.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'resourcemanager.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'resourcemanager.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'resourcemanager.ap-southeast-5.aliyuncs.com',
            'cn-beijing'            => 'resourcemanager.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'resourcemanager.cn-chengdu.aliyuncs.com',
            'cn-hangzhou-finance'   => 'resourcemanager.cn-hangzhou-finance.aliyuncs.com',
            'cn-hongkong'           => 'resourcemanager.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'resourcemanager.cn-huhehaote.aliyuncs.com',
            'cn-north-2-gov-1'      => 'resourcemanager.cn-north-2-gov-1.aliyuncs.com',
            'cn-qingdao'            => 'resourcemanager.cn-qingdao.aliyuncs.com',
            'cn-shanghai-finance-1' => 'resourcemanager.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shenzhen'           => 'resourcemanager.cn-shenzhen.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'resourcemanager.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-wulanchabu'         => 'resourcemanager.cn-wulanchabu.aliyuncs.com',
            'cn-zhangjiakou'        => 'resourcemanager.cn-zhangjiakou.aliyuncs.com',
            'eu-central-1'          => 'resourcemanager.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'resourcemanager.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'resourcemanager.me-east-1.aliyuncs.com',
            'us-east-1'             => 'resourcemanager.us-east-1.aliyuncs.com',
            'us-west-1'             => 'resourcemanager.us-west-1.aliyuncs.com',
        ];
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
     * @param AttachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPolicyResponse
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
     * @param CreateCloudAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCloudAccountResponse
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
     * @param CreateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
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
     * @param DeletePolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePolicyResponse
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
     * @param DeletePolicyVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeletePolicyVersionResponse
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
     * @param DeleteResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceGroupResponse
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
     * @return DisableControlPolicyResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceDirectoryResponse
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
     * @return GetResourceDirectoryResponse
     */
    public function getResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryWithOptions($runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceGroupListAclModeResponse
     */
    public function getResourceGroupListAclModeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetResourceGroupListAclMode',
            'version'     => '2020-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupListAclModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetResourceGroupListAclModeResponse
     */
    public function getResourceGroupListAclMode()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceGroupListAclModeWithOptions($runtime);
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
     * @param RuntimeOptions $runtime
     *
     * @return InitResourceDirectoryResponse
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
     * @return InitResourceDirectoryResponse
     */
    public function initResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initResourceDirectoryWithOptions($runtime);
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
     * @param ListPolicyAttachmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPolicyAttachmentsResponse
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
     * @param ListResourceGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
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
     * @param ListResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
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
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
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
     * @param MoveResourcesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return MoveResourcesResponse
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
     * @param UpdateResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceGroupResponse
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
     * @param UpdateRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
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
