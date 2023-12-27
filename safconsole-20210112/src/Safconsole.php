<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20210112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\RevokeFeedbackRequest;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\RevokeFeedbackResponse;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\SendFeedbackRequest;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\SendFeedbackResponse;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\UploadSampleApiRequest;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\UploadSampleApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Safconsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('safconsole', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RevokeFeedbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RevokeFeedbackResponse
     */
    public function revokeFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sampleType)) {
            $body['SampleType'] = $request->sampleType;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeFeedback',
            'version'     => '2021-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeFeedbackRequest $request
     *
     * @return RevokeFeedbackResponse
     */
    public function revokeFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeFeedbackWithOptions($request, $runtime);
    }

    /**
     * @param SendFeedbackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SendFeedbackResponse
     */
    public function sendFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->riskLabel)) {
            $query['RiskLabel'] = $request->riskLabel;
        }
        if (!Utils::isUnset($request->sampleType)) {
            $query['SampleType'] = $request->sampleType;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendFeedback',
            'version'     => '2021-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendFeedbackRequest $request
     *
     * @return SendFeedbackResponse
     */
    public function sendFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendFeedbackWithOptions($request, $runtime);
    }

    /**
     * @param UploadSampleApiRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UploadSampleApiResponse
     */
    public function uploadSampleApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->dataValue)) {
            $query['DataValue'] = $request->dataValue;
        }
        if (!Utils::isUnset($request->sampleType)) {
            $query['SampleType'] = $request->sampleType;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadSampleApi',
            'version'     => '2021-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadSampleApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadSampleApiRequest $request
     *
     * @return UploadSampleApiResponse
     */
    public function uploadSampleApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadSampleApiWithOptions($request, $runtime);
    }
}
