<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\AddLayer7CCRuleRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\AddLayer7CCRuleResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CloseDomainSlsConfigRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CloseDomainSlsConfigResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigDomainAccessModeRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ConfigDomainAccessModeResponse;
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
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackEventsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackEventsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsWithCacheRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainQpsWithCacheResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainSlsStatusRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainSlsStatusResponse;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainsResponse;
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
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ddoscoo extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddoscoo', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ModifyFullLogTtlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFullLogTtlResponse
     */
    public function modifyFullLogTtlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyFullLogTtlResponse::fromMap($this->doRequest('ModifyFullLogTtl', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ReleaseValueAddedRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseValueAddedResponse
     */
    public function releaseValueAddedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseValueAddedResponse::fromMap($this->doRequest('ReleaseValueAdded', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ListValueAddedRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListValueAddedResponse
     */
    public function listValueAddedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListValueAddedResponse::fromMap($this->doRequest('ListValueAdded', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ListLayer7CustomPortsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLayer7CustomPortsResponse
     */
    public function listLayer7CustomPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListLayer7CustomPortsResponse::fromMap($this->doRequest('ListLayer7CustomPorts', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeSimpleDomainsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSimpleDomainsResponse
     */
    public function describeSimpleDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSimpleDomainsResponse::fromMap($this->doRequest('DescribeSimpleDomains', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDefenseCountStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDefenseCountStatisticsResponse
     */
    public function describeDefenseCountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDefenseCountStatisticsResponse::fromMap($this->doRequest('DescribeDefenseCountStatistics', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagKeysResponse::fromMap($this->doRequest('ListTagKeys', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDomainQpsWithCacheRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainQpsWithCacheResponse
     */
    public function describeDomainQpsWithCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainQpsWithCacheResponse::fromMap($this->doRequest('DescribeDomainQpsWithCache', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeLogStoreExistStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public function describeLogStoreExistStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLogStoreExistStatusResponse::fromMap($this->doRequest('DescribeLogStoreExistStatus', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeBatchSlsDispatchStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeBatchSlsDispatchStatusResponse
     */
    public function describeBatchSlsDispatchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBatchSlsDispatchStatusResponse::fromMap($this->doRequest('DescribeBatchSlsDispatchStatus', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeSlsEmptyCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsEmptyCountResponse
     */
    public function describeSlsEmptyCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSlsEmptyCountResponse::fromMap($this->doRequest('DescribeSlsEmptyCount', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param EmptySlsLogstoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EmptySlsLogstoreResponse
     */
    public function emptySlsLogstoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EmptySlsLogstoreResponse::fromMap($this->doRequest('EmptySlsLogstore', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param CloseDomainSlsConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloseDomainSlsConfigResponse
     */
    public function closeDomainSlsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CloseDomainSlsConfigResponse::fromMap($this->doRequest('CloseDomainSlsConfig', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param OpenDomainSlsConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OpenDomainSlsConfigResponse
     */
    public function openDomainSlsConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return OpenDomainSlsConfigResponse::fromMap($this->doRequest('OpenDomainSlsConfig', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeSlsLogstoreInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSlsLogstoreInfoResponse
     */
    public function describeSlsLogstoreInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSlsLogstoreInfoResponse::fromMap($this->doRequest('DescribeSlsLogstoreInfo', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeSlsAuthStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsAuthStatusResponse
     */
    public function describeSlsAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSlsAuthStatusResponse::fromMap($this->doRequest('DescribeSlsAuthStatus', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeSlsOpenStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSlsOpenStatusResponse
     */
    public function describeSlsOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSlsOpenStatusResponse::fromMap($this->doRequest('DescribeSlsOpenStatus', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDomainSlsStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainSlsStatusResponse
     */
    public function describeDomainSlsStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainSlsStatusResponse::fromMap($this->doRequest('DescribeDomainSlsStatus', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigDomainAccessModeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigDomainAccessModeResponse
     */
    public function configDomainAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigDomainAccessModeResponse::fromMap($this->doRequest('ConfigDomainAccessMode', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ConfigDomainAccessModeRequest $request
     *
     * @return ConfigDomainAccessModeResponse
     */
    public function configDomainAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configDomainAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAccessModeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainAccessModeResponse
     */
    public function describeDomainAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainAccessModeResponse::fromMap($this->doRequest('DescribeDomainAccessMode', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAsyncTaskResponse
     */
    public function deleteAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAsyncTaskResponse::fromMap($this->doRequest('DeleteAsyncTask', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param CreateAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAsyncTaskResponse
     */
    public function createAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAsyncTaskResponse::fromMap($this->doRequest('CreateAsyncTask', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ListAsyncTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAsyncTaskResponse
     */
    public function listAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListAsyncTaskResponse::fromMap($this->doRequest('ListAsyncTask', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param EnableLayer7CCRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableLayer7CCRuleResponse
     */
    public function enableLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableLayer7CCRuleResponse::fromMap($this->doRequest('EnableLayer7CCRule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param EnableLayer7CCRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableLayer7CCResponse
     */
    public function enableLayer7CCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableLayer7CCResponse::fromMap($this->doRequest('EnableLayer7CC', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DisableLayer7CCRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableLayer7CCRuleResponse
     */
    public function disableLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableLayer7CCRuleResponse::fromMap($this->doRequest('DisableLayer7CCRule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DisableLayer7CCRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableLayer7CCResponse
     */
    public function disableLayer7CCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DisableLayer7CCResponse::fromMap($this->doRequest('DisableLayer7CC', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribleLayer7InstanceRelationsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribleLayer7InstanceRelationsResponse
     */
    public function describleLayer7InstanceRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribleLayer7InstanceRelationsResponse::fromMap($this->doRequest('DescribleLayer7InstanceRelations', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribleCertListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribleCertListResponse
     */
    public function describleCertListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribleCertListResponse::fromMap($this->doRequest('DescribleCertList', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeLayer7CCRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLayer7CCRulesResponse
     */
    public function describeLayer7CCRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLayer7CCRulesResponse::fromMap($this->doRequest('DescribeLayer7CCRules', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainsResponse::fromMap($this->doRequest('DescribeDomains', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainQpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDomainQpsResponse
     */
    public function describeDomainQpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainQpsResponse::fromMap($this->doRequest('DescribeDomainQps', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDomainQpsRequest $request
     *
     * @return DescribeDomainQpsResponse
     */
    public function describeDomainQps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAttackEventsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainAttackEventsResponse
     */
    public function describeDomainAttackEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainAttackEventsResponse::fromMap($this->doRequest('DescribeDomainAttackEvents', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDomainAttackEventsRequest $request
     *
     * @return DescribeDomainAttackEventsResponse
     */
    public function describeDomainAttackEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAttackEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackSourceCidrRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackSourceCidrResponse
     */
    public function describeBackSourceCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBackSourceCidrResponse::fromMap($this->doRequest('DescribeBackSourceCidr', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteLayer7RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLayer7RuleResponse
     */
    public function deleteLayer7RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLayer7RuleResponse::fromMap($this->doRequest('DeleteLayer7Rule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteLayer7CCRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLayer7CCRuleResponse
     */
    public function deleteLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLayer7CCRuleResponse::fromMap($this->doRequest('DeleteLayer7CCRule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param CreateLayer7RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLayer7RuleResponse
     */
    public function createLayer7RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLayer7RuleResponse::fromMap($this->doRequest('CreateLayer7Rule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer7RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigLayer7RuleResponse
     */
    public function configLayer7RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer7RuleResponse::fromMap($this->doRequest('ConfigLayer7Rule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer7CertRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigLayer7CertResponse
     */
    public function configLayer7CertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer7CertResponse::fromMap($this->doRequest('ConfigLayer7Cert', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer7CCTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigLayer7CCTemplateResponse
     */
    public function configLayer7CCTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer7CCTemplateResponse::fromMap($this->doRequest('ConfigLayer7CCTemplate', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer7CCRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConfigLayer7CCRuleResponse
     */
    public function configLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer7CCRuleResponse::fromMap($this->doRequest('ConfigLayer7CCRule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer7BlackWhiteListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ConfigLayer7BlackWhiteListResponse
     */
    public function configLayer7BlackWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer7BlackWhiteListResponse::fromMap($this->doRequest('ConfigLayer7BlackWhiteList', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param AddLayer7CCRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddLayer7CCRuleResponse
     */
    public function addLayer7CCRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddLayer7CCRuleResponse::fromMap($this->doRequest('AddLayer7CCRule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseInstanceResponse::fromMap($this->doRequest('ReleaseInstance', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ModifyInstanceRemarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceRemarkResponse
     */
    public function modifyInstanceRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceRemarkResponse::fromMap($this->doRequest('ModifyInstanceRemark', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ModifyElasticBandWidthRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyElasticBandWidthResponse
     */
    public function modifyElasticBandWidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyElasticBandWidthResponse::fromMap($this->doRequest('ModifyElasticBandWidth', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeOpEntitiesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOpEntitiesResponse
     */
    public function describeOpEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOpEntitiesResponse::fromMap($this->doRequest('DescribeOpEntities', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeLayer4RulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLayer4RulesResponse
     */
    public function describeLayer4RulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLayer4RulesResponse::fromMap($this->doRequest('DescribeLayer4Rules', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeLayer4RuleAttributesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeLayer4RuleAttributesResponse
     */
    public function describeLayer4RuleAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeLayer4RuleAttributesResponse::fromMap($this->doRequest('DescribeLayer4RuleAttributes', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeIpTrafficRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeIpTrafficResponse
     */
    public function describeIpTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpTrafficResponse::fromMap($this->doRequest('DescribeIpTraffic', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeInstanceStatisticsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public function describeInstanceStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceStatisticsResponse::fromMap($this->doRequest('DescribeInstanceStatistics', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeInstanceSpecsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceSpecsResponse
     */
    public function describeInstanceSpecsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceSpecsResponse::fromMap($this->doRequest('DescribeInstanceSpecs', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstancesResponse::fromMap($this->doRequest('DescribeInstances', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeInstanceDetailsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDetailsResponse
     */
    public function describeInstanceDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceDetailsResponse::fromMap($this->doRequest('DescribeInstanceDetails', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeHealthCheckStatusListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeHealthCheckStatusListResponse
     */
    public function describeHealthCheckStatusListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHealthCheckStatusListResponse::fromMap($this->doRequest('DescribeHealthCheckStatusList', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeHealthCheckListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeHealthCheckListResponse
     */
    public function describeHealthCheckListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHealthCheckListResponse::fromMap($this->doRequest('DescribeHealthCheckList', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeElasticBandwidthSpecRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public function describeElasticBandwidthSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeElasticBandwidthSpecResponse::fromMap($this->doRequest('DescribeElasticBandwidthSpec', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDDoSTrafficRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDDoSTrafficResponse
     */
    public function describeDDoSTrafficWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDDoSTrafficResponse::fromMap($this->doRequest('DescribeDDoSTraffic', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDDoSEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDDoSEventsResponse
     */
    public function describeDDoSEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDDoSEventsResponse::fromMap($this->doRequest('DescribeDDoSEvents', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLayer4RuleResponse
     */
    public function deleteLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteLayer4RuleResponse::fromMap($this->doRequest('DeleteLayer4Rule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param CreateLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLayer4RuleResponse
     */
    public function createLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateLayer4RuleResponse::fromMap($this->doRequest('CreateLayer4Rule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer4RuleAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConfigLayer4RuleAttributeResponse
     */
    public function configLayer4RuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer4RuleAttributeResponse::fromMap($this->doRequest('ConfigLayer4RuleAttribute', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigLayer4RuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfigLayer4RuleResponse
     */
    public function configLayer4RuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigLayer4RuleResponse::fromMap($this->doRequest('ConfigLayer4Rule', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ConfigHealthCheckRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConfigHealthCheckResponse
     */
    public function configHealthCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigHealthCheckResponse::fromMap($this->doRequest('ConfigHealthCheck', 'HTTPS', 'POST', '2017-12-28', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
}
