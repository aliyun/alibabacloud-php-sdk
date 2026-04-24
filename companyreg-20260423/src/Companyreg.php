<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataRequest;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Companyreg extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'companyreg.aliyuncs.com',
            'ap-northeast-2-pop' => 'companyreg.aliyuncs.com',
            'ap-south-1' => 'companyreg.aliyuncs.com',
            'ap-southeast-1' => 'companyreg.aliyuncs.com',
            'ap-southeast-2' => 'companyreg.aliyuncs.com',
            'ap-southeast-3' => 'companyreg.aliyuncs.com',
            'ap-southeast-5' => 'companyreg.aliyuncs.com',
            'cn-beijing' => 'companyreg.aliyuncs.com',
            'cn-beijing-finance-1' => 'companyreg.aliyuncs.com',
            'cn-beijing-finance-pop' => 'companyreg.aliyuncs.com',
            'cn-beijing-gov-1' => 'companyreg.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'companyreg.aliyuncs.com',
            'cn-chengdu' => 'companyreg.aliyuncs.com',
            'cn-edge-1' => 'companyreg.aliyuncs.com',
            'cn-fujian' => 'companyreg.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-finance' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'companyreg.aliyuncs.com',
            'cn-hangzhou-test-306' => 'companyreg.aliyuncs.com',
            'cn-hongkong' => 'companyreg.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'companyreg.aliyuncs.com',
            'cn-huhehaote' => 'companyreg.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'companyreg.aliyuncs.com',
            'cn-north-2-gov-1' => 'companyreg.aliyuncs.com',
            'cn-qingdao' => 'companyreg.aliyuncs.com',
            'cn-qingdao-nebula' => 'companyreg.aliyuncs.com',
            'cn-shanghai' => 'companyreg.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'companyreg.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'companyreg.aliyuncs.com',
            'cn-shanghai-finance-1' => 'companyreg.aliyuncs.com',
            'cn-shanghai-inner' => 'companyreg.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'companyreg.aliyuncs.com',
            'cn-shenzhen' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-inner' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'companyreg.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'companyreg.aliyuncs.com',
            'cn-wuhan' => 'companyreg.aliyuncs.com',
            'cn-wulanchabu' => 'companyreg.aliyuncs.com',
            'cn-yushanfang' => 'companyreg.aliyuncs.com',
            'cn-zhangbei' => 'companyreg.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'companyreg.aliyuncs.com',
            'cn-zhangjiakou' => 'companyreg.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'companyreg.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'companyreg.aliyuncs.com',
            'eu-central-1' => 'companyreg.aliyuncs.com',
            'eu-west-1' => 'companyreg.aliyuncs.com',
            'eu-west-1-oxs' => 'companyreg.aliyuncs.com',
            'me-east-1' => 'companyreg.aliyuncs.com',
            'rus-west-1-pop' => 'companyreg.aliyuncs.com',
            'us-east-1' => 'companyreg.aliyuncs.com',
            'us-west-1' => 'companyreg.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('companyreg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 查询已备案信息.
     *
     * @param request - QuerySuccessIcpDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySuccessIcpDataResponse
     *
     * @param QuerySuccessIcpDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySuccessIcpDataResponse
     */
    public function querySuccessIcpDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySuccessIcpData',
            'version' => '2026-04-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySuccessIcpDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询已备案信息.
     *
     * @param request - QuerySuccessIcpDataRequest
     *
     * @returns QuerySuccessIcpDataResponse
     *
     * @param QuerySuccessIcpDataRequest $request
     *
     * @return QuerySuccessIcpDataResponse
     */
    public function querySuccessIcpData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySuccessIcpDataWithOptions($request, $runtime);
    }
}
