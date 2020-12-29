<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cas\V20180713\Models\CreateDVOrderAuditRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\CreateDVOrderAuditResponse;
use AlibabaCloud\SDK\Cas\V20180713\Models\CreateUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\CreateUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20180713\Models\DeleteUserCertificateRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\DeleteUserCertificateResponse;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeDVOrderResultRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeDVOrderResultResponse;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeOrderInstanceListRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeOrderInstanceListResponse;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeUserCertificateDetailRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeUserCertificateDetailResponse;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeUserCertificateListRequest;
use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeUserCertificateListResponse;
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
     * @param CreateDVOrderAuditRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDVOrderAuditResponse
     */
    public function createDVOrderAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDVOrderAuditResponse::fromMap($this->doRPCRequest('CreateDVOrderAudit', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDVOrderAuditRequest $request
     *
     * @return CreateDVOrderAuditResponse
     */
    public function createDVOrderAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDVOrderAuditWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateUserCertificateResponse
     */
    public function createUserCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserCertificateResponse::fromMap($this->doRPCRequest('CreateUserCertificate', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserCertificateRequest $request
     *
     * @return CreateUserCertificateResponse
     */
    public function createUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserCertificateResponse
     */
    public function deleteUserCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserCertificateResponse::fromMap($this->doRPCRequest('DeleteUserCertificate', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserCertificateRequest $request
     *
     * @return DeleteUserCertificateResponse
     */
    public function deleteUserCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDVOrderResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDVOrderResultResponse
     */
    public function describeDVOrderResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDVOrderResultResponse::fromMap($this->doRPCRequest('DescribeDVOrderResult', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDVOrderResultRequest $request
     *
     * @return DescribeDVOrderResultResponse
     */
    public function describeDVOrderResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDVOrderResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOrderInstanceListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOrderInstanceListResponse
     */
    public function describeOrderInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOrderInstanceListResponse::fromMap($this->doRPCRequest('DescribeOrderInstanceList', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOrderInstanceListRequest $request
     *
     * @return DescribeOrderInstanceListResponse
     */
    public function describeOrderInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOrderInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserCertificateDetailResponse
     */
    public function describeUserCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserCertificateDetailResponse::fromMap($this->doRPCRequest('DescribeUserCertificateDetail', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserCertificateDetailRequest $request
     *
     * @return DescribeUserCertificateDetailResponse
     */
    public function describeUserCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserCertificateListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUserCertificateListResponse
     */
    public function describeUserCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserCertificateListResponse::fromMap($this->doRPCRequest('DescribeUserCertificateList', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserCertificateListRequest $request
     *
     * @return DescribeUserCertificateListResponse
     */
    public function describeUserCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCertificateListWithOptions($request, $runtime);
    }
}
