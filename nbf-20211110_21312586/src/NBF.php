<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\ApiTestRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\ApiTestResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\BuildSdkRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\BuildSdkResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\CreateAndReleaseApiRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\CreateAndReleaseApiResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\CreateSdkVersionRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\CreateSdkVersionResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\DeleteApiRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\DeleteApiResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\GetResultRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\GetResultResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\OpenApiGenericProxyResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\PreCheckRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\PreCheckResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\PublishSdkRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\PublishSdkResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\SerializeApiRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\SerializeApiResponse;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\UpdateAndReleaseApiRequest;
use AlibabaCloud\SDK\NBF\V20211110_21312586\Models\UpdateAndReleaseApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class NBF extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nbf', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApiTestRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ApiTestResponse
     */
    public function apiTestWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->testCmd)) {
            $query['testCmd'] = $request->testCmd;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApiTest',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/apiTest',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return ApiTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApiTestRequest $request
     *
     * @return ApiTestResponse
     */
    public function apiTest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->apiTestWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BuildSdkRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return BuildSdkResponse
     */
    public function buildSdkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buildCmd)) {
            $query['buildCmd'] = $request->buildCmd;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BuildSdk',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/buildSdk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return BuildSdkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BuildSdkRequest $request
     *
     * @return BuildSdkResponse
     */
    public function buildSdk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->buildSdkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateAndReleaseApiRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAndReleaseApiResponse
     */
    public function createAndReleaseApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creatApiCmd)) {
            $query['creatApiCmd'] = $request->creatApiCmd;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAndReleaseApi',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/createAndReleaseApi',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return CreateAndReleaseApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAndReleaseApiRequest $request
     *
     * @return CreateAndReleaseApiResponse
     */
    public function createAndReleaseApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndReleaseApiWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSdkVersionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSdkVersionResponse
     */
    public function createSdkVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSdkCmd)) {
            $query['createSdkCmd'] = $request->createSdkCmd;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSdkVersion',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/createSdkVersion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return CreateSdkVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSdkVersionRequest $request
     *
     * @return CreateSdkVersionResponse
     */
    public function createSdkVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSdkVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteApiRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteApiResponse
     */
    public function deleteApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiExternalId)) {
            $query['apiExternalId'] = $request->apiExternalId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApi',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/deleteApi',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return DeleteApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApiRequest $request
     *
     * @return DeleteApiResponse
     */
    public function deleteApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteApiWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetResultRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetResultResponse
     */
    public function getResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResult',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/getResult',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResultRequest $request
     *
     * @return GetResultResponse
     */
    public function getResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return OpenApiGenericProxyResponse
     */
    public function openApiGenericProxyWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'OpenApiGenericProxy',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/openApiGenericProxy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenApiGenericProxyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenApiGenericProxyResponse
     */
    public function openApiGenericProxy()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openApiGenericProxyWithOptions($headers, $runtime);
    }

    /**
     * @param PreCheckRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return PreCheckResponse
     */
    public function preCheckWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiSchemaDTO)) {
            $query['apiSchemaDTO'] = $request->apiSchemaDTO;
        }
        if (!Utils::isUnset($request->groupVersionExtraInfo)) {
            $query['groupVersionExtraInfo'] = $request->groupVersionExtraInfo;
        }
        if (!Utils::isUnset($request->namespaceExternalId)) {
            $query['namespaceExternalId'] = $request->namespaceExternalId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreCheck',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/preCheck',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return PreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreCheckRequest $request
     *
     * @return PreCheckResponse
     */
    public function preCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->preCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PublishSdkRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return PublishSdkResponse
     */
    public function publishSdkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishSdk',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/publishSdk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return PublishSdkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishSdkRequest $request
     *
     * @return PublishSdkResponse
     */
    public function publishSdk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishSdkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SerializeApiRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SerializeApiResponse
     */
    public function serializeApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiSchemaDTO)) {
            $query['apiSchemaDTO'] = $request->apiSchemaDTO;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SerializeApi',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/serializeApi',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return SerializeApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SerializeApiRequest $request
     *
     * @return SerializeApiResponse
     */
    public function serializeApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->serializeApiWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAndReleaseApiRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAndReleaseApiResponse
     */
    public function updateAndReleaseApiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->updateApiCmd)) {
            $query['updateApiCmd'] = $request->updateApiCmd;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAndReleaseApi',
            'version'     => '2021-11-10_21-31-25-86',
            'protocol'    => 'HTTPS',
            'pathname'    => '/nbf_gateway_inner/1_0_0/updateAndReleaseApi',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return UpdateAndReleaseApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAndReleaseApiRequest $request
     *
     * @return UpdateAndReleaseApiResponse
     */
    public function updateAndReleaseApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndReleaseApiWithOptions($request, $headers, $runtime);
    }
}
