<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Hitsdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'hitsdb.aliyuncs.com',
            'cn-beijing'                  => 'hitsdb.aliyuncs.com',
            'cn-hangzhou'                 => 'hitsdb.aliyuncs.com',
            'cn-shanghai'                 => 'hitsdb.aliyuncs.com',
            'cn-shenzhen'                 => 'hitsdb.aliyuncs.com',
            'cn-hongkong'                 => 'hitsdb.aliyuncs.com',
            'ap-southeast-1'              => 'hitsdb.aliyuncs.com',
            'us-west-1'                   => 'hitsdb.aliyuncs.com',
            'us-east-1'                   => 'hitsdb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'hitsdb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'hitsdb.aliyuncs.com',
            'cn-beijing-finance-1'        => 'hitsdb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'hitsdb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'hitsdb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'hitsdb.aliyuncs.com',
            'cn-chengdu'                  => 'hitsdb.aliyuncs.com',
            'cn-edge-1'                   => 'hitsdb.aliyuncs.com',
            'cn-fujian'                   => 'hitsdb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'hitsdb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'hitsdb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'hitsdb.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'hitsdb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'hitsdb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'hitsdb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'hitsdb.aliyuncs.com',
            'cn-shanghai-inner'           => 'hitsdb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'hitsdb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'hitsdb.aliyuncs.com',
            'cn-wuhan'                    => 'hitsdb.aliyuncs.com',
            'cn-wulanchabu'               => 'hitsdb.aliyuncs.com',
            'cn-yushanfang'               => 'hitsdb.aliyuncs.com',
            'cn-zhangbei'                 => 'hitsdb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'hitsdb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'hitsdb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'hitsdb.aliyuncs.com',
            'eu-west-1-oxs'               => 'hitsdb.aliyuncs.com',
            'me-east-1'                   => 'hitsdb.aliyuncs.com',
            'rus-west-1-pop'              => 'hitsdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hitsdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2020-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceIpWhiteListResponse::fromMap($this->doRPCRequest('GetInstanceIpWhiteList', '2020-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceIpWhiteListRequest $request
     *
     * @return GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLindormInstanceResponse
     */
    public function getLindormInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLindormInstanceResponse::fromMap($this->doRPCRequest('GetLindormInstance', '2020-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLindormInstanceRequest $request
     *
     * @return GetLindormInstanceResponse
     */
    public function getLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceEngineListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLindormInstanceEngineListResponse::fromMap($this->doRPCRequest('GetLindormInstanceEngineList', '2020-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLindormInstanceEngineListRequest $request
     *
     * @return GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceEngineListWithOptions($request, $runtime);
    }

    /**
     * @param GetLindormInstanceListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLindormInstanceListResponse
     */
    public function getLindormInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLindormInstanceListResponse::fromMap($this->doRPCRequest('GetLindormInstanceList', '2020-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLindormInstanceListRequest $request
     *
     * @return GetLindormInstanceListResponse
     */
    public function getLindormInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceIpWhiteListResponse::fromMap($this->doRPCRequest('UpdateInstanceIpWhiteList', '2020-06-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceIpWhiteListRequest $request
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceIpWhiteListWithOptions($request, $runtime);
    }
}
