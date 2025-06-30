<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddCustomLineRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddCustomLineResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverEndpointRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverEndpointResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddResolverRuleResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddUserVpcAuthorizationRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddUserVpcAuthorizationResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneRecordRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneRecordResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindResolverRuleVpcRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindResolverRuleVpcResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\ChangeZoneDnsGroupRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\ChangeZoneDnsGroupResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\CheckZoneNameRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\CheckZoneNameResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteCustomLineRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteCustomLineResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteResolverEndpointRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteResolverEndpointResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteResolverRuleRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteResolverRuleResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteUserVpcAuthorizationRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteUserVpcAuthorizationResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteZoneRecordRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteZoneRecordResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteZoneRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DeleteZoneResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeChangeLogsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLineInfoRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLineInfoResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverAvailableZonesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverAvailableZonesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRuleRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRuleResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserServiceStatusRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserServiceStatusResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserVpcAuthorizationsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserVpcAuthorizationsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SearchCustomLinesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SearchCustomLinesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetProxyPatternRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetProxyPatternResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetZoneRecordStatusRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetZoneRecordStatusResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateCustomLineRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateCustomLineResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateRecordRemarkRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateRecordRemarkResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverEndpointRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverEndpointResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverRuleRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverRuleResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateSyncEcsHostTaskRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateSyncEcsHostTaskResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRecordRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRecordResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRemarkRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRemarkResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Pvtz extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pvtz', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a custom line.
     *
     * @param request - AddCustomLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomLineResponse
     *
     * @param AddCustomLineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddCustomLineResponse
     */
    public function addCustomLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnsCategory) {
            @$query['DnsCategory'] = $request->dnsCategory;
        }

        if (null !== $request->ipv4s) {
            @$query['Ipv4s'] = $request->ipv4s;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->shareScope) {
            @$query['ShareScope'] = $request->shareScope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCustomLine',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom line.
     *
     * @param request - AddCustomLineRequest
     *
     * @returns AddCustomLineResponse
     *
     * @param AddCustomLineRequest $request
     *
     * @return AddCustomLineResponse
     */
    public function addCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomLineWithOptions($request, $runtime);
    }

    /**
     * Creates an endpoint.
     *
     * @param request - AddResolverEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddResolverEndpointResponse
     *
     * @param AddResolverEndpointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddResolverEndpointResponse
     */
    public function addResolverEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipConfig) {
            @$query['IpConfig'] = $request->ipConfig;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcRegionId) {
            @$query['VpcRegionId'] = $request->vpcRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddResolverEndpoint',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an endpoint.
     *
     * @param request - AddResolverEndpointRequest
     *
     * @returns AddResolverEndpointResponse
     *
     * @param AddResolverEndpointRequest $request
     *
     * @return AddResolverEndpointResponse
     */
    public function addResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * Creates a forwarding rule.
     *
     * @remarks
     * #### [](#)**Precautions**
     * If a virtual private cloud (VPC) serves as both an inbound VPC and an outbound VPC, the IP addresses of external Domain Name System (DNS) servers cannot be the same as the IP addresses of the inbound endpoint in the VPC. The IP addresses of the external DNS servers are specified in the forwarding rule associated with the outbound endpoint in the same VPC. If the IP addresses are the same, the DNS requests sent from the IP addresses of the inbound endpoint are returned to the VPC. This results in resolution failures.
     *
     * @param request - AddResolverRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddResolverRuleResponse
     *
     * @param AddResolverRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddResolverRuleResponse
     */
    public function addResolverRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->edgeDnsClusters) {
            @$query['EdgeDnsClusters'] = $request->edgeDnsClusters;
        }

        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->forwardIp) {
            @$query['ForwardIp'] = $request->forwardIp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vpcs) {
            @$query['Vpcs'] = $request->vpcs;
        }

        if (null !== $request->zoneName) {
            @$query['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddResolverRule',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a forwarding rule.
     *
     * @remarks
     * #### [](#)**Precautions**
     * If a virtual private cloud (VPC) serves as both an inbound VPC and an outbound VPC, the IP addresses of external Domain Name System (DNS) servers cannot be the same as the IP addresses of the inbound endpoint in the VPC. The IP addresses of the external DNS servers are specified in the forwarding rule associated with the outbound endpoint in the same VPC. If the IP addresses are the same, the DNS requests sent from the IP addresses of the inbound endpoint are returned to the VPC. This results in resolution failures.
     *
     * @param request - AddResolverRuleRequest
     *
     * @returns AddResolverRuleResponse
     *
     * @param AddResolverRuleRequest $request
     *
     * @return AddResolverRuleResponse
     */
    public function addResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addResolverRuleWithOptions($request, $runtime);
    }

    /**
     * Adds another account to associate one or more virtual private clouds (VPCs) of the current account with a private zone.
     *
     * @remarks
     * #### **Limits**
     * *   You can set an effective scope across accounts only by using an Alibaba Cloud account instead of a RAM user. You can set an effective scope across accounts registered on the same site. For example, you can perform the operation across accounts that are both registered on the Alibaba Cloud China site or Alibaba Cloud international site. You cannot set an effective scope across accounts registered on different sites. For example, you cannot perform the operation across accounts that are separately registered on the Alibaba Cloud China site and Alibaba Cloud international site.
     * *   No API operation is provided for sending the verification codes that are required for authorization.
     * #### **Precautions**
     * If you set an effective scope across accounts, bills are settled within the account that is used to perform routine management on built-in authoritative zones.
     *
     * @param request - AddUserVpcAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserVpcAuthorizationResponse
     *
     * @param AddUserVpcAuthorizationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddUserVpcAuthorizationResponse
     */
    public function addUserVpcAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authChannel) {
            @$query['AuthChannel'] = $request->authChannel;
        }

        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->authorizedUserId) {
            @$query['AuthorizedUserId'] = $request->authorizedUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserVpcAuthorization',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserVpcAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds another account to associate one or more virtual private clouds (VPCs) of the current account with a private zone.
     *
     * @remarks
     * #### **Limits**
     * *   You can set an effective scope across accounts only by using an Alibaba Cloud account instead of a RAM user. You can set an effective scope across accounts registered on the same site. For example, you can perform the operation across accounts that are both registered on the Alibaba Cloud China site or Alibaba Cloud international site. You cannot set an effective scope across accounts registered on different sites. For example, you cannot perform the operation across accounts that are separately registered on the Alibaba Cloud China site and Alibaba Cloud international site.
     * *   No API operation is provided for sending the verification codes that are required for authorization.
     * #### **Precautions**
     * If you set an effective scope across accounts, bills are settled within the account that is used to perform routine management on built-in authoritative zones.
     *
     * @param request - AddUserVpcAuthorizationRequest
     *
     * @returns AddUserVpcAuthorizationResponse
     *
     * @param AddUserVpcAuthorizationRequest $request
     *
     * @return AddUserVpcAuthorizationResponse
     */
    public function addUserVpcAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserVpcAuthorizationWithOptions($request, $runtime);
    }

    /**
     * Creates a built-in authoritative zone in the regular module or acceleration module.
     *
     * @param request - AddZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddZoneResponse
     *
     * @param AddZoneRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddZoneResponse
     */
    public function addZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dnsGroup) {
            @$query['DnsGroup'] = $request->dnsGroup;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->proxyPattern) {
            @$query['ProxyPattern'] = $request->proxyPattern;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zoneName) {
            @$query['ZoneName'] = $request->zoneName;
        }

        if (null !== $request->zoneTag) {
            @$query['ZoneTag'] = $request->zoneTag;
        }

        if (null !== $request->zoneType) {
            @$query['ZoneType'] = $request->zoneType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddZone',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a built-in authoritative zone in the regular module or acceleration module.
     *
     * @param request - AddZoneRequest
     *
     * @returns AddZoneResponse
     *
     * @param AddZoneRequest $request
     *
     * @return AddZoneResponse
     */
    public function addZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addZoneWithOptions($request, $runtime);
    }

    /**
     * Adds a Domain Name System (DNS) record for a built-in authoritative zone. Within the effective scope, the intranet DNS records rather than the Internet DNS records take effect for the zone.
     *
     * @param request - AddZoneRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddZoneRecordResponse
     *
     * @param AddZoneRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddZoneRecordResponse
     */
    public function addZoneRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddZoneRecord',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Domain Name System (DNS) record for a built-in authoritative zone. Within the effective scope, the intranet DNS records rather than the Internet DNS records take effect for the zone.
     *
     * @param request - AddZoneRecordRequest
     *
     * @returns AddZoneRecordResponse
     *
     * @param AddZoneRecordRequest $request
     *
     * @return AddZoneRecordResponse
     */
    public function addZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addZoneRecordWithOptions($request, $runtime);
    }

    /**
     * Associates a forwarding rule with virtual private clouds (VPCs).
     *
     * @param request - BindResolverRuleVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindResolverRuleVpcResponse
     *
     * @param BindResolverRuleVpcRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindResolverRuleVpcResponse
     */
    public function bindResolverRuleVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->vpc) {
            @$query['Vpc'] = $request->vpc;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindResolverRuleVpc',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindResolverRuleVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a forwarding rule with virtual private clouds (VPCs).
     *
     * @param request - BindResolverRuleVpcRequest
     *
     * @returns BindResolverRuleVpcResponse
     *
     * @param BindResolverRuleVpcRequest $request
     *
     * @return BindResolverRuleVpcResponse
     */
    public function bindResolverRuleVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindResolverRuleVpcWithOptions($request, $runtime);
    }

    /**
     * Associates or dissociates virtual private clouds (VPCs) from a zone to set the effective scope of the zone.
     *
     * @remarks
     * ##### [](#)Precautions:
     * We recommend that you set the effective scope of a zone after you configure all Domain Name System (DNS) records. If you set an effective scope before you configure DNS records, the DNS resolution for the zone within the effective scope will fail unless you enable the recursive resolution proxy for subdomain names.
     *
     * @param request - BindZoneVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindZoneVpcResponse
     *
     * @param BindZoneVpcRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindZoneVpcResponse
     */
    public function bindZoneVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->vpcs) {
            @$query['Vpcs'] = $request->vpcs;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindZoneVpc',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindZoneVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates or dissociates virtual private clouds (VPCs) from a zone to set the effective scope of the zone.
     *
     * @remarks
     * ##### [](#)Precautions:
     * We recommend that you set the effective scope of a zone after you configure all Domain Name System (DNS) records. If you set an effective scope before you configure DNS records, the DNS resolution for the zone within the effective scope will fail unless you enable the recursive resolution proxy for subdomain names.
     *
     * @param request - BindZoneVpcRequest
     *
     * @returns BindZoneVpcResponse
     *
     * @param BindZoneVpcRequest $request
     *
     * @return BindZoneVpcResponse
     */
    public function bindZoneVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindZoneVpcWithOptions($request, $runtime);
    }

    /**
     * Changes the logical location of a zone.
     *
     * @param request - ChangeZoneDnsGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeZoneDnsGroupResponse
     *
     * @param ChangeZoneDnsGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeZoneDnsGroupResponse
     */
    public function changeZoneDnsGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dnsGroup) {
            @$query['DnsGroup'] = $request->dnsGroup;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeZoneDnsGroup',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeZoneDnsGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the logical location of a zone.
     *
     * @param request - ChangeZoneDnsGroupRequest
     *
     * @returns ChangeZoneDnsGroupResponse
     *
     * @param ChangeZoneDnsGroupRequest $request
     *
     * @return ChangeZoneDnsGroupResponse
     */
    public function changeZoneDnsGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeZoneDnsGroupWithOptions($request, $runtime);
    }

    /**
     * Checks whether a zone name can be added based on a rule.
     *
     * @param request - CheckZoneNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckZoneNameResponse
     *
     * @param CheckZoneNameRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckZoneNameResponse
     */
    public function checkZoneNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zoneName) {
            @$query['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckZoneName',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckZoneNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a zone name can be added based on a rule.
     *
     * @param request - CheckZoneNameRequest
     *
     * @returns CheckZoneNameResponse
     *
     * @param CheckZoneNameRequest $request
     *
     * @return CheckZoneNameResponse
     */
    public function checkZoneName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkZoneNameWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom line.
     *
     * @param request - DeleteCustomLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomLineResponse
     *
     * @param DeleteCustomLineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCustomLineResponse
     */
    public function deleteCustomLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineId) {
            @$query['LineId'] = $request->lineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomLine',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom line.
     *
     * @param request - DeleteCustomLineRequest
     *
     * @returns DeleteCustomLineResponse
     *
     * @param DeleteCustomLineRequest $request
     *
     * @return DeleteCustomLineResponse
     */
    public function deleteCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomLineWithOptions($request, $runtime);
    }

    /**
     * Deletes an endpoint based on the endpoint ID.
     *
     * @param request - DeleteResolverEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResolverEndpointResponse
     *
     * @param DeleteResolverEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteResolverEndpointResponse
     */
    public function deleteResolverEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResolverEndpoint',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an endpoint based on the endpoint ID.
     *
     * @param request - DeleteResolverEndpointRequest
     *
     * @returns DeleteResolverEndpointResponse
     *
     * @param DeleteResolverEndpointRequest $request
     *
     * @return DeleteResolverEndpointResponse
     */
    public function deleteResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes a forwarding rule based on the rule ID.
     *
     * @param request - DeleteResolverRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResolverRuleResponse
     *
     * @param DeleteResolverRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResolverRuleResponse
     */
    public function deleteResolverRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResolverRule',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a forwarding rule based on the rule ID.
     *
     * @param request - DeleteResolverRuleRequest
     *
     * @returns DeleteResolverRuleResponse
     *
     * @param DeleteResolverRuleRequest $request
     *
     * @return DeleteResolverRuleResponse
     */
    public function deleteResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResolverRuleWithOptions($request, $runtime);
    }

    /**
     * Removes an account from the central management of private Domain Name System (DNS) resolution based on the account ID and authorization type.
     *
     * @param request - DeleteUserVpcAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserVpcAuthorizationResponse
     *
     * @param DeleteUserVpcAuthorizationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteUserVpcAuthorizationResponse
     */
    public function deleteUserVpcAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->authorizedUserId) {
            @$query['AuthorizedUserId'] = $request->authorizedUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserVpcAuthorization',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserVpcAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an account from the central management of private Domain Name System (DNS) resolution based on the account ID and authorization type.
     *
     * @param request - DeleteUserVpcAuthorizationRequest
     *
     * @returns DeleteUserVpcAuthorizationResponse
     *
     * @param DeleteUserVpcAuthorizationRequest $request
     *
     * @return DeleteUserVpcAuthorizationResponse
     */
    public function deleteUserVpcAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserVpcAuthorizationWithOptions($request, $runtime);
    }

    /**
     * Deletes an idle built-in authoritative zone.
     *
     * @remarks
     * #### [](#)Precautions
     * If you want to delete a built-in authoritative zone whose effective scope is configured, you must disassociate the zone from the effective scope first.
     *
     * @param request - DeleteZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteZoneResponse
     *
     * @param DeleteZoneRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteZoneResponse
     */
    public function deleteZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteZone',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an idle built-in authoritative zone.
     *
     * @remarks
     * #### [](#)Precautions
     * If you want to delete a built-in authoritative zone whose effective scope is configured, you must disassociate the zone from the effective scope first.
     *
     * @param request - DeleteZoneRequest
     *
     * @returns DeleteZoneResponse
     *
     * @param DeleteZoneRequest $request
     *
     * @return DeleteZoneResponse
     */
    public function deleteZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZoneWithOptions($request, $runtime);
    }

    /**
     * Deletes a Domain Name System (DNS) record based on the ID of the DNS record.
     *
     * @remarks
     * #### **Precautions**
     * Deleted DNS records cannot be restored. Exercise caution when you perform this operation.
     *
     * @param request - DeleteZoneRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteZoneRecordResponse
     *
     * @param DeleteZoneRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteZoneRecordResponse
     */
    public function deleteZoneRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteZoneRecord',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Domain Name System (DNS) record based on the ID of the DNS record.
     *
     * @remarks
     * #### **Precautions**
     * Deleted DNS records cannot be restored. Exercise caution when you perform this operation.
     *
     * @param request - DeleteZoneRecordRequest
     *
     * @returns DeleteZoneRecordResponse
     *
     * @param DeleteZoneRecordRequest $request
     *
     * @return DeleteZoneRecordResponse
     */
    public function deleteZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZoneRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the operation logs of Private DNS. Operation logs record operations in modules such as the built-in authoritative module, cache module, forward module, and service address module and record the queries for Domain Name System (DNS) records. You can query operation logs by operation or operation content.
     *
     * @remarks
     * #### **Precautions**
     * You can query the operation logs of Private DNS that are generated within the last six months.
     *
     * @param request - DescribeChangeLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChangeLogsResponse
     *
     * @param DescribeChangeLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeChangeLogsResponse
     */
    public function describeChangeLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChangeLogs',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChangeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of Private DNS. Operation logs record operations in modules such as the built-in authoritative module, cache module, forward module, and service address module and record the queries for Domain Name System (DNS) records. You can query operation logs by operation or operation content.
     *
     * @remarks
     * #### **Precautions**
     * You can query the operation logs of Private DNS that are generated within the last six months.
     *
     * @param request - DescribeChangeLogsRequest
     *
     * @returns DescribeChangeLogsResponse
     *
     * @param DescribeChangeLogsRequest $request
     *
     * @return DescribeChangeLogsResponse
     */
    public function describeChangeLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChangeLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a custom line.
     *
     * @param request - DescribeCustomLineInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomLineInfoResponse
     *
     * @param DescribeCustomLineInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCustomLineInfoResponse
     */
    public function describeCustomLineInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineId) {
            @$query['LineId'] = $request->lineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomLineInfo',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomLineInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a custom line.
     *
     * @param request - DescribeCustomLineInfoRequest
     *
     * @returns DescribeCustomLineInfoResponse
     *
     * @param DescribeCustomLineInfoRequest $request
     *
     * @return DescribeCustomLineInfoResponse
     */
    public function describeCustomLineInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLineInfoWithOptions($request, $runtime);
    }

    /**
     * Queries a list of custom lines.
     *
     * @param request - DescribeCustomLinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomLinesResponse
     *
     * @param DescribeCustomLinesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCustomLinesResponse
     */
    public function describeCustomLinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomLines',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of custom lines.
     *
     * @param request - DescribeCustomLinesRequest
     *
     * @returns DescribeCustomLinesResponse
     *
     * @param DescribeCustomLinesRequest $request
     *
     * @return DescribeCustomLinesResponse
     */
    public function describeCustomLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLinesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of regions for selection based on the scenario and virtual private cloud (VPC) type.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->authorizedUserId) {
            @$query['AuthorizedUserId'] = $request->authorizedUserId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->vpcType) {
            @$query['VpcType'] = $request->vpcType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of regions for selection based on the scenario and virtual private cloud (VPC) type.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Queries the information about Domain Name System (DNS) requests based on conditions such as the time range.
     *
     * @param request - DescribeRequestGraphRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRequestGraphResponse
     *
     * @param DescribeRequestGraphRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRequestGraphResponse
     */
    public function describeRequestGraphWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRequestGraph',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRequestGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Domain Name System (DNS) requests based on conditions such as the time range.
     *
     * @param request - DescribeRequestGraphRequest
     *
     * @returns DescribeRequestGraphResponse
     *
     * @param DescribeRequestGraphRequest $request
     *
     * @return DescribeRequestGraphResponse
     */
    public function describeRequestGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestGraphWithOptions($request, $runtime);
    }

    /**
     * Queries a list of available zones.
     *
     * @param request - DescribeResolverAvailableZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResolverAvailableZonesResponse
     *
     * @param DescribeResolverAvailableZonesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResolverAvailableZonesResponse
     */
    public function describeResolverAvailableZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->azId) {
            @$query['AzId'] = $request->azId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resolverRegionId) {
            @$query['ResolverRegionId'] = $request->resolverRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResolverAvailableZones',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResolverAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of available zones.
     *
     * @param request - DescribeResolverAvailableZonesRequest
     *
     * @returns DescribeResolverAvailableZonesResponse
     *
     * @param DescribeResolverAvailableZonesRequest $request
     *
     * @return DescribeResolverAvailableZonesResponse
     */
    public function describeResolverAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an endpoint based on the endpoint ID.
     *
     * @param request - DescribeResolverEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResolverEndpointResponse
     *
     * @param DescribeResolverEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeResolverEndpointResponse
     */
    public function describeResolverEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResolverEndpoint',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an endpoint based on the endpoint ID.
     *
     * @param request - DescribeResolverEndpointRequest
     *
     * @returns DescribeResolverEndpointResponse
     *
     * @param DescribeResolverEndpointRequest $request
     *
     * @return DescribeResolverEndpointResponse
     */
    public function describeResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries a list of endpoints.
     *
     * @param request - DescribeResolverEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResolverEndpointsResponse
     *
     * @param DescribeResolverEndpointsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResolverEndpointsResponse
     */
    public function describeResolverEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->vpcRegionId) {
            @$query['VpcRegionId'] = $request->vpcRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResolverEndpoints',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResolverEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of endpoints.
     *
     * @param request - DescribeResolverEndpointsRequest
     *
     * @returns DescribeResolverEndpointsResponse
     *
     * @param DescribeResolverEndpointsRequest $request
     *
     * @return DescribeResolverEndpointsResponse
     */
    public function describeResolverEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a forwarding rule based on the ID of the forwarding rule.
     *
     * @param request - DescribeResolverRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResolverRuleResponse
     *
     * @param DescribeResolverRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeResolverRuleResponse
     */
    public function describeResolverRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResolverRule',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a forwarding rule based on the ID of the forwarding rule.
     *
     * @param request - DescribeResolverRuleRequest
     *
     * @returns DescribeResolverRuleResponse
     *
     * @param DescribeResolverRuleRequest $request
     *
     * @return DescribeResolverRuleResponse
     */
    public function describeResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverRuleWithOptions($request, $runtime);
    }

    /**
     * Queries a list of forwarding rules.
     *
     * @param request - DescribeResolverRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResolverRulesResponse
     *
     * @param DescribeResolverRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResolverRulesResponse
     */
    public function describeResolverRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->needDetailAttributes) {
            @$query['NeedDetailAttributes'] = $request->needDetailAttributes;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResolverRules',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResolverRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of forwarding rules.
     *
     * @param request - DescribeResolverRulesRequest
     *
     * @returns DescribeResolverRulesResponse
     *
     * @param DescribeResolverRulesRequest $request
     *
     * @return DescribeResolverRulesResponse
     */
    public function describeResolverRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on Domain Name System (DNS) requests received on the previous day, including the top three zones and virtual private clouds (VPCs) with the largest number of DNS requests.
     *
     * @param request - DescribeStatisticSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStatisticSummaryResponse
     *
     * @param DescribeStatisticSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeStatisticSummaryResponse
     */
    public function describeStatisticSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStatisticSummary',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStatisticSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on Domain Name System (DNS) requests received on the previous day, including the top three zones and virtual private clouds (VPCs) with the largest number of DNS requests.
     *
     * @param request - DescribeStatisticSummaryRequest
     *
     * @returns DescribeStatisticSummaryResponse
     *
     * @param DescribeStatisticSummaryRequest $request
     *
     * @return DescribeStatisticSummaryResponse
     */
    public function describeStatisticSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatisticSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a hostname synchronization task based on a zone ID.
     *
     * @remarks
     * You can call the DescribeSyncEcsHostTask operation to query the information about a hostname synchronization task based on a zone ID.
     *
     * @param request - DescribeSyncEcsHostTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSyncEcsHostTaskResponse
     *
     * @param DescribeSyncEcsHostTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSyncEcsHostTaskResponse
     */
    public function describeSyncEcsHostTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSyncEcsHostTask',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSyncEcsHostTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a hostname synchronization task based on a zone ID.
     *
     * @remarks
     * You can call the DescribeSyncEcsHostTask operation to query the information about a hostname synchronization task based on a zone ID.
     *
     * @param request - DescribeSyncEcsHostTaskRequest
     *
     * @returns DescribeSyncEcsHostTaskResponse
     *
     * @param DescribeSyncEcsHostTaskRequest $request
     *
     * @return DescribeSyncEcsHostTaskResponse
     */
    public function describeSyncEcsHostTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncEcsHostTaskWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags added to zones.
     *
     * @remarks
     * #### **Precautions**
     * You can call this API operation to query the information about tags added only to zones.
     *
     * @param request - DescribeTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tags added to zones.
     *
     * @remarks
     * #### **Precautions**
     * You can call this API operation to query the information about tags added only to zones.
     *
     * @param request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * Query the current user\\"s service status, such as whether the service is activated, whether there are any unpaid fees, etc.
     *
     * @param request - DescribeUserServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserServiceStatusResponse
     *
     * @param DescribeUserServiceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserServiceStatusResponse
     */
    public function describeUserServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserServiceStatus',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the current user\\"s service status, such as whether the service is activated, whether there are any unpaid fees, etc.
     *
     * @param request - DescribeUserServiceStatusRequest
     *
     * @returns DescribeUserServiceStatusResponse
     *
     * @param DescribeUserServiceStatusRequest $request
     *
     * @return DescribeUserServiceStatusResponse
     */
    public function describeUserServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries a list of accounts whose virtual private clouds (VPCs) are associated with a private zone.
     *
     * @param request - DescribeUserVpcAuthorizationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserVpcAuthorizationsResponse
     *
     * @param DescribeUserVpcAuthorizationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserVpcAuthorizationsResponse
     */
    public function describeUserVpcAuthorizationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->authorizedUserId) {
            @$query['AuthorizedUserId'] = $request->authorizedUserId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserVpcAuthorizations',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserVpcAuthorizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of accounts whose virtual private clouds (VPCs) are associated with a private zone.
     *
     * @param request - DescribeUserVpcAuthorizationsRequest
     *
     * @returns DescribeUserVpcAuthorizationsResponse
     *
     * @param DescribeUserVpcAuthorizationsRequest $request
     *
     * @return DescribeUserVpcAuthorizationsResponse
     */
    public function describeUserVpcAuthorizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserVpcAuthorizationsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a built-in authoritative zone, such as the virtual private clouds (VPCs) that are associated with the zone.
     *
     * @param request - DescribeZoneInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZoneInfoResponse
     *
     * @param DescribeZoneInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeZoneInfoResponse
     */
    public function describeZoneInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZoneInfo',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZoneInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a built-in authoritative zone, such as the virtual private clouds (VPCs) that are associated with the zone.
     *
     * @param request - DescribeZoneInfoRequest
     *
     * @returns DescribeZoneInfoResponse
     *
     * @param DescribeZoneInfoRequest $request
     *
     * @return DescribeZoneInfoResponse
     */
    public function describeZoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a Domain Name System (DNS) record.
     *
     * @param request - DescribeZoneRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZoneRecordResponse
     *
     * @param DescribeZoneRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeZoneRecordResponse
     */
    public function describeZoneRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZoneRecord',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a Domain Name System (DNS) record.
     *
     * @param request - DescribeZoneRecordRequest
     *
     * @returns DescribeZoneRecordResponse
     *
     * @param DescribeZoneRecordRequest $request
     *
     * @return DescribeZoneRecordResponse
     */
    public function describeZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneRecordWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Domain Name System (DNS) records.
     *
     * @param request - DescribeZoneRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZoneRecordsResponse
     *
     * @param DescribeZoneRecordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeZoneRecordsResponse
     */
    public function describeZoneRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZoneRecords',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZoneRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Domain Name System (DNS) records.
     *
     * @param request - DescribeZoneRecordsRequest
     *
     * @returns DescribeZoneRecordsResponse
     *
     * @param DescribeZoneRecordsRequest $request
     *
     * @return DescribeZoneRecordsResponse
     */
    public function describeZoneRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of zones within the current account and a list of virtual private clouds (VPCs) associated with the zones.
     *
     * @remarks
     * We recommend that you do not call this API operation due to its poor performance. Instead, you can call the DescribeZones operation to query a list of zones. If you want to query the information about VPCs with which a zone is associated, you can call the DescribeZoneInfo operation based on the zone ID.
     *
     * @param request - DescribeZoneVpcTreeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZoneVpcTreeResponse
     *
     * @param DescribeZoneVpcTreeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeZoneVpcTreeResponse
     */
    public function describeZoneVpcTreeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZoneVpcTree',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZoneVpcTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of zones within the current account and a list of virtual private clouds (VPCs) associated with the zones.
     *
     * @remarks
     * We recommend that you do not call this API operation due to its poor performance. Instead, you can call the DescribeZones operation to query a list of zones. If you want to query the information about VPCs with which a zone is associated, you can call the DescribeZoneInfo operation based on the zone ID.
     *
     * @param request - DescribeZoneVpcTreeRequest
     *
     * @returns DescribeZoneVpcTreeResponse
     *
     * @param DescribeZoneVpcTreeRequest $request
     *
     * @return DescribeZoneVpcTreeResponse
     */
    public function describeZoneVpcTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneVpcTreeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of zones within the current account.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryRegionId) {
            @$query['QueryRegionId'] = $request->queryRegionId;
        }

        if (null !== $request->queryVpcId) {
            @$query['QueryVpcId'] = $request->queryVpcId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceTag) {
            @$query['ResourceTag'] = $request->resourceTag;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->zoneTag) {
            @$query['ZoneTag'] = $request->zoneTag;
        }

        if (null !== $request->zoneType) {
            @$query['ZoneType'] = $request->zoneType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of zones within the current account.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags added to zones.
     *
     * @remarks
     * #### [](#)**Precautions**
     * You can call this API operation to query tags added only to zones.
     *
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
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tags added to zones.
     *
     * @remarks
     * #### [](#)**Precautions**
     * You can call this API operation to query tags added only to zones.
     *
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
     * Changes a resource group.
     *
     * @remarks
     * #### [](#)Precautions
     * You can call this API operation to change a resource group only for a zone.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes a resource group.
     *
     * @remarks
     * #### [](#)Precautions
     * You can call this API operation to change a resource group only for a zone.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
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
     * Queries a list of custom lines.
     *
     * @param request - SearchCustomLinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCustomLinesResponse
     *
     * @param SearchCustomLinesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchCustomLinesResponse
     */
    public function searchCustomLinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimestampEnd) {
            @$query['CreateTimestampEnd'] = $request->createTimestampEnd;
        }

        if (null !== $request->createTimestampStart) {
            @$query['CreateTimestampStart'] = $request->createTimestampStart;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->ipv4) {
            @$query['Ipv4'] = $request->ipv4;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->updateTimestampEnd) {
            @$query['UpdateTimestampEnd'] = $request->updateTimestampEnd;
        }

        if (null !== $request->updateTimestampStart) {
            @$query['UpdateTimestampStart'] = $request->updateTimestampStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchCustomLines',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCustomLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of custom lines.
     *
     * @param request - SearchCustomLinesRequest
     *
     * @returns SearchCustomLinesResponse
     *
     * @param SearchCustomLinesRequest $request
     *
     * @return SearchCustomLinesResponse
     */
    public function searchCustomLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchCustomLinesWithOptions($request, $runtime);
    }

    /**
     * Enables the recursive resolution proxy for subdomain names.
     *
     * @param request - SetProxyPatternRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetProxyPatternResponse
     *
     * @param SetProxyPatternRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetProxyPatternResponse
     */
    public function setProxyPatternWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->proxyPattern) {
            @$query['ProxyPattern'] = $request->proxyPattern;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetProxyPattern',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetProxyPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the recursive resolution proxy for subdomain names.
     *
     * @param request - SetProxyPatternRequest
     *
     * @returns SetProxyPatternResponse
     *
     * @param SetProxyPatternRequest $request
     *
     * @return SetProxyPatternResponse
     */
    public function setProxyPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setProxyPatternWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a Domain Name System (DNS) record.
     *
     * @param request - SetZoneRecordStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetZoneRecordStatusResponse
     *
     * @param SetZoneRecordStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetZoneRecordStatusResponse
     */
    public function setZoneRecordStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetZoneRecordStatus',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetZoneRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a Domain Name System (DNS) record.
     *
     * @param request - SetZoneRecordStatusRequest
     *
     * @returns SetZoneRecordStatusResponse
     *
     * @param SetZoneRecordStatusRequest $request
     *
     * @return SetZoneRecordStatusResponse
     */
    public function setZoneRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setZoneRecordStatusWithOptions($request, $runtime);
    }

    /**
     * Adds or modifies tags for zones.
     *
     * @remarks
     * ##### [](#)Precautions
     * You can configure tags only for zones.
     *
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
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->overWrite) {
            @$query['OverWrite'] = $request->overWrite;
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
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or modifies tags for zones.
     *
     * @remarks
     * ##### [](#)Precautions
     * You can configure tags only for zones.
     *
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
     * Removes the tags of multiple zones at a time.
     *
     * @remarks
     * #### [](#)**Precautions**
     * You can call this API operation to remove tags added only to zones.
     *
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

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the tags of multiple zones at a time.
     *
     * @remarks
     * #### [](#)**Precautions**
     * You can call this API operation to remove tags added only to zones.
     *
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

    /**
     * Modifies a custom line.
     *
     * @param request - UpdateCustomLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomLineResponse
     *
     * @param UpdateCustomLineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCustomLineResponse
     */
    public function updateCustomLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipv4s) {
            @$query['Ipv4s'] = $request->ipv4s;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineId) {
            @$query['LineId'] = $request->lineId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomLine',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a custom line.
     *
     * @param request - UpdateCustomLineRequest
     *
     * @returns UpdateCustomLineResponse
     *
     * @param UpdateCustomLineRequest $request
     *
     * @return UpdateCustomLineResponse
     */
    public function updateCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomLineWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a Domain Name System (DNS) record based on the record ID.
     *
     * @param request - UpdateRecordRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecordRemarkResponse
     *
     * @param UpdateRecordRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRecordRemarkResponse
     */
    public function updateRecordRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecordRemark',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecordRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a Domain Name System (DNS) record based on the record ID.
     *
     * @param request - UpdateRecordRemarkRequest
     *
     * @returns UpdateRecordRemarkResponse
     *
     * @param UpdateRecordRemarkRequest $request
     *
     * @return UpdateRecordRemarkResponse
     */
    public function updateRecordRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies an endpoint.
     *
     * @param request - UpdateResolverEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResolverEndpointResponse
     *
     * @param UpdateResolverEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResolverEndpointResponse
     */
    public function updateResolverEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->ipConfig) {
            @$query['IpConfig'] = $request->ipConfig;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResolverEndpoint',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an endpoint.
     *
     * @param request - UpdateResolverEndpointRequest
     *
     * @returns UpdateResolverEndpointResponse
     *
     * @param UpdateResolverEndpointRequest $request
     *
     * @return UpdateResolverEndpointResponse
     */
    public function updateResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * Modifies a forwarding rule.
     *
     * @param request - UpdateResolverRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResolverRuleResponse
     *
     * @param UpdateResolverRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateResolverRuleResponse
     */
    public function updateResolverRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointId) {
            @$query['EndpointId'] = $request->endpointId;
        }

        if (null !== $request->forwardIp) {
            @$query['ForwardIp'] = $request->forwardIp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResolverRule',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a forwarding rule.
     *
     * @param request - UpdateResolverRuleRequest
     *
     * @returns UpdateResolverRuleResponse
     *
     * @param UpdateResolverRuleRequest $request
     *
     * @return UpdateResolverRuleResponse
     */
    public function updateResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResolverRuleWithOptions($request, $runtime);
    }

    /**
     * Adds or updates a hostname synchronization task.
     *
     * @param request - UpdateSyncEcsHostTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSyncEcsHostTaskResponse
     *
     * @param UpdateSyncEcsHostTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSyncEcsHostTaskResponse
     */
    public function updateSyncEcsHostTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSyncEcsHostTask',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSyncEcsHostTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or updates a hostname synchronization task.
     *
     * @param request - UpdateSyncEcsHostTaskRequest
     *
     * @returns UpdateSyncEcsHostTaskResponse
     *
     * @param UpdateSyncEcsHostTaskRequest $request
     *
     * @return UpdateSyncEcsHostTaskResponse
     */
    public function updateSyncEcsHostTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSyncEcsHostTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies a Domain Name System (DNS) record of a zone, including the hostname, record value, and weight value of the DNS record.
     *
     * @remarks
     * #### **Precautions**
     * The DNS record modification for a zone in the regular module takes effect only after the time to live (TTL) expires. The DNS record modification for a zone in the acceleration module takes effect immediately.
     *
     * @param request - UpdateZoneRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateZoneRecordResponse
     *
     * @param UpdateZoneRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateZoneRecordResponse
     */
    public function updateZoneRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateZoneRecord',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Domain Name System (DNS) record of a zone, including the hostname, record value, and weight value of the DNS record.
     *
     * @remarks
     * #### **Precautions**
     * The DNS record modification for a zone in the regular module takes effect only after the time to live (TTL) expires. The DNS record modification for a zone in the acceleration module takes effect immediately.
     *
     * @param request - UpdateZoneRecordRequest
     *
     * @returns UpdateZoneRecordResponse
     *
     * @param UpdateZoneRecordRequest $request
     *
     * @return UpdateZoneRecordResponse
     */
    public function updateZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZoneRecordWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a built-in authoritative zone.
     *
     * @param request - UpdateZoneRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateZoneRemarkResponse
     *
     * @param UpdateZoneRemarkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateZoneRemarkResponse
     */
    public function updateZoneRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateZoneRemark',
            'version' => '2018-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateZoneRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a built-in authoritative zone.
     *
     * @param request - UpdateZoneRemarkRequest
     *
     * @returns UpdateZoneRemarkResponse
     *
     * @param UpdateZoneRemarkRequest $request
     *
     * @return UpdateZoneRemarkResponse
     */
    public function updateZoneRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZoneRemarkWithOptions($request, $runtime);
    }
}
