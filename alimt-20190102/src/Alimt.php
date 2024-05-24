<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20190102;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Alimt\V20190102\Models\GetResourceResponse;
use AlibabaCloud\SDK\Alimt\V20190102\Models\ListMtConnectorRequest;
use AlibabaCloud\SDK\Alimt\V20190102\Models\ListMtConnectorResponse;
use AlibabaCloud\SDK\Alimt\V20190102\Models\TranslateECommerceResponse;
use AlibabaCloud\SDK\Alimt\V20190102\Models\TranslateGeneralResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Alimt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'mt.cn-hangzhou.aliyuncs.com',
            'ap-northeast-1'              => 'mt.aliyuncs.com',
            'ap-northeast-2-pop'          => 'mt.aliyuncs.com',
            'ap-south-1'                  => 'mt.aliyuncs.com',
            'ap-southeast-1'              => 'mt.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'mt.aliyuncs.com',
            'ap-southeast-3'              => 'mt.aliyuncs.com',
            'ap-southeast-5'              => 'mt.aliyuncs.com',
            'cn-beijing'                  => 'mt.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mt.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mt.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mt.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mt.aliyuncs.com',
            'cn-chengdu'                  => 'mt.aliyuncs.com',
            'cn-edge-1'                   => 'mt.aliyuncs.com',
            'cn-fujian'                   => 'mt.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mt.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mt.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mt.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mt.aliyuncs.com',
            'cn-hongkong'                 => 'mt.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mt.aliyuncs.com',
            'cn-huhehaote'                => 'mt.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mt.aliyuncs.com',
            'cn-qingdao'                  => 'mt.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mt.aliyuncs.com',
            'cn-shanghai'                 => 'mt.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mt.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mt.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mt.aliyuncs.com',
            'cn-shanghai-inner'           => 'mt.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mt.aliyuncs.com',
            'cn-shenzhen'                 => 'mt.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mt.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mt.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mt.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mt.aliyuncs.com',
            'cn-wuhan'                    => 'mt.aliyuncs.com',
            'cn-yushanfang'               => 'mt.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mt.aliyuncs.com',
            'cn-zhangjiakou'              => 'mt.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mt.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mt.aliyuncs.com',
            'eu-central-1'                => 'mt.aliyuncs.com',
            'eu-west-1'                   => 'mt.aliyuncs.com',
            'eu-west-1-oxs'               => 'mt.aliyuncs.com',
            'me-east-1'                   => 'mt.aliyuncs.com',
            'rus-west-1-pop'              => 'mt.aliyuncs.com',
            'us-east-1'                   => 'mt.aliyuncs.com',
            'us-west-1'                   => 'mt.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alimt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResourceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetResource',
            'version'     => '2019-01-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/resource',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetResourceResponse GetResourceResponse
     */
    public function getResource()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取系统模型和AI模型
     *  *
     * @param ListMtConnectorRequest $request ListMtConnectorRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMtConnectorResponse ListMtConnectorResponse
     */
    public function listMtConnectorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMtConnector',
            'version'     => '2019-01-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/alynx/listMtModels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMtConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取系统模型和AI模型
     *  *
     * @param ListMtConnectorRequest $request ListMtConnectorRequest
     *
     * @return ListMtConnectorResponse ListMtConnectorResponse
     */
    public function listMtConnector($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMtConnectorWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateECommerceResponse TranslateECommerceResponse
     */
    public function translateECommerceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'TranslateECommerce',
            'version'     => '2019-01-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/translate/web/ecommerce',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TranslateECommerceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return TranslateECommerceResponse TranslateECommerceResponse
     */
    public function translateECommerce()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->translateECommerceWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateGeneralResponse TranslateGeneralResponse
     */
    public function translateGeneralWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'TranslateGeneral',
            'version'     => '2019-01-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/translate/web/general',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TranslateGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return TranslateGeneralResponse TranslateGeneralResponse
     */
    public function translateGeneral()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->translateGeneralWithOptions($headers, $runtime);
    }
}
