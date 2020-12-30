<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateByCertificateIdRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateByCertificateIdResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertMatchStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertMatchStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRuleGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRuleGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfosRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfosResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleModeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleModeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainClusterTypeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainClusterTypeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainIpv6StatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainIpv6StatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogRetrievalStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogRetrievalStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogServiceStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogServiceStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleModeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleModeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleCacheStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleCacheStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\SetDomainRuleGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\SetDomainRuleGroupResponse;
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
     * @param CreateCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCertificateResponse
     */
    public function createCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCertificateResponse::fromMap($this->doRPCRequest('CreateCertificate', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCertificateRequest $request
     *
     * @return CreateCertificateResponse
     */
    public function createCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithOptions($request, $runtime);
    }

    /**
     * @param CreateCertificateByCertificateIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateCertificateByCertificateIdResponse
     */
    public function createCertificateByCertificateIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCertificateByCertificateIdResponse::fromMap($this->doRPCRequest('CreateCertificateByCertificateId', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCertificateByCertificateIdRequest $request
     *
     * @return CreateCertificateByCertificateIdResponse
     */
    public function createCertificateByCertificateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateByCertificateIdWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDomainResponse::fromMap($this->doRPCRequest('CreateDomain', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
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

        return CreateProtectionModuleRuleResponse::fromMap($this->doRPCRequest('CreateProtectionModuleRule', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainResponse::fromMap($this->doRPCRequest('DeleteDomain', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProtectionModuleRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteProtectionModuleRuleResponse
     */
    public function deleteProtectionModuleRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProtectionModuleRuleResponse::fromMap($this->doRPCRequest('DeleteProtectionModuleRule', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProtectionModuleRuleRequest $request
     *
     * @return DeleteProtectionModuleRuleResponse
     */
    public function deleteProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertificatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCertificatesResponse
     */
    public function describeCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCertificatesResponse::fromMap($this->doRPCRequest('DescribeCertificates', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCertificatesRequest $request
     *
     * @return DescribeCertificatesResponse
     */
    public function describeCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertMatchStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCertMatchStatusResponse
     */
    public function describeCertMatchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCertMatchStatusResponse::fromMap($this->doRPCRequest('DescribeCertMatchStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCertMatchStatusRequest $request
     *
     * @return DescribeCertMatchStatusResponse
     */
    public function describeCertMatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertMatchStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDomainResponse
     */
    public function describeDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainResponse::fromMap($this->doRPCRequest('DescribeDomain', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainRequest $request
     *
     * @return DescribeDomainResponse
     */
    public function describeDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAdvanceConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainAdvanceConfigsResponse
     */
    public function describeDomainAdvanceConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainAdvanceConfigsResponse::fromMap($this->doRPCRequest('DescribeDomainAdvanceConfigs', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainAdvanceConfigsRequest $request
     *
     * @return DescribeDomainAdvanceConfigsResponse
     */
    public function describeDomainAdvanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAdvanceConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainBasicConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainBasicConfigsResponse
     */
    public function describeDomainBasicConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainBasicConfigsResponse::fromMap($this->doRPCRequest('DescribeDomainBasicConfigs', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainBasicConfigsRequest $request
     *
     * @return DescribeDomainBasicConfigsResponse
     */
    public function describeDomainBasicConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBasicConfigsWithOptions($request, $runtime);
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

        return DescribeDomainNamesResponse::fromMap($this->doRPCRequest('DescribeDomainNames', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainRuleGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainRuleGroupResponse
     */
    public function describeDomainRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainRuleGroupResponse::fromMap($this->doRPCRequest('DescribeDomainRuleGroup', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDomainRuleGroupRequest $request
     *
     * @return DescribeDomainRuleGroupResponse
     */
    public function describeDomainRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRuleGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceInfoResponse
     */
    public function describeInstanceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceInfoResponse::fromMap($this->doRPCRequest('DescribeInstanceInfo', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceInfoRequest $request
     *
     * @return DescribeInstanceInfoResponse
     */
    public function describeInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceInfosRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceInfosResponse
     */
    public function describeInstanceInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceInfosResponse::fromMap($this->doRPCRequest('DescribeInstanceInfos', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceInfosRequest $request
     *
     * @return DescribeInstanceInfosResponse
     */
    public function describeInstanceInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSpecInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceSpecInfoResponse
     */
    public function describeInstanceSpecInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSpecInfoResponse::fromMap($this->doRPCRequest('DescribeInstanceSpecInfo', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceSpecInfoRequest $request
     *
     * @return DescribeInstanceSpecInfoResponse
     */
    public function describeInstanceSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtectionModuleModeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeProtectionModuleModeResponse
     */
    public function describeProtectionModuleModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProtectionModuleModeResponse::fromMap($this->doRPCRequest('DescribeProtectionModuleMode', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleModeRequest $request
     *
     * @return DescribeProtectionModuleModeResponse
     */
    public function describeProtectionModuleMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleModeWithOptions($request, $runtime);
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

        return DescribeProtectionModuleRulesResponse::fromMap($this->doRPCRequest('DescribeProtectionModuleRules', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeProtectionModuleStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeProtectionModuleStatusResponse
     */
    public function describeProtectionModuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProtectionModuleStatusResponse::fromMap($this->doRPCRequest('DescribeProtectionModuleStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProtectionModuleStatusRequest $request
     *
     * @return DescribeProtectionModuleStatusResponse
     */
    public function describeProtectionModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleStatusWithOptions($request, $runtime);
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

        return DescribeWafSourceIpSegmentResponse::fromMap($this->doRPCRequest('DescribeWafSourceIpSegment', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDomainClusterTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDomainClusterTypeResponse
     */
    public function modifyDomainClusterTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDomainClusterTypeResponse::fromMap($this->doRPCRequest('ModifyDomainClusterType', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDomainClusterTypeRequest $request
     *
     * @return ModifyDomainClusterTypeResponse
     */
    public function modifyDomainClusterType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainClusterTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDomainIpv6StatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDomainIpv6StatusResponse
     */
    public function modifyDomainIpv6StatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDomainIpv6StatusResponse::fromMap($this->doRPCRequest('ModifyDomainIpv6Status', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDomainIpv6StatusRequest $request
     *
     * @return ModifyDomainIpv6StatusResponse
     */
    public function modifyDomainIpv6Status($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainIpv6StatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogRetrievalStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyLogRetrievalStatusResponse
     */
    public function modifyLogRetrievalStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLogRetrievalStatusResponse::fromMap($this->doRPCRequest('ModifyLogRetrievalStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyLogRetrievalStatusRequest $request
     *
     * @return ModifyLogRetrievalStatusResponse
     */
    public function modifyLogRetrievalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogRetrievalStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogServiceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyLogServiceStatusResponse
     */
    public function modifyLogServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLogServiceStatusResponse::fromMap($this->doRPCRequest('ModifyLogServiceStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyLogServiceStatusRequest $request
     *
     * @return ModifyLogServiceStatusResponse
     */
    public function modifyLogServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionModuleModeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyProtectionModuleModeResponse
     */
    public function modifyProtectionModuleModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyProtectionModuleModeResponse::fromMap($this->doRPCRequest('ModifyProtectionModuleMode', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyProtectionModuleModeRequest $request
     *
     * @return ModifyProtectionModuleModeResponse
     */
    public function modifyProtectionModuleMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleModeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionModuleRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyProtectionModuleRuleResponse
     */
    public function modifyProtectionModuleRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyProtectionModuleRuleResponse::fromMap($this->doRPCRequest('ModifyProtectionModuleRule', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyProtectionModuleRuleRequest $request
     *
     * @return ModifyProtectionModuleRuleResponse
     */
    public function modifyProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyProtectionModuleStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyProtectionModuleStatusResponse
     */
    public function modifyProtectionModuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyProtectionModuleStatusResponse::fromMap($this->doRPCRequest('ModifyProtectionModuleStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyProtectionModuleStatusRequest $request
     *
     * @return ModifyProtectionModuleStatusResponse
     */
    public function modifyProtectionModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleStatusWithOptions($request, $runtime);
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

        return ModifyProtectionRuleCacheStatusResponse::fromMap($this->doRPCRequest('ModifyProtectionRuleCacheStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyProtectionRuleStatusResponse::fromMap($this->doRPCRequest('ModifyProtectionRuleStatus', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDomainRuleGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDomainRuleGroupResponse
     */
    public function setDomainRuleGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainRuleGroupResponse::fromMap($this->doRPCRequest('SetDomainRuleGroup', '2019-09-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetDomainRuleGroupRequest $request
     *
     * @return SetDomainRuleGroupResponse
     */
    public function setDomainRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainRuleGroupWithOptions($request, $runtime);
    }
}
