<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20160816;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Edas\V20160816\Models\EdasRefundRequest;
use AlibabaCloud\SDK\Edas\V20160816\Models\EdasRefundResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Edas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-south-1'                  => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'edas.ap-northeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'edas.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'edas.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'edas.aliyuncs.com',
            'cn-beijing-gov-1'            => 'edas.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'edas.aliyuncs.com',
            'cn-chengdu'                  => 'edas.aliyuncs.com',
            'cn-edge-1'                   => 'edas.aliyuncs.com',
            'cn-fujian'                   => 'edas.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'edas.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'edas.aliyuncs.com',
            'cn-hangzhou-finance'         => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'edas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'edas.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'edas.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'edas.aliyuncs.com',
            'cn-huhehaote'                => 'edas.aliyuncs.com',
            'cn-qingdao-nebula'           => 'edas.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'edas.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'edas.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'edas.aliyuncs.com',
            'cn-shanghai-inner'           => 'edas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'edas.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'edas.aliyuncs.com',
            'cn-shenzhen-inner'           => 'edas.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'edas.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'edas.aliyuncs.com',
            'cn-wuhan'                    => 'edas.aliyuncs.com',
            'cn-yushanfang'               => 'edas.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'edas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'edas.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'edas.aliyuncs.com',
            'eu-west-1'                   => 'edas.ap-northeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'edas.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'edas.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'edas.ap-northeast-1.aliyuncs.com',
            'us-west-1'                   => 'edas.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('edas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param EdasRefundRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EdasRefundResponse
     */
    public function edasRefundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EdasRefund',
            'version'     => '2016-08-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EdasRefundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EdasRefundRequest $request
     *
     * @return EdasRefundResponse
     */
    public function edasRefund($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->edasRefundWithOptions($request, $runtime);
    }
}
