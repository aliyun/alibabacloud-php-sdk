<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateCacheAnalysisTaskRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateCacheAnalysisTaskResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponse;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoRequest;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Rkvstore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'r-kvstore.aliyuncs.com',
            'cn-beijing'                  => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou'                 => 'r-kvstore.aliyuncs.com',
            'cn-shanghai'                 => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen'                 => 'r-kvstore.aliyuncs.com',
            'cn-heyuan'                   => 'r-kvstore.aliyuncs.com',
            'ap-southeast-1'              => 'r-kvstore.aliyuncs.com',
            'us-west-1'                   => 'r-kvstore.aliyuncs.com',
            'us-east-1'                   => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-finance'         => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'r-kvstore.aliyuncs.com',
            'cn-north-2-gov-1'            => 'r-kvstore.aliyuncs.com',
            'ap-northeast-2-pop'          => 'r-kvstore.aliyuncs.com',
            'cn-beijing-finance-1'        => 'r-kvstore.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'r-kvstore.aliyuncs.com',
            'cn-beijing-gov-1'            => 'r-kvstore.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'r-kvstore.aliyuncs.com',
            'cn-edge-1'                   => 'r-kvstore.aliyuncs.com',
            'cn-fujian'                   => 'r-kvstore.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'r-kvstore.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'r-kvstore.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'r-kvstore.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'r-kvstore.aliyuncs.com',
            'cn-qingdao-nebula'           => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-inner'           => 'r-kvstore.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-inner'           => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'r-kvstore.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-wuhan'                    => 'r-kvstore.aliyuncs.com',
            'cn-wulanchabu'               => 'r-kvstore.aliyuncs.com',
            'cn-yushanfang'               => 'r-kvstore.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'r-kvstore.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'r-kvstore.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'r-kvstore.aliyuncs.com',
            'eu-west-1-oxs'               => 'r-kvstore.aliyuncs.com',
            'rus-west-1-pop'              => 'r-kvstore.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('r-kvstore', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCacheAnalysisTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCacheAnalysisTaskResponse::fromMap($this->doRPCRequest('CreateCacheAnalysisTask', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCacheAnalysisTaskRequest $request
     *
     * @return CreateCacheAnalysisTaskResponse
     */
    public function createCacheAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedClusterInstanceListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedClusterInstanceListResponse::fromMap($this->doRPCRequest('DescribeDedicatedClusterInstanceList', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedClusterInstanceListRequest $request
     *
     * @return DescribeDedicatedClusterInstanceListResponse
     */
    public function describeDedicatedClusterInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoleZoneInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRoleZoneInfoResponse::fromMap($this->doRPCRequest('DescribeRoleZoneInfo', '2015-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRoleZoneInfoRequest $request
     *
     * @return DescribeRoleZoneInfoResponse
     */
    public function describeRoleZoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoleZoneInfoWithOptions($request, $runtime);
    }
}
