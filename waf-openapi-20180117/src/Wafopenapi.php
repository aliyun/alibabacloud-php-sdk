<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateAclRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateAclRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateCertAndKeyRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateCertAndKeyResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateDomainConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateDomainConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\CreateProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DeleteAclRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DeleteAclRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DeleteDomainConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DeleteDomainConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAsyncTaskStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAsyncTaskStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainConfigStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeDomainNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribePayInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribePayInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeProtectionModuleRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeProtectionModuleRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyAclRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyAclRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyDomainConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyDomainConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyProtectionRuleCacheStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyProtectionRuleCacheStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyProtectionRuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyProtectionRuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyWafSwitchRequest;
use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\ModifyWafSwitchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param CreateAclRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAclRuleResponse
     */
    public function createAclRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAclRuleResponse::fromMap($this->doRPCRequest('CreateAclRule', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAclRuleRequest $request
     *
     * @return CreateAclRuleResponse
     */
    public function createAclRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateCertAndKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCertAndKeyResponse
     */
    public function createCertAndKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCertAndKeyResponse::fromMap($this->doRPCRequest('CreateCertAndKey', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCertAndKeyRequest $request
     *
     * @return CreateCertAndKeyResponse
     */
    public function createCertAndKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertAndKeyWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDomainConfigResponse
     */
    public function createDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDomainConfigResponse::fromMap($this->doRPCRequest('CreateDomainConfig', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDomainConfigRequest $request
     *
     * @return CreateDomainConfigResponse
     */
    public function createDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateProtectionModuleRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateProtectionModuleRuleResponse
     */
    public function createProtectionModuleRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProtectionModuleRuleResponse::fromMap($this->doRPCRequest('CreateProtectionModuleRule', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProtectionModuleRuleRequest $request
     *
     * @return CreateProtectionModuleRuleResponse
     */
    public function createProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAclRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAclRuleResponse
     */
    public function deleteAclRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAclRuleResponse::fromMap($this->doRPCRequest('DeleteAclRule', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAclRuleRequest $request
     *
     * @return DeleteAclRuleResponse
     */
    public function deleteAclRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDomainConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDomainConfigResponse
     */
    public function deleteDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainConfigResponse::fromMap($this->doRPCRequest('DeleteDomainConfig', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDomainConfigRequest $request
     *
     * @return DeleteDomainConfigResponse
     */
    public function deleteDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAclRulesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAclRulesResponse
     */
    public function describeAclRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAclRulesResponse::fromMap($this->doRPCRequest('DescribeAclRules', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAclRulesRequest $request
     *
     * @return DescribeAclRulesResponse
     */
    public function describeAclRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAclRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAsyncTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAsyncTaskStatusResponse
     */
    public function describeAsyncTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAsyncTaskStatusResponse::fromMap($this->doRPCRequest('DescribeAsyncTaskStatus', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAsyncTaskStatusRequest $request
     *
     * @return DescribeAsyncTaskStatusResponse
     */
    public function describeAsyncTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAsyncTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainConfigResponse
     */
    public function describeDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainConfigResponse::fromMap($this->doRPCRequest('DescribeDomainConfig', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainConfigRequest $request
     *
     * @return DescribeDomainConfigResponse
     */
    public function describeDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainConfigStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainConfigStatusResponse
     */
    public function describeDomainConfigStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainConfigStatusResponse::fromMap($this->doRPCRequest('DescribeDomainConfigStatus', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainConfigStatusRequest $request
     *
     * @return DescribeDomainConfigStatusResponse
     */
    public function describeDomainConfigStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainConfigStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainNamesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDomainNamesResponse
     */
    public function describeDomainNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainNamesResponse::fromMap($this->doRPCRequest('DescribeDomainNames', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainNamesRequest $request
     *
     * @return DescribeDomainNamesResponse
     */
    public function describeDomainNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainNamesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePayInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePayInfoResponse
     */
    public function describePayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePayInfoResponse::fromMap($this->doRPCRequest('DescribePayInfo', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePayInfoRequest $request
     *
     * @return DescribePayInfoResponse
     */
    public function describePayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePayInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtectionModuleRulesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeProtectionModuleRulesResponse
     */
    public function describeProtectionModuleRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProtectionModuleRulesResponse::fromMap($this->doRPCRequest('DescribeProtectionModuleRules', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleRulesRequest $request
     *
     * @return DescribeProtectionModuleRulesResponse
     */
    public function describeProtectionModuleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleRulesWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeWafSourceIpSegmentRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWafSourceIpSegmentResponse::fromMap($this->doRPCRequest('DescribeWafSourceIpSegment', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWafSourceIpSegmentRequest $request
     *
     * @return DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafSourceIpSegmentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAclRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyAclRuleResponse
     */
    public function modifyAclRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAclRuleResponse::fromMap($this->doRPCRequest('ModifyAclRule', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAclRuleRequest $request
     *
     * @return ModifyAclRuleResponse
     */
    public function modifyAclRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAclRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDomainConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDomainConfigResponse
     */
    public function modifyDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDomainConfigResponse::fromMap($this->doRPCRequest('ModifyDomainConfig', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDomainConfigRequest $request
     *
     * @return ModifyDomainConfigResponse
     */
    public function modifyDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionRuleCacheStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyProtectionRuleCacheStatusResponse
     */
    public function modifyProtectionRuleCacheStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyProtectionRuleCacheStatusResponse::fromMap($this->doRPCRequest('ModifyProtectionRuleCacheStatus', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyProtectionRuleCacheStatusRequest $request
     *
     * @return ModifyProtectionRuleCacheStatusResponse
     */
    public function modifyProtectionRuleCacheStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionRuleCacheStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionRuleStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyProtectionRuleStatusResponse
     */
    public function modifyProtectionRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyProtectionRuleStatusResponse::fromMap($this->doRPCRequest('ModifyProtectionRuleStatus', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyProtectionRuleStatusRequest $request
     *
     * @return ModifyProtectionRuleStatusResponse
     */
    public function modifyProtectionRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWafSwitchRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyWafSwitchResponse
     */
    public function modifyWafSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWafSwitchResponse::fromMap($this->doRPCRequest('ModifyWafSwitch', '2018-01-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWafSwitchRequest $request
     *
     * @return ModifyWafSwitchResponse
     */
    public function modifyWafSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWafSwitchWithOptions($request, $runtime);
    }
}
