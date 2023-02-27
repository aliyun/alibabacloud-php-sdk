<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20230117;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Viapi\V20230117\Models\CancelWaitingAsyncJobRequest;
use AlibabaCloud\SDK\Viapi\V20230117\Models\CancelWaitingAsyncJobResponse;
use AlibabaCloud\SDK\Viapi\V20230117\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Viapi\V20230117\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Viapi\V20230117\Models\QueryAsyncJobListRequest;
use AlibabaCloud\SDK\Viapi\V20230117\Models\QueryAsyncJobListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Viapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('viapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelWaitingAsyncJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelWaitingAsyncJobResponse
     */
    public function cancelWaitingAsyncJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelWaitingAsyncJob',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelWaitingAsyncJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelWaitingAsyncJobRequest $request
     *
     * @return CancelWaitingAsyncJobResponse
     */
    public function cancelWaitingAsyncJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelWaitingAsyncJobWithOptions($request, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncJobResult',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsyncJobResultRequest $request
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryAsyncJobListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAsyncJobListResponse
     */
    public function queryAsyncJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->popApiName)) {
            $body['PopApiName'] = $request->popApiName;
        }
        if (!Utils::isUnset($request->popProduct)) {
            $body['PopProduct'] = $request->popProduct;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAsyncJobList',
            'version'     => '2023-01-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAsyncJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAsyncJobListRequest $request
     *
     * @return QueryAsyncJobListResponse
     */
    public function queryAsyncJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsyncJobListWithOptions($request, $runtime);
    }
}
