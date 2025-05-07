<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingSolutionFramework\V20230810;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\WuyingSolutionFramework\V20230810\Models\SendOpsMessageToTerminalRequest;
use AlibabaCloud\SDK\WuyingSolutionFramework\V20230810\Models\SendOpsMessageToTerminalResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class WuyingSolutionFramework extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wuyingsolutionframework', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 发送运维消息.
     *
     * @param request - SendOpsMessageToTerminalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendOpsMessageToTerminalResponse
     *
     * @param SendOpsMessageToTerminalRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SendOpsMessageToTerminalResponse
     */
    public function sendOpsMessageToTerminalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->messageBody) {
            @$query['MessageBody'] = $request->messageBody;
        }

        if (null !== $request->officeRegionId) {
            @$query['OfficeRegionId'] = $request->officeRegionId;
        }

        if (null !== $request->opsAction) {
            @$query['OpsAction'] = $request->opsAction;
        }

        if (null !== $request->serialNo) {
            @$query['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->waitForAck) {
            @$query['WaitForAck'] = $request->waitForAck;
        }

        if (null !== $request->waitForMsg) {
            @$query['WaitForMsg'] = $request->waitForMsg;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendOpsMessageToTerminal',
            'version' => '2023-08-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendOpsMessageToTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送运维消息.
     *
     * @param request - SendOpsMessageToTerminalRequest
     *
     * @returns SendOpsMessageToTerminalResponse
     *
     * @param SendOpsMessageToTerminalRequest $request
     *
     * @return SendOpsMessageToTerminalResponse
     */
    public function sendOpsMessageToTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendOpsMessageToTerminalWithOptions($request, $runtime);
    }
}
