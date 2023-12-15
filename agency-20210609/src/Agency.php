<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20210609;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Agency\V20210609\Models\GetOwnerAgreementInstanceRequest;
use AlibabaCloud\SDK\Agency\V20210609\Models\GetOwnerAgreementInstanceResponse;
use AlibabaCloud\SDK\Agency\V20210609\Models\GetPartnerByUidRequest;
use AlibabaCloud\SDK\Agency\V20210609\Models\GetPartnerByUidResponse;
use AlibabaCloud\SDK\Agency\V20210609\Models\QueryFusionOrderListRequest;
use AlibabaCloud\SDK\Agency\V20210609\Models\QueryFusionOrderListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Agency extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'agency.aliyuncs.com',
            'ap-northeast-2-pop'          => 'agency.aliyuncs.com',
            'ap-south-1'                  => 'agency.aliyuncs.com',
            'ap-southeast-2'              => 'agency.aliyuncs.com',
            'ap-southeast-3'              => 'agency.aliyuncs.com',
            'ap-southeast-5'              => 'agency.aliyuncs.com',
            'cn-beijing'                  => 'agency.aliyuncs.com',
            'cn-beijing-finance-1'        => 'agency.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'agency.aliyuncs.com',
            'cn-beijing-gov-1'            => 'agency.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'agency.aliyuncs.com',
            'cn-chengdu'                  => 'agency.aliyuncs.com',
            'cn-edge-1'                   => 'agency.aliyuncs.com',
            'cn-fujian'                   => 'agency.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'agency.aliyuncs.com',
            'cn-hangzhou'                 => 'agency.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'agency.aliyuncs.com',
            'cn-hangzhou-finance'         => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'agency.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'agency.aliyuncs.com',
            'cn-hongkong'                 => 'agency.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'agency.aliyuncs.com',
            'cn-huhehaote'                => 'agency.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'agency.aliyuncs.com',
            'cn-north-2-gov-1'            => 'agency.aliyuncs.com',
            'cn-qingdao'                  => 'agency.aliyuncs.com',
            'cn-qingdao-nebula'           => 'agency.aliyuncs.com',
            'cn-shanghai'                 => 'agency.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'agency.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'agency.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'agency.aliyuncs.com',
            'cn-shanghai-inner'           => 'agency.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'agency.aliyuncs.com',
            'cn-shenzhen'                 => 'agency.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'agency.aliyuncs.com',
            'cn-shenzhen-inner'           => 'agency.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'agency.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'agency.aliyuncs.com',
            'cn-wuhan'                    => 'agency.aliyuncs.com',
            'cn-wulanchabu'               => 'agency.aliyuncs.com',
            'cn-yushanfang'               => 'agency.aliyuncs.com',
            'cn-zhangbei'                 => 'agency.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'agency.aliyuncs.com',
            'cn-zhangjiakou'              => 'agency.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'agency.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'agency.aliyuncs.com',
            'eu-central-1'                => 'agency.aliyuncs.com',
            'eu-west-1'                   => 'agency.aliyuncs.com',
            'eu-west-1-oxs'               => 'agency.aliyuncs.com',
            'me-east-1'                   => 'agency.aliyuncs.com',
            'rus-west-1-pop'              => 'agency.aliyuncs.com',
            'us-east-1'                   => 'agency.aliyuncs.com',
            'us-west-1'                   => 'agency.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agency', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetOwnerAgreementInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetOwnerAgreementInstanceResponse
     */
    public function getOwnerAgreementInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOwnerAgreementInstance',
            'version'     => '2021-06-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOwnerAgreementInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOwnerAgreementInstanceRequest $request
     *
     * @return GetOwnerAgreementInstanceResponse
     */
    public function getOwnerAgreementInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOwnerAgreementInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetPartnerByUidRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPartnerByUidResponse
     */
    public function getPartnerByUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPartnerByUid',
            'version'     => '2021-06-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPartnerByUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPartnerByUidRequest $request
     *
     * @return GetPartnerByUidResponse
     */
    public function getPartnerByUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPartnerByUidWithOptions($request, $runtime);
    }

    /**
     * @param QueryFusionOrderListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryFusionOrderListResponse
     */
    public function queryFusionOrderListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFusionOrderList',
            'version'     => '2021-06-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFusionOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFusionOrderListRequest $request
     *
     * @return QueryFusionOrderListResponse
     */
    public function queryFusionOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFusionOrderListWithOptions($request, $runtime);
    }
}
