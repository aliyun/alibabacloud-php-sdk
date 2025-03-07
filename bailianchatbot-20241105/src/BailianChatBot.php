<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianChatBot\V20241105;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BailianChatBot\V20241105\Models\SseChatRequest;
use AlibabaCloud\SDK\BailianChatBot\V20241105\Models\SseChatResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BailianChatBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianchatbot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary SSE问答接口
     *  *
     * @param SseChatRequest $request SseChatRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SseChatResponse SseChatResponse
     */
    public function sseChatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->senderId)) {
            $query['SenderId'] = $request->senderId;
        }
        if (!Utils::isUnset($request->senderNick)) {
            $query['SenderNick'] = $request->senderNick;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $query['Utterance'] = $request->utterance;
        }
        if (!Utils::isUnset($request->vendorParam)) {
            $query['VendorParam'] = $request->vendorParam;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SseChat',
            'version'     => '2024-11-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SseChatResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SseChatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary SSE问答接口
     *  *
     * @param SseChatRequest $request SseChatRequest
     *
     * @return SseChatResponse SseChatResponse
     */
    public function sseChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sseChatWithOptions($request, $runtime);
    }
}
