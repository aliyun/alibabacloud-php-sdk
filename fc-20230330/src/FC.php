<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionVersionsRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListFunctionVersionsResponse;
use AlibabaCloud\SDK\FC\V20230330\Models\ListInstancesRequest;
use AlibabaCloud\SDK\FC\V20230330\Models\ListInstancesResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 创建函数别名。
     *  *
     * @param string             $functionName
     * @param CreateAliasRequest $request      CreateAliasRequest
     * @param string[]           $headers      map
     * @param RuntimeOptions     $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateAliasResponse CreateAliasResponse
     */
    public function createAliasWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlias',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/aliases',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建函数别名。
     *  *
     * @param string             $functionName
     * @param CreateAliasRequest $request      CreateAliasRequest
     *
     * @return CreateAliasResponse CreateAliasResponse
     */
    public function createAlias($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAliasWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary 创建自定义域名。
     *  *
     * @param CreateCustomDomainRequest $request CreateCustomDomainRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomDomainResponse CreateCustomDomainResponse
     */
    public function createCustomDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomDomain',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/custom-domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义域名。
     *  *
     * @param CreateCustomDomainRequest $request CreateCustomDomainRequest
     *
     * @return CreateCustomDomainResponse CreateCustomDomainResponse
     */
    public function createCustomDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a function.
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunctionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunction',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a function.
     *  *
     * @param CreateFunctionRequest $request CreateFunctionRequest
     *
     * @return CreateFunctionResponse CreateFunctionResponse
     */
    public function createFunction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建层版本。
     *  *
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request   CreateLayerVersionRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateLayerVersionResponse CreateLayerVersionResponse
     */
    public function createLayerVersionWithOptions($layerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateLayerVersion',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layers/' . OpenApiUtilClient::getEncodeParam($layerName) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建层版本。
     *  *
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request   CreateLayerVersionRequest
     *
     * @return CreateLayerVersionResponse CreateLayerVersionResponse
     */
    public function createLayerVersion($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLayerVersionWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * @summary 创建函数触发器。
     *  *
     * @param string               $functionName
     * @param CreateTriggerRequest $request      CreateTriggerRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateTriggerResponse CreateTriggerResponse
     */
    public function createTriggerWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrigger',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/triggers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建函数触发器。
     *  *
     * @param string               $functionName
     * @param CreateTriggerRequest $request      CreateTriggerRequest
     *
     * @return CreateTriggerResponse CreateTriggerResponse
     */
    public function createTrigger($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTriggerWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a VPC connection.
     *  *
     * @param string                  $functionName
     * @param CreateVpcBindingRequest $request      CreateVpcBindingRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateVpcBindingResponse CreateVpcBindingResponse
     */
    public function createVpcBindingWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcBinding',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/vpc-bindings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateVpcBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a VPC connection.
     *  *
     * @param string                  $functionName
     * @param CreateVpcBindingRequest $request      CreateVpcBindingRequest
     *
     * @return CreateVpcBindingResponse CreateVpcBindingResponse
     */
    public function createVpcBinding($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVpcBindingWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes an alias.
     *  *
     * @param string         $functionName
     * @param string         $aliasName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteAliasResponse DeleteAliasResponse
     */
    public function deleteAliasWithOptions($functionName, $aliasName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAlias',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/aliases/' . OpenApiUtilClient::getEncodeParam($aliasName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an alias.
     *  *
     * @param string $functionName
     * @param string $aliasName
     *
     * @return DeleteAliasResponse DeleteAliasResponse
     */
    public function deleteAlias($functionName, $aliasName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAliasWithOptions($functionName, $aliasName, $headers, $runtime);
    }

    /**
     * @summary Deletes an asynchronous invocation configuration.
     *  *
     * @param string                         $functionName
     * @param DeleteAsyncInvokeConfigRequest $request      DeleteAsyncInvokeConfigRequest
     * @param string[]                       $headers      map
     * @param RuntimeOptions                 $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteAsyncInvokeConfigResponse DeleteAsyncInvokeConfigResponse
     */
    public function deleteAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAsyncInvokeConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/async-invoke-config',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an asynchronous invocation configuration.
     *  *
     * @param string                         $functionName
     * @param DeleteAsyncInvokeConfigRequest $request      DeleteAsyncInvokeConfigRequest
     *
     * @return DeleteAsyncInvokeConfigResponse DeleteAsyncInvokeConfigResponse
     */
    public function deleteAsyncInvokeConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a concurrency configuration.
     *  *
     * @param string         $functionName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteConcurrencyConfigResponse DeleteConcurrencyConfigResponse
     */
    public function deleteConcurrencyConfigWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteConcurrencyConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/concurrency',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteConcurrencyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a concurrency configuration.
     *  *
     * @param string $functionName
     *
     * @return DeleteConcurrencyConfigResponse DeleteConcurrencyConfigResponse
     */
    public function deleteConcurrencyConfig($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConcurrencyConfigWithOptions($functionName, $headers, $runtime);
    }

    /**
     * @summary Deletes a custom domain name.
     *  *
     * @param string         $domainName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomDomainResponse DeleteCustomDomainResponse
     */
    public function deleteCustomDomainWithOptions($domainName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomDomain',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/custom-domains/' . OpenApiUtilClient::getEncodeParam($domainName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom domain name.
     *  *
     * @param string $domainName
     *
     * @return DeleteCustomDomainResponse DeleteCustomDomainResponse
     */
    public function deleteCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * @summary Deletes a function.
     *  *
     * @param string         $functionName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunctionWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunction',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a function.
     *  *
     * @param string $functionName
     *
     * @return DeleteFunctionResponse DeleteFunctionResponse
     */
    public function deleteFunction($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionWithOptions($functionName, $headers, $runtime);
    }

    /**
     * @summary Deletes a function version.
     *  *
     * @param string         $functionName
     * @param string         $versionId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteFunctionVersionResponse DeleteFunctionVersionResponse
     */
    public function deleteFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionVersion',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/versions/' . OpenApiUtilClient::getEncodeParam($versionId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a function version.
     *  *
     * @param string $functionName
     * @param string $versionId
     *
     * @return DeleteFunctionVersionResponse DeleteFunctionVersionResponse
     */
    public function deleteFunctionVersion($functionName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime);
    }

    /**
     * @summary Deletes a layer version.
     *  *
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteLayerVersionResponse DeleteLayerVersionResponse
     */
    public function deleteLayerVersionWithOptions($layerName, $version, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLayerVersion',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layers/' . OpenApiUtilClient::getEncodeParam($layerName) . '/versions/' . OpenApiUtilClient::getEncodeParam($version) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a layer version.
     *  *
     * @param string $layerName
     * @param string $version
     *
     * @return DeleteLayerVersionResponse DeleteLayerVersionResponse
     */
    public function deleteLayerVersion($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLayerVersionWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * @summary Deletes a provisioned configuration.
     *  *
     * @param string                       $functionName
     * @param DeleteProvisionConfigRequest $request      DeleteProvisionConfigRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteProvisionConfigResponse DeleteProvisionConfigResponse
     */
    public function deleteProvisionConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProvisionConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/provision-config',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a provisioned configuration.
     *  *
     * @param string                       $functionName
     * @param DeleteProvisionConfigRequest $request      DeleteProvisionConfigRequest
     *
     * @return DeleteProvisionConfigResponse DeleteProvisionConfigResponse
     */
    public function deleteProvisionConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProvisionConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a trigger.
     *  *
     * @param string         $functionName
     * @param string         $triggerName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteTriggerResponse DeleteTriggerResponse
     */
    public function deleteTriggerWithOptions($functionName, $triggerName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteTrigger',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/triggers/' . OpenApiUtilClient::getEncodeParam($triggerName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a trigger.
     *  *
     * @param string $functionName
     * @param string $triggerName
     *
     * @return DeleteTriggerResponse DeleteTriggerResponse
     */
    public function deleteTrigger($functionName, $triggerName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTriggerWithOptions($functionName, $triggerName, $headers, $runtime);
    }

    /**
     * @summary Deletes an access control policy from a specified policy group for a VPC firewall.
     *  *
     * @param string         $functionName
     * @param string         $vpcId
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcBindingResponse DeleteVpcBindingResponse
     */
    public function deleteVpcBindingWithOptions($functionName, $vpcId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteVpcBinding',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/vpc-bindings/' . OpenApiUtilClient::getEncodeParam($vpcId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteVpcBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an access control policy from a specified policy group for a VPC firewall.
     *  *
     * @param string $functionName
     * @param string $vpcId
     *
     * @return DeleteVpcBindingResponse DeleteVpcBindingResponse
     */
    public function deleteVpcBinding($functionName, $vpcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVpcBindingWithOptions($functionName, $vpcId, $headers, $runtime);
    }

    /**
     * @summary Queries information about an alias.
     *  *
     * @param string         $functionName
     * @param string         $aliasName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetAliasResponse GetAliasResponse
     */
    public function getAliasWithOptions($functionName, $aliasName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAlias',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/aliases/' . OpenApiUtilClient::getEncodeParam($aliasName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about an alias.
     *  *
     * @param string $functionName
     * @param string $aliasName
     *
     * @return GetAliasResponse GetAliasResponse
     */
    public function getAlias($functionName, $aliasName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAliasWithOptions($functionName, $aliasName, $headers, $runtime);
    }

    /**
     * @summary Gets asynchronous invocation configurations of a function.
     *  *
     * @param string                      $functionName
     * @param GetAsyncInvokeConfigRequest $request      GetAsyncInvokeConfigRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetAsyncInvokeConfigResponse GetAsyncInvokeConfigResponse
     */
    public function getAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncInvokeConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/async-invoke-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Gets asynchronous invocation configurations of a function.
     *  *
     * @param string                      $functionName
     * @param GetAsyncInvokeConfigRequest $request      GetAsyncInvokeConfigRequest
     *
     * @return GetAsyncInvokeConfigResponse GetAsyncInvokeConfigResponse
     */
    public function getAsyncInvokeConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about an asynchronous task.
     *  *
     * @param string              $functionName
     * @param string              $taskId
     * @param GetAsyncTaskRequest $request      GetAsyncTaskRequest
     * @param string[]            $headers      map
     * @param RuntimeOptions      $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetAsyncTaskResponse GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncTask',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/async-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an asynchronous task.
     *  *
     * @param string              $functionName
     * @param string              $taskId
     * @param GetAsyncTaskRequest $request      GetAsyncTaskRequest
     *
     * @return GetAsyncTaskResponse GetAsyncTaskResponse
     */
    public function getAsyncTask($functionName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains a concurrency configuration.
     *  *
     * @param string         $functionName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetConcurrencyConfigResponse GetConcurrencyConfigResponse
     */
    public function getConcurrencyConfigWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetConcurrencyConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/concurrency',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConcurrencyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a concurrency configuration.
     *  *
     * @param string $functionName
     *
     * @return GetConcurrencyConfigResponse GetConcurrencyConfigResponse
     */
    public function getConcurrencyConfig($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConcurrencyConfigWithOptions($functionName, $headers, $runtime);
    }

    /**
     * @summary Queries information about a custom domain name.
     *  *
     * @param string         $domainName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetCustomDomainResponse GetCustomDomainResponse
     */
    public function getCustomDomainWithOptions($domainName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCustomDomain',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/custom-domains/' . OpenApiUtilClient::getEncodeParam($domainName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a custom domain name.
     *  *
     * @param string $domainName
     *
     * @return GetCustomDomainResponse GetCustomDomainResponse
     */
    public function getCustomDomain($domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomDomainWithOptions($domainName, $headers, $runtime);
    }

    /**
     * @summary Queries information about a function.
     *  *
     * @param string             $functionName
     * @param GetFunctionRequest $request      GetFunctionRequest
     * @param string[]           $headers      map
     * @param RuntimeOptions     $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunctionWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunction',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a function.
     *  *
     * @param string             $functionName
     * @param GetFunctionRequest $request      GetFunctionRequest
     *
     * @return GetFunctionResponse GetFunctionResponse
     */
    public function getFunction($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a code package of a function.
     *  *
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request      GetFunctionCodeRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetFunctionCodeResponse GetFunctionCodeResponse
     */
    public function getFunctionCodeWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionCode',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/code',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a code package of a function.
     *  *
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request      GetFunctionCodeRequest
     *
     * @return GetFunctionCodeResponse GetFunctionCodeResponse
     */
    public function getFunctionCode($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionCodeWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries versions of a layer.
     *  *
     * @param string         $layerName
     * @param string         $version
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetLayerVersionResponse GetLayerVersionResponse
     */
    public function getLayerVersionWithOptions($layerName, $version, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLayerVersion',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layers/' . OpenApiUtilClient::getEncodeParam($layerName) . '/versions/' . OpenApiUtilClient::getEncodeParam($version) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayerVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries versions of a layer.
     *  *
     * @param string $layerName
     * @param string $version
     *
     * @return GetLayerVersionResponse GetLayerVersionResponse
     */
    public function getLayerVersion($layerName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerVersionWithOptions($layerName, $version, $headers, $runtime);
    }

    /**
     * @summary Obtain version information of a layer by using ARNs.
     *  *
     * @param string         $arn
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLayerVersionByArnResponse GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArnWithOptions($arn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLayerVersionByArn',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layerarn/' . OpenApiUtilClient::getEncodeParam($arn) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayerVersionByArnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtain version information of a layer by using ARNs.
     *  *
     * @param string $arn
     *
     * @return GetLayerVersionByArnResponse GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArn($arn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLayerVersionByArnWithOptions($arn, $headers, $runtime);
    }

    /**
     * @summary Queries provisioned configurations.
     *  *
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request      GetProvisionConfigRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetProvisionConfigResponse GetProvisionConfigResponse
     */
    public function getProvisionConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProvisionConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/provision-config',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries provisioned configurations.
     *  *
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request      GetProvisionConfigRequest
     *
     * @return GetProvisionConfigResponse GetProvisionConfigResponse
     */
    public function getProvisionConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProvisionConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries information about a trigger.
     *  *
     * @param string         $functionName
     * @param string         $triggerName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetTriggerResponse GetTriggerResponse
     */
    public function getTriggerWithOptions($functionName, $triggerName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTrigger',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/triggers/' . OpenApiUtilClient::getEncodeParam($triggerName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a trigger.
     *  *
     * @param string $functionName
     * @param string $triggerName
     *
     * @return GetTriggerResponse GetTriggerResponse
     */
    public function getTrigger($functionName, $triggerName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTriggerWithOptions($functionName, $triggerName, $headers, $runtime);
    }

    /**
     * @summary Invokes a function.
     *  *
     * @param string                $functionName
     * @param InvokeFunctionRequest $request      InvokeFunctionRequest
     * @param InvokeFunctionHeaders $headers      InvokeFunctionHeaders
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return InvokeFunctionResponse InvokeFunctionResponse
     */
    public function invokeFunctionWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xFcAsyncTaskId)) {
            $realHeaders['x-fc-async-task-id'] = Utils::toJSONString($headers->xFcAsyncTaskId);
        }
        if (!Utils::isUnset($headers->xFcInvocationType)) {
            $realHeaders['x-fc-invocation-type'] = Utils::toJSONString($headers->xFcInvocationType);
        }
        if (!Utils::isUnset($headers->xFcLogType)) {
            $realHeaders['x-fc-log-type'] = Utils::toJSONString($headers->xFcLogType);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
            'stream'  => $request->body,
        ]);
        $params = new Params([
            'action'      => 'InvokeFunction',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/invocations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'binary',
        ]);
        $res = new InvokeFunctionResponse([]);
        $tmp = Utils::assertAsMap($this->callApi($params, $req, $runtime));
        if (!Utils::isUnset(@$tmp['body'])) {
            $respBody  = Utils::assertAsReadable(@$tmp['body']);
            $res->body = $respBody;
        }
        if (!Utils::isUnset(@$tmp['headers'])) {
            $respHeaders  = Utils::assertAsMap(@$tmp['headers']);
            $res->headers = Utils::stringifyMapValue($respHeaders);
        }
        if (!Utils::isUnset(@$tmp['statusCode'])) {
            $statusCode      = Utils::assertAsInteger(@$tmp['statusCode']);
            $res->statusCode = $statusCode;
        }

        return $res;
    }

    /**
     * @summary Invokes a function.
     *  *
     * @param string                $functionName
     * @param InvokeFunctionRequest $request      InvokeFunctionRequest
     *
     * @return InvokeFunctionResponse InvokeFunctionResponse
     */
    public function invokeFunction($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvokeFunctionHeaders([]);

        return $this->invokeFunctionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries aliases.
     *  *
     * @param string             $functionName
     * @param ListAliasesRequest $request      ListAliasesRequest
     * @param string[]           $headers      map
     * @param RuntimeOptions     $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListAliasesResponse ListAliasesResponse
     */
    public function listAliasesWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAliases',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/aliases',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries aliases.
     *  *
     * @param string             $functionName
     * @param ListAliasesRequest $request      ListAliasesRequest
     *
     * @return ListAliasesResponse ListAliasesResponse
     */
    public function listAliases($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAliasesWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries all asynchronous configurations of a function.
     *  *
     * @param ListAsyncInvokeConfigsRequest $request ListAsyncInvokeConfigsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAsyncInvokeConfigsResponse ListAsyncInvokeConfigsResponse
     */
    public function listAsyncInvokeConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['functionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsyncInvokeConfigs',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/async-invoke-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAsyncInvokeConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all asynchronous configurations of a function.
     *  *
     * @param ListAsyncInvokeConfigsRequest $request ListAsyncInvokeConfigsRequest
     *
     * @return ListAsyncInvokeConfigsResponse ListAsyncInvokeConfigsResponse
     */
    public function listAsyncInvokeConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAsyncInvokeConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Lists asynchronous tasks.
     *  *
     * @param string                $functionName
     * @param ListAsyncTasksRequest $request      ListAsyncTasksRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListAsyncTasksResponse ListAsyncTasksResponse
     */
    public function listAsyncTasksWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includePayload)) {
            $query['includePayload'] = $request->includePayload;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->sortOrderByTime)) {
            $query['sortOrderByTime'] = $request->sortOrderByTime;
        }
        if (!Utils::isUnset($request->startedTimeBegin)) {
            $query['startedTimeBegin'] = $request->startedTimeBegin;
        }
        if (!Utils::isUnset($request->startedTimeEnd)) {
            $query['startedTimeEnd'] = $request->startedTimeEnd;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsyncTasks',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/async-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lists asynchronous tasks.
     *  *
     * @param string                $functionName
     * @param ListAsyncTasksRequest $request      ListAsyncTasksRequest
     *
     * @return ListAsyncTasksResponse ListAsyncTasksResponse
     */
    public function listAsyncTasks($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAsyncTasksWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary 列出函数并发度配置。
     *  *
     * @param ListConcurrencyConfigsRequest $request ListConcurrencyConfigsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListConcurrencyConfigsResponse ListConcurrencyConfigsResponse
     */
    public function listConcurrencyConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['functionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConcurrencyConfigs',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/concurrency-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConcurrencyConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出函数并发度配置。
     *  *
     * @param ListConcurrencyConfigsRequest $request ListConcurrencyConfigsRequest
     *
     * @return ListConcurrencyConfigsResponse ListConcurrencyConfigsResponse
     */
    public function listConcurrencyConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConcurrencyConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries custom domain names.
     *  *
     * @param ListCustomDomainsRequest $request ListCustomDomainsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomDomainsResponse ListCustomDomainsResponse
     */
    public function listCustomDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomDomains',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/custom-domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCustomDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries custom domain names.
     *  *
     * @param ListCustomDomainsRequest $request ListCustomDomainsRequest
     *
     * @return ListCustomDomainsResponse ListCustomDomainsResponse
     */
    public function listCustomDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCustomDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries versions of a function.
     *  *
     * @param string                      $functionName
     * @param ListFunctionVersionsRequest $request      ListFunctionVersionsRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListFunctionVersionsResponse ListFunctionVersionsResponse
     */
    public function listFunctionVersionsWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionVersions',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries versions of a function.
     *  *
     * @param string                      $functionName
     * @param ListFunctionVersionsRequest $request      ListFunctionVersionsRequest
     *
     * @return ListFunctionVersionsResponse ListFunctionVersionsResponse
     */
    public function listFunctionVersions($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionVersionsWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary 列出函数。
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctions',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出函数。
     *  *
     * @param ListFunctionsRequest $request ListFunctionsRequest
     *
     * @return ListFunctionsResponse ListFunctionsResponse
     */
    public function listFunctions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of function instances.
     *  *
     * @param string               $functionName
     * @param ListInstancesRequest $request      ListInstancesRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        if (!Utils::isUnset($request->withAllActive)) {
            $query['withAllActive'] = $request->withAllActive;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of function instances.
     *  *
     * @param string               $functionName
     * @param ListInstancesRequest $request      ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Gets a list of layer versions.
     *  *
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request   ListLayerVersionsRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListLayerVersionsResponse ListLayerVersionsResponse
     */
    public function listLayerVersionsWithOptions($layerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->startVersion)) {
            $query['startVersion'] = $request->startVersion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLayerVersions',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layers/' . OpenApiUtilClient::getEncodeParam($layerName) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLayerVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Gets a list of layer versions.
     *  *
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request   ListLayerVersionsRequest
     *
     * @return ListLayerVersionsResponse ListLayerVersionsResponse
     */
    public function listLayerVersions($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayerVersionsWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * @summary Gets a list of layers.
     *  *
     * @param ListLayersRequest $request ListLayersRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLayersResponse ListLayersResponse
     */
    public function listLayersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->official)) {
            $query['official'] = $request->official;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->public_)) {
            $query['public'] = $request->public_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLayers',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLayersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Gets a list of layers.
     *  *
     * @param ListLayersRequest $request ListLayersRequest
     *
     * @return ListLayersResponse ListLayersResponse
     */
    public function listLayers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLayersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of provisioned configurations.
     *  *
     * @param ListProvisionConfigsRequest $request ListProvisionConfigsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProvisionConfigsResponse ListProvisionConfigsResponse
     */
    public function listProvisionConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['functionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProvisionConfigs',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/provision-configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProvisionConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of provisioned configurations.
     *  *
     * @param ListProvisionConfigsRequest $request ListProvisionConfigsRequest
     *
     * @return ListProvisionConfigsResponse ListProvisionConfigsResponse
     */
    public function listProvisionConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProvisionConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Lists all tagged resources.
     *  *
     * @param ListTagResourcesRequest $tmpReq  ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['ResourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/tags-v2',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Lists all tagged resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the triggers of a function.
     *  *
     * @param string              $functionName
     * @param ListTriggersRequest $request      ListTriggersRequest
     * @param string[]            $headers      map
     * @param RuntimeOptions      $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListTriggersResponse ListTriggersResponse
     */
    public function listTriggersWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTriggers',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/triggers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTriggersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the triggers of a function.
     *  *
     * @param string              $functionName
     * @param ListTriggersRequest $request      ListTriggersRequest
     *
     * @return ListTriggersResponse ListTriggersResponse
     */
    public function listTriggers($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTriggersWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of existing VPC connections.
     *  *
     * @param string         $functionName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListVpcBindingsResponse ListVpcBindingsResponse
     */
    public function listVpcBindingsWithOptions($functionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListVpcBindings',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/vpc-bindings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVpcBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of existing VPC connections.
     *  *
     * @param string $functionName
     *
     * @return ListVpcBindingsResponse ListVpcBindingsResponse
     */
    public function listVpcBindings($functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVpcBindingsWithOptions($functionName, $headers, $runtime);
    }

    /**
     * @summary Publishes a function version.
     *  *
     * @param string                        $functionName
     * @param PublishFunctionVersionRequest $request      PublishFunctionVersionRequest
     * @param string[]                      $headers      map
     * @param RuntimeOptions                $runtime      runtime options for this request RuntimeOptions
     *
     * @return PublishFunctionVersionResponse PublishFunctionVersionResponse
     */
    public function publishFunctionVersionWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PublishFunctionVersion',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Publishes a function version.
     *  *
     * @param string                        $functionName
     * @param PublishFunctionVersionRequest $request      PublishFunctionVersionRequest
     *
     * @return PublishFunctionVersionResponse PublishFunctionVersionResponse
     */
    public function publishFunctionVersion($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishFunctionVersionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Creates or modifies an asynchronous invocation configuration for a function.
     *  *
     * @param string                      $functionName
     * @param PutAsyncInvokeConfigRequest $request      PutAsyncInvokeConfigRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return PutAsyncInvokeConfigResponse PutAsyncInvokeConfigResponse
     */
    public function putAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutAsyncInvokeConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/async-invoke-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutAsyncInvokeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or modifies an asynchronous invocation configuration for a function.
     *  *
     * @param string                      $functionName
     * @param PutAsyncInvokeConfigRequest $request      PutAsyncInvokeConfigRequest
     *
     * @return PutAsyncInvokeConfigResponse PutAsyncInvokeConfigResponse
     */
    public function putAsyncInvokeConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putAsyncInvokeConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Configures concurrency of a function.
     *  *
     * @param string                      $functionName
     * @param PutConcurrencyConfigRequest $request      PutConcurrencyConfigRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return PutConcurrencyConfigResponse PutConcurrencyConfigResponse
     */
    public function putConcurrencyConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutConcurrencyConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/concurrency',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutConcurrencyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures concurrency of a function.
     *  *
     * @param string                      $functionName
     * @param PutConcurrencyConfigRequest $request      PutConcurrencyConfigRequest
     *
     * @return PutConcurrencyConfigResponse PutConcurrencyConfigResponse
     */
    public function putConcurrencyConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putConcurrencyConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies permissions of a layer.
     *  *
     * @param string             $layerName
     * @param PutLayerACLRequest $request   PutLayerACLRequest
     * @param string[]           $headers   map
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return PutLayerACLResponse PutLayerACLResponse
     */
    public function putLayerACLWithOptions($layerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acl)) {
            $query['acl'] = $request->acl;
        }
        if (!Utils::isUnset($request->public_)) {
            $query['public'] = $request->public_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutLayerACL',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/layers/' . OpenApiUtilClient::getEncodeParam($layerName) . '/acl',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutLayerACLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies permissions of a layer.
     *  *
     * @param string             $layerName
     * @param PutLayerACLRequest $request   PutLayerACLRequest
     *
     * @return PutLayerACLResponse PutLayerACLResponse
     */
    public function putLayerACL($layerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putLayerACLWithOptions($layerName, $request, $headers, $runtime);
    }

    /**
     * @summary Creates provisioned configurations.
     *  *
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request      PutProvisionConfigRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return PutProvisionConfigResponse PutProvisionConfigResponse
     */
    public function putProvisionConfigWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PutProvisionConfig',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/provision-config',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutProvisionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates provisioned configurations.
     *  *
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request      PutProvisionConfigRequest
     *
     * @return PutProvisionConfigResponse PutProvisionConfigResponse
     */
    public function putProvisionConfig($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProvisionConfigWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Stops an asynchronous task.
     *  *
     * @param string               $functionName
     * @param string               $taskId
     * @param StopAsyncTaskRequest $request      StopAsyncTaskRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return StopAsyncTaskResponse StopAsyncTaskResponse
     */
    public function stopAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->qualifier)) {
            $query['qualifier'] = $request->qualifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAsyncTask',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/async-tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return StopAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops an asynchronous task.
     *  *
     * @param string               $functionName
     * @param string               $taskId
     * @param StopAsyncTaskRequest $request      StopAsyncTaskRequest
     *
     * @return StopAsyncTaskResponse StopAsyncTaskResponse
     */
    public function stopAsyncTask($functionName, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAsyncTaskWithOptions($functionName, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary Adds tags to a resource.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/tags-v2',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds tags to a resource.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Removes tags from a resource.
     *  *
     * @param UntagResourcesRequest $tmpReq  UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UntagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKey)) {
            $request->tagKeyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['ResourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeyShrink)) {
            $query['TagKey'] = $request->tagKeyShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/tags-v2',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates an alias.
     *  *
     * @param string             $functionName
     * @param string             $aliasName
     * @param UpdateAliasRequest $request      UpdateAliasRequest
     * @param string[]           $headers      map
     * @param RuntimeOptions     $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateAliasResponse UpdateAliasResponse
     */
    public function updateAliasWithOptions($functionName, $aliasName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlias',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/aliases/' . OpenApiUtilClient::getEncodeParam($aliasName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an alias.
     *  *
     * @param string             $functionName
     * @param string             $aliasName
     * @param UpdateAliasRequest $request      UpdateAliasRequest
     *
     * @return UpdateAliasResponse UpdateAliasResponse
     */
    public function updateAlias($functionName, $aliasName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAliasWithOptions($functionName, $aliasName, $request, $headers, $runtime);
    }

    /**
     * @summary Update a custom domain name.
     *  *
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request    UpdateCustomDomainRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomDomainResponse UpdateCustomDomainResponse
     */
    public function updateCustomDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomDomain',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/custom-domains/' . OpenApiUtilClient::getEncodeParam($domainName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update a custom domain name.
     *  *
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request    UpdateCustomDomainRequest
     *
     * @return UpdateCustomDomainResponse UpdateCustomDomainResponse
     */
    public function updateCustomDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCustomDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the information about a function.
     *  *
     * @param string                $functionName
     * @param UpdateFunctionRequest $request      UpdateFunctionRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunctionWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunction',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a function.
     *  *
     * @param string                $functionName
     * @param UpdateFunctionRequest $request      UpdateFunctionRequest
     *
     * @return UpdateFunctionResponse UpdateFunctionResponse
     */
    public function updateFunction($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @summary Modifies a trigger.
     *  *
     * @param string               $functionName
     * @param string               $triggerName
     * @param UpdateTriggerRequest $request      UpdateTriggerRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateTriggerResponse UpdateTriggerResponse
     */
    public function updateTriggerWithOptions($functionName, $triggerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrigger',
            'version'     => '2023-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/2023-03-30/functions/' . OpenApiUtilClient::getEncodeParam($functionName) . '/triggers/' . OpenApiUtilClient::getEncodeParam($triggerName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a trigger.
     *  *
     * @param string               $functionName
     * @param string               $triggerName
     * @param UpdateTriggerRequest $request      UpdateTriggerRequest
     *
     * @return UpdateTriggerResponse UpdateTriggerResponse
     */
    public function updateTrigger($functionName, $triggerName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTriggerWithOptions($functionName, $triggerName, $request, $headers, $runtime);
    }
}
