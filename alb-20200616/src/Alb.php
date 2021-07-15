<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddEntriesToAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddEntriesToAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddServersToServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AddServersToServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAclsWithListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAclsWithListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAdditionalCertificatesWithListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\AssociateAdditionalCertificatesWithListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateHealthCheckTemplateRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateHealthCheckTemplateResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateSecurityPolicyRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateSecurityPolicyResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteHealthCheckTemplatesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteHealthCheckTemplatesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRulesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteRulesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteSecurityPolicyRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteSecurityPolicyResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DeleteServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableDeletionProtectionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableDeletionProtectionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerAccessLogRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DisableLoadBalancerAccessLogResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAclsFromListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAclsFromListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\DissociateAdditionalCertificatesFromListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableDeletionProtectionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableDeletionProtectionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerAccessLogRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\EnableLoadBalancerAccessLogResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetHealthCheckTemplateAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetHealthCheckTemplateAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclEntriesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclEntriesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAsynJobsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAsynJobsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenerCertificatesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenerCertificatesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListSystemSecurityPoliciesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveEntriesFromAclRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveEntriesFromAclResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveServersFromServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\RemoveServersFromServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\StartListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\StartListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\StopListenerRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\StopListenerResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAclAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAclAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateHealthCheckTemplateAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateHealthCheckTemplateAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerEditionRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerEditionResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateSecurityPolicyAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateSecurityPolicyAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeResponse;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupServersAttributeRequest;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupServersAttributeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Alb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-beijing'     => 'alb.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou' => 'alb.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'    => 'alb.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'    => 'alb.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'    => 'alb.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'    => 'alb.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'alb.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'alb.ap-southeast-2.aliyuncs.com',
            'ap-southeast-5' => 'alb.ap-southeast-5.aliyuncs.com',
            'us-east-1'      => 'alb.us-east-1.aliyuncs.com',
            'eu-central-1'   => 'alb.eu-central-1.aliyuncs.com',
            'ap-south-1'     => 'alb.ap-south-1.aliyuncs.com',
            'ap-northeast-1' => 'alb.ap-northeast-1.aliyuncs.com',
            'cn-chengdu'     => 'alb.cn-chengdu.aliyuncs.com',
            'cn-wulanchabu'  => 'alb.cn-wulanchabu.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ListAclsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAclsResponse
     */
    public function listAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAclsResponse::fromMap($this->doRPCRequest('ListAcls', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAclsRequest $request
     *
     * @return ListAclsResponse
     */
    public function listAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclsWithOptions($request, $runtime);
    }

    /**
     * @param CreateHealthCheckTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateHealthCheckTemplateResponse
     */
    public function createHealthCheckTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateHealthCheckTemplateResponse::fromMap($this->doRPCRequest('CreateHealthCheckTemplate', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateHealthCheckTemplateRequest $request
     *
     * @return CreateHealthCheckTemplateResponse
     */
    public function createHealthCheckTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHealthCheckTemplateWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetListenerAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetListenerAttributeResponse::fromMap($this->doRPCRequest('GetListenerAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetListenerAttributeRequest $request
     *
     * @return GetListenerAttributeResponse
     */
    public function getListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateHealthCheckTemplateAttributeResponse
     */
    public function updateHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateHealthCheckTemplateAttributeResponse::fromMap($this->doRPCRequest('UpdateHealthCheckTemplateAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateHealthCheckTemplateAttributeRequest $request
     *
     * @return UpdateHealthCheckTemplateAttributeResponse
     */
    public function updateHealthCheckTemplateAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHealthCheckTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListServerGroupServersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServerGroupServersResponse::fromMap($this->doRPCRequest('ListServerGroupServers', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServerGroupServersRequest $request
     *
     * @return ListServerGroupServersResponse
     */
    public function listServerGroupServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupServersWithOptions($request, $runtime);
    }

    /**
     * @param RemoveEntriesFromAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveEntriesFromAclResponse::fromMap($this->doRPCRequest('RemoveEntriesFromAcl', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveEntriesFromAclRequest $request
     *
     * @return RemoveEntriesFromAclResponse
     */
    public function removeEntriesFromAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEntriesFromAclWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSecurityPolicyResponse::fromMap($this->doRPCRequest('DeleteSecurityPolicy', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSecurityPolicyRequest $request
     *
     * @return DeleteSecurityPolicyResponse
     */
    public function deleteSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DisableLoadBalancerAccessLogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DisableLoadBalancerAccessLogResponse
     */
    public function disableLoadBalancerAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableLoadBalancerAccessLogResponse::fromMap($this->doRPCRequest('DisableLoadBalancerAccessLog', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableLoadBalancerAccessLogRequest $request
     *
     * @return DisableLoadBalancerAccessLogResponse
     */
    public function disableLoadBalancerAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableLoadBalancerAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param ListServerGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServerGroupsResponse::fromMap($this->doRPCRequest('ListServerGroups', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServerGroupsRequest $request
     *
     * @return ListServerGroupsResponse
     */
    public function listServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param EnableDeletionProtectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableDeletionProtectionResponse
     */
    public function enableDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableDeletionProtectionResponse::fromMap($this->doRPCRequest('EnableDeletionProtection', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableDeletionProtectionRequest $request
     *
     * @return EnableDeletionProtectionResponse
     */
    public function enableDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateListenerAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateListenerAttributeResponse::fromMap($this->doRPCRequest('UpdateListenerAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateListenerAttributeRequest $request
     *
     * @return UpdateListenerAttributeResponse
     */
    public function updateListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLoadBalancerResponse::fromMap($this->doRPCRequest('CreateLoadBalancer', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteHealthCheckTemplatesResponse
     */
    public function deleteHealthCheckTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHealthCheckTemplatesResponse::fromMap($this->doRPCRequest('DeleteHealthCheckTemplates', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHealthCheckTemplatesRequest $request
     *
     * @return DeleteHealthCheckTemplatesResponse
     */
    public function deleteHealthCheckTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHealthCheckTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServerGroupAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServerGroupAttributeResponse::fromMap($this->doRPCRequest('UpdateServerGroupAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServerGroupAttributeRequest $request
     *
     * @return UpdateServerGroupAttributeResponse
     */
    public function updateServerGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param CreateServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServerGroupResponse::fromMap($this->doRPCRequest('CreateServerGroup', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServerGroupRequest $request
     *
     * @return CreateServerGroupResponse
     */
    public function createServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServerGroupWithOptions($request, $runtime);
    }

    /**
     * @param AssociateAclsWithListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateAclsWithListenerResponse::fromMap($this->doRPCRequest('AssociateAclsWithListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateAclsWithListenerRequest $request
     *
     * @return AssociateAclsWithListenerResponse
     */
    public function associateAclsWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAclsWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRulesResponse::fromMap($this->doRPCRequest('ListRules', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeZonesResponse
     */
    public function describeZones()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($runtime);
    }

    /**
     * @param DeleteServerGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServerGroupResponse::fromMap($this->doRPCRequest('DeleteServerGroup', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServerGroupRequest $request
     *
     * @return DeleteServerGroupResponse
     */
    public function deleteServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServerGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddServersToServerGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddServersToServerGroupResponse::fromMap($this->doRPCRequest('AddServersToServerGroup', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddServersToServerGroupRequest $request
     *
     * @return AddServersToServerGroupResponse
     */
    public function addServersToServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServersToServerGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLoadBalancerResponse::fromMap($this->doRPCRequest('DeleteLoadBalancer', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLoadBalancerRequest $request
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateListenerLogConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateListenerLogConfigResponse::fromMap($this->doRPCRequest('UpdateListenerLogConfig', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateListenerLogConfigRequest $request
     *
     * @return UpdateListenerLogConfigResponse
     */
    public function updateListenerLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListenerLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnTagResourcesResponse::fromMap($this->doRPCRequest('UnTagResources', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPoliciesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListSystemSecurityPoliciesResponse::fromMap($this->doRPCRequest('ListSystemSecurityPolicies', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListSystemSecurityPoliciesResponse
     */
    public function listSystemSecurityPolicies()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemSecurityPoliciesWithOptions($runtime);
    }

    /**
     * @param AddEntriesToAclRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddEntriesToAclResponse::fromMap($this->doRPCRequest('AddEntriesToAcl', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddEntriesToAclRequest $request
     *
     * @return AddEntriesToAclResponse
     */
    public function addEntriesToAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEntriesToAclWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAclResponse
     */
    public function deleteAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAclResponse::fromMap($this->doRPCRequest('DeleteAcl', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAclRequest $request
     *
     * @return DeleteAclResponse
     */
    public function deleteAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAclWithOptions($request, $runtime);
    }

    /**
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateAdditionalCertificatesFromListenerResponse::fromMap($this->doRPCRequest('DissociateAdditionalCertificatesFromListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DissociateAdditionalCertificatesFromListenerRequest $request
     *
     * @return DissociateAdditionalCertificatesFromListenerResponse
     */
    public function dissociateAdditionalCertificatesFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAdditionalCertificatesFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLoadBalancerEditionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLoadBalancerEditionResponse::fromMap($this->doRPCRequest('UpdateLoadBalancerEdition', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLoadBalancerEditionRequest $request
     *
     * @return UpdateLoadBalancerEditionResponse
     */
    public function updateLoadBalancerEdition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerEditionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRulesAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRulesAttributeResponse
     */
    public function updateRulesAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRulesAttributeResponse::fromMap($this->doRPCRequest('UpdateRulesAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRulesAttributeRequest $request
     *
     * @return UpdateRulesAttributeResponse
     */
    public function updateRulesAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRulesAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListListenersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListListenersResponse
     */
    public function listListenersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListListenersResponse::fromMap($this->doRPCRequest('ListListeners', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListListenersRequest $request
     *
     * @return ListListenersResponse
     */
    public function listListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersWithOptions($request, $runtime);
    }

    /**
     * @param ListAclRelationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAclRelationsResponse
     */
    public function listAclRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAclRelationsResponse::fromMap($this->doRPCRequest('ListAclRelations', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAclRelationsRequest $request
     *
     * @return ListAclRelationsResponse
     */
    public function listAclRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclRelationsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteRulesResponse
     */
    public function deleteRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRulesResponse::fromMap($this->doRPCRequest('DeleteRules', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRulesRequest $request
     *
     * @return DeleteRulesResponse
     */
    public function deleteRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteListenerResponse
     */
    public function deleteListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteListenerResponse::fromMap($this->doRPCRequest('DeleteListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteListenerRequest $request
     *
     * @return DeleteListenerResponse
     */
    public function deleteListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListenerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssociateAdditionalCertificatesWithListenerResponse::fromMap($this->doRPCRequest('AssociateAdditionalCertificatesWithListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssociateAdditionalCertificatesWithListenerRequest $request
     *
     * @return AssociateAdditionalCertificatesWithListenerResponse
     */
    public function associateAdditionalCertificatesWithListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateAdditionalCertificatesWithListenerWithOptions($request, $runtime);
    }

    /**
     * @param ListHealthCheckTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHealthCheckTemplatesResponse
     */
    public function listHealthCheckTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHealthCheckTemplatesResponse::fromMap($this->doRPCRequest('ListHealthCheckTemplates', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHealthCheckTemplatesRequest $request
     *
     * @return ListHealthCheckTemplatesResponse
     */
    public function listHealthCheckTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHealthCheckTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param GetLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLoadBalancerAttributeResponse::fromMap($this->doRPCRequest('GetLoadBalancerAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLoadBalancerAttributeRequest $request
     *
     * @return GetLoadBalancerAttributeResponse
     */
    public function getLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListLoadBalancersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLoadBalancersResponse::fromMap($this->doRPCRequest('ListLoadBalancers', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLoadBalancersRequest $request
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @param EnableLoadBalancerAccessLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnableLoadBalancerAccessLogResponse
     */
    public function enableLoadBalancerAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableLoadBalancerAccessLogResponse::fromMap($this->doRPCRequest('EnableLoadBalancerAccessLog', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableLoadBalancerAccessLogRequest $request
     *
     * @return EnableLoadBalancerAccessLogResponse
     */
    public function enableLoadBalancerAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableLoadBalancerAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param DissociateAclsFromListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DissociateAclsFromListenerResponse::fromMap($this->doRPCRequest('DissociateAclsFromListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DissociateAclsFromListenerRequest $request
     *
     * @return DissociateAclsFromListenerResponse
     */
    public function dissociateAclsFromListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateAclsFromListenerWithOptions($request, $runtime);
    }

    /**
     * @param ListListenerCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListListenerCertificatesResponse::fromMap($this->doRPCRequest('ListListenerCertificates', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListListenerCertificatesRequest $request
     *
     * @return ListListenerCertificatesResponse
     */
    public function listListenerCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenerCertificatesWithOptions($request, $runtime);
    }

    /**
     * @param CreateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAclResponse
     */
    public function createAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAclResponse::fromMap($this->doRPCRequest('CreateAcl', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAclRequest $request
     *
     * @return CreateAclResponse
     */
    public function createAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAclWithOptions($request, $runtime);
    }

    /**
     * @param GetHealthCheckTemplateAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetHealthCheckTemplateAttributeResponse
     */
    public function getHealthCheckTemplateAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHealthCheckTemplateAttributeResponse::fromMap($this->doRPCRequest('GetHealthCheckTemplateAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHealthCheckTemplateAttributeRequest $request
     *
     * @return GetHealthCheckTemplateAttributeResponse
     */
    public function getHealthCheckTemplateAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHealthCheckTemplateAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSecurityPolicyAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSecurityPolicyAttributeResponse::fromMap($this->doRPCRequest('UpdateSecurityPolicyAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSecurityPolicyAttributeRequest $request
     *
     * @return UpdateSecurityPolicyAttributeResponse
     */
    public function updateSecurityPolicyAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecurityPolicyAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListSecurityPolicyRelationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSecurityPolicyRelationsResponse
     */
    public function listSecurityPolicyRelationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecurityPolicyRelationsResponse::fromMap($this->doRPCRequest('ListSecurityPolicyRelations', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSecurityPolicyRelationsRequest $request
     *
     * @return ListSecurityPolicyRelationsResponse
     */
    public function listSecurityPolicyRelations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityPolicyRelationsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLoadBalancerAttributeResponse::fromMap($this->doRPCRequest('UpdateLoadBalancerAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLoadBalancerAttributeRequest $request
     *
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListAsynJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAsynJobsResponse
     */
    public function listAsynJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAsynJobsResponse::fromMap($this->doRPCRequest('ListAsynJobs', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAsynJobsRequest $request
     *
     * @return ListAsynJobsResponse
     */
    public function listAsynJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsynJobsWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param RemoveServersFromServerGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveServersFromServerGroupResponse::fromMap($this->doRPCRequest('RemoveServersFromServerGroup', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveServersFromServerGroupRequest $request
     *
     * @return RemoveServersFromServerGroupResponse
     */
    public function removeServersFromServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeServersFromServerGroupWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceServersInServerGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceServersInServerGroupResponse::fromMap($this->doRPCRequest('ReplaceServersInServerGroup', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReplaceServersInServerGroupRequest $request
     *
     * @return ReplaceServersInServerGroupResponse
     */
    public function replaceServersInServerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceServersInServerGroupWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateSecurityPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSecurityPolicyResponse::fromMap($this->doRPCRequest('CreateSecurityPolicy', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSecurityPolicyRequest $request
     *
     * @return CreateSecurityPolicyResponse
     */
    public function createSecurityPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityPolicyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRuleAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateRuleAttributeResponse
     */
    public function updateRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRuleAttributeResponse::fromMap($this->doRPCRequest('UpdateRuleAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRuleAttributeRequest $request
     *
     * @return UpdateRuleAttributeResponse
     */
    public function updateRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ListSecurityPoliciesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListSecurityPoliciesResponse
     */
    public function listSecurityPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecurityPoliciesResponse::fromMap($this->doRPCRequest('ListSecurityPolicies', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSecurityPoliciesRequest $request
     *
     * @return ListSecurityPoliciesResponse
     */
    public function listSecurityPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAclAttributeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAclAttributeResponse::fromMap($this->doRPCRequest('UpdateAclAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAclAttributeRequest $request
     *
     * @return UpdateAclAttributeResponse
     */
    public function updateAclAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DisableDeletionProtectionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableDeletionProtectionResponse
     */
    public function disableDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDeletionProtectionResponse::fromMap($this->doRPCRequest('DisableDeletionProtection', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableDeletionProtectionRequest $request
     *
     * @return DisableDeletionProtectionResponse
     */
    public function disableDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @param StopListenerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopListenerResponse
     */
    public function stopListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopListenerResponse::fromMap($this->doRPCRequest('StopListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopListenerRequest $request
     *
     * @return StopListenerResponse
     */
    public function stopListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateListenerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateListenerResponse
     */
    public function createListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateListenerResponse::fromMap($this->doRPCRequest('CreateListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateListenerRequest $request
     *
     * @return CreateListenerResponse
     */
    public function createListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListenerWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateServerGroupServersAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServerGroupServersAttributeResponse::fromMap($this->doRPCRequest('UpdateServerGroupServersAttribute', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServerGroupServersAttributeRequest $request
     *
     * @return UpdateServerGroupServersAttributeResponse
     */
    public function updateServerGroupServersAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerGroupServersAttributeWithOptions($request, $runtime);
    }

    /**
     * @param StartListenerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartListenerResponse
     */
    public function startListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartListenerResponse::fromMap($this->doRPCRequest('StartListener', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartListenerRequest $request
     *
     * @return StartListenerResponse
     */
    public function startListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateRulesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRulesResponse
     */
    public function createRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRulesResponse::fromMap($this->doRPCRequest('CreateRules', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRulesRequest $request
     *
     * @return CreateRulesResponse
     */
    public function createRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListAclEntriesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAclEntriesResponse
     */
    public function listAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAclEntriesResponse::fromMap($this->doRPCRequest('ListAclEntries', '2020-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAclEntriesRequest $request
     *
     * @return ListAclEntriesResponse
     */
    public function listAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAclEntriesWithOptions($request, $runtime);
    }
}
