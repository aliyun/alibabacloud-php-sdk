<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduInterpreting\V20240828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EduInterpreting\V20240828\Models\RecognizeAudioRequest;
use AlibabaCloud\SDK\EduInterpreting\V20240828\Models\RecognizeAudioResponse;
use AlibabaCloud\SDK\EduInterpreting\V20240828\Models\SubmitEvaluationTaskRequest;
use AlibabaCloud\SDK\EduInterpreting\V20240828\Models\SubmitEvaluationTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EduInterpreting extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eduinterpreting', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 英语口译语音文件识别成英文内容
     *  *
     * @param RecognizeAudioRequest $request RecognizeAudioRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeAudioResponse RecognizeAudioResponse
     */
    public function recognizeAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableCallBack)) {
            $query['EnableCallBack'] = $request->enableCallBack;
        }
        $body = [];
        if (!Utils::isUnset($request->audioFileUrl)) {
            $body['AudioFileUrl'] = $request->audioFileUrl;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->outerBizId)) {
            $body['OuterBizId'] = $request->outerBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecognizeAudio',
            'version'     => '2024-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAudioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 英语口译语音文件识别成英文内容
     *  *
     * @param RecognizeAudioRequest $request RecognizeAudioRequest
     *
     * @return RecognizeAudioResponse RecognizeAudioResponse
     */
    public function recognizeAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAudioWithOptions($request, $runtime);
    }

    /**
     * @summary 口译评测任务
     *  *
     * @param SubmitEvaluationTaskRequest $request SubmitEvaluationTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitEvaluationTaskResponse SubmitEvaluationTaskResponse
     */
    public function submitEvaluationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->audioUrl)) {
            $body['AudioUrl'] = $request->audioUrl;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->materialText)) {
            $body['MaterialText'] = $request->materialText;
        }
        if (!Utils::isUnset($request->outerBizId)) {
            $body['OuterBizId'] = $request->outerBizId;
        }
        if (!Utils::isUnset($request->suggestedAnswer)) {
            $body['SuggestedAnswer'] = $request->suggestedAnswer;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitEvaluationTask',
            'version'     => '2024-08-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitEvaluationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 口译评测任务
     *  *
     * @param SubmitEvaluationTaskRequest $request SubmitEvaluationTaskRequest
     *
     * @return SubmitEvaluationTaskResponse SubmitEvaluationTaskResponse
     */
    public function submitEvaluationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEvaluationTaskWithOptions($request, $runtime);
    }
}
