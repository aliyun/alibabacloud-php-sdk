<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddLayer7CCRuleRequest $request AddLayer7CCRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddLayer7CCRuleResponse AddLayer7CCRuleResponse
     */
    public function addLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->act)) {
            $query['Act'] = $request->act;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLayer7CCRule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param AddLayer7CCRuleRequest $request AddLayer7CCRuleRequest
     *
     * @return AddLayer7CCRuleResponse AddLayer7CCRuleResponse
     */
    public function addLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param CloseDomainSlsConfigRequest $request CloseDomainSlsConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseDomainSlsConfigResponse CloseDomainSlsConfigResponse
     */
    public function closeDomainSlsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseDomainSlsConfig',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CloseDomainSlsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseDomainSlsConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CloseDomainSlsConfigRequest $request CloseDomainSlsConfigRequest
     *
     * @return CloseDomainSlsConfigResponse CloseDomainSlsConfigResponse
     */
    public function closeDomainSlsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDomainSlsConfigWithOptions($request, $runtime);
    }

    /**
     * @param ConfigHealthCheckRequest $request ConfigHealthCheckRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigHealthCheckResponse ConfigHealthCheckResponse
     */
    public function configHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forwardProtocol)) {
            $query['ForwardProtocol'] = $request->forwardProtocol;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigHealthCheck',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigHealthCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigHealthCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigHealthCheckRequest $request ConfigHealthCheckRequest
     *
     * @return ConfigHealthCheckResponse ConfigHealthCheckResponse
     */
    public function configHealthCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configHealthCheckWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer4RuleRequest $request ConfigLayer4RuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer4RuleResponse ConfigLayer4RuleResponse
     */
    public function configLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        if (!Utils::isUnset($request->proxyEnable)) {
            $query['ProxyEnable'] = $request->proxyEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer4Rule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer4RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer4RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer4RuleRequest $request ConfigLayer4RuleRequest
     *
     * @return ConfigLayer4RuleResponse ConfigLayer4RuleResponse
     */
    public function configLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer4RuleAttributeRequest $request ConfigLayer4RuleAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer4RuleAttributeResponse ConfigLayer4RuleAttributeResponse
     */
    public function configLayer4RuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->forwardProtocol)) {
            $query['ForwardProtocol'] = $request->forwardProtocol;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer4RuleAttribute',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer4RuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer4RuleAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer4RuleAttributeRequest $request ConfigLayer4RuleAttributeRequest
     *
     * @return ConfigLayer4RuleAttributeResponse ConfigLayer4RuleAttributeResponse
     */
    public function configLayer4RuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer4RuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer7BlackWhiteListRequest $request ConfigLayer7BlackWhiteListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer7BlackWhiteListResponse ConfigLayer7BlackWhiteListResponse
     */
    public function configLayer7BlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->blackList)) {
            $query['BlackList'] = $request->blackList;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->whiteList)) {
            $query['WhiteList'] = $request->whiteList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer7BlackWhiteList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer7BlackWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7BlackWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer7BlackWhiteListRequest $request ConfigLayer7BlackWhiteListRequest
     *
     * @return ConfigLayer7BlackWhiteListResponse ConfigLayer7BlackWhiteListResponse
     */
    public function configLayer7BlackWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7BlackWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer7CCRuleRequest $request ConfigLayer7CCRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer7CCRuleResponse ConfigLayer7CCRuleResponse
     */
    public function configLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->act)) {
            $query['Act'] = $request->act;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer7CCRule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer7CCRuleRequest $request ConfigLayer7CCRuleRequest
     *
     * @return ConfigLayer7CCRuleResponse ConfigLayer7CCRuleResponse
     */
    public function configLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer7CCTemplateRequest $request ConfigLayer7CCTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer7CCTemplateResponse ConfigLayer7CCTemplateResponse
     */
    public function configLayer7CCTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer7CCTemplate',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer7CCTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7CCTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer7CCTemplateRequest $request ConfigLayer7CCTemplateRequest
     *
     * @return ConfigLayer7CCTemplateResponse ConfigLayer7CCTemplateResponse
     */
    public function configLayer7CCTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7CCTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer7CertRequest $request ConfigLayer7CertRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer7CertResponse ConfigLayer7CertResponse
     */
    public function configLayer7CertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cert)) {
            $query['Cert'] = $request->cert;
        }
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certRegion)) {
            $query['CertRegion'] = $request->certRegion;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer7Cert',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer7CertResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7CertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer7CertRequest $request ConfigLayer7CertRequest
     *
     * @return ConfigLayer7CertResponse ConfigLayer7CertResponse
     */
    public function configLayer7Cert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7CertWithOptions($request, $runtime);
    }

    /**
     * @param ConfigLayer7RuleRequest $request ConfigLayer7RuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigLayer7RuleResponse ConfigLayer7RuleResponse
     */
    public function configLayer7RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->proxyTypeList)) {
            $query['ProxyTypeList'] = $request->proxyTypeList;
        }
        if (!Utils::isUnset($request->proxyTypes)) {
            $query['ProxyTypes'] = $request->proxyTypes;
        }
        if (!Utils::isUnset($request->realServers)) {
            $query['RealServers'] = $request->realServers;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rsType)) {
            $query['RsType'] = $request->rsType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigLayer7Rule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ConfigLayer7RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ConfigLayer7RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ConfigLayer7RuleRequest $request ConfigLayer7RuleRequest
     *
     * @return ConfigLayer7RuleResponse ConfigLayer7RuleResponse
     */
    public function configLayer7Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configLayer7RuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateAsyncTaskRequest $request CreateAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAsyncTaskResponse CreateAsyncTaskResponse
     */
    public function createAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskParams)) {
            $query['TaskParams'] = $request->taskParams;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAsyncTask',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateAsyncTaskRequest $request CreateAsyncTaskRequest
     *
     * @return CreateAsyncTaskResponse CreateAsyncTaskResponse
     */
    public function createAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateLayer4RuleRequest $request CreateLayer4RuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLayer4RuleResponse CreateLayer4RuleResponse
     */
    public function createLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        if (!Utils::isUnset($request->proxyEnable)) {
            $query['ProxyEnable'] = $request->proxyEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLayer4Rule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLayer4RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLayer4RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateLayer4RuleRequest $request CreateLayer4RuleRequest
     *
     * @return CreateLayer4RuleResponse CreateLayer4RuleResponse
     */
    public function createLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateLayer7RuleRequest $request CreateLayer7RuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLayer7RuleResponse CreateLayer7RuleResponse
     */
    public function createLayer7RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->rsType)) {
            $query['RsType'] = $request->rsType;
        }
        if (!Utils::isUnset($request->rules)) {
            $query['Rules'] = $request->rules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLayer7Rule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLayer7RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLayer7RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateLayer7RuleRequest $request CreateLayer7RuleRequest
     *
     * @return CreateLayer7RuleResponse CreateLayer7RuleResponse
     */
    public function createLayer7Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLayer7RuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAsyncTaskRequest $request DeleteAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAsyncTaskResponse DeleteAsyncTaskResponse
     */
    public function deleteAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAsyncTask',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteAsyncTaskRequest $request DeleteAsyncTaskRequest
     *
     * @return DeleteAsyncTaskResponse DeleteAsyncTaskResponse
     */
    public function deleteAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLayer4RuleRequest $request DeleteLayer4RuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLayer4RuleResponse DeleteLayer4RuleResponse
     */
    public function deleteLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLayer4Rule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLayer4RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayer4RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteLayer4RuleRequest $request DeleteLayer4RuleRequest
     *
     * @return DeleteLayer4RuleResponse DeleteLayer4RuleResponse
     */
    public function deleteLayer4Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer4RuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLayer7CCRuleRequest $request DeleteLayer7CCRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLayer7CCRuleResponse DeleteLayer7CCRuleResponse
     */
    public function deleteLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLayer7CCRule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteLayer7CCRuleRequest $request DeleteLayer7CCRuleRequest
     *
     * @return DeleteLayer7CCRuleResponse DeleteLayer7CCRuleResponse
     */
    public function deleteLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLayer7RuleRequest $request DeleteLayer7RuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLayer7RuleResponse DeleteLayer7RuleResponse
     */
    public function deleteLayer7RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLayer7Rule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLayer7RuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLayer7RuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteLayer7RuleRequest $request DeleteLayer7RuleRequest
     *
     * @return DeleteLayer7RuleResponse DeleteLayer7RuleResponse
     */
    public function deleteLayer7Rule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLayer7RuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackSourceCidrRequest $request DescribeBackSourceCidrRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackSourceCidrResponse DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackSourceCidr',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackSourceCidrResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackSourceCidrResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackSourceCidrRequest $request DescribeBackSourceCidrRequest
     *
     * @return DescribeBackSourceCidrResponse DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackSourceCidrWithOptions($request, $runtime);
    }

    /**
     * @summary rosetta迁移
     *  *
     * @param DescribeBatchSlsDispatchStatusRequest $request DescribeBatchSlsDispatchStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBatchSlsDispatchStatusResponse DescribeBatchSlsDispatchStatusResponse
     */
    public function describeBatchSlsDispatchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBatchSlsDispatchStatus',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBatchSlsDispatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBatchSlsDispatchStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary rosetta迁移
     *  *
     * @param DescribeBatchSlsDispatchStatusRequest $request DescribeBatchSlsDispatchStatusRequest
     *
     * @return DescribeBatchSlsDispatchStatusResponse DescribeBatchSlsDispatchStatusResponse
     */
    public function describeBatchSlsDispatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBatchSlsDispatchStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDoSEventsRequest $request DescribeDDoSEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSEventsResponse DescribeDDoSEventsResponse
     */
    public function describeDDoSEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eip)) {
            $query['Eip'] = $request->eip;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDoSEvents',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDDoSEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDDoSEventsRequest $request DescribeDDoSEventsRequest
     *
     * @return DescribeDDoSEventsResponse DescribeDDoSEventsResponse
     */
    public function describeDDoSEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDDoSTrafficRequest $request DescribeDDoSTrafficRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSTrafficResponse DescribeDDoSTrafficResponse
     */
    public function describeDDoSTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eip)) {
            $query['Eip'] = $request->eip;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDDoSTraffic',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDDoSTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSTrafficResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDDoSTrafficRequest $request DescribeDDoSTrafficRequest
     *
     * @return DescribeDDoSTrafficResponse DescribeDDoSTrafficResponse
     */
    public function describeDDoSTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDefenseCountStatisticsRequest $request DescribeDefenseCountStatisticsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDefenseCountStatisticsResponse DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDefenseCountStatistics',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDefenseCountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDefenseCountStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDefenseCountStatisticsRequest $request DescribeDefenseCountStatisticsRequest
     *
     * @return DescribeDefenseCountStatisticsResponse DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDefenseCountStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAccessModeRequest $request DescribeDomainAccessModeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainAccessModeResponse DescribeDomainAccessModeResponse
     */
    public function describeDomainAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainList)) {
            $query['DomainList'] = $request->domainList;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainAccessMode',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainAccessModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainAccessModeRequest $request DescribeDomainAccessModeRequest
     *
     * @return DescribeDomainAccessModeResponse DescribeDomainAccessModeResponse
     */
    public function describeDomainAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAttackEventListRequest $request DescribeDomainAttackEventListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainAttackEventListResponse DescribeDomainAttackEventListResponse
     */
    public function describeDomainAttackEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainAttackEventList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainAttackEventListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainAttackEventListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainAttackEventListRequest $request DescribeDomainAttackEventListRequest
     *
     * @return DescribeDomainAttackEventListResponse DescribeDomainAttackEventListResponse
     */
    public function describeDomainAttackEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAttackMaxQpsRequest $request DescribeDomainAttackMaxQpsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainAttackMaxQpsResponse DescribeDomainAttackMaxQpsResponse
     */
    public function describeDomainAttackMaxQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainAttackMaxQps',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainAttackMaxQpsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainAttackMaxQpsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainAttackMaxQpsRequest $request DescribeDomainAttackMaxQpsRequest
     *
     * @return DescribeDomainAttackMaxQpsResponse DescribeDomainAttackMaxQpsResponse
     */
    public function describeDomainAttackMaxQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackMaxQpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainOverviewRequest $request DescribeDomainOverviewRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainOverviewResponse DescribeDomainOverviewResponse
     */
    public function describeDomainOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainOverview',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainOverviewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainOverviewRequest $request DescribeDomainOverviewRequest
     *
     * @return DescribeDomainOverviewResponse DescribeDomainOverviewResponse
     */
    public function describeDomainOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainOverviewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainQpsListRequest $request DescribeDomainQpsListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainQpsListResponse DescribeDomainQpsListResponse
     */
    public function describeDomainQpsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainQpsList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainQpsListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainQpsListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainQpsListRequest $request DescribeDomainQpsListRequest
     *
     * @return DescribeDomainQpsListResponse DescribeDomainQpsListResponse
     */
    public function describeDomainQpsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainQpsWithCacheRequest $request DescribeDomainQpsWithCacheRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainQpsWithCacheResponse DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainQpsWithCache',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainQpsWithCacheResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainQpsWithCacheResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainQpsWithCacheRequest $request DescribeDomainQpsWithCacheRequest
     *
     * @return DescribeDomainQpsWithCacheResponse DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsWithCacheWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSlsStatusRequest $request DescribeDomainSlsStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSlsStatusResponse DescribeDomainSlsStatusResponse
     */
    public function describeDomainSlsStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainSlsStatus',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainSlsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainSlsStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainSlsStatusRequest $request DescribeDomainSlsStatusRequest
     *
     * @return DescribeDomainSlsStatusResponse DescribeDomainSlsStatusResponse
     */
    public function describeDomainSlsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSlsStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询网站业务的响应状态码统计信息
     *  *
     * @param DescribeDomainStatusCodeListRequest $request DescribeDomainStatusCodeListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainStatusCodeListResponse DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainStatusCodeList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainStatusCodeListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainStatusCodeListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询网站业务的响应状态码统计信息
     *  *
     * @param DescribeDomainStatusCodeListRequest $request DescribeDomainStatusCodeListRequest
     *
     * @return DescribeDomainStatusCodeListResponse DescribeDomainStatusCodeListResponse
     */
    public function describeDomainStatusCodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatusCodeListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryDomainPattern)) {
            $query['QueryDomainPattern'] = $request->queryDomainPattern;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeElasticBandwidthSpecRequest $request DescribeElasticBandwidthSpecRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElasticBandwidthSpecResponse DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticBandwidthSpec',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeElasticBandwidthSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeElasticBandwidthSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeElasticBandwidthSpecRequest $request DescribeElasticBandwidthSpecRequest
     *
     * @return DescribeElasticBandwidthSpecResponse DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticBandwidthSpecWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthCheckListRequest $request DescribeHealthCheckListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHealthCheckListResponse DescribeHealthCheckListResponse
     */
    public function describeHealthCheckListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthCheckList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHealthCheckListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHealthCheckListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeHealthCheckListRequest $request DescribeHealthCheckListRequest
     *
     * @return DescribeHealthCheckListResponse DescribeHealthCheckListResponse
     */
    public function describeHealthCheckList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHealthCheckStatusListRequest $request DescribeHealthCheckStatusListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHealthCheckStatusListResponse DescribeHealthCheckStatusListResponse
     */
    public function describeHealthCheckStatusListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHealthCheckStatusList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHealthCheckStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHealthCheckStatusListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeHealthCheckStatusListRequest $request DescribeHealthCheckStatusListRequest
     *
     * @return DescribeHealthCheckStatusListResponse DescribeHealthCheckStatusListResponse
     */
    public function describeHealthCheckStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHealthCheckStatusListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceDetailsRequest $request DescribeInstanceDetailsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceDetailsResponse DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceDetails',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceDetailsRequest $request DescribeInstanceDetailsRequest
     *
     * @return DescribeInstanceDetailsResponse DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSpecsRequest $request DescribeInstanceSpecsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSpecsResponse DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpecs',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSpecsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSpecsRequest $request DescribeInstanceSpecsRequest
     *
     * @return DescribeInstanceSpecsResponse DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStatisticsRequest $request DescribeInstanceStatisticsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceStatisticsResponse DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceStatistics',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceStatisticsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceStatisticsRequest $request DescribeInstanceStatisticsRequest
     *
     * @return DescribeInstanceStatisticsResponse DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->edition)) {
            $query['Edition'] = $request->edition;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->expireEndTime)) {
            $query['ExpireEndTime'] = $request->expireEndTime;
        }
        if (!Utils::isUnset($request->expireStartTime)) {
            $query['ExpireStartTime'] = $request->expireStartTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpTrafficRequest $request DescribeIpTrafficRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpTrafficResponse DescribeIpTrafficResponse
     */
    public function describeIpTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eip)) {
            $query['Eip'] = $request->eip;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->queryProtocol)) {
            $query['QueryProtocol'] = $request->queryProtocol;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpTraffic',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeIpTrafficResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeIpTrafficResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeIpTrafficRequest $request DescribeIpTrafficRequest
     *
     * @return DescribeIpTrafficResponse DescribeIpTrafficResponse
     */
    public function describeIpTraffic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpTrafficWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLayer4RuleAttributesRequest $request DescribeLayer4RuleAttributesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLayer4RuleAttributesResponse DescribeLayer4RuleAttributesResponse
     */
    public function describeLayer4RuleAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listeners)) {
            $query['Listeners'] = $request->listeners;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLayer4RuleAttributes',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeLayer4RuleAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLayer4RuleAttributesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeLayer4RuleAttributesRequest $request DescribeLayer4RuleAttributesRequest
     *
     * @return DescribeLayer4RuleAttributesResponse DescribeLayer4RuleAttributesResponse
     */
    public function describeLayer4RuleAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RuleAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Call DescribeLayer4Rules to query the detailed configuration of port forwarding rules for DDoS protection instances.
     *  *
     * @param DescribeLayer4RulesRequest $request DescribeLayer4RulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLayer4RulesResponse DescribeLayer4RulesResponse
     */
    public function describeLayer4RulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forwardProtocol)) {
            $query['ForwardProtocol'] = $request->forwardProtocol;
        }
        if (!Utils::isUnset($request->frontendPort)) {
            $query['FrontendPort'] = $request->frontendPort;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLayer4Rules',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeLayer4RulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLayer4RulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Call DescribeLayer4Rules to query the detailed configuration of port forwarding rules for DDoS protection instances.
     *  *
     * @param DescribeLayer4RulesRequest $request DescribeLayer4RulesRequest
     *
     * @return DescribeLayer4RulesResponse DescribeLayer4RulesResponse
     */
    public function describeLayer4Rules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer4RulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLayer7CCRulesRequest $request DescribeLayer7CCRulesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLayer7CCRulesResponse DescribeLayer7CCRulesResponse
     */
    public function describeLayer7CCRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLayer7CCRules',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeLayer7CCRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLayer7CCRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeLayer7CCRulesRequest $request DescribeLayer7CCRulesRequest
     *
     * @return DescribeLayer7CCRulesResponse DescribeLayer7CCRulesResponse
     */
    public function describeLayer7CCRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLayer7CCRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogStoreExistStatusRequest $request DescribeLogStoreExistStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogStoreExistStatusResponse DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogStoreExistStatus',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeLogStoreExistStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLogStoreExistStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeLogStoreExistStatusRequest $request DescribeLogStoreExistStatusRequest
     *
     * @return DescribeLogStoreExistStatusResponse DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreExistStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOpEntitiesRequest $request DescribeOpEntitiesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOpEntitiesResponse DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->entityObject)) {
            $query['EntityObject'] = $request->entityObject;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->opAction)) {
            $query['OpAction'] = $request->opAction;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOpEntities',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOpEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOpEntitiesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeOpEntitiesRequest $request DescribeOpEntitiesRequest
     *
     * @return DescribeOpEntitiesResponse DescribeOpEntitiesResponse
     */
    public function describeOpEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOpEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSimpleDomainsRequest $request DescribeSimpleDomainsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSimpleDomainsResponse DescribeSimpleDomainsResponse
     */
    public function describeSimpleDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSimpleDomains',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSimpleDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSimpleDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeSimpleDomainsRequest $request DescribeSimpleDomainsRequest
     *
     * @return DescribeSimpleDomainsResponse DescribeSimpleDomainsResponse
     */
    public function describeSimpleDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimpleDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsAuthStatusRequest $request DescribeSlsAuthStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsAuthStatusResponse DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsAuthStatus',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSlsAuthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsAuthStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeSlsAuthStatusRequest $request DescribeSlsAuthStatusRequest
     *
     * @return DescribeSlsAuthStatusResponse DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsEmptyCountRequest $request DescribeSlsEmptyCountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsEmptyCountResponse DescribeSlsEmptyCountResponse
     */
    public function describeSlsEmptyCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsEmptyCount',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSlsEmptyCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsEmptyCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeSlsEmptyCountRequest $request DescribeSlsEmptyCountRequest
     *
     * @return DescribeSlsEmptyCountResponse DescribeSlsEmptyCountResponse
     */
    public function describeSlsEmptyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsEmptyCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsLogstoreInfoRequest $request DescribeSlsLogstoreInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsLogstoreInfoResponse DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsLogstoreInfo',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSlsLogstoreInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsLogstoreInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeSlsLogstoreInfoRequest $request DescribeSlsLogstoreInfoRequest
     *
     * @return DescribeSlsLogstoreInfoResponse DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsLogstoreInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlsOpenStatusRequest $request DescribeSlsOpenStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSlsOpenStatusResponse DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlsOpenStatus',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSlsOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSlsOpenStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeSlsOpenStatusRequest $request DescribeSlsOpenStatusRequest
     *
     * @return DescribeSlsOpenStatusResponse DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlsOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribleCertListRequest $request DescribleCertListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribleCertListResponse DescribleCertListResponse
     */
    public function describleCertListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribleCertList',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribleCertListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribleCertListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribleCertListRequest $request DescribleCertListRequest
     *
     * @return DescribleCertListResponse DescribleCertListResponse
     */
    public function describleCertList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describleCertListWithOptions($request, $runtime);
    }

    /**
     * @param DescribleLayer7InstanceRelationsRequest $request DescribleLayer7InstanceRelationsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribleLayer7InstanceRelationsResponse DescribleLayer7InstanceRelationsResponse
     */
    public function describleLayer7InstanceRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainList)) {
            $query['DomainList'] = $request->domainList;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribleLayer7InstanceRelations',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribleLayer7InstanceRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribleLayer7InstanceRelationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribleLayer7InstanceRelationsRequest $request DescribleLayer7InstanceRelationsRequest
     *
     * @return DescribleLayer7InstanceRelationsResponse DescribleLayer7InstanceRelationsResponse
     */
    public function describleLayer7InstanceRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describleLayer7InstanceRelationsWithOptions($request, $runtime);
    }

    /**
     * @param DisableLayer7CCRequest $request DisableLayer7CCRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableLayer7CCResponse DisableLayer7CCResponse
     */
    public function disableLayer7CCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableLayer7CC',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableLayer7CCResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableLayer7CCResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DisableLayer7CCRequest $request DisableLayer7CCRequest
     *
     * @return DisableLayer7CCResponse DisableLayer7CCResponse
     */
    public function disableLayer7CC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLayer7CCWithOptions($request, $runtime);
    }

    /**
     * @param DisableLayer7CCRuleRequest $request DisableLayer7CCRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableLayer7CCRuleResponse DisableLayer7CCRuleResponse
     */
    public function disableLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableLayer7CCRule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DisableLayer7CCRuleRequest $request DisableLayer7CCRuleRequest
     *
     * @return DisableLayer7CCRuleResponse DisableLayer7CCRuleResponse
     */
    public function disableLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param EmptySlsLogstoreRequest $request EmptySlsLogstoreRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EmptySlsLogstoreResponse EmptySlsLogstoreResponse
     */
    public function emptySlsLogstoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EmptySlsLogstore',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EmptySlsLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EmptySlsLogstoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param EmptySlsLogstoreRequest $request EmptySlsLogstoreRequest
     *
     * @return EmptySlsLogstoreResponse EmptySlsLogstoreResponse
     */
    public function emptySlsLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->emptySlsLogstoreWithOptions($request, $runtime);
    }

    /**
     * @param EnableLayer7CCRequest $request EnableLayer7CCRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableLayer7CCResponse EnableLayer7CCResponse
     */
    public function enableLayer7CCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableLayer7CC',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableLayer7CCResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableLayer7CCResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param EnableLayer7CCRequest $request EnableLayer7CCRequest
     *
     * @return EnableLayer7CCResponse EnableLayer7CCResponse
     */
    public function enableLayer7CC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLayer7CCWithOptions($request, $runtime);
    }

    /**
     * @param EnableLayer7CCRuleRequest $request EnableLayer7CCRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableLayer7CCRuleResponse EnableLayer7CCRuleResponse
     */
    public function enableLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableLayer7CCRule',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableLayer7CCRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableLayer7CCRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param EnableLayer7CCRuleRequest $request EnableLayer7CCRuleRequest
     *
     * @return EnableLayer7CCRuleResponse EnableLayer7CCRuleResponse
     */
    public function enableLayer7CCRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLayer7CCRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListAsyncTaskRequest $request ListAsyncTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAsyncTaskResponse ListAsyncTaskResponse
     */
    public function listAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsyncTask',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListAsyncTaskRequest $request ListAsyncTaskRequest
     *
     * @return ListAsyncTaskResponse ListAsyncTaskResponse
     */
    public function listAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListLayer7CustomPortsRequest $request ListLayer7CustomPortsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLayer7CustomPortsResponse ListLayer7CustomPortsResponse
     */
    public function listLayer7CustomPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLayer7CustomPorts',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLayer7CustomPortsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLayer7CustomPortsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListLayer7CustomPortsRequest $request ListLayer7CustomPortsRequest
     *
     * @return ListLayer7CustomPortsResponse ListLayer7CustomPortsResponse
     */
    public function listLayer7CustomPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLayer7CustomPortsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListValueAddedRequest $request ListValueAddedRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListValueAddedResponse ListValueAddedResponse
     */
    public function listValueAddedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListValueAdded',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListValueAddedResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListValueAddedResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListValueAddedRequest $request ListValueAddedRequest
     *
     * @return ListValueAddedResponse ListValueAddedResponse
     */
    public function listValueAdded($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listValueAddedWithOptions($request, $runtime);
    }

    /**
     * @param ModifyElasticBandWidthRequest $request ModifyElasticBandWidthRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyElasticBandWidthResponse ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->elasticBandwidth)) {
            $query['ElasticBandwidth'] = $request->elasticBandwidth;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyElasticBandWidth',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyElasticBandWidthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyElasticBandWidthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyElasticBandWidthRequest $request ModifyElasticBandWidthRequest
     *
     * @return ModifyElasticBandWidthResponse ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticBandWidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFullLogTtlRequest $request ModifyFullLogTtlRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFullLogTtlResponse ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFullLogTtl',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyFullLogTtlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyFullLogTtlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyFullLogTtlRequest $request ModifyFullLogTtlRequest
     *
     * @return ModifyFullLogTtlResponse ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFullLogTtlWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceRemarkRequest $request ModifyInstanceRemarkRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceRemarkResponse ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceRemark',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyInstanceRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceRemarkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceRemarkRequest $request ModifyInstanceRemarkRequest
     *
     * @return ModifyInstanceRemarkResponse ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceRemarkWithOptions($request, $runtime);
    }

    /**
     * @param OpenDomainSlsConfigRequest $request OpenDomainSlsConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenDomainSlsConfigResponse OpenDomainSlsConfigResponse
     */
    public function openDomainSlsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenDomainSlsConfig',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return OpenDomainSlsConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenDomainSlsConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param OpenDomainSlsConfigRequest $request OpenDomainSlsConfigRequest
     *
     * @return OpenDomainSlsConfigResponse OpenDomainSlsConfigResponse
     */
    public function openDomainSlsConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDomainSlsConfigWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstance',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseValueAddedRequest $request ReleaseValueAddedRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseValueAddedResponse ReleaseValueAddedResponse
     */
    public function releaseValueAddedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseValueAdded',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleaseValueAddedResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseValueAddedResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ReleaseValueAddedRequest $request ReleaseValueAddedRequest
     *
     * @return ReleaseValueAddedResponse ReleaseValueAddedResponse
     */
    public function releaseValueAdded($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseValueAddedWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-12-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
