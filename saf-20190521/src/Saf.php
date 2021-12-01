<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteExtendServiceRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteExtendServiceResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestMLRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestMLResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestSGRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestSGResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\RequestDecisionRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\RequestDecisionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Saf extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'saf.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('saf', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ExecuteExtendServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExecuteExtendServiceResponse
     */
    public function executeExtendServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Region']            = $request->region;
        $query['Service']           = $request->service;
        $query['ServiceParameters'] = $request->serviceParameters;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExecuteExtendService',
            'version'     => '2019-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteExtendServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteExtendServiceRequest $request
     *
     * @return ExecuteExtendServiceResponse
     */
    public function executeExtendService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeExtendServiceWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteRequestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExecuteRequestResponse
     */
    public function executeRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Service']           = $request->service;
        $query['ServiceParameters'] = $request->serviceParameters;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExecuteRequest',
            'version'     => '2019-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteRequestRequest $request
     *
     * @return ExecuteRequestResponse
     */
    public function executeRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteRequestMLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteRequestMLResponse
     */
    public function executeRequestMLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Lang']              = $request->lang;
        $query['Service']           = $request->service;
        $query['ServiceParameters'] = $request->serviceParameters;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExecuteRequestML',
            'version'     => '2019-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteRequestMLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteRequestMLRequest $request
     *
     * @return ExecuteRequestMLResponse
     */
    public function executeRequestML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestMLWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteRequestSGRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteRequestSGResponse
     */
    public function executeRequestSGWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Lang']              = $request->lang;
        $query['Service']           = $request->service;
        $query['ServiceParameters'] = $request->serviceParameters;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExecuteRequestSG',
            'version'     => '2019-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteRequestSGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteRequestSGRequest $request
     *
     * @return ExecuteRequestSGResponse
     */
    public function executeRequestSG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestSGWithOptions($request, $runtime);
    }

    /**
     * @param RequestDecisionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RequestDecisionResponse
     */
    public function requestDecisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['EventCode']         = $request->eventCode;
        $query['ServiceParameters'] = $request->serviceParameters;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RequestDecision',
            'version'     => '2019-05-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RequestDecisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RequestDecisionRequest $request
     *
     * @return RequestDecisionResponse
     */
    public function requestDecision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestDecisionWithOptions($request, $runtime);
    }
}
