<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ActualDeductResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ActualDeductResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ActualDeductResourcesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ActualDeductResourcesResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\DirectDeductResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\DirectDeductResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\DirectDeductResourcesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\DirectDeductResourcesResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ExpectDeductResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ExpectDeductResourceResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ExpectDeductResourcesRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\ExpectDeductResourcesResponse;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\GetRemainResourceRequest;
use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\GetRemainResourceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IntelligentCreation extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('intelligentcreation', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActualDeductResourceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ActualDeductResourceResponse
     */
    public function actualDeductResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ActualDeductResource',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/digital-human/commands/actual-deduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ActualDeductResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActualDeductResourceRequest $request
     *
     * @return ActualDeductResourceResponse
     */
    public function actualDeductResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->actualDeductResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ActualDeductResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ActualDeductResourcesResponse
     */
    public function actualDeductResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ActualDeductResources',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/commands/actualDeductResources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ActualDeductResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActualDeductResourcesRequest $request
     *
     * @return ActualDeductResourcesResponse
     */
    public function actualDeductResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->actualDeductResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DirectDeductResourceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DirectDeductResourceResponse
     */
    public function directDeductResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'DirectDeductResource',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/digital-human/commands/direct-deduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DirectDeductResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DirectDeductResourceRequest $request
     *
     * @return DirectDeductResourceResponse
     */
    public function directDeductResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->directDeductResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DirectDeductResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DirectDeductResourcesResponse
     */
    public function directDeductResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'DirectDeductResources',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/commands/directDeductResources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DirectDeductResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DirectDeductResourcesRequest $request
     *
     * @return DirectDeductResourcesResponse
     */
    public function directDeductResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->directDeductResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExpectDeductResourceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ExpectDeductResourceResponse
     */
    public function expectDeductResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ExpectDeductResource',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/digital-human/commands/expect-deduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExpectDeductResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExpectDeductResourceRequest $request
     *
     * @return ExpectDeductResourceResponse
     */
    public function expectDeductResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->expectDeductResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ExpectDeductResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExpectDeductResourcesResponse
     */
    public function expectDeductResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'ExpectDeductResources',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/commands/expectDeductResources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExpectDeductResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExpectDeductResourcesRequest $request
     *
     * @return ExpectDeductResourcesResponse
     */
    public function expectDeductResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->expectDeductResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRemainResourceRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetRemainResourceResponse
     */
    public function getRemainResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->subAccountId)) {
            $query['subAccountId'] = $request->subAccountId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRemainResource',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/openService/v1/digitalHuman/commands/getRemainResource',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRemainResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRemainResourceRequest $request
     *
     * @return GetRemainResourceResponse
     */
    public function getRemainResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRemainResourceWithOptions($request, $headers, $runtime);
    }
}
