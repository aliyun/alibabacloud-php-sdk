<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceCompatibleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceCompatibleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceExtendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceExtendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Wafopenapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-beijing'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-chengdu'            => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou'        => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote'          => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen'           => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-heyuan'             => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-wulanchabu'         => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-west-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-central-1'          => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1'      => 'wafopenapi.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('waf-openapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMajorProtectionBlackIpRequest $request
     *
     * @return CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceCompatibleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceCompatibleResponse
     */
    public function describeInstanceCompatibleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceCompatible',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceCompatibleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceCompatibleRequest $request
     *
     * @return DescribeInstanceCompatibleResponse
     */
    public function describeInstanceCompatible($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCompatibleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceExtendRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceExtendResponse
     */
    public function describeInstanceExtendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->edition)) {
            $query['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceExtend',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceExtendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceExtendRequest $request
     *
     * @return DescribeInstanceExtendResponse
     */
    public function describeInstanceExtend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceExtendWithOptions($request, $runtime);
    }
}
