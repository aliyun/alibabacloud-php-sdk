<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211125;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Umengfinplus\V20211125\Models\GetMessageStatusRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211125\Models\GetMessageStatusResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211125\Models\SendBatchMessageRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211125\Models\SendBatchMessageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Umengfinplus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('umeng-finplus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetMessageStatusRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetMessageStatusResponse
     */
    public function getMessageStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMessageStatus',
            'version'     => '2021-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sms/message/status',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMessageStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMessageStatusRequest $request
     *
     * @return GetMessageStatusResponse
     */
    public function getMessageStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMessageStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendBatchMessageRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SendBatchMessageResponse
     */
    public function sendBatchMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->batchFlag)) {
            $body['BatchFlag'] = $request->batchFlag;
        }
        if (!Utils::isUnset($request->extendInfo)) {
            $body['ExtendInfo'] = $request->extendInfo;
        }
        if (!Utils::isUnset($request->idType)) {
            $body['IdType'] = $request->idType;
        }
        if (!Utils::isUnset($request->phoneNumberJson)) {
            $body['PhoneNumberJson'] = $request->phoneNumberJson;
        }
        if (!Utils::isUnset($request->signNameJson)) {
            $body['SignNameJson'] = $request->signNameJson;
        }
        if (!Utils::isUnset($request->specificChannel)) {
            $body['SpecificChannel'] = $request->specificChannel;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParamJson)) {
            $body['TemplateParamJson'] = $request->templateParamJson;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendBatchMessage',
            'version'     => '2021-11-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sms/message/send',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendBatchMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendBatchMessageRequest $request
     *
     * @return SendBatchMessageResponse
     */
    public function sendBatchMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendBatchMessageWithOptions($request, $headers, $runtime);
    }
}
