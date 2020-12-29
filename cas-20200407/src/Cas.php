<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateWithCsrRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateWithCsrRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DeleteCertificateRequestResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeCertificateStateResponse;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateRequest;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribePackageStateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'cas.aliyuncs.com',
            'ap-northeast-2-pop'          => 'cas.aliyuncs.com',
            'ap-southeast-1'              => 'cas.aliyuncs.com',
            'ap-southeast-3'              => 'cas.aliyuncs.com',
            'ap-southeast-5'              => 'cas.aliyuncs.com',
            'cn-beijing'                  => 'cas.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cas.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cas.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cas.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cas.aliyuncs.com',
            'cn-chengdu'                  => 'cas.aliyuncs.com',
            'cn-edge-1'                   => 'cas.aliyuncs.com',
            'cn-fujian'                   => 'cas.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cas.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cas.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cas.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cas.aliyuncs.com',
            'cn-hongkong'                 => 'cas.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cas.aliyuncs.com',
            'cn-huhehaote'                => 'cas.aliyuncs.com',
            'cn-north-2-gov-1'            => 'cas.aliyuncs.com',
            'cn-qingdao'                  => 'cas.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cas.aliyuncs.com',
            'cn-shanghai'                 => 'cas.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cas.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cas.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cas.aliyuncs.com',
            'cn-shanghai-inner'           => 'cas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cas.aliyuncs.com',
            'cn-shenzhen'                 => 'cas.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cas.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cas.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cas.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cas.aliyuncs.com',
            'cn-wuhan'                    => 'cas.aliyuncs.com',
            'cn-yushanfang'               => 'cas.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cas.aliyuncs.com',
            'cn-zhangjiakou'              => 'cas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cas.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cas.aliyuncs.com',
            'eu-west-1'                   => 'cas.aliyuncs.com',
            'eu-west-1-oxs'               => 'cas.aliyuncs.com',
            'rus-west-1-pop'              => 'cas.aliyuncs.com',
            'us-east-1'                   => 'cas.aliyuncs.com',
            'us-west-1'                   => 'cas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCertificateRequestRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCertificateRequestResponse
     */
    public function createCertificateRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCertificateRequestResponse::fromMap($this->doRPCRequest('CreateCertificateRequest', '2020-04-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCertificateRequestRequest $request
     *
     * @return CreateCertificateRequestResponse
     */
    public function createCertificateRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateRequestWithOptions($request, $runtime);
    }

    /**
     * @param CreateCertificateWithCsrRequestRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateCertificateWithCsrRequestResponse
     */
    public function createCertificateWithCsrRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCertificateWithCsrRequestResponse::fromMap($this->doRPCRequest('CreateCertificateWithCsrRequest', '2020-04-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCertificateWithCsrRequestRequest $request
     *
     * @return CreateCertificateWithCsrRequestResponse
     */
    public function createCertificateWithCsrRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithCsrRequestWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCertificateRequestRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCertificateRequestResponse
     */
    public function deleteCertificateRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCertificateRequestResponse::fromMap($this->doRPCRequest('DeleteCertificateRequest', '2020-04-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCertificateRequestRequest $request
     *
     * @return DeleteCertificateRequestResponse
     */
    public function deleteCertificateRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateRequestWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertificateStateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCertificateStateResponse
     */
    public function describeCertificateStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCertificateStateResponse::fromMap($this->doRPCRequest('DescribeCertificateState', '2020-04-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCertificateStateRequest $request
     *
     * @return DescribeCertificateStateResponse
     */
    public function describeCertificateState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateStateWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackageStateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePackageStateResponse
     */
    public function describePackageStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePackageStateResponse::fromMap($this->doRPCRequest('DescribePackageState', '2020-04-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePackageStateRequest $request
     *
     * @return DescribePackageStateResponse
     */
    public function describePackageState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageStateWithOptions($request, $runtime);
    }
}
