<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\AttachEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiAllRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiAllResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiAllRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiAllResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DeleteEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaiRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\DetachEaiResponse;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetPrivateIpRequest;
use AlibabaCloud\SDK\Eais\V20190624\Models\GetPrivateIpResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Eais extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'eais.aliyuncs.com',
            'ap-northeast-2-pop'          => 'eais.aliyuncs.com',
            'ap-south-1'                  => 'eais.aliyuncs.com',
            'ap-southeast-1'              => 'eais.aliyuncs.com',
            'ap-southeast-2'              => 'eais.aliyuncs.com',
            'ap-southeast-3'              => 'eais.aliyuncs.com',
            'ap-southeast-5'              => 'eais.aliyuncs.com',
            'cn-beijing-finance-1'        => 'eais.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'eais.aliyuncs.com',
            'cn-beijing-gov-1'            => 'eais.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'eais.aliyuncs.com',
            'cn-edge-1'                   => 'eais.aliyuncs.com',
            'cn-fujian'                   => 'eais.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'eais.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'eais.aliyuncs.com',
            'cn-hangzhou-finance'         => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'eais.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'eais.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'eais.aliyuncs.com',
            'cn-hongkong'                 => 'eais.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'eais.aliyuncs.com',
            'cn-huhehaote'                => 'eais.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'eais.aliyuncs.com',
            'cn-north-2-gov-1'            => 'eais.aliyuncs.com',
            'cn-qingdao'                  => 'eais.aliyuncs.com',
            'cn-qingdao-nebula'           => 'eais.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'eais.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'eais.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'eais.aliyuncs.com',
            'cn-shanghai-inner'           => 'eais.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'eais.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'eais.aliyuncs.com',
            'cn-shenzhen-inner'           => 'eais.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'eais.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'eais.aliyuncs.com',
            'cn-wuhan'                    => 'eais.aliyuncs.com',
            'cn-wulanchabu'               => 'eais.aliyuncs.com',
            'cn-yushanfang'               => 'eais.aliyuncs.com',
            'cn-zhangbei'                 => 'eais.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'eais.aliyuncs.com',
            'cn-zhangjiakou'              => 'eais.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'eais.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'eais.aliyuncs.com',
            'eu-central-1'                => 'eais.aliyuncs.com',
            'eu-west-1'                   => 'eais.aliyuncs.com',
            'eu-west-1-oxs'               => 'eais.aliyuncs.com',
            'me-east-1'                   => 'eais.aliyuncs.com',
            'rus-west-1-pop'              => 'eais.aliyuncs.com',
            'us-east-1'                   => 'eais.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eais', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AttachEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AttachEaiResponse
     */
    public function attachEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachEaiResponse::fromMap($this->doRPCRequest('AttachEai', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachEaiRequest $request
     *
     * @return AttachEaiResponse
     */
    public function attachEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEaiWithOptions($request, $runtime);
    }

    /**
     * @param CreateEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateEaiResponse
     */
    public function createEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEaiResponse::fromMap($this->doRPCRequest('CreateEai', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEaiRequest $request
     *
     * @return CreateEaiResponse
     */
    public function createEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiWithOptions($request, $runtime);
    }

    /**
     * @param CreateEaiAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateEaiAllResponse
     */
    public function createEaiAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEaiAllResponse::fromMap($this->doRPCRequest('CreateEaiAll', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEaiAllRequest $request
     *
     * @return CreateEaiAllResponse
     */
    public function createEaiAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEaiAllWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteEaiResponse
     */
    public function deleteEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEaiResponse::fromMap($this->doRPCRequest('DeleteEai', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEaiRequest $request
     *
     * @return DeleteEaiResponse
     */
    public function deleteEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaiWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEaiAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteEaiAllResponse
     */
    public function deleteEaiAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEaiAllResponse::fromMap($this->doRPCRequest('DeleteEaiAll', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEaiAllRequest $request
     *
     * @return DeleteEaiAllResponse
     */
    public function deleteEaiAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEaiAllWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEaisRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeEaisResponse
     */
    public function describeEaisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEaisResponse::fromMap($this->doRPCRequest('DescribeEais', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEaisRequest $request
     *
     * @return DescribeEaisResponse
     */
    public function describeEais($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEaisWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DetachEaiRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DetachEaiResponse
     */
    public function detachEaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachEaiResponse::fromMap($this->doRPCRequest('DetachEai', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachEaiRequest $request
     *
     * @return DetachEaiResponse
     */
    public function detachEai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEaiWithOptions($request, $runtime);
    }

    /**
     * @param GetPrivateIpRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPrivateIpResponse
     */
    public function getPrivateIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPrivateIpResponse::fromMap($this->doRPCRequest('GetPrivateIp', '2019-06-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPrivateIpRequest $request
     *
     * @return GetPrivateIpResponse
     */
    public function getPrivateIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrivateIpWithOptions($request, $runtime);
    }
}
