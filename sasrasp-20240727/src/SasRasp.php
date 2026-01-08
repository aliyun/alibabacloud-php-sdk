<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttackProtectionCountRequest;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttackProtectionCountResponse;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksRequest;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SasRasp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sasrasp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * DescribeAttackProtectionCount.
     *
     * @param request - DescribeAttackProtectionCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAttackProtectionCountResponse
     *
     * @param DescribeAttackProtectionCountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAttackProtectionCountResponse
     */
    public function describeAttackProtectionCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAttackProtectionCount',
            'version' => '2024-07-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAttackProtectionCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeAttackProtectionCount.
     *
     * @param request - DescribeAttackProtectionCountRequest
     *
     * @returns DescribeAttackProtectionCountResponse
     *
     * @param DescribeAttackProtectionCountRequest $request
     *
     * @return DescribeAttackProtectionCountResponse
     */
    public function describeAttackProtectionCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackProtectionCountWithOptions($request, $runtime);
    }

    /**
     * 查询攻击项.
     *
     * @param request - DescribeAttacksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAttacksResponse
     *
     * @param DescribeAttacksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAttacksResponse
     */
    public function describeAttacksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->attackHostId) {
            @$query['AttackHostId'] = $request->attackHostId;
        }

        if (null !== $request->attackType) {
            @$query['AttackType'] = $request->attackType;
        }

        if (null !== $request->attackUrl) {
            @$query['AttackUrl'] = $request->attackUrl;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->handleStatus) {
            @$query['HandleStatus'] = $request->handleStatus;
        }

        if (null !== $request->handlerType) {
            @$query['HandlerType'] = $request->handlerType;
        }

        if (null !== $request->hostname) {
            @$query['Hostname'] = $request->hostname;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pid) {
            @$query['Pid'] = $request->pid;
        }

        if (null !== $request->raspType) {
            @$query['RaspType'] = $request->raspType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->remote) {
            @$query['Remote'] = $request->remote;
        }

        if (null !== $request->severity) {
            @$query['Severity'] = $request->severity;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        if (null !== $request->unionId) {
            @$query['UnionId'] = $request->unionId;
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAttacks',
            'version' => '2024-07-27',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAttacksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询攻击项.
     *
     * @param request - DescribeAttacksRequest
     *
     * @returns DescribeAttacksResponse
     *
     * @param DescribeAttacksRequest $request
     *
     * @return DescribeAttacksResponse
     */
    public function describeAttacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttacksWithOptions($request, $runtime);
    }
}
