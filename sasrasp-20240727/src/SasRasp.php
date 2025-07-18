<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttackProtectionCountRequest;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttackProtectionCountResponse;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksRequest;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary DescribeAttackProtectionCount
     *  *
     * @param DescribeAttackProtectionCountRequest $request DescribeAttackProtectionCountRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAttackProtectionCountResponse DescribeAttackProtectionCountResponse
     */
    public function describeAttackProtectionCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentType)) {
            $query['AgentType'] = $request->agentType;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary DescribeAttackProtectionCount
     *  *
     * @param DescribeAttackProtectionCountRequest $request DescribeAttackProtectionCountRequest
     *
     * @return DescribeAttackProtectionCountResponse DescribeAttackProtectionCountResponse
     */
    public function describeAttackProtectionCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackProtectionCountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询攻击项
     *  *
     * @param DescribeAttacksRequest $request DescribeAttacksRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAttacksResponse DescribeAttacksResponse
     */
    public function describeAttacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentType)) {
            $query['AgentType'] = $request->agentType;
        }
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->attackHostId)) {
            $query['AttackHostId'] = $request->attackHostId;
        }
        if (!Utils::isUnset($request->attackType)) {
            $query['AttackType'] = $request->attackType;
        }
        if (!Utils::isUnset($request->attackUrl)) {
            $query['AttackUrl'] = $request->attackUrl;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->handlerType)) {
            $query['HandlerType'] = $request->handlerType;
        }
        if (!Utils::isUnset($request->hostname)) {
            $query['Hostname'] = $request->hostname;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->raspType)) {
            $query['RaspType'] = $request->raspType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->remote)) {
            $query['Remote'] = $request->remote;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        if (!Utils::isUnset($request->unionId)) {
            $query['UnionId'] = $request->unionId;
        }
        $body = [];
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询攻击项
     *  *
     * @param DescribeAttacksRequest $request DescribeAttacksRequest
     *
     * @return DescribeAttacksResponse DescribeAttacksResponse
     */
    public function describeAttacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttacksWithOptions($request, $runtime);
    }
}
