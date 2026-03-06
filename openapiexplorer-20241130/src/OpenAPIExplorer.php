<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ApiMcpServerValidateHclRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ApiMcpServerValidateHclResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\DeleteApiMcpServerRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\DeleteApiMcpServerResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GenerateCLICommandRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GenerateCLICommandResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GenerateCLICommandShrinkRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetApiDefinitionRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetApiDefinitionResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetApiMcpServerRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetApiMcpServerResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetApiMcpServerUserConfigResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetErrorCodeSolutionsRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetErrorCodeSolutionsResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetOwnRequestLogResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetProductEndpointsRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetProductEndpointsResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\GetRequestLogResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiDefinitionsRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiDefinitionsResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServerSystemToolsRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServerSystemToolsResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\UpdateApiMcpServerRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\UpdateApiMcpServerResponse;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\UpdateApiMcpServerUserConfigRequest;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\UpdateApiMcpServerUserConfigResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OpenAPIExplorer extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-southeast-1' => 'openapi-mcp.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou' => 'openapi-mcp.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openapiexplorer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Validates the syntax of HashiCorp Configuration Language (HCL) for Terraform.
     *
     * @param request - ApiMcpServerValidateHclRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApiMcpServerValidateHclResponse
     *
     * @param ApiMcpServerValidateHclRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ApiMcpServerValidateHclResponse
     */
    public function apiMcpServerValidateHclWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApiMcpServerValidateHcl',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/validate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ApiMcpServerValidateHclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the syntax of HashiCorp Configuration Language (HCL) for Terraform.
     *
     * @param request - ApiMcpServerValidateHclRequest
     *
     * @returns ApiMcpServerValidateHclResponse
     *
     * @param ApiMcpServerValidateHclRequest $request
     *
     * @return ApiMcpServerValidateHclResponse
     */
    public function apiMcpServerValidateHcl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->apiMcpServerValidateHclWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an API MCP service.
     *
     * @param request - CreateApiMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApiMcpServerResponse
     *
     * @param CreateApiMcpServerRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateApiMcpServerResponse
     */
    public function createApiMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->additionalApiDescriptions) {
            @$body['additionalApiDescriptions'] = $request->additionalApiDescriptions;
        }

        if (null !== $request->apis) {
            @$body['apis'] = $request->apis;
        }

        if (null !== $request->assumeRoleExtraPolicy) {
            @$body['assumeRoleExtraPolicy'] = $request->assumeRoleExtraPolicy;
        }

        if (null !== $request->assumeRoleName) {
            @$body['assumeRoleName'] = $request->assumeRoleName;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableAssumeRole) {
            @$body['enableAssumeRole'] = $request->enableAssumeRole;
        }

        if (null !== $request->enableCustomVpcWhitelist) {
            @$body['enableCustomVpcWhitelist'] = $request->enableCustomVpcWhitelist;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->oauthClientId) {
            @$body['oauthClientId'] = $request->oauthClientId;
        }

        if (null !== $request->prompts) {
            @$body['prompts'] = $request->prompts;
        }

        if (null !== $request->publicAccess) {
            @$body['publicAccess'] = $request->publicAccess;
        }

        if (null !== $request->systemTools) {
            @$body['systemTools'] = $request->systemTools;
        }

        if (null !== $request->terraformTools) {
            @$body['terraformTools'] = $request->terraformTools;
        }

        if (null !== $request->vpcWhitelists) {
            @$body['vpcWhitelists'] = $request->vpcWhitelists;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApiMcpServer',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/apimcpserver',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateApiMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an API MCP service.
     *
     * @param request - CreateApiMcpServerRequest
     *
     * @returns CreateApiMcpServerResponse
     *
     * @param CreateApiMcpServerRequest $request
     *
     * @return CreateApiMcpServerResponse
     */
    public function createApiMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createApiMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an API MCP service.
     *
     * @param request - DeleteApiMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApiMcpServerResponse
     *
     * @param DeleteApiMcpServerRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteApiMcpServerResponse
     */
    public function deleteApiMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApiMcpServer',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/apimcpserver',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteApiMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an API MCP service.
     *
     * @param request - DeleteApiMcpServerRequest
     *
     * @returns DeleteApiMcpServerResponse
     *
     * @param DeleteApiMcpServerRequest $request
     *
     * @return DeleteApiMcpServerResponse
     */
    public function deleteApiMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApiMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Generates commands for the Alibaba Cloud command-line interface (CLI).
     *
     * @param tmpReq - GenerateCLICommandRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateCLICommandResponse
     *
     * @param GenerateCLICommandRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateCLICommandResponse
     */
    public function generateCLICommandWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateCLICommandShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apiParams) {
            $request->apiParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apiParams, 'apiParams', 'json');
        }

        $body = [];
        if (null !== $request->aggregatePagination) {
            @$body['aggregatePagination'] = $request->aggregatePagination;
        }

        if (null !== $request->api) {
            @$body['api'] = $request->api;
        }

        if (null !== $request->apiParamsShrink) {
            @$body['apiParams'] = $request->apiParamsShrink;
        }

        if (null !== $request->apiVersion) {
            @$body['apiVersion'] = $request->apiVersion;
        }

        if (null !== $request->jsonApiParams) {
            @$body['jsonApiParams'] = $request->jsonApiParams;
        }

        if (null !== $request->product) {
            @$body['product'] = $request->product;
        }

        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateCLICommand',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/cli/makeCode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateCLICommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates commands for the Alibaba Cloud command-line interface (CLI).
     *
     * @param request - GenerateCLICommandRequest
     *
     * @returns GenerateCLICommandResponse
     *
     * @param GenerateCLICommandRequest $request
     *
     * @return GenerateCLICommandResponse
     */
    public function generateCLICommand($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateCLICommandWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the OpenAPI metadata for an API in a product.
     *
     * @param request - GetApiDefinitionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiDefinitionResponse
     *
     * @param GetApiDefinitionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetApiDefinitionResponse
     */
    public function getApiDefinitionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['api'] = $request->api;
        }

        if (null !== $request->apiVersion) {
            @$query['apiVersion'] = $request->apiVersion;
        }

        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiDefinition',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/definition',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OpenAPI metadata for an API in a product.
     *
     * @param request - GetApiDefinitionRequest
     *
     * @returns GetApiDefinitionResponse
     *
     * @param GetApiDefinitionRequest $request
     *
     * @return GetApiDefinitionResponse
     */
    public function getApiDefinition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiDefinitionWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specific API MCP service.
     *
     * @param request - GetApiMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiMcpServerResponse
     *
     * @param GetApiMcpServerRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetApiMcpServerResponse
     */
    public function getApiMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiMcpServer',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/apimcpserver',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specific API MCP service.
     *
     * @param request - GetApiMcpServerRequest
     *
     * @returns GetApiMcpServerResponse
     *
     * @param GetApiMcpServerRequest $request
     *
     * @return GetApiMcpServerResponse
     */
    public function getApiMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the global API MCP Server configuration for a user. The configuration includes settings for public network access and the whitelist of source VPC IDs for requests from a VPC.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiMcpServerUserConfigResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetApiMcpServerUserConfigResponse
     */
    public function getApiMcpServerUserConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetApiMcpServerUserConfig',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/userconfig/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApiMcpServerUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the global API MCP Server configuration for a user. The configuration includes settings for public network access and the whitelist of source VPC IDs for requests from a VPC.
     *
     * @returns GetApiMcpServerUserConfigResponse
     *
     * @return GetApiMcpServerUserConfigResponse
     */
    public function getApiMcpServerUserConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApiMcpServerUserConfigWithOptions($headers, $runtime);
    }

    /**
     * Queries an error solution by error code.
     *
     * @remarks
     * You can call this API operation to query public information instead of special information, such as the account ownership. Permissions on this API operation cannot be granted to other members.
     *
     * @param request - GetErrorCodeSolutionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErrorCodeSolutionsResponse
     *
     * @param GetErrorCodeSolutionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetErrorCodeSolutionsResponse
     */
    public function getErrorCodeSolutionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->errorCode) {
            @$query['errorCode'] = $request->errorCode;
        }

        if (null !== $request->errorMessage) {
            @$query['errorMessage'] = $request->errorMessage;
        }

        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetErrorCodeSolutions',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/getErrorCodeSolutions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetErrorCodeSolutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an error solution by error code.
     *
     * @remarks
     * You can call this API operation to query public information instead of special information, such as the account ownership. Permissions on this API operation cannot be granted to other members.
     *
     * @param request - GetErrorCodeSolutionsRequest
     *
     * @returns GetErrorCodeSolutionsResponse
     *
     * @param GetErrorCodeSolutionsRequest $request
     *
     * @return GetErrorCodeSolutionsResponse
     */
    public function getErrorCodeSolutions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getErrorCodeSolutionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details of an OpenAPI call log for your account using the request ID returned from an API call. This operation is used for troubleshooting.
     *
     * @remarks
     * This API does not support authorization.
     *
     * @param request - GetOwnRequestLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOwnRequestLogResponse
     *
     * @param GetOwnRequestLogRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetOwnRequestLogResponse
     */
    public function getOwnRequestLogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logRequestId) {
            @$query['logRequestId'] = $request->logRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOwnRequestLog',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/getOwnRequestLog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOwnRequestLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an OpenAPI call log for your account using the request ID returned from an API call. This operation is used for troubleshooting.
     *
     * @remarks
     * This API does not support authorization.
     *
     * @param request - GetOwnRequestLogRequest
     *
     * @returns GetOwnRequestLogResponse
     *
     * @param GetOwnRequestLogRequest $request
     *
     * @return GetOwnRequestLogResponse
     */
    public function getOwnRequestLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOwnRequestLogWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the endpoint information for a product.
     *
     * @param request - GetProductEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductEndpointsResponse
     *
     * @param GetProductEndpointsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetProductEndpointsResponse
     */
    public function getProductEndpointsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProductEndpoints',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/product/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProductEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the endpoint information for a product.
     *
     * @param request - GetProductEndpointsRequest
     *
     * @returns GetProductEndpointsResponse
     *
     * @param GetProductEndpointsRequest $request
     *
     * @return GetProductEndpointsResponse
     */
    public function getProductEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductEndpointsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the details of a request log using the request ID that is returned from an API call. This operation is useful for troubleshooting.
     *
     * @remarks
     * You can query call logs across different RAM users or Alibaba Cloud accounts using RAM authorization or role assumption. For more information, see [Cross-account API error diagnosis authorization](https://help.aliyun.com/document_detail/2868101.html).
     *
     * @param request - GetRequestLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRequestLogResponse
     *
     * @param GetRequestLogRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetRequestLogResponse
     */
    public function getRequestLogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logRequestId) {
            @$query['logRequestId'] = $request->logRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRequestLog',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/getRequestLog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRequestLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a request log using the request ID that is returned from an API call. This operation is useful for troubleshooting.
     *
     * @remarks
     * You can query call logs across different RAM users or Alibaba Cloud accounts using RAM authorization or role assumption. For more information, see [Cross-account API error diagnosis authorization](https://help.aliyun.com/document_detail/2868101.html).
     *
     * @param request - GetRequestLogRequest
     *
     * @returns GetRequestLogResponse
     *
     * @param GetRequestLogRequest $request
     *
     * @return GetRequestLogResponse
     */
    public function getRequestLog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRequestLogWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the OpenAPI metadata for a product.
     *
     * @param request - ListApiDefinitionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiDefinitionsResponse
     *
     * @param ListApiDefinitionsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListApiDefinitionsResponse
     */
    public function listApiDefinitionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiVersion) {
            @$query['apiVersion'] = $request->apiVersion;
        }

        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiDefinitions',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/definitions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the OpenAPI metadata for a product.
     *
     * @param request - ListApiDefinitionsRequest
     *
     * @returns ListApiDefinitionsResponse
     *
     * @param ListApiDefinitionsRequest $request
     *
     * @return ListApiDefinitionsResponse
     */
    public function listApiDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiDefinitionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the system tools supported by the MCP service.
     *
     * @param request - ListApiMcpServerSystemToolsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiMcpServerSystemToolsResponse
     *
     * @param ListApiMcpServerSystemToolsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListApiMcpServerSystemToolsResponse
     */
    public function listApiMcpServerSystemToolsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$query['skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiMcpServerSystemTools',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/mcpSystemTools',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiMcpServerSystemToolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the system tools supported by the MCP service.
     *
     * @param request - ListApiMcpServerSystemToolsRequest
     *
     * @returns ListApiMcpServerSystemToolsResponse
     *
     * @param ListApiMcpServerSystemToolsRequest $request
     *
     * @return ListApiMcpServerSystemToolsResponse
     */
    public function listApiMcpServerSystemTools($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiMcpServerSystemToolsWithOptions($request, $headers, $runtime);
    }

    /**
     * This operation queries a list of all API MCP servers in an Alibaba Cloud account.
     *
     * @param request - ListApiMcpServersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiMcpServersResponse
     *
     * @param ListApiMcpServersRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListApiMcpServersResponse
     */
    public function listApiMcpServersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTime) {
            @$query['createTime'] = $request->createTime;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$query['skip'] = $request->skip;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->updateTime) {
            @$query['updateTime'] = $request->updateTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiMcpServers',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/apimcpservers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApiMcpServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation queries a list of all API MCP servers in an Alibaba Cloud account.
     *
     * @param request - ListApiMcpServersRequest
     *
     * @returns ListApiMcpServersResponse
     *
     * @param ListApiMcpServersRequest $request
     *
     * @return ListApiMcpServersResponse
     */
    public function listApiMcpServers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApiMcpServersWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates an API MCP service.
     *
     * @param request - UpdateApiMcpServerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiMcpServerResponse
     *
     * @param UpdateApiMcpServerRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateApiMcpServerResponse
     */
    public function updateApiMcpServerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        $body = [];
        if (null !== $request->additionalApiDescriptions) {
            @$body['additionalApiDescriptions'] = $request->additionalApiDescriptions;
        }

        if (null !== $request->apis) {
            @$body['apis'] = $request->apis;
        }

        if (null !== $request->assumeRoleExtraPolicy) {
            @$body['assumeRoleExtraPolicy'] = $request->assumeRoleExtraPolicy;
        }

        if (null !== $request->assumeRoleName) {
            @$body['assumeRoleName'] = $request->assumeRoleName;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableAssumeRole) {
            @$body['enableAssumeRole'] = $request->enableAssumeRole;
        }

        if (null !== $request->enableCustomVpcWhitelist) {
            @$body['enableCustomVpcWhitelist'] = $request->enableCustomVpcWhitelist;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        if (null !== $request->oauthClientId) {
            @$body['oauthClientId'] = $request->oauthClientId;
        }

        if (null !== $request->prompts) {
            @$body['prompts'] = $request->prompts;
        }

        if (null !== $request->publicAccess) {
            @$body['publicAccess'] = $request->publicAccess;
        }

        if (null !== $request->systemTools) {
            @$body['systemTools'] = $request->systemTools;
        }

        if (null !== $request->terraformTools) {
            @$body['terraformTools'] = $request->terraformTools;
        }

        if (null !== $request->vpcWhitelists) {
            @$body['vpcWhitelists'] = $request->vpcWhitelists;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApiMcpServer',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/apimcpserver',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApiMcpServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an API MCP service.
     *
     * @param request - UpdateApiMcpServerRequest
     *
     * @returns UpdateApiMcpServerResponse
     *
     * @param UpdateApiMcpServerRequest $request
     *
     * @return UpdateApiMcpServerResponse
     */
    public function updateApiMcpServer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApiMcpServerWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the global API MCP Server configuration for a user.
     *
     * @param request - UpdateApiMcpServerUserConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApiMcpServerUserConfigResponse
     *
     * @param UpdateApiMcpServerUserConfigRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateApiMcpServerUserConfigResponse
     */
    public function updateApiMcpServerUserConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enablePublicAccess) {
            @$body['enablePublicAccess'] = $request->enablePublicAccess;
        }

        if (null !== $request->vpcWhitelists) {
            @$body['vpcWhitelists'] = $request->vpcWhitelists;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApiMcpServerUserConfig',
            'version' => '2024-11-30',
            'protocol' => 'HTTPS',
            'pathname' => '/userconfig/update',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApiMcpServerUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the global API MCP Server configuration for a user.
     *
     * @param request - UpdateApiMcpServerUserConfigRequest
     *
     * @returns UpdateApiMcpServerUserConfigResponse
     *
     * @param UpdateApiMcpServerUserConfigRequest $request
     *
     * @return UpdateApiMcpServerUserConfigResponse
     */
    public function updateApiMcpServerUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApiMcpServerUserConfigWithOptions($request, $headers, $runtime);
    }
}
