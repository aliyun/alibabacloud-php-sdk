<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YicConsole\V20240118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\BillingProcessMessageRequest;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\BillingProcessMessageResponse;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\CheckPayOrderRequest;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\CheckPayOrderResponse;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\CheckRefundRequest;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\CheckRefundResponse;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\PayOrderRequest;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\PayOrderResponse;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\PrepaidCeaseRequest;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\PrepaidCeaseResponse;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\RefundRequest;
use AlibabaCloud\SDK\YicConsole\V20240118\Models\RefundResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class YicConsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yicconsole', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BillingProcessMessageRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BillingProcessMessageResponse
     */
    public function billingProcessMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'BillingProcessMessage',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/billing/commands/lifecycle',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BillingProcessMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BillingProcessMessageRequest $request
     *
     * @return BillingProcessMessageResponse
     */
    public function billingProcessMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->billingProcessMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckPayOrderRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CheckPayOrderResponse
     */
    public function checkPayOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CheckPayOrder',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/billing/commands/verify',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckPayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckPayOrderRequest $request
     *
     * @return CheckPayOrderResponse
     */
    public function checkPayOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkPayOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckRefundRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CheckRefundResponse
     */
    public function checkRefundWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CheckRefund',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/billing/commands/check-refund',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckRefundRequest $request
     *
     * @return CheckRefundResponse
     */
    public function checkRefund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkRefundWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PayOrderRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return PayOrderResponse
     */
    public function payOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PayOrder',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/billing/commands/pay',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PayOrderRequest $request
     *
     * @return PayOrderResponse
     */
    public function payOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->payOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PrepaidCeaseRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PrepaidCeaseResponse
     */
    public function prepaidCeaseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'PrepaidCease',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/billing/commands/prepaid-cease',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PrepaidCeaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PrepaidCeaseRequest $request
     *
     * @return PrepaidCeaseResponse
     */
    public function prepaidCease($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->prepaidCeaseWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RefundRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RefundResponse
     */
    public function refundWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'Refund',
            'version'     => '2024-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/yic/yic-console/v1/billing/commands/refund',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundRequest $request
     *
     * @return RefundResponse
     */
    public function refund($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refundWithOptions($request, $headers, $runtime);
    }
}
