<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20180807;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Alimt\V20180807\Models\MachineTranslateECommerceRequest;
use AlibabaCloud\SDK\Alimt\V20180807\Models\MachineTranslateECommerceResponse;
use AlibabaCloud\SDK\Alimt\V20180807\Models\MachineTranslateGeneralRequest;
use AlibabaCloud\SDK\Alimt\V20180807\Models\MachineTranslateGeneralResponse;
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
     * @param MachineTranslateECommerceRequest $request MachineTranslateECommerceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return MachineTranslateECommerceResponse MachineTranslateECommerceResponse
     */
    public function machineTranslateECommerceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contentFormat)) {
            $body['ContentFormat'] = $request->contentFormat;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MachineTranslateECommerce',
            'version'     => '2018-08-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MachineTranslateECommerceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MachineTranslateECommerceRequest $request MachineTranslateECommerceRequest
     *
     * @return MachineTranslateECommerceResponse MachineTranslateECommerceResponse
     */
    public function machineTranslateECommerce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->machineTranslateECommerceWithOptions($request, $runtime);
    }

    /**
     * @param MachineTranslateGeneralRequest $request MachineTranslateGeneralRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return MachineTranslateGeneralResponse MachineTranslateGeneralResponse
     */
    public function machineTranslateGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contentFormat)) {
            $body['ContentFormat'] = $request->contentFormat;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MachineTranslateGeneral',
            'version'     => '2018-08-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MachineTranslateGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MachineTranslateGeneralRequest $request MachineTranslateGeneralRequest
     *
     * @return MachineTranslateGeneralResponse MachineTranslateGeneralResponse
     */
    public function machineTranslateGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->machineTranslateGeneralWithOptions($request, $runtime);
    }
}
