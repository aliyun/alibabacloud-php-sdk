<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\AddLayer7CCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\AddLayer7CCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CloseDomainSlsConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CloseDomainSlsConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigHealthCheckRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigHealthCheckResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer4RuleAttributeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer4RuleAttributeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer4RuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer4RuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer4RuleShrinkRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7BlackWhiteListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7BlackWhiteListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7CCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7CCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7CCTemplateRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7CCTemplateResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7CertRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7CertResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7RuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigLayer7RuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateAsyncTaskRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateAsyncTaskResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer4RuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer4RuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer4RuleShrinkRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer7RuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer7RuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteAsyncTaskRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteAsyncTaskResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteLayer4RuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteLayer4RuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteLayer7CCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteLayer7CCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteLayer7RuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DeleteLayer7RuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBackSourceCidrRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBackSourceCidrResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBatchSlsDispatchStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeBatchSlsDispatchStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSEventsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSEventsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSTrafficResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDefenseCountStatisticsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDefenseCountStatisticsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAccessModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAccessModeResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackEventListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackEventListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackMaxQpsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackMaxQpsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainOverviewRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainOverviewResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsWithCacheRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsWithCacheResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainSlsStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainSlsStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainStatusCodeListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainStatusCodeListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeElasticBandwidthSpecRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeElasticBandwidthSpecResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceSpecsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceSpecsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceStatisticsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceStatisticsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer7CCRulesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer7CCRulesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLogStoreExistStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLogStoreExistStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeOpEntitiesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeOpEntitiesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSimpleDomainsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSimpleDomainsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsAuthStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsAuthStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsEmptyCountRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsEmptyCountResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsLogstoreInfoRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsLogstoreInfoResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsOpenStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeSlsOpenStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleCertListRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleCertListResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleLayer7InstanceRelationsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleLayer7InstanceRelationsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DisableLayer7CCRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DisableLayer7CCResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DisableLayer7CCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DisableLayer7CCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\EmptySlsLogstoreRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\EmptySlsLogstoreResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\EnableLayer7CCRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\EnableLayer7CCResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\EnableLayer7CCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\EnableLayer7CCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListAsyncTaskRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListAsyncTaskResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListValueAddedRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListValueAddedResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ModifyElasticBandWidthRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ModifyElasticBandWidthResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ModifyFullLogTtlRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ModifyFullLogTtlResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ModifyInstanceRemarkRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ModifyInstanceRemarkResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\OpenDomainSlsConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\OpenDomainSlsConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ReleaseValueAddedRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ReleaseValueAddedResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\UntagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ddoscoo extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddoscoo', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AddLayer7CCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddLayer7CCRuleResponse
     *
     * @param AddLayer7CCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddLayer7CCRuleResponse
     */
    public function addLayer7CCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->act) {
            @$query['Act'] = $request->act;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->uri) {
            @$query['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddLayer7CCRule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AddLayer7CCRuleRequest
     *
     * @returns AddLayer7CCRuleResponse
     *
     * @param AddLayer7CCRuleRequest $request
     *
     * @return AddLayer7CCRuleResponse
     */
    public function addLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - CloseDomainSlsConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseDomainSlsConfigResponse
     *
     * @param CloseDomainSlsConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloseDomainSlsConfigResponse
     */
    public function closeDomainSlsConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseDomainSlsConfig',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloseDomainSlsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseDomainSlsConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CloseDomainSlsConfigRequest
     *
     * @returns CloseDomainSlsConfigResponse
     *
     * @param CloseDomainSlsConfigRequest $request
     *
     * @return CloseDomainSlsConfigResponse
     */
    public function closeDomainSlsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDomainSlsConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigHealthCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigHealthCheckResponse
     *
     * @param ConfigHealthCheckRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConfigHealthCheckResponse
     */
    public function configHealthCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forwardProtocol) {
            @$query['ForwardProtocol'] = $request->forwardProtocol;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigHealthCheck',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigHealthCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigHealthCheckRequest
     *
     * @returns ConfigHealthCheckResponse
     *
     * @param ConfigHealthCheckRequest $request
     *
     * @return ConfigHealthCheckResponse
     */
    public function configHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - ConfigLayer4RuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer4RuleResponse
     *
     * @param ConfigLayer4RuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigLayer4RuleResponse
     */
    public function configLayer4RuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ConfigLayer4RuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->usTimeout) {
            $request->usTimeoutShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->usTimeout, 'UsTimeout', 'json');
        }

        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        if (null !== $request->proxyEnable) {
            @$query['ProxyEnable'] = $request->proxyEnable;
        }

        if (null !== $request->usTimeoutShrink) {
            @$query['UsTimeout'] = $request->usTimeoutShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer4Rule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer4RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer4RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer4RuleRequest
     *
     * @returns ConfigLayer4RuleResponse
     *
     * @param ConfigLayer4RuleRequest $request
     *
     * @return ConfigLayer4RuleResponse
     */
    public function configLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigLayer4RuleAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer4RuleAttributeResponse
     *
     * @param ConfigLayer4RuleAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConfigLayer4RuleAttributeResponse
     */
    public function configLayer4RuleAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->forwardProtocol) {
            @$query['ForwardProtocol'] = $request->forwardProtocol;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer4RuleAttribute',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer4RuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer4RuleAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer4RuleAttributeRequest
     *
     * @returns ConfigLayer4RuleAttributeResponse
     *
     * @param ConfigLayer4RuleAttributeRequest $request
     *
     * @return ConfigLayer4RuleAttributeResponse
     */
    public function configLayer4RuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigLayer7BlackWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer7BlackWhiteListResponse
     *
     * @param ConfigLayer7BlackWhiteListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ConfigLayer7BlackWhiteListResponse
     */
    public function configLayer7BlackWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->blackList) {
            @$query['BlackList'] = $request->blackList;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->whiteList) {
            @$query['WhiteList'] = $request->whiteList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer7BlackWhiteList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer7BlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7BlackWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer7BlackWhiteListRequest
     *
     * @returns ConfigLayer7BlackWhiteListResponse
     *
     * @param ConfigLayer7BlackWhiteListRequest $request
     *
     * @return ConfigLayer7BlackWhiteListResponse
     */
    public function configLayer7BlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7BlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigLayer7CCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer7CCRuleResponse
     *
     * @param ConfigLayer7CCRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigLayer7CCRuleResponse
     */
    public function configLayer7CCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->act) {
            @$query['Act'] = $request->act;
        }

        if (null !== $request->count) {
            @$query['Count'] = $request->count;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->uri) {
            @$query['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer7CCRule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer7CCRuleRequest
     *
     * @returns ConfigLayer7CCRuleResponse
     *
     * @param ConfigLayer7CCRuleRequest $request
     *
     * @return ConfigLayer7CCRuleResponse
     */
    public function configLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigLayer7CCTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer7CCTemplateResponse
     *
     * @param ConfigLayer7CCTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigLayer7CCTemplateResponse
     */
    public function configLayer7CCTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer7CCTemplate',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer7CCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7CCTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer7CCTemplateRequest
     *
     * @returns ConfigLayer7CCTemplateResponse
     *
     * @param ConfigLayer7CCTemplateRequest $request
     *
     * @return ConfigLayer7CCTemplateResponse
     */
    public function configLayer7CCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7CCTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigLayer7CertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer7CertResponse
     *
     * @param ConfigLayer7CertRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigLayer7CertResponse
     */
    public function configLayer7CertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cert) {
            @$query['Cert'] = $request->cert;
        }

        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certRegion) {
            @$query['CertRegion'] = $request->certRegion;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer7Cert',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer7CertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7CertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer7CertRequest
     *
     * @returns ConfigLayer7CertResponse
     *
     * @param ConfigLayer7CertRequest $request
     *
     * @return ConfigLayer7CertResponse
     */
    public function configLayer7Cert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7CertWithOptions($request, $runtime);
    }

    /**
     * @param request - ConfigLayer7RuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigLayer7RuleResponse
     *
     * @param ConfigLayer7RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigLayer7RuleResponse
     */
    public function configLayer7RuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->proxyTypeList) {
            @$query['ProxyTypeList'] = $request->proxyTypeList;
        }

        if (null !== $request->proxyTypes) {
            @$query['ProxyTypes'] = $request->proxyTypes;
        }

        if (null !== $request->realServers) {
            @$query['RealServers'] = $request->realServers;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rsType) {
            @$query['RsType'] = $request->rsType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigLayer7Rule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ConfigLayer7RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ConfigLayer7RuleRequest
     *
     * @returns ConfigLayer7RuleResponse
     *
     * @param ConfigLayer7RuleRequest $request
     *
     * @return ConfigLayer7RuleResponse
     */
    public function configLayer7Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7RuleWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAsyncTaskResponse
     *
     * @param CreateAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskParams) {
            @$query['TaskParams'] = $request->taskParams;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAsyncTask',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateAsyncTaskRequest
     *
     * @returns CreateAsyncTaskResponse
     *
     * @param CreateAsyncTaskRequest $request
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreateLayer4RuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLayer4RuleResponse
     *
     * @param CreateLayer4RuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLayer4RuleResponse
     */
    public function createLayer4RuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLayer4RuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->usTimeout) {
            $request->usTimeoutShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->usTimeout, 'UsTimeout', 'json');
        }

        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        if (null !== $request->proxyEnable) {
            @$query['ProxyEnable'] = $request->proxyEnable;
        }

        if (null !== $request->usTimeoutShrink) {
            @$query['UsTimeout'] = $request->usTimeoutShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLayer4Rule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLayer4RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLayer4RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateLayer4RuleRequest
     *
     * @returns CreateLayer4RuleResponse
     *
     * @param CreateLayer4RuleRequest $request
     *
     * @return CreateLayer4RuleResponse
     */
    public function createLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateLayer7RuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLayer7RuleResponse
     *
     * @param CreateLayer7RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLayer7RuleResponse
     */
    public function createLayer7RuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rsType) {
            @$query['RsType'] = $request->rsType;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLayer7Rule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLayer7RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLayer7RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateLayer7RuleRequest
     *
     * @returns CreateLayer7RuleResponse
     *
     * @param CreateLayer7RuleRequest $request
     *
     * @return CreateLayer7RuleResponse
     */
    public function createLayer7Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLayer7RuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAsyncTaskResponse
     *
     * @param DeleteAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAsyncTaskResponse
     */
    public function deleteAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAsyncTask',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAsyncTaskRequest
     *
     * @returns DeleteAsyncTaskResponse
     *
     * @param DeleteAsyncTaskRequest $request
     *
     * @return DeleteAsyncTaskResponse
     */
    public function deleteAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteLayer4RuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLayer4RuleResponse
     *
     * @param DeleteLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLayer4RuleResponse
     */
    public function deleteLayer4RuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLayer4Rule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLayer4RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayer4RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteLayer4RuleRequest
     *
     * @returns DeleteLayer4RuleResponse
     *
     * @param DeleteLayer4RuleRequest $request
     *
     * @return DeleteLayer4RuleResponse
     */
    public function deleteLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteLayer7CCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLayer7CCRuleResponse
     *
     * @param DeleteLayer7CCRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLayer7CCRuleResponse
     */
    public function deleteLayer7CCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLayer7CCRule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteLayer7CCRuleRequest
     *
     * @returns DeleteLayer7CCRuleResponse
     *
     * @param DeleteLayer7CCRuleRequest $request
     *
     * @return DeleteLayer7CCRuleResponse
     */
    public function deleteLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteLayer7RuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLayer7RuleResponse
     *
     * @param DeleteLayer7RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLayer7RuleResponse
     */
    public function deleteLayer7RuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLayer7Rule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLayer7RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayer7RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteLayer7RuleRequest
     *
     * @returns DeleteLayer7RuleResponse
     *
     * @param DeleteLayer7RuleRequest $request
     *
     * @return DeleteLayer7RuleResponse
     */
    public function deleteLayer7Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer7RuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeBackSourceCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackSourceCidrResponse
     *
     * @param DescribeBackSourceCidrRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackSourceCidr',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBackSourceCidrResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackSourceCidrResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackSourceCidrRequest
     *
     * @returns DescribeBackSourceCidrResponse
     *
     * @param DescribeBackSourceCidrRequest $request
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackSourceCidrWithOptions($request, $runtime);
    }

    /**
     * rosetta迁移.
     *
     * @param request - DescribeBatchSlsDispatchStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBatchSlsDispatchStatusResponse
     *
     * @param DescribeBatchSlsDispatchStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeBatchSlsDispatchStatusResponse
     */
    public function describeBatchSlsDispatchStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBatchSlsDispatchStatus',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeBatchSlsDispatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBatchSlsDispatchStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * rosetta迁移.
     *
     * @param request - DescribeBatchSlsDispatchStatusRequest
     *
     * @returns DescribeBatchSlsDispatchStatusResponse
     *
     * @param DescribeBatchSlsDispatchStatusRequest $request
     *
     * @return DescribeBatchSlsDispatchStatusResponse
     */
    public function describeBatchSlsDispatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBatchSlsDispatchStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDDoSEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSEventsResponse
     *
     * @param DescribeDDoSEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eip) {
            @$query['Eip'] = $request->eip;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDoSEvents',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDDoSEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDoSEventsRequest
     *
     * @returns DescribeDDoSEventsResponse
     *
     * @param DescribeDDoSEventsRequest $request
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSEventsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDDoSTrafficRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSTrafficResponse
     *
     * @param DescribeDDoSTrafficRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDDoSTrafficResponse
     */
    public function describeDDoSTrafficWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eip) {
            @$query['Eip'] = $request->eip;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDoSTraffic',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDDoSTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSTrafficResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDDoSTrafficRequest
     *
     * @returns DescribeDDoSTrafficResponse
     *
     * @param DescribeDDoSTrafficRequest $request
     *
     * @return DescribeDDoSTrafficResponse
     */
    public function describeDDoSTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSTrafficWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDefenseCountStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDefenseCountStatisticsResponse
     *
     * @param DescribeDefenseCountStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDefenseCountStatistics',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDefenseCountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDefenseCountStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDefenseCountStatisticsRequest
     *
     * @returns DescribeDefenseCountStatisticsResponse
     *
     * @param DescribeDefenseCountStatisticsRequest $request
     *
     * @return DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseCountStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainAccessModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainAccessModeResponse
     *
     * @param DescribeDomainAccessModeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainAccessModeResponse
     */
    public function describeDomainAccessModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainList) {
            @$query['DomainList'] = $request->domainList;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainAccessMode',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainAccessModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainAccessModeRequest
     *
     * @returns DescribeDomainAccessModeResponse
     *
     * @param DescribeDomainAccessModeRequest $request
     *
     * @return DescribeDomainAccessModeResponse
     */
    public function describeDomainAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainAttackEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainAttackEventListResponse
     *
     * @param DescribeDomainAttackEventListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainAttackEventListResponse
     */
    public function describeDomainAttackEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainAttackEventList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainAttackEventListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainAttackEventListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainAttackEventListRequest
     *
     * @returns DescribeDomainAttackEventListResponse
     *
     * @param DescribeDomainAttackEventListRequest $request
     *
     * @return DescribeDomainAttackEventListResponse
     */
    public function describeDomainAttackEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackEventListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainAttackMaxQpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainAttackMaxQpsResponse
     *
     * @param DescribeDomainAttackMaxQpsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainAttackMaxQpsResponse
     */
    public function describeDomainAttackMaxQpsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainAttackMaxQps',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainAttackMaxQpsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainAttackMaxQpsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainAttackMaxQpsRequest
     *
     * @returns DescribeDomainAttackMaxQpsResponse
     *
     * @param DescribeDomainAttackMaxQpsRequest $request
     *
     * @return DescribeDomainAttackMaxQpsResponse
     */
    public function describeDomainAttackMaxQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackMaxQpsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainOverviewResponse
     *
     * @param DescribeDomainOverviewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainOverviewResponse
     */
    public function describeDomainOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainOverview',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainOverviewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainOverviewRequest
     *
     * @returns DescribeDomainOverviewResponse
     *
     * @param DescribeDomainOverviewRequest $request
     *
     * @return DescribeDomainOverviewResponse
     */
    public function describeDomainOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainOverviewWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainQpsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainQpsListResponse
     *
     * @param DescribeDomainQpsListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainQpsListResponse
     */
    public function describeDomainQpsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainQpsList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainQpsListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainQpsListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainQpsListRequest
     *
     * @returns DescribeDomainQpsListResponse
     *
     * @param DescribeDomainQpsListRequest $request
     *
     * @return DescribeDomainQpsListResponse
     */
    public function describeDomainQpsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainQpsWithCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainQpsWithCacheResponse
     *
     * @param DescribeDomainQpsWithCacheRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainQpsWithCache',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainQpsWithCacheResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainQpsWithCacheResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainQpsWithCacheRequest
     *
     * @returns DescribeDomainQpsWithCacheResponse
     *
     * @param DescribeDomainQpsWithCacheRequest $request
     *
     * @return DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsWithCacheWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainSlsStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSlsStatusResponse
     *
     * @param DescribeDomainSlsStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainSlsStatusResponse
     */
    public function describeDomainSlsStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSlsStatus',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainSlsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainSlsStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainSlsStatusRequest
     *
     * @returns DescribeDomainSlsStatusResponse
     *
     * @param DescribeDomainSlsStatusRequest $request
     *
     * @return DescribeDomainSlsStatusResponse
     */
    public function describeDomainSlsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSlsStatusWithOptions($request, $runtime);
    }

    /**
     * 查询网站业务的响应状态码统计信息.
     *
     * @param request - DescribeDomainStatusCodeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainStatusCodeListResponse
     *
     * @param DescribeDomainStatusCodeListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainStatusCodeList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainStatusCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainStatusCodeListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询网站业务的响应状态码统计信息.
     *
     * @param request - DescribeDomainStatusCodeListRequest
     *
     * @returns DescribeDomainStatusCodeListResponse
     *
     * @param DescribeDomainStatusCodeListRequest $request
     *
     * @return DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatusCodeListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainsResponse
     *
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryDomainPattern) {
            @$query['QueryDomainPattern'] = $request->queryDomainPattern;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomains',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDomainsRequest
     *
     * @returns DescribeDomainsResponse
     *
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
     * @param request - DescribeElasticBandwidthSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticBandwidthSpecResponse
     *
     * @param DescribeElasticBandwidthSpecRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticBandwidthSpec',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeElasticBandwidthSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeElasticBandwidthSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeElasticBandwidthSpecRequest
     *
     * @returns DescribeElasticBandwidthSpecResponse
     *
     * @param DescribeElasticBandwidthSpecRequest $request
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticBandwidthSpecWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeHealthCheckListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHealthCheckListResponse
     *
     * @param DescribeHealthCheckListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHealthCheckListResponse
     */
    public function describeHealthCheckListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHealthCheckList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeHealthCheckListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHealthCheckListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeHealthCheckListRequest
     *
     * @returns DescribeHealthCheckListResponse
     *
     * @param DescribeHealthCheckListRequest $request
     *
     * @return DescribeHealthCheckListResponse
     */
    public function describeHealthCheckList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeHealthCheckStatusListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHealthCheckStatusListResponse
     *
     * @param DescribeHealthCheckStatusListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHealthCheckStatusListResponse
     */
    public function describeHealthCheckStatusListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHealthCheckStatusList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeHealthCheckStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHealthCheckStatusListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeHealthCheckStatusListRequest
     *
     * @returns DescribeHealthCheckStatusListResponse
     *
     * @param DescribeHealthCheckStatusListRequest $request
     *
     * @return DescribeHealthCheckStatusListResponse
     */
    public function describeHealthCheckStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckStatusListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDetailsResponse
     *
     * @param DescribeInstanceDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDetails',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceDetailsRequest
     *
     * @returns DescribeInstanceDetailsResponse
     *
     * @param DescribeInstanceDetailsRequest $request
     *
     * @return DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceSpecsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSpecsResponse
     *
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSpecs',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSpecsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceSpecsRequest
     *
     * @returns DescribeInstanceSpecsResponse
     *
     * @param DescribeInstanceSpecsRequest $request
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstanceStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceStatisticsResponse
     *
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceStatistics',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstanceStatisticsRequest
     *
     * @returns DescribeInstanceStatisticsResponse
     *
     * @param DescribeInstanceStatisticsRequest $request
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->expireEndTime) {
            @$query['ExpireEndTime'] = $request->expireEndTime;
        }

        if (null !== $request->expireStartTime) {
            @$query['ExpireStartTime'] = $request->expireStartTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeIpTrafficRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpTrafficResponse
     *
     * @param DescribeIpTrafficRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeIpTrafficResponse
     */
    public function describeIpTrafficWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eip) {
            @$query['Eip'] = $request->eip;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->queryProtocol) {
            @$query['QueryProtocol'] = $request->queryProtocol;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpTraffic',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeIpTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeIpTrafficResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeIpTrafficRequest
     *
     * @returns DescribeIpTrafficResponse
     *
     * @param DescribeIpTrafficRequest $request
     *
     * @return DescribeIpTrafficResponse
     */
    public function describeIpTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpTrafficWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeLayer4RuleAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLayer4RuleAttributesResponse
     *
     * @param DescribeLayer4RuleAttributesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLayer4RuleAttributesResponse
     */
    public function describeLayer4RuleAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listeners) {
            @$query['Listeners'] = $request->listeners;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLayer4RuleAttributes',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLayer4RuleAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLayer4RuleAttributesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeLayer4RuleAttributesRequest
     *
     * @returns DescribeLayer4RuleAttributesResponse
     *
     * @param DescribeLayer4RuleAttributesRequest $request
     *
     * @return DescribeLayer4RuleAttributesResponse
     */
    public function describeLayer4RuleAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RuleAttributesWithOptions($request, $runtime);
    }

    /**
     * Call DescribeLayer4Rules to query the detailed configuration of port forwarding rules for DDoS protection instances.
     *
     * @param request - DescribeLayer4RulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLayer4RulesResponse
     *
     * @param DescribeLayer4RulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLayer4RulesResponse
     */
    public function describeLayer4RulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forwardProtocol) {
            @$query['ForwardProtocol'] = $request->forwardProtocol;
        }

        if (null !== $request->frontendPort) {
            @$query['FrontendPort'] = $request->frontendPort;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLayer4Rules',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLayer4RulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLayer4RulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Call DescribeLayer4Rules to query the detailed configuration of port forwarding rules for DDoS protection instances.
     *
     * @param request - DescribeLayer4RulesRequest
     *
     * @returns DescribeLayer4RulesResponse
     *
     * @param DescribeLayer4RulesRequest $request
     *
     * @return DescribeLayer4RulesResponse
     */
    public function describeLayer4Rules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RulesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeLayer7CCRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLayer7CCRulesResponse
     *
     * @param DescribeLayer7CCRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLayer7CCRulesResponse
     */
    public function describeLayer7CCRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLayer7CCRules',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLayer7CCRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLayer7CCRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeLayer7CCRulesRequest
     *
     * @returns DescribeLayer7CCRulesResponse
     *
     * @param DescribeLayer7CCRulesRequest $request
     *
     * @return DescribeLayer7CCRulesResponse
     */
    public function describeLayer7CCRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer7CCRulesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeLogStoreExistStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogStoreExistStatusResponse
     *
     * @param DescribeLogStoreExistStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogStoreExistStatus',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLogStoreExistStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLogStoreExistStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeLogStoreExistStatusRequest
     *
     * @returns DescribeLogStoreExistStatusResponse
     *
     * @param DescribeLogStoreExistStatusRequest $request
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreExistStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeOpEntitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOpEntitiesResponse
     *
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityObject) {
            @$query['EntityObject'] = $request->entityObject;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->opAction) {
            @$query['OpAction'] = $request->opAction;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOpEntities',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeOpEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOpEntitiesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeOpEntitiesRequest
     *
     * @returns DescribeOpEntitiesResponse
     *
     * @param DescribeOpEntitiesRequest $request
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSimpleDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSimpleDomainsResponse
     *
     * @param DescribeSimpleDomainsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSimpleDomainsResponse
     */
    public function describeSimpleDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSimpleDomains',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSimpleDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSimpleDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSimpleDomainsRequest
     *
     * @returns DescribeSimpleDomainsResponse
     *
     * @param DescribeSimpleDomainsRequest $request
     *
     * @return DescribeSimpleDomainsResponse
     */
    public function describeSimpleDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimpleDomainsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSlsAuthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsAuthStatusResponse
     *
     * @param DescribeSlsAuthStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsAuthStatus',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlsAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsAuthStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlsAuthStatusRequest
     *
     * @returns DescribeSlsAuthStatusResponse
     *
     * @param DescribeSlsAuthStatusRequest $request
     *
     * @return DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSlsEmptyCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsEmptyCountResponse
     *
     * @param DescribeSlsEmptyCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsEmptyCountResponse
     */
    public function describeSlsEmptyCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsEmptyCount',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlsEmptyCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsEmptyCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlsEmptyCountRequest
     *
     * @returns DescribeSlsEmptyCountResponse
     *
     * @param DescribeSlsEmptyCountRequest $request
     *
     * @return DescribeSlsEmptyCountResponse
     */
    public function describeSlsEmptyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsEmptyCountWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSlsLogstoreInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsLogstoreInfoResponse
     *
     * @param DescribeSlsLogstoreInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsLogstoreInfo',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlsLogstoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsLogstoreInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlsLogstoreInfoRequest
     *
     * @returns DescribeSlsLogstoreInfoResponse
     *
     * @param DescribeSlsLogstoreInfoRequest $request
     *
     * @return DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogstoreInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeSlsOpenStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlsOpenStatusResponse
     *
     * @param DescribeSlsOpenStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSlsOpenStatus',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSlsOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsOpenStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribeSlsOpenStatusRequest
     *
     * @returns DescribeSlsOpenStatusResponse
     *
     * @param DescribeSlsOpenStatusRequest $request
     *
     * @return DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribleCertListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribleCertListResponse
     *
     * @param DescribleCertListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribleCertListResponse
     */
    public function describleCertListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribleCertList',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribleCertListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribleCertListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribleCertListRequest
     *
     * @returns DescribleCertListResponse
     *
     * @param DescribleCertListRequest $request
     *
     * @return DescribleCertListResponse
     */
    public function describleCertList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describleCertListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribleLayer7InstanceRelationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribleLayer7InstanceRelationsResponse
     *
     * @param DescribleLayer7InstanceRelationsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribleLayer7InstanceRelationsResponse
     */
    public function describleLayer7InstanceRelationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainList) {
            @$query['DomainList'] = $request->domainList;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribleLayer7InstanceRelations',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribleLayer7InstanceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribleLayer7InstanceRelationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribleLayer7InstanceRelationsRequest
     *
     * @returns DescribleLayer7InstanceRelationsResponse
     *
     * @param DescribleLayer7InstanceRelationsRequest $request
     *
     * @return DescribleLayer7InstanceRelationsResponse
     */
    public function describleLayer7InstanceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describleLayer7InstanceRelationsWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableLayer7CCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableLayer7CCResponse
     *
     * @param DisableLayer7CCRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableLayer7CCResponse
     */
    public function disableLayer7CCWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableLayer7CC',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableLayer7CCResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableLayer7CCResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DisableLayer7CCRequest
     *
     * @returns DisableLayer7CCResponse
     *
     * @param DisableLayer7CCRequest $request
     *
     * @return DisableLayer7CCResponse
     */
    public function disableLayer7CC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLayer7CCWithOptions($request, $runtime);
    }

    /**
     * @param request - DisableLayer7CCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableLayer7CCRuleResponse
     *
     * @param DisableLayer7CCRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableLayer7CCRuleResponse
     */
    public function disableLayer7CCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableLayer7CCRule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DisableLayer7CCRuleRequest
     *
     * @returns DisableLayer7CCRuleResponse
     *
     * @param DisableLayer7CCRuleRequest $request
     *
     * @return DisableLayer7CCRuleResponse
     */
    public function disableLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - EmptySlsLogstoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EmptySlsLogstoreResponse
     *
     * @param EmptySlsLogstoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EmptySlsLogstoreResponse
     */
    public function emptySlsLogstoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EmptySlsLogstore',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EmptySlsLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EmptySlsLogstoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - EmptySlsLogstoreRequest
     *
     * @returns EmptySlsLogstoreResponse
     *
     * @param EmptySlsLogstoreRequest $request
     *
     * @return EmptySlsLogstoreResponse
     */
    public function emptySlsLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptySlsLogstoreWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableLayer7CCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableLayer7CCResponse
     *
     * @param EnableLayer7CCRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableLayer7CCResponse
     */
    public function enableLayer7CCWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableLayer7CC',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableLayer7CCResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableLayer7CCResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - EnableLayer7CCRequest
     *
     * @returns EnableLayer7CCResponse
     *
     * @param EnableLayer7CCRequest $request
     *
     * @return EnableLayer7CCResponse
     */
    public function enableLayer7CC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLayer7CCWithOptions($request, $runtime);
    }

    /**
     * @param request - EnableLayer7CCRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableLayer7CCRuleResponse
     *
     * @param EnableLayer7CCRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableLayer7CCRuleResponse
     */
    public function enableLayer7CCRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableLayer7CCRule',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - EnableLayer7CCRuleRequest
     *
     * @returns EnableLayer7CCRuleResponse
     *
     * @param EnableLayer7CCRuleRequest $request
     *
     * @return EnableLayer7CCRuleResponse
     */
    public function enableLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsyncTaskResponse
     *
     * @param ListAsyncTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAsyncTaskResponse
     */
    public function listAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAsyncTask',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListAsyncTaskRequest
     *
     * @returns ListAsyncTaskResponse
     *
     * @param ListAsyncTaskRequest $request
     *
     * @return ListAsyncTaskResponse
     */
    public function listAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - ListLayer7CustomPortsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLayer7CustomPortsResponse
     *
     * @param ListLayer7CustomPortsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLayer7CustomPortsResponse
     */
    public function listLayer7CustomPortsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLayer7CustomPorts',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLayer7CustomPortsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLayer7CustomPortsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListLayer7CustomPortsRequest
     *
     * @returns ListLayer7CustomPortsResponse
     *
     * @param ListLayer7CustomPortsRequest $request
     *
     * @return ListLayer7CustomPortsResponse
     */
    public function listLayer7CustomPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLayer7CustomPortsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListValueAddedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListValueAddedResponse
     *
     * @param ListValueAddedRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListValueAddedResponse
     */
    public function listValueAddedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListValueAdded',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListValueAddedResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListValueAddedResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListValueAddedRequest
     *
     * @returns ListValueAddedResponse
     *
     * @param ListValueAddedRequest $request
     *
     * @return ListValueAddedResponse
     */
    public function listValueAdded($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listValueAddedWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyElasticBandWidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyElasticBandWidthResponse
     *
     * @param ModifyElasticBandWidthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->elasticBandwidth) {
            @$query['ElasticBandwidth'] = $request->elasticBandwidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyElasticBandWidth',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyElasticBandWidthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyElasticBandWidthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyElasticBandWidthRequest
     *
     * @returns ModifyElasticBandWidthResponse
     *
     * @param ModifyElasticBandWidthRequest $request
     *
     * @return ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBandWidthWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyFullLogTtlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFullLogTtlResponse
     *
     * @param ModifyFullLogTtlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFullLogTtl',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyFullLogTtlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyFullLogTtlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyFullLogTtlRequest
     *
     * @returns ModifyFullLogTtlResponse
     *
     * @param ModifyFullLogTtlRequest $request
     *
     * @return ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFullLogTtlWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyInstanceRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceRemarkResponse
     *
     * @param ModifyInstanceRemarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceRemark',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceRemarkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ModifyInstanceRemarkRequest
     *
     * @returns ModifyInstanceRemarkResponse
     *
     * @param ModifyInstanceRemarkRequest $request
     *
     * @return ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRemarkWithOptions($request, $runtime);
    }

    /**
     * @param request - OpenDomainSlsConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenDomainSlsConfigResponse
     *
     * @param OpenDomainSlsConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OpenDomainSlsConfigResponse
     */
    public function openDomainSlsConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenDomainSlsConfig',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenDomainSlsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenDomainSlsConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - OpenDomainSlsConfigRequest
     *
     * @returns OpenDomainSlsConfigResponse
     *
     * @param OpenDomainSlsConfigRequest $request
     *
     * @return OpenDomainSlsConfigResponse
     */
    public function openDomainSlsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDomainSlsConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - ReleaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstance',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - ReleaseValueAddedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseValueAddedResponse
     *
     * @param ReleaseValueAddedRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseValueAddedResponse
     */
    public function releaseValueAddedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseValueAdded',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleaseValueAddedResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseValueAddedResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseValueAddedRequest
     *
     * @returns ReleaseValueAddedResponse
     *
     * @param ReleaseValueAddedRequest $request
     *
     * @return ReleaseValueAddedResponse
     */
    public function releaseValueAdded($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseValueAddedWithOptions($request, $runtime);
    }

    /**
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2017-12-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
