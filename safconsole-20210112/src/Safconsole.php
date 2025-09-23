<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20210112;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\RevokeFeedbackRequest;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\RevokeFeedbackResponse;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\SendFeedbackRequest;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\SendFeedbackResponse;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\UploadSampleApiRequest;
use AlibabaCloud\SDK\Safconsole\V20210112\Models\UploadSampleApiResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Used for external deletion of community samples in risk identification services.
     *
     * @param request - RevokeFeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeFeedbackResponse
     *
     * @param RevokeFeedbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RevokeFeedbackResponse
     */
    public function revokeFeedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sampleType) {
            @$body['SampleType'] = $request->sampleType;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeFeedback',
            'version' => '2021-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used for external deletion of community samples in risk identification services.
     *
     * @param request - RevokeFeedbackRequest
     *
     * @returns RevokeFeedbackResponse
     *
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
     * Used for the external creation of community samples in risk identification services.
     *
     * @param request - SendFeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendFeedbackResponse
     *
     * @param SendFeedbackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SendFeedbackResponse
     */
    public function sendFeedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        if (null !== $request->riskLabel) {
            @$query['RiskLabel'] = $request->riskLabel;
        }

        if (null !== $request->sampleType) {
            @$query['SampleType'] = $request->sampleType;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendFeedback',
            'version' => '2021-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used for the external creation of community samples in risk identification services.
     *
     * @param request - SendFeedbackRequest
     *
     * @returns SendFeedbackResponse
     *
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
     * Single User API for Sample Creation.
     *
     * @param request - UploadSampleApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadSampleApiResponse
     *
     * @param UploadSampleApiRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UploadSampleApiResponse
     */
    public function uploadSampleApiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->dataValue) {
            @$query['DataValue'] = $request->dataValue;
        }

        if (null !== $request->sampleType) {
            @$query['SampleType'] = $request->sampleType;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadSampleApi',
            'version' => '2021-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadSampleApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Single User API for Sample Creation.
     *
     * @param request - UploadSampleApiRequest
     *
     * @returns UploadSampleApiResponse
     *
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
