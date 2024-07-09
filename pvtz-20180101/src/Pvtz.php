<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Pvtz\V20180101\Models\CheckZoneNameRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\CheckZoneNameResponse;
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
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserVpcAuthorizationsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserVpcAuthorizationsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponse;
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
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetProxyPatternRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetProxyPatternResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetZoneRecordStatusRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetZoneRecordStatusResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UntagResourcesResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Creates an endpoint.
     *  *
     * @param AddResolverEndpointRequest $request AddResolverEndpointRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AddResolverEndpointResponse AddResolverEndpointResponse
     */
    public function addResolverEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipConfig)) {
            $query['IpConfig'] = $request->ipConfig;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $query['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddResolverEndpoint',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an endpoint.
     *  *
     * @param AddResolverEndpointRequest $request AddResolverEndpointRequest
     *
     * @return AddResolverEndpointResponse AddResolverEndpointResponse
     */
    public function addResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a forwarding rule.
     *  *
     * @param AddResolverRuleRequest $request AddResolverRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddResolverRuleResponse AddResolverRuleResponse
     */
    public function addResolverRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->forwardIp)) {
            $query['ForwardIp'] = $request->forwardIp;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->zoneName)) {
            $query['ZoneName'] = $request->zoneName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddResolverRule',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a forwarding rule.
     *  *
     * @param AddResolverRuleRequest $request AddResolverRuleRequest
     *
     * @return AddResolverRuleResponse AddResolverRuleResponse
     */
    public function addResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addResolverRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Adds another account to associate one or more virtual private clouds (VPCs) of the current account with a private zone.
     *  *
     * @param AddUserVpcAuthorizationRequest $request AddUserVpcAuthorizationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserVpcAuthorizationResponse AddUserVpcAuthorizationResponse
     */
    public function addUserVpcAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authChannel)) {
            $query['AuthChannel'] = $request->authChannel;
        }
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->authorizedUserId)) {
            $query['AuthorizedUserId'] = $request->authorizedUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserVpcAuthorization',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserVpcAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds another account to associate one or more virtual private clouds (VPCs) of the current account with a private zone.
     *  *
     * @param AddUserVpcAuthorizationRequest $request AddUserVpcAuthorizationRequest
     *
     * @return AddUserVpcAuthorizationResponse AddUserVpcAuthorizationResponse
     */
    public function addUserVpcAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserVpcAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a zone.
     *  *
     * @param AddZoneRequest $request AddZoneRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddZoneResponse AddZoneResponse
     */
    public function addZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dnsGroup)) {
            $query['DnsGroup'] = $request->dnsGroup;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proxyPattern)) {
            $query['ProxyPattern'] = $request->proxyPattern;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->zoneName)) {
            $query['ZoneName'] = $request->zoneName;
        }
        if (!Utils::isUnset($request->zoneTag)) {
            $query['ZoneTag'] = $request->zoneTag;
        }
        if (!Utils::isUnset($request->zoneType)) {
            $query['ZoneType'] = $request->zoneType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddZone',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a zone.
     *  *
     * @param AddZoneRequest $request AddZoneRequest
     *
     * @return AddZoneResponse AddZoneResponse
     */
    public function addZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addZoneWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a Domain Name System (DNS) record for a zone.
     *  *
     * @param AddZoneRecordRequest $request AddZoneRecordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddZoneRecordResponse AddZoneRecordResponse
     */
    public function addZoneRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->rr)) {
            $query['Rr'] = $request->rr;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddZoneRecord',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a Domain Name System (DNS) record for a zone.
     *  *
     * @param AddZoneRecordRequest $request AddZoneRecordRequest
     *
     * @return AddZoneRecordResponse AddZoneRecordResponse
     */
    public function addZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addZoneRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a forwarding rule with virtual private clouds (VPCs).
     *  *
     * @param BindResolverRuleVpcRequest $request BindResolverRuleVpcRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BindResolverRuleVpcResponse BindResolverRuleVpcResponse
     */
    public function bindResolverRuleVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->vpc)) {
            $query['Vpc'] = $request->vpc;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindResolverRuleVpc',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindResolverRuleVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a forwarding rule with virtual private clouds (VPCs).
     *  *
     * @param BindResolverRuleVpcRequest $request BindResolverRuleVpcRequest
     *
     * @return BindResolverRuleVpcResponse BindResolverRuleVpcResponse
     */
    public function bindResolverRuleVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindResolverRuleVpcWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a zone to virtual private clouds (VPCs) or unbinds a zone from VPCs.
     *  *
     * @param BindZoneVpcRequest $request BindZoneVpcRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BindZoneVpcResponse BindZoneVpcResponse
     */
    public function bindZoneVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->vpcs)) {
            $query['Vpcs'] = $request->vpcs;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindZoneVpc',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindZoneVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a zone to virtual private clouds (VPCs) or unbinds a zone from VPCs.
     *  *
     * @param BindZoneVpcRequest $request BindZoneVpcRequest
     *
     * @return BindZoneVpcResponse BindZoneVpcResponse
     */
    public function bindZoneVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindZoneVpcWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the name of a zone is valid based on specific rules.
     *  *
     * @param CheckZoneNameRequest $request CheckZoneNameRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckZoneNameResponse CheckZoneNameResponse
     */
    public function checkZoneNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zoneName)) {
            $query['ZoneName'] = $request->zoneName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckZoneName',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckZoneNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the name of a zone is valid based on specific rules.
     *  *
     * @param CheckZoneNameRequest $request CheckZoneNameRequest
     *
     * @return CheckZoneNameResponse CheckZoneNameResponse
     */
    public function checkZoneName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkZoneNameWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an endpoint.
     *  *
     * @param DeleteResolverEndpointRequest $request DeleteResolverEndpointRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResolverEndpointResponse DeleteResolverEndpointResponse
     */
    public function deleteResolverEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResolverEndpoint',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an endpoint.
     *  *
     * @param DeleteResolverEndpointRequest $request DeleteResolverEndpointRequest
     *
     * @return DeleteResolverEndpointResponse DeleteResolverEndpointResponse
     */
    public function deleteResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a forwarding rule.
     *  *
     * @param DeleteResolverRuleRequest $request DeleteResolverRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteResolverRuleResponse DeleteResolverRuleResponse
     */
    public function deleteResolverRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResolverRule',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a forwarding rule.
     *  *
     * @param DeleteResolverRuleRequest $request DeleteResolverRuleRequest
     *
     * @return DeleteResolverRuleResponse DeleteResolverRuleResponse
     */
    public function deleteResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResolverRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an account whose one or more virtual private clouds (VPCs) are associated with a private zone.
     *  *
     * @param DeleteUserVpcAuthorizationRequest $request DeleteUserVpcAuthorizationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserVpcAuthorizationResponse DeleteUserVpcAuthorizationResponse
     */
    public function deleteUserVpcAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->authorizedUserId)) {
            $query['AuthorizedUserId'] = $request->authorizedUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserVpcAuthorization',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserVpcAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an account whose one or more virtual private clouds (VPCs) are associated with a private zone.
     *  *
     * @param DeleteUserVpcAuthorizationRequest $request DeleteUserVpcAuthorizationRequest
     *
     * @return DeleteUserVpcAuthorizationResponse DeleteUserVpcAuthorizationResponse
     */
    public function deleteUserVpcAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserVpcAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a zone.
     *  *
     * @param DeleteZoneRequest $request DeleteZoneRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteZoneResponse DeleteZoneResponse
     */
    public function deleteZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteZone',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a zone.
     *  *
     * @param DeleteZoneRequest $request DeleteZoneRequest
     *
     * @return DeleteZoneResponse DeleteZoneResponse
     */
    public function deleteZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZoneWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Domain Name System (DNS) record of a zone.
     *  *
     * @param DeleteZoneRecordRequest $request DeleteZoneRecordRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteZoneRecordResponse DeleteZoneRecordResponse
     */
    public function deleteZoneRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteZoneRecord',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Domain Name System (DNS) record of a zone.
     *  *
     * @param DeleteZoneRecordRequest $request DeleteZoneRecordRequest
     *
     * @return DeleteZoneRecordResponse DeleteZoneRecordResponse
     */
    public function deleteZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZoneRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of operation logs.
     *  *
     * @param DescribeChangeLogsRequest $request DescribeChangeLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChangeLogsResponse DescribeChangeLogsResponse
     */
    public function describeChangeLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->entityType)) {
            $query['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChangeLogs',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChangeLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of operation logs.
     *  *
     * @param DescribeChangeLogsRequest $request DescribeChangeLogsRequest
     *
     * @return DescribeChangeLogsResponse DescribeChangeLogsResponse
     */
    public function describeChangeLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChangeLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of available regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->authorizedUserId)) {
            $query['AuthorizedUserId'] = $request->authorizedUserId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->vpcType)) {
            $query['VpcType'] = $request->vpcType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of available regions.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about Domain Name System (DNS) requests.
     *  *
     * @param DescribeRequestGraphRequest $request DescribeRequestGraphRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRequestGraphResponse DescribeRequestGraphResponse
     */
    public function describeRequestGraphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRequestGraph',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRequestGraphResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about Domain Name System (DNS) requests.
     *  *
     * @param DescribeRequestGraphRequest $request DescribeRequestGraphRequest
     *
     * @return DescribeRequestGraphResponse DescribeRequestGraphResponse
     */
    public function describeRequestGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRequestGraphWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of available zones.
     *  *
     * @param DescribeResolverAvailableZonesRequest $request DescribeResolverAvailableZonesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResolverAvailableZonesResponse DescribeResolverAvailableZonesResponse
     */
    public function describeResolverAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->azId)) {
            $query['AzId'] = $request->azId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resolverRegionId)) {
            $query['ResolverRegionId'] = $request->resolverRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResolverAvailableZones',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResolverAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of available zones.
     *  *
     * @param DescribeResolverAvailableZonesRequest $request DescribeResolverAvailableZonesRequest
     *
     * @return DescribeResolverAvailableZonesResponse DescribeResolverAvailableZonesResponse
     */
    public function describeResolverAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an endpoint.
     *  *
     * @param DescribeResolverEndpointRequest $request DescribeResolverEndpointRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResolverEndpointResponse DescribeResolverEndpointResponse
     */
    public function describeResolverEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResolverEndpoint',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an endpoint.
     *  *
     * @param DescribeResolverEndpointRequest $request DescribeResolverEndpointRequest
     *
     * @return DescribeResolverEndpointResponse DescribeResolverEndpointResponse
     */
    public function describeResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of endpoints.
     *  *
     * @param DescribeResolverEndpointsRequest $request DescribeResolverEndpointsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResolverEndpointsResponse DescribeResolverEndpointsResponse
     */
    public function describeResolverEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $query['VpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResolverEndpoints',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResolverEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of endpoints.
     *  *
     * @param DescribeResolverEndpointsRequest $request DescribeResolverEndpointsRequest
     *
     * @return DescribeResolverEndpointsResponse DescribeResolverEndpointsResponse
     */
    public function describeResolverEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a forwarding rule.
     *  *
     * @param DescribeResolverRuleRequest $request DescribeResolverRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResolverRuleResponse DescribeResolverRuleResponse
     */
    public function describeResolverRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResolverRule',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a forwarding rule.
     *  *
     * @param DescribeResolverRuleRequest $request DescribeResolverRuleRequest
     *
     * @return DescribeResolverRuleResponse DescribeResolverRuleResponse
     */
    public function describeResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of forwarding rules.
     *  *
     * @param DescribeResolverRulesRequest $request DescribeResolverRulesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResolverRulesResponse DescribeResolverRulesResponse
     */
    public function describeResolverRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->needDetailAttributes)) {
            $query['NeedDetailAttributes'] = $request->needDetailAttributes;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResolverRules',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResolverRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of forwarding rules.
     *  *
     * @param DescribeResolverRulesRequest $request DescribeResolverRulesRequest
     *
     * @return DescribeResolverRulesResponse DescribeResolverRulesResponse
     */
    public function describeResolverRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResolverRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics on the Domain Name System (DNS) requests received on the previous day.
     *  *
     * @param DescribeStatisticSummaryRequest $request DescribeStatisticSummaryRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStatisticSummaryResponse DescribeStatisticSummaryResponse
     */
    public function describeStatisticSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStatisticSummary',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStatisticSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics on the Domain Name System (DNS) requests received on the previous day.
     *  *
     * @param DescribeStatisticSummaryRequest $request DescribeStatisticSummaryRequest
     *
     * @return DescribeStatisticSummaryResponse DescribeStatisticSummaryResponse
     */
    public function describeStatisticSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStatisticSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a hostname synchronization task.
     *  *
     * @param DescribeSyncEcsHostTaskRequest $request DescribeSyncEcsHostTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSyncEcsHostTaskResponse DescribeSyncEcsHostTaskResponse
     */
    public function describeSyncEcsHostTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSyncEcsHostTask',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSyncEcsHostTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a hostname synchronization task.
     *  *
     * @param DescribeSyncEcsHostTaskRequest $request DescribeSyncEcsHostTaskRequest
     *
     * @return DescribeSyncEcsHostTaskResponse DescribeSyncEcsHostTaskResponse
     */
    public function describeSyncEcsHostTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncEcsHostTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of existing tags.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of existing tags.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of accounts whose virtual private clouds (VPCs) are associated with a private zone.
     *  *
     * @param DescribeUserVpcAuthorizationsRequest $request DescribeUserVpcAuthorizationsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserVpcAuthorizationsResponse DescribeUserVpcAuthorizationsResponse
     */
    public function describeUserVpcAuthorizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->authorizedUserId)) {
            $query['AuthorizedUserId'] = $request->authorizedUserId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserVpcAuthorizations',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserVpcAuthorizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of accounts whose virtual private clouds (VPCs) are associated with a private zone.
     *  *
     * @param DescribeUserVpcAuthorizationsRequest $request DescribeUserVpcAuthorizationsRequest
     *
     * @return DescribeUserVpcAuthorizationsResponse DescribeUserVpcAuthorizationsResponse
     */
    public function describeUserVpcAuthorizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserVpcAuthorizationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a zone.
     *  *
     * @param DescribeZoneInfoRequest $request DescribeZoneInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZoneInfoResponse DescribeZoneInfoResponse
     */
    public function describeZoneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZoneInfo',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZoneInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a zone.
     *  *
     * @param DescribeZoneInfoRequest $request DescribeZoneInfoRequest
     *
     * @return DescribeZoneInfoResponse DescribeZoneInfoResponse
     */
    public function describeZoneInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of Domain Name System (DNS) records for a zone.
     *  *
     * @param DescribeZoneRecordsRequest $request DescribeZoneRecordsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZoneRecordsResponse DescribeZoneRecordsResponse
     */
    public function describeZoneRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZoneRecords',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZoneRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Domain Name System (DNS) records for a zone.
     *  *
     * @param DescribeZoneRecordsRequest $request DescribeZoneRecordsRequest
     *
     * @return DescribeZoneRecordsResponse DescribeZoneRecordsResponse
     */
    public function describeZoneRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of zones and a list of virtual private clouds (VPCs) that are bound to the zones.
     *  *
     * @description We recommend that you do not call this API operation due to its poor performance. Instead, you can call the DescribeZones operation to query a list of zones. If you want to query the information about VPCs to which a zone is bound, you can call the DescribeZoneInfo operation based on the zone ID.
     *  *
     * @param DescribeZoneVpcTreeRequest $request DescribeZoneVpcTreeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZoneVpcTreeResponse DescribeZoneVpcTreeResponse
     */
    public function describeZoneVpcTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZoneVpcTree',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZoneVpcTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of zones and a list of virtual private clouds (VPCs) that are bound to the zones.
     *  *
     * @description We recommend that you do not call this API operation due to its poor performance. Instead, you can call the DescribeZones operation to query a list of zones. If you want to query the information about VPCs to which a zone is bound, you can call the DescribeZoneInfo operation based on the zone ID.
     *  *
     * @param DescribeZoneVpcTreeRequest $request DescribeZoneVpcTreeRequest
     *
     * @return DescribeZoneVpcTreeResponse DescribeZoneVpcTreeResponse
     */
    public function describeZoneVpcTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZoneVpcTreeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of zones for a user.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryRegionId)) {
            $query['QueryRegionId'] = $request->queryRegionId;
        }
        if (!Utils::isUnset($request->queryVpcId)) {
            $query['QueryVpcId'] = $request->queryVpcId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceTag)) {
            $query['ResourceTag'] = $request->resourceTag;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->zoneTag)) {
            $query['ZoneTag'] = $request->zoneTag;
        }
        if (!Utils::isUnset($request->zoneType)) {
            $query['ZoneType'] = $request->zoneType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of zones for a user.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tags added to one or more resources.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tags added to one or more resources.
     *  *
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
     * @summary Moves a zone to another resource group.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a zone to another resource group.
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the recursive resolution proxy feature.
     *  *
     * @param SetProxyPatternRequest $request SetProxyPatternRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetProxyPatternResponse SetProxyPatternResponse
     */
    public function setProxyPatternWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->proxyPattern)) {
            $query['ProxyPattern'] = $request->proxyPattern;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetProxyPattern',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetProxyPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the recursive resolution proxy feature.
     *  *
     * @param SetProxyPatternRequest $request SetProxyPatternRequest
     *
     * @return SetProxyPatternResponse SetProxyPatternResponse
     */
    public function setProxyPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setProxyPatternWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the status of a Domain Name System (DNS) record for a zone.
     *  *
     * @param SetZoneRecordStatusRequest $request SetZoneRecordStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetZoneRecordStatusResponse SetZoneRecordStatusResponse
     */
    public function setZoneRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetZoneRecordStatus',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetZoneRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the status of a Domain Name System (DNS) record for a zone.
     *  *
     * @param SetZoneRecordStatusRequest $request SetZoneRecordStatusRequest
     *
     * @return SetZoneRecordStatusResponse SetZoneRecordStatusResponse
     */
    public function setZoneRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setZoneRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to resources.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->overWrite)) {
            $query['OverWrite'] = $request->overWrite;
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
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds tags to resources.
     *  *
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
     * @summary Removes tags from resources.
     *  *
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a Domain Name System (DNS) record that is added for a zone.
     *  *
     * @param UpdateRecordRemarkRequest $request UpdateRecordRemarkRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRecordRemarkResponse UpdateRecordRemarkResponse
     */
    public function updateRecordRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRecordRemark',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRecordRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a Domain Name System (DNS) record that is added for a zone.
     *  *
     * @param UpdateRecordRemarkRequest $request UpdateRecordRemarkRequest
     *
     * @return UpdateRecordRemarkResponse UpdateRecordRemarkResponse
     */
    public function updateRecordRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an endpoint.
     *  *
     * @param UpdateResolverEndpointRequest $request UpdateResolverEndpointRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResolverEndpointResponse UpdateResolverEndpointResponse
     */
    public function updateResolverEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->ipConfig)) {
            $query['IpConfig'] = $request->ipConfig;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResolverEndpoint',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResolverEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an endpoint.
     *  *
     * @param UpdateResolverEndpointRequest $request UpdateResolverEndpointRequest
     *
     * @return UpdateResolverEndpointResponse UpdateResolverEndpointResponse
     */
    public function updateResolverEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResolverEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a forwarding rule.
     *  *
     * @param UpdateResolverRuleRequest $request UpdateResolverRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResolverRuleResponse UpdateResolverRuleResponse
     */
    public function updateResolverRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointId)) {
            $query['EndpointId'] = $request->endpointId;
        }
        if (!Utils::isUnset($request->forwardIp)) {
            $query['ForwardIp'] = $request->forwardIp;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResolverRule',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResolverRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a forwarding rule.
     *  *
     * @param UpdateResolverRuleRequest $request UpdateResolverRuleRequest
     *
     * @return UpdateResolverRuleResponse UpdateResolverRuleResponse
     */
    public function updateResolverRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResolverRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates and updates a hostname synchronize task.
     *  *
     * @param UpdateSyncEcsHostTaskRequest $request UpdateSyncEcsHostTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSyncEcsHostTaskResponse UpdateSyncEcsHostTaskResponse
     */
    public function updateSyncEcsHostTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSyncEcsHostTask',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSyncEcsHostTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates and updates a hostname synchronize task.
     *  *
     * @param UpdateSyncEcsHostTaskRequest $request UpdateSyncEcsHostTaskRequest
     *
     * @return UpdateSyncEcsHostTaskResponse UpdateSyncEcsHostTaskResponse
     */
    public function updateSyncEcsHostTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSyncEcsHostTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a Domain Name System (DNS) record of a zone.
     *  *
     * @param UpdateZoneRecordRequest $request UpdateZoneRecordRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateZoneRecordResponse UpdateZoneRecordResponse
     */
    public function updateZoneRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->rr)) {
            $query['Rr'] = $request->rr;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateZoneRecord',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateZoneRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a Domain Name System (DNS) record of a zone.
     *  *
     * @param UpdateZoneRecordRequest $request UpdateZoneRecordRequest
     *
     * @return UpdateZoneRecordResponse UpdateZoneRecordResponse
     */
    public function updateZoneRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZoneRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a zone.
     *  *
     * @param UpdateZoneRemarkRequest $request UpdateZoneRemarkRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateZoneRemarkResponse UpdateZoneRemarkResponse
     */
    public function updateZoneRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateZoneRemark',
            'version'     => '2018-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateZoneRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a zone.
     *  *
     * @param UpdateZoneRemarkRequest $request UpdateZoneRemarkRequest
     *
     * @return UpdateZoneRemarkResponse UpdateZoneRemarkResponse
     */
    public function updateZoneRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZoneRemarkWithOptions($request, $runtime);
    }
}
