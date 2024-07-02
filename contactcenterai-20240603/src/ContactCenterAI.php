<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ContactCenterAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('contactcenterai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary CCAI服务面API
     *  *
     * @param string               $workspaceId
     * @param string               $appId
     * @param RunCompletionRequest $request     RunCompletionRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunCompletionResponse RunCompletionResponse
     */
    public function runCompletionWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dialogue)) {
            $body['Dialogue'] = $request->dialogue;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $body['ModelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->serviceInspection)) {
            $body['ServiceInspection'] = $request->serviceInspection;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['Stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $body['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCompletion',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/completion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunCompletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string               $workspaceId
     * @param string               $appId
     * @param RunCompletionRequest $request     RunCompletionRequest
     *
     * @return RunCompletionResponse RunCompletionResponse
     */
    public function runCompletion($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runCompletionWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string                      $workspaceId
     * @param string                      $appId
     * @param RunCompletionMessageRequest $request     RunCompletionMessageRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunCompletionMessageResponse RunCompletionMessageResponse
     */
    public function runCompletionMessageWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->messages)) {
            $body['Messages'] = $request->messages;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $body['ModelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCompletionMessage',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/completion_message',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunCompletionMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string                      $workspaceId
     * @param string                      $appId
     * @param RunCompletionMessageRequest $request     RunCompletionMessageRequest
     *
     * @return RunCompletionMessageResponse RunCompletionMessageResponse
     */
    public function runCompletionMessage($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runCompletionMessageWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }
}
