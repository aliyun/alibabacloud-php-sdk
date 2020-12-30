<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneRecordRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneRecordResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\AddZoneResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\BindZoneVpcResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\CheckZoneNameRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\CheckZoneNameResponse;
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
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserServiceStatusRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeUserServiceStatusResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetProxyPatternRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetProxyPatternResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetZoneRecordStatusRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\SetZoneRecordStatusResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateRecordRemarkRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateRecordRemarkResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRecordRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRecordResponse;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRemarkRequest;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateZoneRemarkResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param AddZoneRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddZoneResponse
     */
    public function addZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddZoneResponse::fromMap($this->doRPCRequest('AddZone', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddZoneRecordResponse::fromMap($this->doRPCRequest('AddZoneRecord', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BindZoneVpcRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindZoneVpcResponse
     */
    public function bindZoneVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindZoneVpcResponse::fromMap($this->doRPCRequest('BindZoneVpc', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckZoneNameResponse::fromMap($this->doRPCRequest('CheckZoneName', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteZoneRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteZoneResponse
     */
    public function deleteZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteZoneResponse::fromMap($this->doRPCRequest('DeleteZone', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteZoneRecordResponse::fromMap($this->doRPCRequest('DeleteZoneRecord', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeChangeLogsResponse::fromMap($this->doRPCRequest('DescribeChangeLogs', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRequestGraphResponse::fromMap($this->doRPCRequest('DescribeRequestGraph', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeStatisticSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeStatisticSummaryResponse
     */
    public function describeStatisticSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStatisticSummaryResponse::fromMap($this->doRPCRequest('DescribeStatisticSummary', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUserServiceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserServiceStatusResponse
     */
    public function describeUserServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserServiceStatusResponse::fromMap($this->doRPCRequest('DescribeUserServiceStatus', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeZoneInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeZoneInfoResponse
     */
    public function describeZoneInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZoneInfoResponse::fromMap($this->doRPCRequest('DescribeZoneInfo', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZoneRecordsResponse::fromMap($this->doRPCRequest('DescribeZoneRecords', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZonesResponse::fromMap($this->doRPCRequest('DescribeZones', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeZoneVpcTreeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeZoneVpcTreeResponse
     */
    public function describeZoneVpcTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeZoneVpcTreeResponse::fromMap($this->doRPCRequest('DescribeZoneVpcTree', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetProxyPatternResponse::fromMap($this->doRPCRequest('SetProxyPattern', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetZoneRecordStatusResponse::fromMap($this->doRPCRequest('SetZoneRecordStatus', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateRecordRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRecordRemarkResponse
     */
    public function updateRecordRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRecordRemarkResponse::fromMap($this->doRPCRequest('UpdateRecordRemark', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateZoneRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateZoneRecordResponse
     */
    public function updateZoneRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateZoneRecordResponse::fromMap($this->doRPCRequest('UpdateZoneRecord', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateZoneRemarkResponse::fromMap($this->doRPCRequest('UpdateZoneRemark', '2018-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
