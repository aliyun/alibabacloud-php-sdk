<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Aliding extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aliding', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddWorkspaceDocMembersRequest $tmpReq
     * @param AddWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWorkspaceDocMembersRequest $request
     *
     * @return AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceDocMembersHeaders([]);

        return $this->addWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddWorkspaceMembersRequest $tmpReq
     * @param AddWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWorkspaceMembersRequest $request
     *
     * @return AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceMembersHeaders([]);

        return $this->addWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSheetRequest $tmpReq
     * @param CreateSheetHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSheetResponse
     */
    public function createSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSheetRequest $request
     *
     * @return CreateSheetResponse
     */
    public function createSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSheetHeaders([]);

        return $this->createSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateWorkspaceRequest $tmpReq
     * @param CreateWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceHeaders([]);

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateWorkspaceDocRequest $tmpReq
     * @param CreateWorkspaceDocHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return CreateWorkspaceDocResponse
     */
    public function createWorkspaceDocWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWorkspaceDocShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateWorkspaceDocShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentNodeId)) {
            $body['ParentNodeId'] = $request->parentNodeId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspaceDoc',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createWorkspaceDoc',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceDocRequest $request
     *
     * @return CreateWorkspaceDocResponse
     */
    public function createWorkspaceDoc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceDocHeaders([]);

        return $this->createWorkspaceDocWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteWorkspaceDocMembersRequest $tmpReq
     * @param DeleteWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWorkspaceDocMembersRequest $request
     *
     * @return DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceDocMembersHeaders([]);

        return $this->deleteWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteWorkspaceMembersRequest $tmpReq
     * @param DeleteWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWorkspaceMembersRequest $request
     *
     * @return DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceMembersHeaders([]);

        return $this->deleteWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserRequest $tmpReq
     * @param GetUserHeaders $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetUserShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/getUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertRowsBeforeRequest $tmpReq
     * @param InsertRowsBeforeHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertRowsBeforeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InsertRowsBeforeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertRowsBefore',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/insertRowsBefore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertRowsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertRowsBeforeRequest $request
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertRowsBeforeHeaders([]);

        return $this->insertRowsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateWorkspaceDocMembersRequest $tmpReq
     * @param UpdateWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceDocMembersRequest $request
     *
     * @return UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceDocMembersHeaders([]);

        return $this->updateWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateWorkspaceMembersRequest $tmpReq
     * @param UpdateWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceMembersRequest $request
     *
     * @return UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceMembersHeaders([]);

        return $this->updateWorkspaceMembersWithOptions($request, $headers, $runtime);
    }
}
