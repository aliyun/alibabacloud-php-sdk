<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aegis\V20161111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Aegis\V20161111\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeAutoDelConfigRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeAutoDelConfigResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeCheckWarningDetailRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeCheckWarningDetailResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeConcernNecessityRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeConcernNecessityResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeInstanceStatisticsRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeInstanceStatisticsResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeStrategyExecDetailRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeStrategyExecDetailResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeStratetyRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeStratetyResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeVulWhitelistRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\DescribeVulWhitelistResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Aegis\V20161111\Models\UpgradeInstanceRequest;
use AlibabaCloud\SDK\Aegis\V20161111\Models\UpgradeInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Aegis extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aegis', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
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

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAutoDelConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAutoDelConfigResponse
     */
    public function describeAutoDelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoDelConfigResponse::fromMap($this->doRPCRequest('DescribeAutoDelConfig', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoDelConfigRequest $request
     *
     * @return DescribeAutoDelConfigResponse
     */
    public function describeAutoDelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoDelConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCheckWarningDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCheckWarningDetailResponse
     */
    public function describeCheckWarningDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCheckWarningDetailResponse::fromMap($this->doRPCRequest('DescribeCheckWarningDetail', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCheckWarningDetailRequest $request
     *
     * @return DescribeCheckWarningDetailResponse
     */
    public function describeCheckWarningDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckWarningDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConcernNecessityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeConcernNecessityResponse
     */
    public function describeConcernNecessityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConcernNecessityResponse::fromMap($this->doRPCRequest('DescribeConcernNecessity', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConcernNecessityRequest $request
     *
     * @return DescribeConcernNecessityResponse
     */
    public function describeConcernNecessity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConcernNecessityWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStatisticsResponse::fromMap($this->doRPCRequest('DescribeInstanceStatistics', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeStrategyExecDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeStrategyExecDetailResponse
     */
    public function describeStrategyExecDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStrategyExecDetailResponse::fromMap($this->doRPCRequest('DescribeStrategyExecDetail', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStrategyExecDetailRequest $request
     *
     * @return DescribeStrategyExecDetailResponse
     */
    public function describeStrategyExecDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStrategyExecDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStratetyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeStratetyResponse
     */
    public function describeStratetyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStratetyResponse::fromMap($this->doRPCRequest('DescribeStratety', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStratetyRequest $request
     *
     * @return DescribeStratetyResponse
     */
    public function describeStratety($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStratetyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVulWhitelistResponse
     */
    public function describeVulWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVulWhitelistResponse::fromMap($this->doRPCRequest('DescribeVulWhitelist', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVulWhitelistRequest $request
     *
     * @return DescribeVulWhitelistResponse
     */
    public function describeVulWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeInstanceResponse::fromMap($this->doRPCRequest('UpgradeInstance', '2016-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeInstanceRequest $request
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceWithOptions($request, $runtime);
    }
}
