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
     * @param AddResolverEndpointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddResolverEndpointResponse
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
     * @param AddResolverRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddResolverRuleResponse
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
     * @param AddUserVpcAuthorizationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddUserVpcAuthorizationResponse
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
     * @param AddZoneRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddZoneResponse
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
     * @param AddZoneRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddZoneRecordResponse
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
     * @param BindResolverRuleVpcRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindResolverRuleVpcResponse
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
     * @param BindZoneVpcRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindZoneVpcResponse
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
     * @param CheckZoneNameRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckZoneNameResponse
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
     * @param DeleteResolverEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteResolverEndpointResponse
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
     * @param DeleteResolverRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResolverRuleResponse
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
     * @param DeleteUserVpcAuthorizationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteUserVpcAuthorizationResponse
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
     * @param DeleteZoneRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteZoneResponse
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
     * @param DeleteZoneRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteZoneRecordResponse
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
     * @param DescribeChangeLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeChangeLogsResponse
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
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
     * @param DescribeRequestGraphRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRequestGraphResponse
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
     * @param DescribeResolverAvailableZonesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResolverAvailableZonesResponse
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
     * @param DescribeResolverEndpointRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeResolverEndpointResponse
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
     * @param DescribeResolverEndpointsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeResolverEndpointsResponse
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
     * @param DescribeResolverRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeResolverRuleResponse
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
     * @param DescribeResolverRulesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResolverRulesResponse
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
     * @param DescribeStatisticSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeStatisticSummaryResponse
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
     * @param DescribeSyncEcsHostTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSyncEcsHostTaskResponse
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
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
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
     * @param DescribeUserVpcAuthorizationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserVpcAuthorizationsResponse
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
     * @param DescribeZoneInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeZoneInfoResponse
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
     * @param DescribeZoneRecordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeZoneRecordsResponse
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
     * @param DescribeZoneVpcTreeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeZoneVpcTreeResponse
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
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
     * @param SetProxyPatternRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetProxyPatternResponse
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
     * @param SetZoneRecordStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetZoneRecordStatusResponse
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
     * @param UpdateRecordRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRecordRemarkResponse
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
     * @param UpdateResolverEndpointRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResolverEndpointResponse
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
     * @param UpdateResolverRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateResolverRuleResponse
     */
    public function updateResolverRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param UpdateSyncEcsHostTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSyncEcsHostTaskResponse
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
     * @param UpdateZoneRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateZoneRecordResponse
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
     * @param UpdateZoneRemarkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateZoneRemarkResponse
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
