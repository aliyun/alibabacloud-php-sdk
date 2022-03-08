<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ft\V20210101\Models\CreateRamTestResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\CreateRPCPathTestResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\DataRateLimitTestResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\NormalRpcHsfApiResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\NormalRpcHttpApiResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcDataUploadAndDownloadRequest;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcDataUploadAndDownloadResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcDataUploadRequest;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcDataUploadResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcDataUploadTestResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcUploadDemoRequest;
use AlibabaCloud\SDK\Ft\V20210101\Models\RpcUploadDemoResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\ServiceRouteTestResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\UserGcFetchResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\UserGcGrayResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\UserGcSerivceGrayResponse;
use AlibabaCloud\SDK\Ft\V20210101\Models\VpcInstanceAccessTestYResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ft extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'ft.aliyuncs.com',
            'ap-south-1'                  => 'ft.aliyuncs.com',
            'ap-southeast-1'              => 'ft.aliyuncs.com',
            'ap-southeast-2'              => 'ft.aliyuncs.com',
            'ap-southeast-3'              => 'ft.aliyuncs.com',
            'ap-southeast-5'              => 'ft.aliyuncs.com',
            'cn-beijing'                  => 'ft.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ft.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ft.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ft.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ft.aliyuncs.com',
            'cn-chengdu'                  => 'ft.aliyuncs.com',
            'cn-edge-1'                   => 'ft.aliyuncs.com',
            'cn-fujian'                   => 'ft.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ft.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ft.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ft.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ft.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ft.aliyuncs.com',
            'cn-huhehaote'                => 'ft.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ft.aliyuncs.com',
            'cn-qingdao'                  => 'ft.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ft.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ft.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ft.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ft.aliyuncs.com',
            'cn-shanghai-inner'           => 'ft.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ft.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ft.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ft.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ft.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ft.aliyuncs.com',
            'cn-wuhan'                    => 'ft.aliyuncs.com',
            'cn-wulanchabu'               => 'ft.aliyuncs.com',
            'cn-yushanfang'               => 'ft.aliyuncs.com',
            'cn-zhangbei'                 => 'ft.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ft.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ft.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ft.aliyuncs.com',
            'eu-central-1'                => 'ft.aliyuncs.com',
            'eu-west-1'                   => 'ft.aliyuncs.com',
            'eu-west-1-oxs'               => 'ft.aliyuncs.com',
            'me-east-1'                   => 'ft.aliyuncs.com',
            'rus-west-1-pop'              => 'ft.aliyuncs.com',
            'us-west-1'                   => 'ft.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ft', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RuntimeOptions $runtime
     *
     * @return CreateRPCPathTestResponse
     */
    public function createRPCPathTestWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CreateRPCPathTest',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRPCPathTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateRPCPathTestResponse
     */
    public function createRPCPathTest()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRPCPathTestWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CreateRamTestResponse
     */
    public function createRamTestWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CreateRamTest',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRamTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateRamTestResponse
     */
    public function createRamTest()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRamTestWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DataRateLimitTestResponse
     */
    public function dataRateLimitTestWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DataRateLimitTest',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DataRateLimitTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DataRateLimitTestResponse
     */
    public function dataRateLimitTest()
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataRateLimitTestWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return NormalRpcHsfApiResponse
     */
    public function normalRpcHsfApiWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'NormalRpcHsfApi',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NormalRpcHsfApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return NormalRpcHsfApiResponse
     */
    public function normalRpcHsfApi()
    {
        $runtime = new RuntimeOptions([]);

        return $this->normalRpcHsfApiWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return NormalRpcHttpApiResponse
     */
    public function normalRpcHttpApiWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'NormalRpcHttpApi',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NormalRpcHttpApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return NormalRpcHttpApiResponse
     */
    public function normalRpcHttpApi()
    {
        $runtime = new RuntimeOptions([]);

        return $this->normalRpcHttpApiWithOptions($runtime);
    }

    /**
     * @param RpcDataUploadRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RpcDataUploadResponse
     */
    public function rpcDataUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->query1)) {
            $query['query1'] = $request->query1;
        }
        if (!Utils::isUnset($request->query2)) {
            $query['query2'] = $request->query2;
        }
        $body = [];
        if (!Utils::isUnset($request->largeParam)) {
            $body['largeParam'] = $request->largeParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RpcDataUpload',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RpcDataUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RpcDataUploadRequest $request
     *
     * @return RpcDataUploadResponse
     */
    public function rpcDataUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rpcDataUploadWithOptions($request, $runtime);
    }

    /**
     * @param RpcDataUploadAndDownloadRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RpcDataUploadAndDownloadResponse
     */
    public function rpcDataUploadAndDownloadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->query1)) {
            $query['query1'] = $request->query1;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RpcDataUploadAndDownload',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RpcDataUploadAndDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RpcDataUploadAndDownloadRequest $request
     *
     * @return RpcDataUploadAndDownloadResponse
     */
    public function rpcDataUploadAndDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rpcDataUploadAndDownloadWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return RpcDataUploadTestResponse
     */
    public function rpcDataUploadTestWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'RpcDataUploadTest',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RpcDataUploadTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return RpcDataUploadTestResponse
     */
    public function rpcDataUploadTest()
    {
        $runtime = new RuntimeOptions([]);

        return $this->rpcDataUploadTestWithOptions($runtime);
    }

    /**
     * @param RpcUploadDemoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RpcUploadDemoResponse
     */
    public function rpcUploadDemoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RpcUploadDemo',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RpcUploadDemoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RpcUploadDemoRequest $request
     *
     * @return RpcUploadDemoResponse
     */
    public function rpcUploadDemo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rpcUploadDemoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ServiceRouteTestResponse
     */
    public function serviceRouteTestWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ServiceRouteTest',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ServiceRouteTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ServiceRouteTestResponse
     */
    public function serviceRouteTest()
    {
        $runtime = new RuntimeOptions([]);

        return $this->serviceRouteTestWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return UserGcFetchResponse
     */
    public function userGcFetchWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'UserGcFetch',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserGcFetchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return UserGcFetchResponse
     */
    public function userGcFetch()
    {
        $runtime = new RuntimeOptions([]);

        return $this->userGcFetchWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return UserGcGrayResponse
     */
    public function userGcGrayWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'UserGcGray',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserGcGrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return UserGcGrayResponse
     */
    public function userGcGray()
    {
        $runtime = new RuntimeOptions([]);

        return $this->userGcGrayWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return UserGcSerivceGrayResponse
     */
    public function userGcSerivceGrayWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'UserGcSerivceGray',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserGcSerivceGrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return UserGcSerivceGrayResponse
     */
    public function userGcSerivceGray()
    {
        $runtime = new RuntimeOptions([]);

        return $this->userGcSerivceGrayWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return VpcInstanceAccessTestYResponse
     */
    public function vpcInstanceAccessTestYWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'VpcInstanceAccessTestY',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VpcInstanceAccessTestYResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return VpcInstanceAccessTestYResponse
     */
    public function vpcInstanceAccessTestY()
    {
        $runtime = new RuntimeOptions([]);

        return $this->vpcInstanceAccessTestYWithOptions($runtime);
    }
}
