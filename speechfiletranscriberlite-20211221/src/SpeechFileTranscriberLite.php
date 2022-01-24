<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\SubmitTaskRequest;
use AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\SubmitTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class SpeechFileTranscriberLite extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('speechfiletranscriberlite', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetTaskResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskResult',
            'version'     => '2021-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitTaskResponse
     */
    public function submitTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->debug)) {
            $query['Debug'] = $request->debug;
        }
        if (!Utils::isUnset($request->task)) {
            $query['Task'] = $request->task;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTask',
            'version'     => '2021-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTaskRequest $request
     *
     * @return SubmitTaskResponse
     */
    public function submitTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTaskWithOptions($request, $runtime);
    }
}
