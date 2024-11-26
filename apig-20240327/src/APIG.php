<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewaySecurityGroupRuleResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysShrinkRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class APIG extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('apig', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Authorize the security group for gateway to access services
     *  *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request   AddGatewaySecurityGroupRuleRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddGatewaySecurityGroupRuleResponse AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->portRanges)) {
            $body['portRanges'] = $request->portRanges;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['securityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddGatewaySecurityGroupRule',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/security-group-rules',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddGatewaySecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorize the security group for gateway to access services
     *  *
     * @param string                             $gatewayId
     * @param AddGatewaySecurityGroupRuleRequest $request   AddGatewaySecurityGroupRuleRequest
     *
     * @return AddGatewaySecurityGroupRuleResponse AddGatewaySecurityGroupRuleResponse
     */
    public function addGatewaySecurityGroupRule($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewaySecurityGroupRuleWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Create Domain
     *  *
     * @description Create Domain.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->caCertIdentifier)) {
            $body['caCertIdentifier'] = $request->caCertIdentifier;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $body['certIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->forceHttps)) {
            $body['forceHttps'] = $request->forceHttps;
        }
        if (!Utils::isUnset($request->http2Option)) {
            $body['http2Option'] = $request->http2Option;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $body['tlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $body['tlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create Domain
     *  *
     * @description Create Domain.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary CreateEnvironment
     *  *
     * @description Create environment.
     *  *
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $body['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvironment',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/environments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateEnvironment
     *  *
     * @description Create environment.
     *  *
     * @param CreateEnvironmentRequest $request CreateEnvironmentRequest
     *
     * @return CreateEnvironmentResponse CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnvironmentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create an API of HTTP type
     *  *
     * @param CreateHttpApiRequest $request CreateHttpApiRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHttpApiResponse CreateHttpApiResponse
     */
    public function createHttpApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aiProtocols)) {
            $body['aiProtocols'] = $request->aiProtocols;
        }
        if (!Utils::isUnset($request->basePath)) {
            $body['basePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->ingressConfig)) {
            $body['ingressConfig'] = $request->ingressConfig;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocols)) {
            $body['protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->versionConfig)) {
            $body['versionConfig'] = $request->versionConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHttpApi',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create an API of HTTP type
     *  *
     * @param CreateHttpApiRequest $request CreateHttpApiRequest
     *
     * @return CreateHttpApiResponse CreateHttpApiResponse
     */
    public function createHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create an Operation for HTTP API
     *  *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request   CreateHttpApiOperationRequest
     * @param string[]                      $headers   map
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateHttpApiOperationResponse CreateHttpApiOperationResponse
     */
    public function createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operations)) {
            $body['operations'] = $request->operations;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHttpApiOperation',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Create an Operation for HTTP API
     *  *
     * @param string                        $httpApiId
     * @param CreateHttpApiOperationRequest $request   CreateHttpApiOperationRequest
     *
     * @return CreateHttpApiOperationResponse CreateHttpApiOperationResponse
     */
    public function createHttpApiOperation($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHttpApiOperationWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary DeleteDomain
     *  *
     * @param string         $domainId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($domainId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/domains/' . OpenApiUtilClient::getEncodeParam($domainId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteDomain
     *  *
     * @param string $domainId
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($domainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($domainId, $headers, $runtime);
    }

    /**
     * @summary DeleteEnvironment
     *  *
     * @param string         $environmentId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironmentWithOptions($environmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteEnvironment',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/environments/' . OpenApiUtilClient::getEncodeParam($environmentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary DeleteEnvironment
     *  *
     * @param string $environmentId
     *
     * @return DeleteEnvironmentResponse DeleteEnvironmentResponse
     */
    public function deleteEnvironment($environmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnvironmentWithOptions($environmentId, $headers, $runtime);
    }

    /**
     * @summary Delete Gateway
     *  *
     * @param string         $gatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGateway',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Gateway
     *  *
     * @param string $gatewayId
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * @summary Delete HTTP API
     *  *
     * @param string         $httpApiId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpApiResponse DeleteHttpApiResponse
     */
    public function deleteHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteHttpApi',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete HTTP API
     *  *
     * @param string $httpApiId
     *
     * @return DeleteHttpApiResponse DeleteHttpApiResponse
     */
    public function deleteHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * @summary Delete Operation
     *  *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpApiOperationResponse DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteHttpApiOperation',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations/' . OpenApiUtilClient::getEncodeParam($operationId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete Operation
     *  *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return DeleteHttpApiOperationResponse DeleteHttpApiOperationResponse
     */
    public function deleteHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * @summary Query domain details
     *  *
     * @param string           $domainId
     * @param GetDomainRequest $request  GetDomainRequest
     * @param string[]         $headers  map
     * @param RuntimeOptions   $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withStatistics)) {
            $query['withStatistics'] = $request->withStatistics;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomain',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/domains/' . OpenApiUtilClient::getEncodeParam($domainId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query domain details
     *  *
     * @param string           $domainId
     * @param GetDomainRequest $request  GetDomainRequest
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * @summary GetEnvironment
     *  *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request       GetEnvironmentRequest
     * @param string[]              $headers       map
     * @param RuntimeOptions        $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->withStatistics)) {
            $query['withStatistics'] = $request->withStatistics;
        }
        if (!Utils::isUnset($request->withVpcInfo)) {
            $query['withVpcInfo'] = $request->withVpcInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnvironment',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/environments/' . OpenApiUtilClient::getEncodeParam($environmentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetEnvironment
     *  *
     * @param string                $environmentId
     * @param GetEnvironmentRequest $request       GetEnvironmentRequest
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * @summary Get a gateway.
     *  *
     * @param string         $gatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetGatewayResponse GetGatewayResponse
     */
    public function getGatewayWithOptions($gatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetGateway',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get a gateway.
     *  *
     * @param string $gatewayId
     *
     * @return GetGatewayResponse GetGatewayResponse
     */
    public function getGateway($gatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayWithOptions($gatewayId, $headers, $runtime);
    }

    /**
     * @summary Read HttpApi
     *  *
     * @param string         $httpApiId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetHttpApiResponse GetHttpApiResponse
     */
    public function getHttpApiWithOptions($httpApiId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHttpApi',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Read HttpApi
     *  *
     * @param string $httpApiId
     *
     * @return GetHttpApiResponse GetHttpApiResponse
     */
    public function getHttpApi($httpApiId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiWithOptions($httpApiId, $headers, $runtime);
    }

    /**
     * @summary Get Operation
     *  *
     * @param string         $httpApiId
     * @param string         $operationId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetHttpApiOperationResponse GetHttpApiOperationResponse
     */
    public function getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHttpApiOperation',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations/' . OpenApiUtilClient::getEncodeParam($operationId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get Operation
     *  *
     * @param string $httpApiId
     * @param string $operationId
     *
     * @return GetHttpApiOperationResponse GetHttpApiOperationResponse
     */
    public function getHttpApiOperation($httpApiId, $operationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiOperationWithOptions($httpApiId, $operationId, $headers, $runtime);
    }

    /**
     * @summary 获取HttpApi的路由详情
     *  *
     * @param string         $httpApiId
     * @param string         $routeId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetHttpApiRouteResponse GetHttpApiRouteResponse
     */
    public function getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHttpApiRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/routes/' . OpenApiUtilClient::getEncodeParam($routeId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHttpApiRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取HttpApi的路由详情
     *  *
     * @param string $httpApiId
     * @param string $routeId
     *
     * @return GetHttpApiRouteResponse GetHttpApiRouteResponse
     */
    public function getHttpApiRoute($httpApiId, $routeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHttpApiRouteWithOptions($httpApiId, $routeId, $headers, $runtime);
    }

    /**
     * @summary ListDomains
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListDomains
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ListEnvironments
     *  *
     * @param ListEnvironmentsRequest $request ListEnvironmentsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironmentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasLike)) {
            $query['aliasLike'] = $request->aliasLike;
        }
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->gatewayNameLike)) {
            $query['gatewayNameLike'] = $request->gatewayNameLike;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnvironments',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/environments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnvironmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListEnvironments
     *  *
     * @param ListEnvironmentsRequest $request ListEnvironmentsRequest
     *
     * @return ListEnvironmentsResponse ListEnvironmentsResponse
     */
    public function listEnvironments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvironmentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Retrieve the list of created cloud-native gateways
     *  *
     * @param ListGatewaysRequest $tmpReq  ListGatewaysRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewaysResponse ListGatewaysResponse
     */
    public function listGatewaysWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewaysShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGateways',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retrieve the list of created cloud-native gateways
     *  *
     * @param ListGatewaysRequest $request ListGatewaysRequest
     *
     * @return ListGatewaysResponse ListGatewaysResponse
     */
    public function listGateways($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewaysWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary List Operations
     *  *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request   ListHttpApiOperationsRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListHttpApiOperationsResponse ListHttpApiOperationsResponse
     */
    public function listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerAuthorizationRuleId)) {
            $query['consumerAuthorizationRuleId'] = $request->consumerAuthorizationRuleId;
        }
        if (!Utils::isUnset($request->method)) {
            $query['method'] = $request->method;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nameLike)) {
            $query['nameLike'] = $request->nameLike;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pathLike)) {
            $query['pathLike'] = $request->pathLike;
        }
        if (!Utils::isUnset($request->withConsumerInEnvironmentId)) {
            $query['withConsumerInEnvironmentId'] = $request->withConsumerInEnvironmentId;
        }
        if (!Utils::isUnset($request->withConsumerInfoById)) {
            $query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHttpApiOperations',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHttpApiOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary List Operations
     *  *
     * @param string                       $httpApiId
     * @param ListHttpApiOperationsRequest $request   ListHttpApiOperationsRequest
     *
     * @return ListHttpApiOperationsResponse ListHttpApiOperationsResponse
     */
    public function listHttpApiOperations($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApiOperationsWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary List HTTP APIs
     *  *
     * @param ListHttpApisRequest $request ListHttpApisRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHttpApisResponse ListHttpApisResponse
     */
    public function listHttpApisWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['gatewayId'] = $request->gatewayId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->types)) {
            $query['types'] = $request->types;
        }
        if (!Utils::isUnset($request->withAuthPolicyInEnvironmentId)) {
            $query['withAuthPolicyInEnvironmentId'] = $request->withAuthPolicyInEnvironmentId;
        }
        if (!Utils::isUnset($request->withConsumerInfoById)) {
            $query['withConsumerInfoById'] = $request->withConsumerInfoById;
        }
        if (!Utils::isUnset($request->withEnvironmentInfo)) {
            $query['withEnvironmentInfo'] = $request->withEnvironmentInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHttpApis',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHttpApisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary List HTTP APIs
     *  *
     * @param ListHttpApisRequest $request ListHttpApisRequest
     *
     * @return ListHttpApisResponse ListHttpApisResponse
     */
    public function listHttpApis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHttpApisWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary UpdateDomain
     *  *
     * @param string              $domainId
     * @param UpdateDomainRequest $request  UpdateDomainRequest
     * @param string[]            $headers  map
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomainWithOptions($domainId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->caCertIndentifier)) {
            $body['caCertIndentifier'] = $request->caCertIndentifier;
        }
        if (!Utils::isUnset($request->certIndentifier)) {
            $body['certIndentifier'] = $request->certIndentifier;
        }
        if (!Utils::isUnset($request->forceHttps)) {
            $body['forceHttps'] = $request->forceHttps;
        }
        if (!Utils::isUnset($request->http2Option)) {
            $body['http2Option'] = $request->http2Option;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->tlsMax)) {
            $body['tlsMax'] = $request->tlsMax;
        }
        if (!Utils::isUnset($request->tlsMin)) {
            $body['tlsMin'] = $request->tlsMin;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomain',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/domains/' . OpenApiUtilClient::getEncodeParam($domainId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary UpdateDomain
     *  *
     * @param string              $domainId
     * @param UpdateDomainRequest $request  UpdateDomainRequest
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomain($domainId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($domainId, $request, $headers, $runtime);
    }

    /**
     * @summary UpdateEnvironment
     *  *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request       UpdateEnvironmentRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alias)) {
            $body['alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironment',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/environments/' . OpenApiUtilClient::getEncodeParam($environmentId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary UpdateEnvironment
     *  *
     * @param string                   $environmentId
     * @param UpdateEnvironmentRequest $request       UpdateEnvironmentRequest
     *
     * @return UpdateEnvironmentResponse UpdateEnvironmentResponse
     */
    public function updateEnvironment($environmentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnvironmentWithOptions($environmentId, $request, $headers, $runtime);
    }

    /**
     * @summary Update HTTP API
     *  *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request   UpdateHttpApiRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpApiResponse UpdateHttpApiResponse
     */
    public function updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aiProtocols)) {
            $body['aiProtocols'] = $request->aiProtocols;
        }
        if (!Utils::isUnset($request->basePath)) {
            $body['basePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->deployConfigs)) {
            $body['deployConfigs'] = $request->deployConfigs;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->ingressConfig)) {
            $body['ingressConfig'] = $request->ingressConfig;
        }
        if (!Utils::isUnset($request->protocols)) {
            $body['protocols'] = $request->protocols;
        }
        if (!Utils::isUnset($request->versionConfig)) {
            $body['versionConfig'] = $request->versionConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHttpApi',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update HTTP API
     *  *
     * @param string               $httpApiId
     * @param UpdateHttpApiRequest $request   UpdateHttpApiRequest
     *
     * @return UpdateHttpApiResponse UpdateHttpApiResponse
     */
    public function updateHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary Update Operation
     *  *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request     UpdateHttpApiOperationRequest
     * @param string[]                      $headers     map
     * @param RuntimeOptions                $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpApiOperationResponse UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['operation'] = $request->operation;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHttpApiOperation',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/operations/' . OpenApiUtilClient::getEncodeParam($operationId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateHttpApiOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update Operation
     *  *
     * @param string                        $httpApiId
     * @param string                        $operationId
     * @param UpdateHttpApiOperationRequest $request     UpdateHttpApiOperationRequest
     *
     * @return UpdateHttpApiOperationResponse UpdateHttpApiOperationResponse
     */
    public function updateHttpApiOperation($httpApiId, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHttpApiOperationWithOptions($httpApiId, $operationId, $request, $headers, $runtime);
    }
}
