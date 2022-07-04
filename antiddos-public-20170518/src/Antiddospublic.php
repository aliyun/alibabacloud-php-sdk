<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpDdosThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpDdosThresholdResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpLocationServiceRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpLocationServiceResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDdosStatusRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDdosStatusResponse;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDefenseThresholdRequest;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\ModifyDefenseThresholdResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBgpPackByIp',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBgpPackByIpResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->begTime)) {
            $query['BegTime'] = $request->begTime;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCap',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCapResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosCount',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosCountResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosCredit',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosCreditResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosEventList',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosEventListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosType)) {
            $query['DdosType'] = $request->ddosType;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDdosThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDdosThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosStatus)) {
            $query['DdosStatus'] = $request->ddosStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIp)) {
            $query['InstanceIp'] = $request->instanceIp;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeInstanceIpAddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceIpAddressResponse
     */
    public function describeInstanceIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosStatus)) {
            $query['DdosStatus'] = $request->ddosStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIp)) {
            $query['InstanceIp'] = $request->instanceIp;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceIpAddress',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceIpAddressRequest $request
     *
     * @return DescribeInstanceIpAddressResponse
     */
    public function describeInstanceIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceIpAddressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpDdosThresholdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeIpDdosThresholdResponse
     */
    public function describeIpDdosThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->ddosType)) {
            $query['DdosType'] = $request->ddosType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpDdosThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpDdosThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpDdosThresholdRequest $request
     *
     * @return DescribeIpDdosThresholdResponse
     */
    public function describeIpDdosThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpDdosThresholdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpLocationServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIpLocationServiceResponse
     */
    public function describeIpLocationServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpLocationService',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpLocationServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpLocationServiceRequest $request
     *
     * @return DescribeIpLocationServiceResponse
     */
    public function describeIpLocationService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpLocationServiceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-05-18',
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
        $query = [];
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDdosStatus',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDdosStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->bps)) {
            $query['Bps'] = $request->bps;
        }
        if (!Utils::isUnset($request->ddosRegionId)) {
            $query['DdosRegionId'] = $request->ddosRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetIp)) {
            $query['InternetIp'] = $request->internetIp;
        }
        if (!Utils::isUnset($request->isAuto)) {
            $query['IsAuto'] = $request->isAuto;
        }
        if (!Utils::isUnset($request->pps)) {
            $query['Pps'] = $request->pps;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefenseThreshold',
            'version'     => '2017-05-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefenseThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
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
