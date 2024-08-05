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
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteGatewayServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\DeleteServiceSourceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListDomainsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListEnvironmentsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayRoutesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayRoutesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayServicesRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayServicesResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApiOperationsResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListHttpApisResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\OfflineGatewayRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\OfflineHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\OfflineHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\PublishGatewayRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\PublishHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\PublishHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayRouteRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayRouteResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayServiceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayServiceResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayServiceVersionRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayServiceVersionResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiOperationResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiResponse;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceSourceRequest;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateServiceSourceResponse;
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
     * @summary 授权网关访问服务的安全组
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
     * @summary 授权网关访问服务的安全组
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
     * @summary 创建域名
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
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
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
     * @summary 创建域名
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
     * @summary 创建网关路由
     *  *
     * @param string                    $gatewayId
     * @param CreateGatewayRouteRequest $request   CreateGatewayRouteRequest
     * @param string[]                  $headers   map
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayRouteResponse CreateGatewayRouteResponse
     */
    public function createGatewayRouteWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backendConfig)) {
            $body['backendConfig'] = $request->backendConfig;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainConfig)) {
            $body['domainConfig'] = $request->domainConfig;
        }
        if (!Utils::isUnset($request->match)) {
            $body['match'] = $request->match;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由
     *  *
     * @param string                    $gatewayId
     * @param CreateGatewayRouteRequest $request   CreateGatewayRouteRequest
     *
     * @return CreateGatewayRouteResponse CreateGatewayRouteResponse
     */
    public function createGatewayRoute($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayRouteWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建服务
     *  *
     * @param string                      $gatewayId
     * @param CreateGatewayServiceRequest $request   CreateGatewayServiceRequest
     * @param string[]                    $headers   map
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayServiceResponse CreateGatewayServiceResponse
     */
    public function createGatewayServiceWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gatewayServiceConfigs)) {
            $body['gatewayServiceConfigs'] = $request->gatewayServiceConfigs;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayService',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建服务
     *  *
     * @param string                      $gatewayId
     * @param CreateGatewayServiceRequest $request   CreateGatewayServiceRequest
     *
     * @return CreateGatewayServiceResponse CreateGatewayServiceResponse
     */
    public function createGatewayService($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayServiceWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建服务版本
     *  *
     * @param string                             $gatewayId
     * @param string                             $gatewayServiceId
     * @param CreateGatewayServiceVersionRequest $request          CreateGatewayServiceVersionRequest
     * @param string[]                           $headers          map
     * @param RuntimeOptions                     $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayServiceVersionResponse CreateGatewayServiceVersionResponse
     */
    public function createGatewayServiceVersionWithOptions($gatewayId, $gatewayServiceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayServiceVersion',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services/' . OpenApiUtilClient::getEncodeParam($gatewayServiceId) . '/service-versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建服务版本
     *  *
     * @param string                             $gatewayId
     * @param string                             $gatewayServiceId
     * @param CreateGatewayServiceVersionRequest $request          CreateGatewayServiceVersionRequest
     *
     * @return CreateGatewayServiceVersionResponse CreateGatewayServiceVersionResponse
     */
    public function createGatewayServiceVersion($gatewayId, $gatewayServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayServiceVersionWithOptions($gatewayId, $gatewayServiceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建一个HTTP类型的API
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
        if (!Utils::isUnset($request->basePath)) {
            $body['basePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
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
     * @summary 创建一个HTTP类型的API
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
     * @summary 为HTTP API创建Operation
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
     * @summary 为HTTP API创建Operation
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
     * @summary 创建服务来源
     *  *
     * @param string                     $gatewayId
     * @param CreateServiceSourceRequest $request   CreateServiceSourceRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateServiceSourceResponse CreateServiceSourceResponse
     */
    public function createServiceSourceWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->k8sServiceSourceConfig)) {
            $body['k8sServiceSourceConfig'] = $request->k8sServiceSourceConfig;
        }
        if (!Utils::isUnset($request->nacosServiceSourceConfig)) {
            $body['nacosServiceSourceConfig'] = $request->nacosServiceSourceConfig;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceSource',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/service-sources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建服务来源
     *  *
     * @param string                     $gatewayId
     * @param CreateServiceSourceRequest $request   CreateServiceSourceRequest
     *
     * @return CreateServiceSourceResponse CreateServiceSourceResponse
     */
    public function createServiceSource($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceSourceWithOptions($gatewayId, $request, $headers, $runtime);
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
     * @summary 删除网关
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
     * @summary 删除网关
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
     * @summary 创建网关路由
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayRouteId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayRouteResponse DeleteGatewayRouteResponse
     */
    public function deleteGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes/' . OpenApiUtilClient::getEncodeParam($gatewayRouteId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由
     *  *
     * @param string $gatewayId
     * @param string $gatewayRouteId
     *
     * @return DeleteGatewayRouteResponse DeleteGatewayRouteResponse
     */
    public function deleteGatewayRoute($gatewayId, $gatewayRouteId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime);
    }

    /**
     * @summary 删除服务
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayServiceId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayServiceResponse DeleteGatewayServiceResponse
     */
    public function deleteGatewayServiceWithOptions($gatewayId, $gatewayServiceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayService',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services/' . OpenApiUtilClient::getEncodeParam($gatewayServiceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除服务
     *  *
     * @param string $gatewayId
     * @param string $gatewayServiceId
     *
     * @return DeleteGatewayServiceResponse DeleteGatewayServiceResponse
     */
    public function deleteGatewayService($gatewayId, $gatewayServiceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayServiceWithOptions($gatewayId, $gatewayServiceId, $headers, $runtime);
    }

    /**
     * @summary 删除服务版本
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayServiceId
     * @param string         $name
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayServiceVersionResponse DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersionWithOptions($gatewayId, $gatewayServiceId, $name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayServiceVersion',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services/' . OpenApiUtilClient::getEncodeParam($gatewayServiceId) . '/service-versions/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除服务版本
     *  *
     * @param string $gatewayId
     * @param string $gatewayServiceId
     * @param string $name
     *
     * @return DeleteGatewayServiceVersionResponse DeleteGatewayServiceVersionResponse
     */
    public function deleteGatewayServiceVersion($gatewayId, $gatewayServiceId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayServiceVersionWithOptions($gatewayId, $gatewayServiceId, $name, $headers, $runtime);
    }

    /**
     * @summary 删除HTTP API
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
     * @summary 删除HTTP API
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
     * @summary 删除Operation
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
     * @summary 删除Operation
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
     * @summary 删除服务来源
     *  *
     * @param string         $gatewayId
     * @param string         $serviceSourceId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceSourceResponse DeleteServiceSourceResponse
     */
    public function deleteServiceSourceWithOptions($gatewayId, $serviceSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceSource',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/service-sources/' . OpenApiUtilClient::getEncodeParam($serviceSourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除服务来源
     *  *
     * @param string $gatewayId
     * @param string $serviceSourceId
     *
     * @return DeleteServiceSourceResponse DeleteServiceSourceResponse
     */
    public function deleteServiceSource($gatewayId, $serviceSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceSourceWithOptions($gatewayId, $serviceSourceId, $headers, $runtime);
    }

    /**
     * @summary 查询域名详情
     *  *
     * @param string         $domainId
     * @param string[]       $headers  map
     * @param RuntimeOptions $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($domainId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
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
     * @summary 查询域名详情
     *  *
     * @param string $domainId
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($domainId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainId, $headers, $runtime);
    }

    /**
     * @summary GetEnvironment
     *  *
     * @param string         $environmentId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironmentWithOptions($environmentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
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
     * @param string $environmentId
     *
     * @return GetEnvironmentResponse GetEnvironmentResponse
     */
    public function getEnvironment($environmentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnvironmentWithOptions($environmentId, $headers, $runtime);
    }

    /**
     * @summary 获取网关实例详情
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
     * @summary 获取网关实例详情
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
     * @summary 创建网关路由
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayRouteId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetGatewayRouteResponse GetGatewayRouteResponse
     */
    public function getGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetGatewayRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes/' . OpenApiUtilClient::getEncodeParam($gatewayRouteId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由
     *  *
     * @param string $gatewayId
     * @param string $gatewayRouteId
     *
     * @return GetGatewayRouteResponse GetGatewayRouteResponse
     */
    public function getGatewayRoute($gatewayId, $gatewayRouteId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime);
    }

    /**
     * @summary 查询服务
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayServiceId
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetGatewayServiceResponse GetGatewayServiceResponse
     */
    public function getGatewayServiceWithOptions($gatewayId, $gatewayServiceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetGatewayService',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services/' . OpenApiUtilClient::getEncodeParam($gatewayServiceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务
     *  *
     * @param string $gatewayId
     * @param string $gatewayServiceId
     *
     * @return GetGatewayServiceResponse GetGatewayServiceResponse
     */
    public function getGatewayService($gatewayId, $gatewayServiceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGatewayServiceWithOptions($gatewayId, $gatewayServiceId, $headers, $runtime);
    }

    /**
     * @summary 读取HttpApi
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
     * @summary 读取HttpApi
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
     * @summary 读取Operation
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
     * @summary 读取Operation
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
     * @summary 创建网关路由
     *  *
     * @param string                   $gatewayId
     * @param ListGatewayRoutesRequest $request   ListGatewayRoutesRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListGatewayRoutesResponse ListGatewayRoutesResponse
     */
    public function listGatewayRoutesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->path)) {
            $query['path'] = $request->path;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayRoutes',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGatewayRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由
     *  *
     * @param string                   $gatewayId
     * @param ListGatewayRoutesRequest $request   ListGatewayRoutesRequest
     *
     * @return ListGatewayRoutesResponse ListGatewayRoutesResponse
     */
    public function listGatewayRoutes($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayRoutesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询服务列表
     *  *
     * @param string                     $gatewayId
     * @param ListGatewayServicesRequest $request   ListGatewayServicesRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListGatewayServicesResponse ListGatewayServicesResponse
     */
    public function listGatewayServicesWithOptions($gatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['sourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGatewayServices',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGatewayServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询服务列表
     *  *
     * @param string                     $gatewayId
     * @param ListGatewayServicesRequest $request   ListGatewayServicesRequest
     *
     * @return ListGatewayServicesResponse ListGatewayServicesResponse
     */
    public function listGatewayServices($gatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayServicesWithOptions($gatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取已经创建的云原生网关列表
     *  *
     * @param ListGatewaysRequest $request ListGatewaysRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGatewaysResponse ListGatewaysResponse
     */
    public function listGatewaysWithOptions($request, $headers, $runtime)
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
     * @summary 获取已经创建的云原生网关列表
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
     * @summary 列举Operation
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
     * @summary 列举Operation
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
     * @summary 列举HTTP API
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
        if (!Utils::isUnset($request->publishedOnly)) {
            $query['publishedOnly'] = $request->publishedOnly;
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
     * @summary 列举HTTP API
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
     * @summary 发布路由
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayRouteId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return OfflineGatewayRouteResponse OfflineGatewayRouteResponse
     */
    public function offlineGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'OfflineGatewayRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes/' . OpenApiUtilClient::getEncodeParam($gatewayRouteId) . '/offline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OfflineGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布路由
     *  *
     * @param string $gatewayId
     * @param string $gatewayRouteId
     *
     * @return OfflineGatewayRouteResponse OfflineGatewayRouteResponse
     */
    public function offlineGatewayRoute($gatewayId, $gatewayRouteId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime);
    }

    /**
     * @summary 下线已发布的HTTP API
     *  *
     * @param string                $httpApiId
     * @param OfflineHttpApiRequest $request   OfflineHttpApiRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return OfflineHttpApiResponse OfflineHttpApiResponse
     */
    public function offlineHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->environmentId)) {
            $body['environmentId'] = $request->environmentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OfflineHttpApi',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/offline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OfflineHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下线已发布的HTTP API
     *  *
     * @param string                $httpApiId
     * @param OfflineHttpApiRequest $request   OfflineHttpApiRequest
     *
     * @return OfflineHttpApiResponse OfflineHttpApiResponse
     */
    public function offlineHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->offlineHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
    }

    /**
     * @summary 发布路由
     *  *
     * @param string         $gatewayId
     * @param string         $gatewayRouteId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return PublishGatewayRouteResponse PublishGatewayRouteResponse
     */
    public function publishGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishGatewayRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes/' . OpenApiUtilClient::getEncodeParam($gatewayRouteId) . '/publish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布路由
     *  *
     * @param string $gatewayId
     * @param string $gatewayRouteId
     *
     * @return PublishGatewayRouteResponse PublishGatewayRouteResponse
     */
    public function publishGatewayRoute($gatewayId, $gatewayRouteId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $headers, $runtime);
    }

    /**
     * @summary 发布HTTP API
     *  *
     * @param string                $httpApiId
     * @param PublishHttpApiRequest $request   PublishHttpApiRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return PublishHttpApiResponse PublishHttpApiResponse
     */
    public function publishHttpApiWithOptions($httpApiId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allowOverwrite)) {
            $body['allowOverwrite'] = $request->allowOverwrite;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->environment)) {
            $body['environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->revisionId)) {
            $body['revisionId'] = $request->revisionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishHttpApi',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/http-apis/' . OpenApiUtilClient::getEncodeParam($httpApiId) . '/publish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布HTTP API
     *  *
     * @param string                $httpApiId
     * @param PublishHttpApiRequest $request   PublishHttpApiRequest
     *
     * @return PublishHttpApiResponse PublishHttpApiResponse
     */
    public function publishHttpApi($httpApiId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishHttpApiWithOptions($httpApiId, $request, $headers, $runtime);
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
     * @summary 创建网关路由
     *  *
     * @param string                    $gatewayId
     * @param string                    $gatewayRouteId
     * @param UpdateGatewayRouteRequest $request        UpdateGatewayRouteRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayRouteResponse UpdateGatewayRouteResponse
     */
    public function updateGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backendConfig)) {
            $body['backendConfig'] = $request->backendConfig;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainConfig)) {
            $body['domainConfig'] = $request->domainConfig;
        }
        if (!Utils::isUnset($request->match)) {
            $body['match'] = $request->match;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayRoute',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/http-routes/' . OpenApiUtilClient::getEncodeParam($gatewayRouteId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建网关路由
     *  *
     * @param string                    $gatewayId
     * @param string                    $gatewayRouteId
     * @param UpdateGatewayRouteRequest $request        UpdateGatewayRouteRequest
     *
     * @return UpdateGatewayRouteResponse UpdateGatewayRouteResponse
     */
    public function updateGatewayRoute($gatewayId, $gatewayRouteId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayRouteWithOptions($gatewayId, $gatewayRouteId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新服务
     *  *
     * @param string                      $gatewayId
     * @param string                      $gatewayServiceId
     * @param UpdateGatewayServiceRequest $request          UpdateGatewayServiceRequest
     * @param string[]                    $headers          map
     * @param RuntimeOptions              $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayServiceResponse UpdateGatewayServiceResponse
     */
    public function updateGatewayServiceWithOptions($gatewayId, $gatewayServiceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addresses)) {
            $body['addresses'] = $request->addresses;
        }
        if (!Utils::isUnset($request->port)) {
            $body['port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayService',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services/' . OpenApiUtilClient::getEncodeParam($gatewayServiceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新服务
     *  *
     * @param string                      $gatewayId
     * @param string                      $gatewayServiceId
     * @param UpdateGatewayServiceRequest $request          UpdateGatewayServiceRequest
     *
     * @return UpdateGatewayServiceResponse UpdateGatewayServiceResponse
     */
    public function updateGatewayService($gatewayId, $gatewayServiceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayServiceWithOptions($gatewayId, $gatewayServiceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新服务版本
     *  *
     * @param string                             $gatewayId
     * @param string                             $gatewayServiceId
     * @param string                             $name
     * @param UpdateGatewayServiceVersionRequest $request          UpdateGatewayServiceVersionRequest
     * @param string[]                           $headers          map
     * @param RuntimeOptions                     $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayServiceVersionResponse UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersionWithOptions($gatewayId, $gatewayServiceId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGatewayServiceVersion',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/gateway-services/' . OpenApiUtilClient::getEncodeParam($gatewayServiceId) . '/service-versions/' . OpenApiUtilClient::getEncodeParam($name) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新服务版本
     *  *
     * @param string                             $gatewayId
     * @param string                             $gatewayServiceId
     * @param string                             $name
     * @param UpdateGatewayServiceVersionRequest $request          UpdateGatewayServiceVersionRequest
     *
     * @return UpdateGatewayServiceVersionResponse UpdateGatewayServiceVersionResponse
     */
    public function updateGatewayServiceVersion($gatewayId, $gatewayServiceId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayServiceVersionWithOptions($gatewayId, $gatewayServiceId, $name, $request, $headers, $runtime);
    }

    /**
     * @summary 更新HTTP API
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
        if (!Utils::isUnset($request->basePath)) {
            $body['basePath'] = $request->basePath;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
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
     * @summary 更新HTTP API
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
     * @summary 更新Operation
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
     * @summary 更新Operation
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

    /**
     * @summary 更新服务来源
     *  *
     * @param string                     $gatewayId
     * @param string                     $serviceSourceId
     * @param UpdateServiceSourceRequest $request         UpdateServiceSourceRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceSourceResponse UpdateServiceSourceResponse
     */
    public function updateServiceSourceWithOptions($gatewayId, $serviceSourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->k8sServiceSourceConfig)) {
            $body['k8sServiceSourceConfig'] = $request->k8sServiceSourceConfig;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceSource',
            'version'     => '2024-03-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/gateways/' . OpenApiUtilClient::getEncodeParam($gatewayId) . '/service-sources/' . OpenApiUtilClient::getEncodeParam($serviceSourceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新服务来源
     *  *
     * @param string                     $gatewayId
     * @param string                     $serviceSourceId
     * @param UpdateServiceSourceRequest $request         UpdateServiceSourceRequest
     *
     * @return UpdateServiceSourceResponse UpdateServiceSourceResponse
     */
    public function updateServiceSource($gatewayId, $serviceSourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceSourceWithOptions($gatewayId, $serviceSourceId, $request, $headers, $runtime);
    }
}
