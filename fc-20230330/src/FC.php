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
     * @param string             $functionName
     * @param CreateAliasRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAliasResponse
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
     * @param CreateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCustomDomainResponse
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
     * @param CreateFunctionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateFunctionResponse
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
     * @param string                    $layerName
     * @param CreateLayerVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLayerVersionResponse
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
     * @param string               $functionName
     * @param CreateTriggerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateTriggerResponse
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
     * @param string                  $functionName
     * @param CreateVpcBindingRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateVpcBindingResponse
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
     * @param string                         $functionName
     * @param DeleteAsyncInvokeConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAsyncInvokeConfigResponse
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
     * @param string                       $functionName
     * @param DeleteProvisionConfigRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProvisionConfigResponse
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
     * @param string                      $functionName
     * @param GetAsyncInvokeConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAsyncInvokeConfigResponse
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
     * @param string             $functionName
     * @param GetFunctionRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetFunctionResponse
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
     * @param string                 $functionName
     * @param GetFunctionCodeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetFunctionCodeResponse
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
     * @param string                    $functionName
     * @param GetProvisionConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetProvisionConfigResponse
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
     * @param string                $functionName
     * @param InvokeFunctionRequest $request
     * @param InvokeFunctionHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return InvokeFunctionResponse
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
     * @param string             $functionName
     * @param ListAliasesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListAliasesResponse
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
     * @param ListAsyncInvokeConfigsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListAsyncInvokeConfigsResponse
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
     * @param ListConcurrencyConfigsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListConcurrencyConfigsResponse
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
     * @param ListCustomDomainsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListCustomDomainsResponse
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
     * @param string                      $functionName
     * @param ListFunctionVersionsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListFunctionVersionsResponse
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
     * @param ListFunctionsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListFunctionsResponse
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
     * @param string               $functionName
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
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
     * @param string                   $layerName
     * @param ListLayerVersionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListLayerVersionsResponse
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
     * @param ListLayersRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListLayersResponse
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
     * @param ListProvisionConfigsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProvisionConfigsResponse
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
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
     * @param string              $functionName
     * @param ListTriggersRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListTriggersResponse
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
     * @param string                        $functionName
     * @param PublishFunctionVersionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PublishFunctionVersionResponse
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
     * @param string                      $functionName
     * @param PutAsyncInvokeConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutAsyncInvokeConfigResponse
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
     * @param string                      $functionName
     * @param PutConcurrencyConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return PutConcurrencyConfigResponse
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
     * @param string             $layerName
     * @param PutLayerACLRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PutLayerACLResponse
     */
    public function putLayerACLWithOptions($layerName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param string                    $functionName
     * @param PutProvisionConfigRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return PutProvisionConfigResponse
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
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param UntagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
     * @param string                    $domainName
     * @param UpdateCustomDomainRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCustomDomainResponse
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
     * @param string                $functionName
     * @param UpdateFunctionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFunctionResponse
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
