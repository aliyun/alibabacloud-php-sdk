<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ClearMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ClearMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DeleteMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowChartResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUserResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMajorProtectionBlackIpsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePeakTrendRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePeakTrendResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourcePortRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourcePortResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopResourceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopResourceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopRuleIdResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUrlRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUrlResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourcesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseRuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDefenseTemplateStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainShrinkRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterBypassStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyHybridCloudClusterBypassStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyMajorProtectionBlackIpResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyResourceLogStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyTemplateResourcesResponse;
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
     * @param ClearMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ClearMajorProtectionBlackIpResponse
     */
    public function clearMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
            'action'      => 'ClearMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClearMajorProtectionBlackIpRequest $request
     *
     * @return ClearMajorProtectionBlackIpResponse
     */
    public function clearMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @param CreateDefenseResourceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDefenseResourceGroupResponse
     */
    public function createDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addList)) {
            $query['AddList'] = $request->addList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDefenseResourceGroupRequest $request
     *
     * @return CreateDefenseResourceGroupResponse
     */
    public function createDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDefenseRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDefenseRuleResponse
     */
    public function createDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDefenseRuleRequest $request
     *
     * @return CreateDefenseRuleResponse
     */
    public function createDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateDefenseTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDefenseTemplateResponse
     */
    public function createDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateOrigin)) {
            $query['TemplateOrigin'] = $request->templateOrigin;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $query['TemplateStatus'] = $request->templateStatus;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDefenseTemplateRequest $request
     *
     * @return CreateDefenseTemplateResponse
     */
    public function createDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateDomainRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDomainShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listen)) {
            $request->listenShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirect)) {
            $request->redirectShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->listenShrink)) {
            $query['Listen'] = $request->listenShrink;
        }
        if (!Utils::isUnset($request->redirectShrink)) {
            $query['Redirect'] = $request->redirectShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * This operation is available only on the China site (aliyun.com).
     *   *
     * @param CreateMajorProtectionBlackIpRequest $request CreateMajorProtectionBlackIpRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMajorProtectionBlackIpResponse CreateMajorProtectionBlackIpResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
     * This operation is available only on the China site (aliyun.com).
     *   *
     * @param CreateMajorProtectionBlackIpRequest $request CreateMajorProtectionBlackIpRequest
     *
     * @return CreateMajorProtectionBlackIpResponse CreateMajorProtectionBlackIpResponse
     */
    public function createMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDefenseResourceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDefenseResourceGroupResponse
     */
    public function deleteDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDefenseResourceGroupRequest $request
     *
     * @return DeleteDefenseResourceGroupResponse
     */
    public function deleteDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDefenseRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDefenseRuleResponse
     */
    public function deleteDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleIds)) {
            $query['RuleIds'] = $request->ruleIds;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDefenseRuleRequest $request
     *
     * @return DeleteDefenseRuleResponse
     */
    public function deleteDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDefenseTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDefenseTemplateResponse
     */
    public function deleteDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDefenseTemplateRequest $request
     *
     * @return DeleteDefenseTemplateResponse
     */
    public function deleteDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDefenseTemplateWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMajorProtectionBlackIpResponse
     */
    public function deleteMajorProtectionBlackIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipList)) {
            $query['IpList'] = $request->ipList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
            'action'      => 'DeleteMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMajorProtectionBlackIpRequest $request
     *
     * @return DeleteMajorProtectionBlackIpResponse
     */
    public function deleteMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDefenseResourceGroupResponse
     */
    public function describeDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDefenseResourceGroupRequest $request
     *
     * @return DescribeDefenseResourceGroupResponse
     */
    public function describeDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDefenseResourcesResponse
     */
    public function describeDefenseResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDefenseResourcesRequest $request
     *
     * @return DescribeDefenseResourcesResponse
     */
    public function describeDefenseResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDefenseRuleResponse
     */
    public function describeDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
            'action'      => 'DescribeDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDefenseRuleRequest $request
     *
     * @return DescribeDefenseRuleResponse
     */
    public function describeDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDefenseRulesResponse
     */
    public function describeDefenseRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseRules',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDefenseRulesRequest $request
     *
     * @return DescribeDefenseRulesResponse
     */
    public function describeDefenseRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDefenseTemplateResponse
     */
    public function describeDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDefenseTemplateRequest $request
     *
     * @return DescribeDefenseTemplateResponse
     */
    public function describeDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainDetailResponse
     */
    public function describeDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainDetail',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainDetailRequest $request
     *
     * @return DescribeDomainDetailResponse
     */
    public function describeDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backend)) {
            $query['Backend'] = $request->backend;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainsRequest $request
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowChartRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFlowChartResponse
     */
    public function describeFlowChartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowChart',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowChartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowChartRequest $request
     *
     * @return DescribeFlowChartResponse
     */
    public function describeFlowChart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowChartWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowTopResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeFlowTopResourceResponse
     */
    public function describeFlowTopResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowTopResource',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowTopResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowTopResourceRequest $request
     *
     * @return DescribeFlowTopResourceResponse
     */
    public function describeFlowTopResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTopResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowTopUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowTopUrlResponse
     */
    public function describeFlowTopUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowTopUrl',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowTopUrlRequest $request
     *
     * @return DescribeFlowTopUrlResponse
     */
    public function describeFlowTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTopUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHybridCloudGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHybridCloudGroupsResponse
     */
    public function describeHybridCloudGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterProxyType)) {
            $query['ClusterProxyType'] = $request->clusterProxyType;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridCloudGroups',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridCloudGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHybridCloudGroupsRequest $request
     *
     * @return DescribeHybridCloudGroupsResponse
     */
    public function describeHybridCloudGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHybridCloudResourcesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeHybridCloudResourcesResponse
     */
    public function describeHybridCloudResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backend)) {
            $query['Backend'] = $request->backend;
        }
        if (!Utils::isUnset($request->cnameEnabled)) {
            $query['CnameEnabled'] = $request->cnameEnabled;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridCloudResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHybridCloudResourcesRequest $request
     *
     * @return DescribeHybridCloudResourcesResponse
     */
    public function describeHybridCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHybridCloudUserRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHybridCloudUserResponse
     */
    public function describeHybridCloudUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHybridCloudUser',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHybridCloudUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHybridCloudUserRequest $request
     *
     * @return DescribeHybridCloudUserResponse
     */
    public function describeHybridCloudUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridCloudUserWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
     * @param DescribeMajorProtectionBlackIpsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeMajorProtectionBlackIpsResponse
     */
    public function describeMajorProtectionBlackIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ipLike)) {
            $query['IpLike'] = $request->ipLike;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
            'action'      => 'DescribeMajorProtectionBlackIps',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMajorProtectionBlackIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMajorProtectionBlackIpsRequest $request
     *
     * @return DescribeMajorProtectionBlackIpsResponse
     */
    public function describeMajorProtectionBlackIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMajorProtectionBlackIpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePeakTrendRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribePeakTrendResponse
     */
    public function describePeakTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePeakTrend',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePeakTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePeakTrendRequest $request
     *
     * @return DescribePeakTrendResponse
     */
    public function describePeakTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePeakTrendWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceLogStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResourceLogStatusResponse
     */
    public function describeResourceLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceLogStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceLogStatusRequest $request
     *
     * @return DescribeResourceLogStatusResponse
     */
    public function describeResourceLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceLogStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcePortRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeResourcePortResponse
     */
    public function describeResourcePortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceInstanceId)) {
            $query['ResourceInstanceId'] = $request->resourceInstanceId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourcePort',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourcePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourcePortRequest $request
     *
     * @return DescribeResourcePortResponse
     */
    public function describeResourcePort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePortWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResponseCodeTrendGraphRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResponseCodeTrendGraphResponse
     */
    public function describeResponseCodeTrendGraphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResponseCodeTrendGraph',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResponseCodeTrendGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResponseCodeTrendGraphRequest $request
     *
     * @return DescribeResponseCodeTrendGraphResponse
     */
    public function describeResponseCodeTrendGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResponseCodeTrendGraphWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRuleGroupsResponse
     */
    public function describeRuleGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $query['SearchValue'] = $request->searchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleGroups',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleGroupsRequest $request
     *
     * @return DescribeRuleGroupsResponse
     */
    public function describeRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleHitsTopClientIpRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRuleHitsTopClientIpResponse
     */
    public function describeRuleHitsTopClientIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopClientIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopClientIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleHitsTopClientIpRequest $request
     *
     * @return DescribeRuleHitsTopClientIpResponse
     */
    public function describeRuleHitsTopClientIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopClientIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleHitsTopResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRuleHitsTopResourceResponse
     */
    public function describeRuleHitsTopResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopResource',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleHitsTopResourceRequest $request
     *
     * @return DescribeRuleHitsTopResourceResponse
     */
    public function describeRuleHitsTopResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleHitsTopRuleIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRuleHitsTopRuleIdResponse
     */
    public function describeRuleHitsTopRuleIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopRuleId',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopRuleIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleHitsTopRuleIdRequest $request
     *
     * @return DescribeRuleHitsTopRuleIdResponse
     */
    public function describeRuleHitsTopRuleId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopRuleIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleHitsTopTuleTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRuleHitsTopTuleTypeResponse
     */
    public function describeRuleHitsTopTuleTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopTuleType',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopTuleTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleHitsTopTuleTypeRequest $request
     *
     * @return DescribeRuleHitsTopTuleTypeResponse
     */
    public function describeRuleHitsTopTuleType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopTuleTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleHitsTopUaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRuleHitsTopUaResponse
     */
    public function describeRuleHitsTopUaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopUa',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopUaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleHitsTopUaRequest $request
     *
     * @return DescribeRuleHitsTopUaResponse
     */
    public function describeRuleHitsTopUa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopUaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRuleHitsTopUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRuleHitsTopUrlResponse
     */
    public function describeRuleHitsTopUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRuleHitsTopUrl',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRuleHitsTopUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRuleHitsTopUrlRequest $request
     *
     * @return DescribeRuleHitsTopUrlResponse
     */
    public function describeRuleHitsTopUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleHitsTopUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplateResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTemplateResourcesResponse
     */
    public function describeTemplateResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTemplateResourcesRequest $request
     *
     * @return DescribeTemplateResourcesResponse
     */
    public function describeTemplateResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVisitTopIpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVisitTopIpResponse
     */
    public function describeVisitTopIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVisitTopIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVisitTopIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVisitTopIpRequest $request
     *
     * @return DescribeVisitTopIpResponse
     */
    public function describeVisitTopIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVisitTopIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVisitUasRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeVisitUasResponse
     */
    public function describeVisitUasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVisitUas',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVisitUasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVisitUasRequest $request
     *
     * @return DescribeVisitUasResponse
     */
    public function describeVisitUas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVisitUasWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWafSourceIpSegment',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWafSourceIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyDefenseResourceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDefenseResourceGroupResponse
     */
    public function modifyDefenseResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addList)) {
            $query['AddList'] = $request->addList;
        }
        if (!Utils::isUnset($request->deleteList)) {
            $query['DeleteList'] = $request->deleteList;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseResourceGroup',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefenseResourceGroupRequest $request
     *
     * @return ModifyDefenseResourceGroupResponse
     */
    public function modifyDefenseResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefenseRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDefenseRuleResponse
     */
    public function modifyDefenseRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseRule',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefenseRuleRequest $request
     *
     * @return ModifyDefenseRuleResponse
     */
    public function modifyDefenseRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefenseRuleStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDefenseRuleStatusResponse
     */
    public function modifyDefenseRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseRuleStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefenseRuleStatusRequest $request
     *
     * @return ModifyDefenseRuleStatusResponse
     */
    public function modifyDefenseRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefenseTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDefenseTemplateResponse
     */
    public function modifyDefenseTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseTemplate',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefenseTemplateRequest $request
     *
     * @return ModifyDefenseTemplateResponse
     */
    public function modifyDefenseTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefenseTemplateStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDefenseTemplateStatusResponse
     */
    public function modifyDefenseTemplateStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $query['TemplateStatus'] = $request->templateStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseTemplateStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseTemplateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefenseTemplateStatusRequest $request
     *
     * @return ModifyDefenseTemplateStatusResponse
     */
    public function modifyDefenseTemplateStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseTemplateStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDomainRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDomainResponse
     */
    public function modifyDomainWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDomainShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listen)) {
            $request->listenShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listen, 'Listen', 'json');
        }
        if (!Utils::isUnset($tmpReq->redirect)) {
            $request->redirectShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->redirect, 'Redirect', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->listenShrink)) {
            $query['Listen'] = $request->listenShrink;
        }
        if (!Utils::isUnset($request->redirectShrink)) {
            $query['Redirect'] = $request->redirectShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomain',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDomainRequest $request
     *
     * @return ModifyDomainResponse
     */
    public function modifyDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainWithOptions($request, $runtime);
    }

    /**
     * @param ModifyHybridCloudClusterBypassStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ModifyHybridCloudClusterBypassStatusResponse
     */
    public function modifyHybridCloudClusterBypassStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterResourceId)) {
            $query['ClusterResourceId'] = $request->clusterResourceId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $query['RuleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHybridCloudClusterBypassStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHybridCloudClusterBypassStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyHybridCloudClusterBypassStatusRequest $request
     *
     * @return ModifyHybridCloudClusterBypassStatusResponse
     */
    public function modifyHybridCloudClusterBypassStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHybridCloudClusterBypassStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMajorProtectionBlackIpRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyMajorProtectionBlackIpResponse
     */
    public function modifyMajorProtectionBlackIpWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
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
            'action'      => 'ModifyMajorProtectionBlackIp',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMajorProtectionBlackIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMajorProtectionBlackIpRequest $request
     *
     * @return ModifyMajorProtectionBlackIpResponse
     */
    public function modifyMajorProtectionBlackIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMajorProtectionBlackIpWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceLogStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyResourceLogStatusResponse
     */
    public function modifyResourceLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceLogStatus',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourceLogStatusRequest $request
     *
     * @return ModifyResourceLogStatusResponse
     */
    public function modifyResourceLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceLogStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTemplateResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTemplateResourcesResponse
     */
    public function modifyTemplateResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bindResourceGroups)) {
            $query['BindResourceGroups'] = $request->bindResourceGroups;
        }
        if (!Utils::isUnset($request->bindResources)) {
            $query['BindResources'] = $request->bindResources;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceManagerResourceGroupId)) {
            $query['ResourceManagerResourceGroupId'] = $request->resourceManagerResourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->unbindResourceGroups)) {
            $query['UnbindResourceGroups'] = $request->unbindResourceGroups;
        }
        if (!Utils::isUnset($request->unbindResources)) {
            $query['UnbindResources'] = $request->unbindResources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplateResources',
            'version'     => '2021-10-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTemplateResourcesRequest $request
     *
     * @return ModifyTemplateResourcesResponse
     */
    public function modifyTemplateResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateResourcesWithOptions($request, $runtime);
    }
}
