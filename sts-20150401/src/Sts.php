<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleRequest;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleResponse;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCRequest;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponse;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithSAMLRequest;
use AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithSAMLResponse;
use AlibabaCloud\SDK\Sts\V20150401\Models\GetCallerIdentityResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Sts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'sts.aliyuncs.com',
            'cn-beijing-finance-1'        => 'sts.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'sts.aliyuncs.com',
            'cn-beijing-gov-1'            => 'sts.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'sts.aliyuncs.com',
            'cn-edge-1'                   => 'sts.aliyuncs.com',
            'cn-fujian'                   => 'sts.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'sts.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'sts.aliyuncs.com',
            'cn-hangzhou-finance'         => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'sts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'sts.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'sts.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'sts.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'sts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'sts-vpc.cn-north-2-gov-1.aliyuncs.com',
            'cn-qingdao-nebula'           => 'sts.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'sts.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'sts.aliyuncs.com',
            'cn-shanghai-inner'           => 'sts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'sts.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'sts-vpc.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-shenzhen-inner'           => 'sts.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'sts.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'sts.aliyuncs.com',
            'cn-wuhan'                    => 'sts.aliyuncs.com',
            'cn-yushanfang'               => 'sts.aliyuncs.com',
            'cn-zhangbei'                 => 'sts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'sts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'sts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'sts.aliyuncs.com',
            'eu-west-1-oxs'               => 'sts.aliyuncs.com',
            'rus-west-1-pop'              => 'sts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AssumeRoleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AssumeRoleResponse
     */
    public function assumeRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssumeRoleResponse::fromMap($this->doRPCRequest('AssumeRole', '2015-04-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssumeRoleRequest $request
     *
     * @return AssumeRoleResponse
     */
    public function assumeRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleWithOptions($request, $runtime);
    }

    /**
     * @param AssumeRoleWithOIDCRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AssumeRoleWithOIDCResponse
     */
    public function assumeRoleWithOIDCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssumeRoleWithOIDCResponse::fromMap($this->doRPCRequest('AssumeRoleWithOIDC', '2015-04-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssumeRoleWithOIDCRequest $request
     *
     * @return AssumeRoleWithOIDCResponse
     */
    public function assumeRoleWithOIDC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleWithOIDCWithOptions($request, $runtime);
    }

    /**
     * @param AssumeRoleWithSAMLRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AssumeRoleWithSAMLResponse
     */
    public function assumeRoleWithSAMLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssumeRoleWithSAMLResponse::fromMap($this->doRPCRequest('AssumeRoleWithSAML', '2015-04-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssumeRoleWithSAMLRequest $request
     *
     * @return AssumeRoleWithSAMLResponse
     */
    public function assumeRoleWithSAML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assumeRoleWithSAMLWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetCallerIdentityResponse
     */
    public function getCallerIdentityWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetCallerIdentityResponse::fromMap($this->doRPCRequest('GetCallerIdentity', '2015-04-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetCallerIdentityResponse
     */
    public function getCallerIdentity()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallerIdentityWithOptions($runtime);
    }
}
