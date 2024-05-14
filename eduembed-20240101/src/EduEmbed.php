<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabReservationRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabReservationResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabSessionRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabSessionResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabReservationRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabReservationResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabSessionRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabSessionResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabReservationsRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabReservationsResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabSessionsRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabSessionsResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabsRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabsResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\RemoveLabReservationRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\RemoveLabReservationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EduEmbed extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eduembed', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建实验预约
     *  *
     * @param CreateLabReservationRequest $request CreateLabReservationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLabReservationResponse CreateLabReservationResponse
     */
    public function createLabReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->labId)) {
            $body['LabId'] = $request->labId;
        }
        if (!Utils::isUnset($request->memberCount)) {
            $body['MemberCount'] = $request->memberCount;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLabReservation',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLabReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验预约
     *  *
     * @param CreateLabReservationRequest $request CreateLabReservationRequest
     *
     * @return CreateLabReservationResponse CreateLabReservationResponse
     */
    public function createLabReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabReservationWithOptions($request, $runtime);
    }

    /**
     * @summary 创建实验会话
     *  *
     * @param CreateLabSessionRequest $request CreateLabSessionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLabSessionResponse CreateLabSessionResponse
     */
    public function createLabSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->labId)) {
            $body['LabId'] = $request->labId;
        }
        if (!Utils::isUnset($request->ramAccountId)) {
            $body['RamAccountId'] = $request->ramAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLabSession',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLabSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实验会话
     *  *
     * @param CreateLabSessionRequest $request CreateLabSessionRequest
     *
     * @return CreateLabSessionResponse CreateLabSessionResponse
     */
    public function createLabSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实验详情
     *  *
     * @param DescribeLabRequest $request DescribeLabRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLabResponse DescribeLabResponse
     */
    public function describeLabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLab',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实验详情
     *  *
     * @param DescribeLabRequest $request DescribeLabRequest
     *
     * @return DescribeLabResponse DescribeLabResponse
     */
    public function describeLab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLabWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实验预约
     *  *
     * @param DescribeLabReservationRequest $request DescribeLabReservationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLabReservationResponse DescribeLabReservationResponse
     */
    public function describeLabReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLabReservation',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLabReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实验预约
     *  *
     * @param DescribeLabReservationRequest $request DescribeLabReservationRequest
     *
     * @return DescribeLabReservationResponse DescribeLabReservationResponse
     */
    public function describeLabReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLabReservationWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实验会话信息
     *  *
     * @param DescribeLabSessionRequest $request DescribeLabSessionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLabSessionResponse DescribeLabSessionResponse
     */
    public function describeLabSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLabSession',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLabSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实验会话信息
     *  *
     * @param DescribeLabSessionRequest $request DescribeLabSessionRequest
     *
     * @return DescribeLabSessionResponse DescribeLabSessionResponse
     */
    public function describeLabSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLabSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询实验预约
     *  *
     * @param PageListLabReservationsRequest $request PageListLabReservationsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return PageListLabReservationsResponse PageListLabReservationsResponse
     */
    public function pageListLabReservationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PageListLabReservations',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageListLabReservationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询实验预约
     *  *
     * @param PageListLabReservationsRequest $request PageListLabReservationsRequest
     *
     * @return PageListLabReservationsResponse PageListLabReservationsResponse
     */
    public function pageListLabReservations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListLabReservationsWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询实验会话
     *  *
     * @param PageListLabSessionsRequest $request PageListLabSessionsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PageListLabSessionsResponse PageListLabSessionsResponse
     */
    public function pageListLabSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PageListLabSessions',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageListLabSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询实验会话
     *  *
     * @param PageListLabSessionsRequest $request PageListLabSessionsRequest
     *
     * @return PageListLabSessionsResponse PageListLabSessionsResponse
     */
    public function pageListLabSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListLabSessionsWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询实验
     *  *
     * @param PageListLabsRequest $request PageListLabsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PageListLabsResponse PageListLabsResponse
     */
    public function pageListLabsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PageListLabs',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageListLabsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查询实验
     *  *
     * @param PageListLabsRequest $request PageListLabsRequest
     *
     * @return PageListLabsResponse PageListLabsResponse
     */
    public function pageListLabs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListLabsWithOptions($request, $runtime);
    }

    /**
     * @summary 移除实验预约
     *  *
     * @param RemoveLabReservationRequest $request RemoveLabReservationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveLabReservationResponse RemoveLabReservationResponse
     */
    public function removeLabReservationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->labReservationId)) {
            $body['LabReservationId'] = $request->labReservationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveLabReservation',
            'version'     => '2024-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveLabReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移除实验预约
     *  *
     * @param RemoveLabReservationRequest $request RemoveLabReservationRequest
     *
     * @return RemoveLabReservationResponse RemoveLabReservationResponse
     */
    public function removeLabReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeLabReservationWithOptions($request, $runtime);
    }
}
