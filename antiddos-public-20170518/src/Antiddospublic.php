<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeBgpPackByIpResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCountRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCountResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCreditResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDdosStatusRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDdosStatusResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDefenseThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDefenseThresholdResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Antiddospublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('antiddos-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeBgpPackByIpRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBgpPackByIpResponse
     */
    public function describeBgpPackByIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBgpPackByIpResponse::fromMap($this->doRPCRequest('DescribeBgpPackByIp', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBgpPackByIpRequest $request
     *
     * @return DescribeBgpPackByIpResponse
     */
    public function describeBgpPackByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBgpPackByIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCapRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeCapResponse
     */
    public function describeCapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCapResponse::fromMap($this->doRPCRequest('DescribeCap', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCapRequest $request
     *
     * @return DescribeCapResponse
     */
    public function describeCap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosCountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDdosCountResponse
     */
    public function describeDdosCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosCountResponse::fromMap($this->doRPCRequest('DescribeDdosCount', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosCountRequest $request
     *
     * @return DescribeDdosCountResponse
     */
    public function describeDdosCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosCreditRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDdosCreditResponse
     */
    public function describeDdosCreditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosCreditResponse::fromMap($this->doRPCRequest('DescribeDdosCredit', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosCreditRequest $request
     *
     * @return DescribeDdosCreditResponse
     */
    public function describeDdosCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosCreditWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosEventListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDdosEventListResponse
     */
    public function describeDdosEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosEventListResponse::fromMap($this->doRPCRequest('DescribeDdosEventList', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosEventListRequest $request
     *
     * @return DescribeDdosEventListResponse
     */
    public function describeDdosEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDdosThresholdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDdosThresholdResponse
     */
    public function describeDdosThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDdosThresholdResponse::fromMap($this->doRPCRequest('DescribeDdosThreshold', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDdosThresholdRequest $request
     *
     * @return DescribeDdosThresholdResponse
     */
    public function describeDdosThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosThresholdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceResponse::fromMap($this->doRPCRequest('DescribeInstance', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param ModifyDdosStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDdosStatusResponse
     */
    public function modifyDdosStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDdosStatusResponse::fromMap($this->doRPCRequest('ModifyDdosStatus', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDdosStatusRequest $request
     *
     * @return ModifyDdosStatusResponse
     */
    public function modifyDdosStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDdosStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefenseThresholdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDefenseThresholdResponse
     */
    public function modifyDefenseThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDefenseThresholdResponse::fromMap($this->doRPCRequest('ModifyDefenseThreshold', '2017-05-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDefenseThresholdRequest $request
     *
     * @return ModifyDefenseThresholdResponse
     */
    public function modifyDefenseThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefenseThresholdWithOptions($request, $runtime);
    }
}
