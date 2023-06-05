<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\AttachPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\AttachPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CancelCreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CancelCreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CancelPromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CancelPromoteResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreatePolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreatePolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreatePolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreatePolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteInvalidCloudAccountRecordRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteInvalidCloudAccountRecordResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeletePolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeletePolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeletePolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeletePolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteServiceLinkedRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DeleteServiceLinkedRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DestoryResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DestroyResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DetachPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\DetachPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetAccountSummaryRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetAccountSummaryResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetPolicyRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetPolicyResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetPolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetPolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetResourceDirectoryAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetResourceDirectoryAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetRoleResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleDeletionStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleDeletionStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\InitResourceDirectoryResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountRecordsForParentRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountRecordsForParentResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountsForParentRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountsForParentResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountsRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountsResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAncestorsRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAncestorsResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListFoldersForParentRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListFoldersForParentResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListParentsRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListParentsResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyAttachmentsRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyAttachmentsResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyVersionsRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyVersionsResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListRolesForServiceRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListRolesForServiceResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListRolesRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListRolesResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListTrustedServiceStatusRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListTrustedServiceStatusResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\MoveAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\MoveAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\PromoteResourceAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\PromoteResourceAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\QueryResourceRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\QueryResourceResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\RemoveCloudAccountRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\RemoveCloudAccountResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ResendCreateCloudAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ResendCreateCloudAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ResendPromoteResourceAccountEmailRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ResendPromoteResourceAccountEmailResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\SetDefaultPolicyVersionRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\SetDefaultPolicyVersionResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\UpdateFolderRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\UpdateFolderResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\UpdateResourceGroupRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\UpdateResourceGroupResponse;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\ResourceManager\V20161111\Models\UpdateRoleResponse;
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
     * @param AttachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachPolicyResponse
     */
    public function attachPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
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
            'action'      => 'AttachPolicy',
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->enableConsolidatedBilling)) {
            $query['EnableConsolidatedBilling'] = $request->enableConsolidatedBilling;
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
            'version'     => '2016-11-11',
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
     * @param CreateFolderRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFolderResponse
     */
    public function createFolderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFolder',
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->enableConsolidatedBilling)) {
            $query['EnableConsolidatedBilling'] = $request->enableConsolidatedBilling;
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
            'action'      => 'CreateResourceAccount',
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param DeleteInvalidCloudAccountRecordRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteInvalidCloudAccountRecordResponse
     */
    public function deleteInvalidCloudAccountRecordWithOptions($request, $runtime)
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
            'action'      => 'DeleteInvalidCloudAccountRecord',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInvalidCloudAccountRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInvalidCloudAccountRecordRequest $request
     *
     * @return DeleteInvalidCloudAccountRecordResponse
     */
    public function deleteInvalidCloudAccountRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInvalidCloudAccountRecordWithOptions($request, $runtime);
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceGroup',
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param RuntimeOptions $runtime
     *
     * @return DestoryResourceDirectoryResponse
     */
    public function destoryResourceDirectoryWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DestoryResourceDirectory',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DestoryResourceDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DestoryResourceDirectoryResponse
     */
    public function destoryResourceDirectory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->destoryResourceDirectoryWithOptions($runtime);
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
            'version'     => '2016-11-11',
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
     * @param DetachPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachPolicyResponse
     */
    public function detachPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
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
            'action'      => 'DetachPolicy',
            'version'     => '2016-11-11',
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
     * @param GetAccountSummaryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummaryWithOptions($request, $runtime)
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
            'action'      => 'GetAccountSummary',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAccountSummaryRequest $request
     *
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountSummaryWithOptions($request, $runtime);
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param GetResourceDirectoryAccountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetResourceDirectoryAccountResponse
     */
    public function getResourceDirectoryAccountWithOptions($request, $runtime)
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
            'action'      => 'GetResourceDirectoryAccount',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceDirectoryAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceDirectoryAccountRequest $request
     *
     * @return GetResourceDirectoryAccountResponse
     */
    public function getResourceDirectoryAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceDirectoryAccountWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroup',
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param GetServiceLinkedRoleTemplateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetServiceLinkedRoleTemplateResponse
     */
    public function getServiceLinkedRoleTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceLinkedRoleTemplate',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceLinkedRoleTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceLinkedRoleTemplateRequest $request
     *
     * @return GetServiceLinkedRoleTemplateResponse
     */
    public function getServiceLinkedRoleTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLinkedRoleTemplateWithOptions($request, $runtime);
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
            'version'     => '2016-11-11',
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
     * @param ListAccountRecordsForParentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAccountRecordsForParentResponse
     */
    public function listAccountRecordsForParentWithOptions($request, $runtime)
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
            'action'      => 'ListAccountRecordsForParent',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountRecordsForParentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAccountRecordsForParentRequest $request
     *
     * @return ListAccountRecordsForParentResponse
     */
    public function listAccountRecordsForParent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountRecordsForParentWithOptions($request, $runtime);
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
            'action'      => 'ListAccounts',
            'version'     => '2016-11-11',
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
            'action'      => 'ListAccountsForParent',
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param ListParentsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListParentsResponse
     */
    public function listParentsWithOptions($request, $runtime)
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
            'action'      => 'ListParents',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListParentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListParentsRequest $request
     *
     * @return ListParentsResponse
     */
    public function listParents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParentsWithOptions($request, $runtime);
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
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceGroups',
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param ListRolesForServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRolesForServiceResponse
     */
    public function listRolesForServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRolesForService',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRolesForServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRolesForServiceRequest $request
     *
     * @return ListRolesForServiceResponse
     */
    public function listRolesForService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesForServiceWithOptions($request, $runtime);
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
     * @param QueryResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryResourceResponse
     */
    public function queryResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
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
            'action'      => 'QueryResource',
            'version'     => '2016-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryResourceRequest $request
     *
     * @return QueryResourceResponse
     */
    public function queryResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResourceWithOptions($request, $runtime);
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFolder',
            'version'     => '2016-11-11',
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
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
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
            'version'     => '2016-11-11',
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
            'version'     => '2016-11-11',
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
