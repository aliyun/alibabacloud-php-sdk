<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateAliasRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateAliasResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateCustomDomainRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateCustomDomainResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateFunctionRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateFunctionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateLayerVersionRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateLayerVersionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateTriggerRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateTriggerResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateVpcBindingRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\CreateVpcBindingResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteAliasResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteAsyncInvokeConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteAsyncInvokeConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteConcurrencyConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteCustomDomainResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteFunctionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteFunctionVersionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteLayerVersionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteProvisionConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteProvisionConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteTriggerResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\DeleteVpcBindingResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetAliasResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetAsyncInvokeConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\GetAsyncInvokeConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetAsyncTaskRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\GetAsyncTaskResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetConcurrencyConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetCustomDomainResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetFunctionCodeRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\GetFunctionCodeResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetFunctionRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\GetFunctionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetLayerVersionByArnResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetLayerVersionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetProvisionConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\GetProvisionConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\GetTriggerResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\InvokeFunctionHeaders;
use AlibabaCloud\SDK\FC\V20230330\Models\InvokeFunctionRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\InvokeFunctionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListAliasesRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListAliasesResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListAsyncInvokeConfigsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListAsyncInvokeConfigsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListAsyncTasksRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListAsyncTasksResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListConcurrencyConfigsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListConcurrencyConfigsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListCustomDomainsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListCustomDomainsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionsShrinkRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionVersionsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionVersionsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListInstancesRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListInstancesResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListLayersRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListLayersResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListLayerVersionsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListLayerVersionsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListProvisionConfigsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListProvisionConfigsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListTriggersRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListTriggersResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListVpcBindingsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\PublishFunctionVersionRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\PublishFunctionVersionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\PutAsyncInvokeConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\PutAsyncInvokeConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\PutConcurrencyConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\PutConcurrencyConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\PutLayerACLRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\PutLayerACLResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\PutProvisionConfigRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\PutProvisionConfigResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\StopAsyncTaskRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\StopAsyncTaskResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\TagResourcesRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\TagResourcesResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\UntagResourcesShrinkRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateAliasRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateAliasResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateCustomDomainRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateCustomDomainResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateFunctionRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateFunctionResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateTriggerRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\UpdateTriggerResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class FC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('fc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建函数别名。
     *
     * @param request - CreateAliasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAliasResponse
     *
     * @param string             $functionName
     * @param CreateAliasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAliasResponse
     */
    public function createAliasWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateAlias',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/aliases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAliasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建函数别名。
     *
     * @param request - CreateAliasRequest
     *
     * @returns CreateAliasResponse
     *
     * @param string             $functionName
     * @param CreateAliasRequest $request
     *
     * @return CreateAliasResponse
     */
    public function createAlias($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAliasWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Creates a custom domain name.
     *
     * @remarks
     * If you want to use a fixed domain name to access an application or function in a production environment of Function Compute, or to resolve the issue of forced downloads when accessing an HTTP trigger, you can bind a custom domain name to the application or function.
     *
     * @param request - CreateCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomDomainResponse
     *
     * @param CreateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustomDomainResponse
     */
    public function createCustomDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomDomain',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/custom-domains',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a custom domain name.
     *
     * @remarks
     * If you want to use a fixed domain name to access an application or function in a production environment of Function Compute, or to resolve the issue of forced downloads when accessing an HTTP trigger, you can bind a custom domain name to the application or function.
     *
     * @param request - CreateCustomDomainRequest
     *
     * @returns CreateCustomDomainResponse
     *
     * @param CreateCustomDomainRequest $request
     *
     * @return CreateCustomDomainResponse
     */
    public function createCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a function.
     *
     * @remarks
     * Resources of Function Compute are scheduled and run based on functions. A function usually refers to a code snippet that is written by a user and can be independently executed to respond to events and requests.
     *
     * @param request - CreateFunctionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFunctionResponse
     *
     * @param CreateFunctionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateFunction',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a function.
     *
     * @remarks
     * Resources of Function Compute are scheduled and run based on functions. A function usually refers to a code snippet that is written by a user and can be independently executed to respond to events and requests.
     *
     * @param request - CreateFunctionRequest
     *
     * @returns CreateFunctionResponse
     *
     * @param CreateFunctionRequest $request
     *
     * @return CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建层版本。
     *
     * @param request - CreateLayerVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLayerVersionResponse
     *
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLayerVersionResponse
     */
    public function createLayerVersionWithOptions($layerName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateLayerVersion',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layers/' . Url::percentEncode($layerName) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLayerVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建层版本。
     *
     * @param request - CreateLayerVersionRequest
     *
     * @returns CreateLayerVersionResponse
     *
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request
     *
     * @return CreateLayerVersionResponse
     */
    public function createLayerVersion($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLayerVersionWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * 创建函数触发器。
     *
     * @param request - CreateTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTriggerResponse
     *
     * @param string               $functionName
     * @param CreateTriggerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
     */
    public function createTriggerWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateTrigger',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/triggers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建函数触发器。
     *
     * @param request - CreateTriggerRequest
     *
     * @returns CreateTriggerResponse
     *
     * @param string               $functionName
     * @param CreateTriggerRequest $request
     *
     * @return CreateTriggerResponse
     */
    public function createTrigger($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTriggerWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Creates a VPC connection.
     *
     * @param request - CreateVpcBindingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcBindingResponse
     *
     * @param string                  $functionName
     * @param CreateVpcBindingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateVpcBindingResponse
     */
    public function createVpcBindingWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateVpcBinding',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/vpc-bindings',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVpcBindingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVpcBindingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a VPC connection.
     *
     * @param request - CreateVpcBindingRequest
     *
     * @returns CreateVpcBindingResponse
     *
     * @param string                  $functionName
     * @param CreateVpcBindingRequest $request
     *
     * @return CreateVpcBindingResponse
     */
    public function createVpcBinding($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVpcBindingWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Deletes an alias.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAliasResponse
     *
     * @param string         $functionName
     * @param string         $aliasName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAliasResponse
     */
    public function deleteAliasWithOptions($functionName, $aliasName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAlias',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/aliases/' . Url::percentEncode($aliasName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAliasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an alias.
     *
     * @returns DeleteAliasResponse
     *
     * @param string $functionName
     * @param string $aliasName
     *
     * @return DeleteAliasResponse
     */
    public function deleteAlias($functionName, $aliasName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAliasWithOptions($functionName, $aliasName, $headers, $runtime);
    }

    /**
     * Deletes an asynchronous invocation configuration.
     *
     * @param request - DeleteAsyncInvokeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAsyncInvokeConfigResponse
     *
     * @param string                         $functionName
     * @param DeleteAsyncInvokeConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAsyncInvokeConfigResponse
     */
    public function deleteAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAsyncInvokeConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/async-invoke-config',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAsyncInvokeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an asynchronous invocation configuration.
     *
     * @param request - DeleteAsyncInvokeConfigRequest
     *
     * @returns DeleteAsyncInvokeConfigResponse
     *
     * @param string                         $functionName
     * @param DeleteAsyncInvokeConfigRequest $request
     *
     * @return DeleteAsyncInvokeConfigResponse
     */
    public function deleteAsyncInvokeConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Deletes a concurrency configuration.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConcurrencyConfigResponse
     *
     * @param string         $functionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConcurrencyConfigResponse
     */
    public function deleteConcurrencyConfigWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConcurrencyConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/concurrency',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteConcurrencyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteConcurrencyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a concurrency configuration.
     *
     * @returns DeleteConcurrencyConfigResponse
     *
     * @param string $functionName
     *
     * @return DeleteConcurrencyConfigResponse
     */
    public function deleteConcurrencyConfig($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConcurrencyConfigWithOptions($functionName, $headers, $runtime);
    }

    /**
     * Deletes a custom domain name.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomDomainResponse
     *
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomainWithOptions($domainName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCustomDomain',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/custom-domains/' . Url::percentEncode($domainName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom domain name.
     *
     * @returns DeleteCustomDomainResponse
     *
     * @param string $domainName
     *
     * @return DeleteCustomDomainResponse
     */
    public function deleteCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * Deletes a function.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFunctionResponse
     *
     * @param string         $functionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFunction',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a function.
     *
     * @returns DeleteFunctionResponse
     *
     * @param string $functionName
     *
     * @return DeleteFunctionResponse
     */
    public function deleteFunction($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionWithOptions($functionName, $headers, $runtime);
    }

    /**
     * http://pre.hhht/#vpc.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFunctionVersionResponse
     *
     * @param string         $functionName
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFunctionVersionResponse
     */
    public function deleteFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFunctionVersion',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/versions/' . Url::percentEncode($versionId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFunctionVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * http://pre.hhht/#vpc.
     *
     * @returns DeleteFunctionVersionResponse
     *
     * @param string $functionName
     * @param string $versionId
     *
     * @return DeleteFunctionVersionResponse
     */
    public function deleteFunctionVersion($functionName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime);
    }

    /**
     * Deletes a layer version.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLayerVersionResponse
     *
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLayerVersionResponse
     */
    public function deleteLayerVersionWithOptions($layerName, $version, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLayerVersion',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layers/' . Url::percentEncode($layerName) . '/versions/' . Url::percentEncode($version) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayerVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a layer version.
     *
     * @returns DeleteLayerVersionResponse
     *
     * @param string $layerName
     * @param string $version
     *
     * @return DeleteLayerVersionResponse
     */
    public function deleteLayerVersion($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLayerVersionWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * Deletes a provisioned configuration.
     *
     * @param request - DeleteProvisionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProvisionConfigResponse
     *
     * @param string                       $functionName
     * @param DeleteProvisionConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProvisionConfigResponse
     */
    public function deleteProvisionConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProvisionConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/provision-config',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProvisionConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a provisioned configuration.
     *
     * @param request - DeleteProvisionConfigRequest
     *
     * @returns DeleteProvisionConfigResponse
     *
     * @param string                       $functionName
     * @param DeleteProvisionConfigRequest $request
     *
     * @return DeleteProvisionConfigResponse
     */
    public function deleteProvisionConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProvisionConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Deletes a trigger.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTriggerResponse
     *
     * @param string         $functionName
     * @param string         $triggerName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($functionName, $triggerName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTrigger',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/triggers/' . Url::percentEncode($triggerName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a trigger.
     *
     * @returns DeleteTriggerResponse
     *
     * @param string $functionName
     * @param string $triggerName
     *
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger($functionName, $triggerName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTriggerWithOptions($functionName, $triggerName, $headers, $runtime);
    }

    /**
     * Deletes an access control policy from a specified policy group for a VPC firewall.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcBindingResponse
     *
     * @param string         $functionName
     * @param string         $vpcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteVpcBindingResponse
     */
    public function deleteVpcBindingWithOptions($functionName, $vpcId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteVpcBinding',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/vpc-bindings/' . Url::percentEncode($vpcId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVpcBindingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVpcBindingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an access control policy from a specified policy group for a VPC firewall.
     *
     * @returns DeleteVpcBindingResponse
     *
     * @param string $functionName
     * @param string $vpcId
     *
     * @return DeleteVpcBindingResponse
     */
    public function deleteVpcBinding($functionName, $vpcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVpcBindingWithOptions($functionName, $vpcId, $headers, $runtime);
    }

    /**
     * Queries information about an alias.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAliasResponse
     *
     * @param string         $functionName
     * @param string         $aliasName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAliasResponse
     */
    public function getAliasWithOptions($functionName, $aliasName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAlias',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/aliases/' . Url::percentEncode($aliasName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAliasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about an alias.
     *
     * @returns GetAliasResponse
     *
     * @param string $functionName
     * @param string $aliasName
     *
     * @return GetAliasResponse
     */
    public function getAlias($functionName, $aliasName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAliasWithOptions($functionName, $aliasName, $headers, $runtime);
    }

    /**
     * Gets asynchronous invocation configurations of a function.
     *
     * @param request - GetAsyncInvokeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncInvokeConfigResponse
     *
     * @param string                      $functionName
     * @param GetAsyncInvokeConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAsyncInvokeConfigResponse
     */
    public function getAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncInvokeConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/async-invoke-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAsyncInvokeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Gets asynchronous invocation configurations of a function.
     *
     * @param request - GetAsyncInvokeConfigRequest
     *
     * @returns GetAsyncInvokeConfigResponse
     *
     * @param string                      $functionName
     * @param GetAsyncInvokeConfigRequest $request
     *
     * @return GetAsyncInvokeConfigResponse
     */
    public function getAsyncInvokeConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries the information about an asynchronous task.
     *
     * @param request - GetAsyncTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncTaskResponse
     *
     * @param string              $functionName
     * @param string              $taskId
     * @param GetAsyncTaskRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncTask',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/async-tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an asynchronous task.
     *
     * @param request - GetAsyncTaskRequest
     *
     * @returns GetAsyncTaskResponse
     *
     * @param string              $functionName
     * @param string              $taskId
     * @param GetAsyncTaskRequest $request
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTask($functionName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime);
    }

    /**
     * Obtains a concurrency configuration.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConcurrencyConfigResponse
     *
     * @param string         $functionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConcurrencyConfigResponse
     */
    public function getConcurrencyConfigWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConcurrencyConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/concurrency',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetConcurrencyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetConcurrencyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains a concurrency configuration.
     *
     * @returns GetConcurrencyConfigResponse
     *
     * @param string $functionName
     *
     * @return GetConcurrencyConfigResponse
     */
    public function getConcurrencyConfig($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConcurrencyConfigWithOptions($functionName, $headers, $runtime);
    }

    /**
     * Queries information about a custom domain name.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomDomainResponse
     *
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomainWithOptions($domainName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCustomDomain',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/custom-domains/' . Url::percentEncode($domainName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about a custom domain name.
     *
     * @returns GetCustomDomainResponse
     *
     * @param string $domainName
     *
     * @return GetCustomDomainResponse
     */
    public function getCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * http://pre.hhht/#vpc.
     *
     * @param request - GetFunctionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionResponse
     *
     * @param string             $functionName
     * @param GetFunctionRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetFunctionResponse
     */
    public function getFunctionWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFunction',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * http://pre.hhht/#vpc.
     *
     * @param request - GetFunctionRequest
     *
     * @returns GetFunctionResponse
     *
     * @param string             $functionName
     * @param GetFunctionRequest $request
     *
     * @return GetFunctionResponse
     */
    public function getFunction($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries a code package of a function.
     *
     * @param request - GetFunctionCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFunctionCodeResponse
     *
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetFunctionCodeResponse
     */
    public function getFunctionCodeWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFunctionCode',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/code',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFunctionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFunctionCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a code package of a function.
     *
     * @param request - GetFunctionCodeRequest
     *
     * @returns GetFunctionCodeResponse
     *
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request
     *
     * @return GetFunctionCodeResponse
     */
    public function getFunctionCode($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionCodeWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries versions of a layer.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLayerVersionResponse
     *
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLayerVersionResponse
     */
    public function getLayerVersionWithOptions($layerName, $version, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLayerVersion',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layers/' . Url::percentEncode($layerName) . '/versions/' . Url::percentEncode($version) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLayerVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries versions of a layer.
     *
     * @returns GetLayerVersionResponse
     *
     * @param string $layerName
     * @param string $version
     *
     * @return GetLayerVersionResponse
     */
    public function getLayerVersion($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerVersionWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * Obtain version information of a layer by using ARNs.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLayerVersionByArnResponse
     *
     * @param string         $arn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArnWithOptions($arn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLayerVersionByArn',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layerarn/' . Url::percentEncode($arn) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLayerVersionByArnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLayerVersionByArnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain version information of a layer by using ARNs.
     *
     * @returns GetLayerVersionByArnResponse
     *
     * @param string $arn
     *
     * @return GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArn($arn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerVersionByArnWithOptions($arn, $headers, $runtime);
    }

    /**
     * Queries provisioned configurations.
     *
     * @param request - GetProvisionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProvisionConfigResponse
     *
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetProvisionConfigResponse
     */
    public function getProvisionConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProvisionConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/provision-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProvisionConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries provisioned configurations.
     *
     * @param request - GetProvisionConfigRequest
     *
     * @returns GetProvisionConfigResponse
     *
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request
     *
     * @return GetProvisionConfigResponse
     */
    public function getProvisionConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProvisionConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries information about a trigger.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTriggerResponse
     *
     * @param string         $functionName
     * @param string         $triggerName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTriggerResponse
     */
    public function getTriggerWithOptions($functionName, $triggerName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTrigger',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/triggers/' . Url::percentEncode($triggerName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about a trigger.
     *
     * @returns GetTriggerResponse
     *
     * @param string $functionName
     * @param string $triggerName
     *
     * @return GetTriggerResponse
     */
    public function getTrigger($functionName, $triggerName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTriggerWithOptions($functionName, $triggerName, $headers, $runtime);
    }

    /**
     * Invokes a function.
     *
     * @param request - InvokeFunctionRequest
     * @param headers - InvokeFunctionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeFunctionResponse
     *
     * @param string                $functionName
     * @param InvokeFunctionRequest $request
     * @param InvokeFunctionHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InvokeFunctionResponse
     */
    public function invokeFunctionWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xFcAsyncTaskId) {
            @$realHeaders['x-fc-async-task-id'] = '' . $headers->xFcAsyncTaskId;
        }

        if (null !== $headers->xFcInvocationType) {
            @$realHeaders['x-fc-invocation-type'] = '' . $headers->xFcInvocationType;
        }

        if (null !== $headers->xFcLogType) {
            @$realHeaders['x-fc-log-type'] = '' . $headers->xFcLogType;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'InvokeFunction',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/invocations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'binary',
        ]);
        $res = new InvokeFunctionResponse([]);
        $tmp = $this->callApi($params, $req, $runtime);
        if (null !== @$tmp['body']) {
            $respBody = StreamUtil::streamFor(@$tmp['body']);
            $res->body = $respBody;
        }

        if (null !== @$tmp['headers']) {
            $respHeaders = @$tmp['headers'];
            $res->headers = Utils::stringifyMapValue($respHeaders);
        }

        if (null !== @$tmp['statusCode']) {
            $statusCode = (int) (@$tmp['statusCode']);
            $res->statusCode = $statusCode;
        }

        return $res;
    }

    /**
     * Invokes a function.
     *
     * @param request - InvokeFunctionRequest
     *
     * @returns InvokeFunctionResponse
     *
     * @param string                $functionName
     * @param InvokeFunctionRequest $request
     *
     * @return InvokeFunctionResponse
     */
    public function invokeFunction($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvokeFunctionHeaders([]);

        return $this->invokeFunctionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries aliases.
     *
     * @param request - ListAliasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAliasesResponse
     *
     * @param string             $functionName
     * @param ListAliasesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListAliasesResponse
     */
    public function listAliasesWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAliases',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/aliases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAliasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries aliases.
     *
     * @param request - ListAliasesRequest
     *
     * @returns ListAliasesResponse
     *
     * @param string             $functionName
     * @param ListAliasesRequest $request
     *
     * @return ListAliasesResponse
     */
    public function listAliases($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAliasesWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries all asynchronous configurations of a function.
     *
     * @param request - ListAsyncInvokeConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsyncInvokeConfigsResponse
     *
     * @param ListAsyncInvokeConfigsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListAsyncInvokeConfigsResponse
     */
    public function listAsyncInvokeConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionName) {
            @$query['functionName'] = $request->functionName;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAsyncInvokeConfigs',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/async-invoke-configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAsyncInvokeConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAsyncInvokeConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all asynchronous configurations of a function.
     *
     * @param request - ListAsyncInvokeConfigsRequest
     *
     * @returns ListAsyncInvokeConfigsResponse
     *
     * @param ListAsyncInvokeConfigsRequest $request
     *
     * @return ListAsyncInvokeConfigsResponse
     */
    public function listAsyncInvokeConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAsyncInvokeConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists asynchronous tasks.
     *
     * @param request - ListAsyncTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsyncTasksResponse
     *
     * @param string                $functionName
     * @param ListAsyncTasksRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasksWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->includePayload) {
            @$query['includePayload'] = $request->includePayload;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        if (null !== $request->sortOrderByTime) {
            @$query['sortOrderByTime'] = $request->sortOrderByTime;
        }

        if (null !== $request->startedTimeBegin) {
            @$query['startedTimeBegin'] = $request->startedTimeBegin;
        }

        if (null !== $request->startedTimeEnd) {
            @$query['startedTimeEnd'] = $request->startedTimeEnd;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAsyncTasks',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/async-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAsyncTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists asynchronous tasks.
     *
     * @param request - ListAsyncTasksRequest
     *
     * @returns ListAsyncTasksResponse
     *
     * @param string                $functionName
     * @param ListAsyncTasksRequest $request
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasks($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAsyncTasksWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * 列出函数并发度配置。
     *
     * @param request - ListConcurrencyConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConcurrencyConfigsResponse
     *
     * @param ListConcurrencyConfigsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListConcurrencyConfigsResponse
     */
    public function listConcurrencyConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionName) {
            @$query['functionName'] = $request->functionName;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConcurrencyConfigs',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/concurrency-configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListConcurrencyConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListConcurrencyConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出函数并发度配置。
     *
     * @param request - ListConcurrencyConfigsRequest
     *
     * @returns ListConcurrencyConfigsResponse
     *
     * @param ListConcurrencyConfigsRequest $request
     *
     * @return ListConcurrencyConfigsResponse
     */
    public function listConcurrencyConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConcurrencyConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries custom domain names.
     *
     * @param request - ListCustomDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomDomainsResponse
     *
     * @param ListCustomDomainsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomDomainsResponse
     */
    public function listCustomDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomDomains',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/custom-domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries custom domain names.
     *
     * @param request - ListCustomDomainsRequest
     *
     * @returns ListCustomDomainsResponse
     *
     * @param ListCustomDomainsRequest $request
     *
     * @return ListCustomDomainsResponse
     */
    public function listCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCustomDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries versions of a function.
     *
     * @param request - ListFunctionVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionVersionsResponse
     *
     * @param string                      $functionName
     * @param ListFunctionVersionsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListFunctionVersionsResponse
     */
    public function listFunctionVersionsWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['direction'] = $request->direction;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctionVersions',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFunctionVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFunctionVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries versions of a function.
     *
     * @param request - ListFunctionVersionsRequest
     *
     * @returns ListFunctionVersionsResponse
     *
     * @param string                      $functionName
     * @param ListFunctionVersionsRequest $request
     *
     * @return ListFunctionVersionsResponse
     */
    public function listFunctionVersions($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionVersionsWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * 列出函数。
     *
     * @param tmpReq - ListFunctionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFunctionsResponse
     *
     * @param ListFunctionsRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListFunctionsResponse
     */
    public function listFunctionsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFunctionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->fcVersion) {
            @$query['fcVersion'] = $request->fcVersion;
        }

        if (null !== $request->gpuType) {
            @$query['gpuType'] = $request->gpuType;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        if (null !== $request->runtime) {
            @$query['runtime'] = $request->runtime;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFunctions',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFunctionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出函数。
     *
     * @param request - ListFunctionsRequest
     *
     * @returns ListFunctionsResponse
     *
     * @param ListFunctionsRequest $request
     *
     * @return ListFunctionsResponse
     */
    public function listFunctions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of function instances.
     *
     * @param tmpReq - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param string               $functionName
     * @param ListInstancesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($functionName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'instanceIds', 'json');
        }

        if (null !== $tmpReq->instanceStatus) {
            $request->instanceStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceStatus, 'instanceStatus', 'json');
        }

        $query = [];
        if (null !== $request->endTimeMs) {
            @$query['endTimeMs'] = $request->endTimeMs;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['instanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->instanceStatusShrink) {
            @$query['instanceStatus'] = $request->instanceStatusShrink;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        if (null !== $request->startKey) {
            @$query['startKey'] = $request->startKey;
        }

        if (null !== $request->startTimeMs) {
            @$query['startTimeMs'] = $request->startTimeMs;
        }

        if (null !== $request->withAllActive) {
            @$query['withAllActive'] = $request->withAllActive;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of function instances.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param string               $functionName
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Gets a list of layer versions.
     *
     * @param request - ListLayerVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLayerVersionsResponse
     *
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListLayerVersionsResponse
     */
    public function listLayerVersionsWithOptions($layerName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->startVersion) {
            @$query['startVersion'] = $request->startVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLayerVersions',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layers/' . Url::percentEncode($layerName) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLayerVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLayerVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Gets a list of layer versions.
     *
     * @param request - ListLayerVersionsRequest
     *
     * @returns ListLayerVersionsResponse
     *
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request
     *
     * @return ListLayerVersionsResponse
     */
    public function listLayerVersions($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayerVersionsWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * Gets a list of layers.
     *
     * @param request - ListLayersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLayersResponse
     *
     * @param ListLayersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListLayersResponse
     */
    public function listLayersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->official) {
            @$query['official'] = $request->official;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        if (null !== $request->public) {
            @$query['public'] = $request->public;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLayers',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLayersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLayersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Gets a list of layers.
     *
     * @param request - ListLayersRequest
     *
     * @returns ListLayersResponse
     *
     * @param ListLayersRequest $request
     *
     * @return ListLayersResponse
     */
    public function listLayers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayersWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of provisioned configurations.
     *
     * @param request - ListProvisionConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProvisionConfigsResponse
     *
     * @param ListProvisionConfigsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProvisionConfigsResponse
     */
    public function listProvisionConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionName) {
            @$query['functionName'] = $request->functionName;
        }

        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProvisionConfigs',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/provision-configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProvisionConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProvisionConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of provisioned configurations.
     *
     * @param request - ListProvisionConfigsRequest
     *
     * @returns ListProvisionConfigsResponse
     *
     * @param ListProvisionConfigsRequest $request
     *
     * @return ListProvisionConfigsResponse
     */
    public function listProvisionConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProvisionConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists all tagged resources.
     *
     * @param tmpReq - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/tags-v2',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists all tagged resources.
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
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the triggers of a function.
     *
     * @param request - ListTriggersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTriggersResponse
     *
     * @param string              $functionName
     * @param ListTriggersRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListTriggersResponse
     */
    public function listTriggersWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->prefix) {
            @$query['prefix'] = $request->prefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTriggers',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/triggers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTriggersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the triggers of a function.
     *
     * @param request - ListTriggersRequest
     *
     * @returns ListTriggersResponse
     *
     * @param string              $functionName
     * @param ListTriggersRequest $request
     *
     * @return ListTriggersResponse
     */
    public function listTriggers($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTriggersWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Queries a list of existing VPC connections.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcBindingsResponse
     *
     * @param string         $functionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListVpcBindingsResponse
     */
    public function listVpcBindingsWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListVpcBindings',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/vpc-bindings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVpcBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVpcBindingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of existing VPC connections.
     *
     * @returns ListVpcBindingsResponse
     *
     * @param string $functionName
     *
     * @return ListVpcBindingsResponse
     */
    public function listVpcBindings($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcBindingsWithOptions($functionName, $headers, $runtime);
    }

    /**
     * Publishes a function version.
     *
     * @param request - PublishFunctionVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishFunctionVersionResponse
     *
     * @param string                        $functionName
     * @param PublishFunctionVersionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PublishFunctionVersionResponse
     */
    public function publishFunctionVersionWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PublishFunctionVersion',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PublishFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishFunctionVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Publishes a function version.
     *
     * @param request - PublishFunctionVersionRequest
     *
     * @returns PublishFunctionVersionResponse
     *
     * @param string                        $functionName
     * @param PublishFunctionVersionRequest $request
     *
     * @return PublishFunctionVersionResponse
     */
    public function publishFunctionVersion($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishFunctionVersionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Creates or modifies an asynchronous invocation configuration for a function.
     *
     * @param request - PutAsyncInvokeConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutAsyncInvokeConfigResponse
     *
     * @param string                      $functionName
     * @param PutAsyncInvokeConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutAsyncInvokeConfigResponse
     */
    public function putAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PutAsyncInvokeConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/async-invoke-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutAsyncInvokeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates or modifies an asynchronous invocation configuration for a function.
     *
     * @param request - PutAsyncInvokeConfigRequest
     *
     * @returns PutAsyncInvokeConfigResponse
     *
     * @param string                      $functionName
     * @param PutAsyncInvokeConfigRequest $request
     *
     * @return PutAsyncInvokeConfigResponse
     */
    public function putAsyncInvokeConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Configures concurrency of a function.
     *
     * @param request - PutConcurrencyConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutConcurrencyConfigResponse
     *
     * @param string                      $functionName
     * @param PutConcurrencyConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutConcurrencyConfigResponse
     */
    public function putConcurrencyConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PutConcurrencyConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/concurrency',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutConcurrencyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutConcurrencyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures concurrency of a function.
     *
     * @param request - PutConcurrencyConfigRequest
     *
     * @returns PutConcurrencyConfigResponse
     *
     * @param string                      $functionName
     * @param PutConcurrencyConfigRequest $request
     *
     * @return PutConcurrencyConfigResponse
     */
    public function putConcurrencyConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putConcurrencyConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Modifies permissions of a layer.
     *
     * @param request - PutLayerACLRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutLayerACLResponse
     *
     * @param string             $layerName
     * @param PutLayerACLRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PutLayerACLResponse
     */
    public function putLayerACLWithOptions($layerName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acl) {
            @$query['acl'] = $request->acl;
        }

        if (null !== $request->public) {
            @$query['public'] = $request->public;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutLayerACL',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/layers/' . Url::percentEncode($layerName) . '/acl',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutLayerACLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutLayerACLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies permissions of a layer.
     *
     * @param request - PutLayerACLRequest
     *
     * @returns PutLayerACLResponse
     *
     * @param string             $layerName
     * @param PutLayerACLRequest $request
     *
     * @return PutLayerACLResponse
     */
    public function putLayerACL($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putLayerACLWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * Creates provisioned configurations.
     *
     * @param request - PutProvisionConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutProvisionConfigResponse
     *
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PutProvisionConfigResponse
     */
    public function putProvisionConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PutProvisionConfig',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/provision-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutProvisionConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates provisioned configurations.
     *
     * @param request - PutProvisionConfigRequest
     *
     * @returns PutProvisionConfigResponse
     *
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request
     *
     * @return PutProvisionConfigResponse
     */
    public function putProvisionConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProvisionConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Stops an asynchronous task.
     *
     * @param request - StopAsyncTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAsyncTaskResponse
     *
     * @param string               $functionName
     * @param string               $taskId
     * @param StopAsyncTaskRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopAsyncTaskResponse
     */
    public function stopAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->qualifier) {
            @$query['qualifier'] = $request->qualifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopAsyncTask',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/async-tasks/' . Url::percentEncode($taskId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops an asynchronous task.
     *
     * @param request - StopAsyncTaskRequest
     *
     * @returns StopAsyncTaskResponse
     *
     * @param string               $functionName
     * @param string               $taskId
     * @param StopAsyncTaskRequest $request
     *
     * @return StopAsyncTaskResponse
     */
    public function stopAsyncTask($functionName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime);
    }

    /**
     * Adds tags to a resource.
     *
     * @remarks
     * Tags are used to identify resources. Tags allow you to categorize, search for, and aggregate resources that have the same characteristics from different dimensions. This facilitates resource management. For more information, see [Tag overview](https://help.aliyun.com/document_detail/156983.html).
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/tags-v2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds tags to a resource.
     *
     * @remarks
     * Tags are used to identify resources. Tags allow you to categorize, search for, and aggregate resources that have the same characteristics from different dimensions. This facilitates resource management. For more information, see [Tag overview](https://help.aliyun.com/document_detail/156983.html).
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
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes tags from a resource.
     *
     * @param tmpReq - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UntagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['TagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/tags-v2',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags from a resource.
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
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates an alias.
     *
     * @param request - UpdateAliasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAliasResponse
     *
     * @param string             $functionName
     * @param string             $aliasName
     * @param UpdateAliasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAliasResponse
     */
    public function updateAliasWithOptions($functionName, $aliasName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlias',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/aliases/' . Url::percentEncode($aliasName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAliasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an alias.
     *
     * @param request - UpdateAliasRequest
     *
     * @returns UpdateAliasResponse
     *
     * @param string             $functionName
     * @param string             $aliasName
     * @param UpdateAliasRequest $request
     *
     * @return UpdateAliasResponse
     */
    public function updateAlias($functionName, $aliasName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAliasWithOptions($functionName, $aliasName, $request, $headers, $runtime);
    }

    /**
     * Update a custom domain name.
     *
     * @param request - UpdateCustomDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomDomainResponse
     *
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCustomDomainResponse
     */
    public function updateCustomDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomDomain',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/custom-domains/' . Url::percentEncode($domainName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Update a custom domain name.
     *
     * @param request - UpdateCustomDomainRequest
     *
     * @returns UpdateCustomDomainResponse
     *
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     *
     * @return UpdateCustomDomainResponse
     */
    public function updateCustomDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCustomDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * Updates the information about a function.
     *
     * @param request - UpdateFunctionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFunctionResponse
     *
     * @param string                $functionName
     * @param UpdateFunctionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($functionName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateFunction',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFunctionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a function.
     *
     * @param request - UpdateFunctionRequest
     *
     * @returns UpdateFunctionResponse
     *
     * @param string                $functionName
     * @param UpdateFunctionRequest $request
     *
     * @return UpdateFunctionResponse
     */
    public function updateFunction($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * Modifies a trigger.
     *
     * @param request - UpdateTriggerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTriggerResponse
     *
     * @param string               $functionName
     * @param string               $triggerName
     * @param UpdateTriggerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateTriggerResponse
     */
    public function updateTriggerWithOptions($functionName, $triggerName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrigger',
            'version' => '2023-03-30',
            'protocol' => 'HTTPS',
            'pathname' => '/2023-03-30/functions/' . Url::percentEncode($functionName) . '/triggers/' . Url::percentEncode($triggerName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTriggerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a trigger.
     *
     * @param request - UpdateTriggerRequest
     *
     * @returns UpdateTriggerResponse
     *
     * @param string               $functionName
     * @param string               $triggerName
     * @param UpdateTriggerRequest $request
     *
     * @return UpdateTriggerResponse
     */
    public function updateTrigger($functionName, $triggerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTriggerWithOptions($functionName, $triggerName, $request, $headers, $runtime);
    }
}
