<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CancelComputeTaskByBcIdRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CancelComputeTaskByBcIdResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CancelYydTaskByBcIdRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CancelYydTaskByBcIdResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByDataSetIdRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByDataSetIdResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByMultiDataSetIdRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateComputeTaskByMultiDataSetIdResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateYydComputeTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateYydComputeTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateYydDataSetRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\CreateYydDataSetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetAvailableDataSetListResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetComputeResultRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetComputeResultResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetDataSetStatusRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetDataSetStatusResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetDataSetStsAKResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\ListYydComputeTaskListResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\ListYydDataSetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\SubmitDataSetTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20211130\Models\SubmitDataSetTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Umengfinplus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('umeng-finplus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelComputeTaskByBcIdRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelComputeTaskByBcIdResponse
     */
    public function cancelComputeTaskByBcIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bcId)) {
            $query['bcId'] = $request->bcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelComputeTaskByBcId',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/cancelComputeTaskByBcId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelComputeTaskByBcIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelComputeTaskByBcIdRequest $request
     *
     * @return CancelComputeTaskByBcIdResponse
     */
    public function cancelComputeTaskByBcId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelComputeTaskByBcIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateComputeTaskByDataSetIdRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateComputeTaskByDataSetIdResponse
     */
    public function createComputeTaskByDataSetIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->batchInfoForm)) {
            $body['BatchInfoForm'] = $request->batchInfoForm;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['Remarks'] = $request->remarks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateComputeTaskByDataSetId',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/createComputeTaskByDataSetId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateComputeTaskByDataSetIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateComputeTaskByDataSetIdRequest $request
     *
     * @return CreateComputeTaskByDataSetIdResponse
     */
    public function createComputeTaskByDataSetId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComputeTaskByDataSetIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateComputeTaskByMultiDataSetIdRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateComputeTaskByMultiDataSetIdResponse
     */
    public function createComputeTaskByMultiDataSetIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->dataSetIds)) {
            $body['dataSetIds'] = $request->dataSetIds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['remarks'] = $request->remarks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateComputeTaskByMultiDataSetId',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/createComputeTaskByMultiDataSetId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateComputeTaskByMultiDataSetIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateComputeTaskByMultiDataSetIdRequest $request
     *
     * @return CreateComputeTaskByMultiDataSetIdResponse
     */
    public function createComputeTaskByMultiDataSetId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComputeTaskByMultiDataSetIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAvailableDataSetListResponse
     */
    public function getAvailableDataSetListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAvailableDataSetList',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/getAvailableDataSetList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAvailableDataSetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAvailableDataSetListResponse
     */
    public function getAvailableDataSetList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAvailableDataSetListWithOptions($headers, $runtime);
    }

    /**
     * @param GetComputeResultRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetComputeResultResponse
     */
    public function getComputeResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bcId)) {
            $query['bcId'] = $request->bcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetComputeResult',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/getComputeTaskResult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetComputeResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetComputeResultRequest $request
     *
     * @return GetComputeResultResponse
     */
    public function getComputeResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComputeResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDataSetStatusRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetDataSetStatusResponse
     */
    public function getDataSetStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSetId)) {
            $query['dataSetId'] = $request->dataSetId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataSetStatus',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/getDataSetStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataSetStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataSetStatusRequest $request
     *
     * @return GetDataSetStatusResponse
     */
    public function getDataSetStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSetStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDataSetStsAKResponse
     */
    public function getDataSetStsAKWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataSetStsAK',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/getDataSetStsAk',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataSetStsAKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetDataSetStsAKResponse
     */
    public function getDataSetStsAK()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSetStsAKWithOptions($headers, $runtime);
    }

    /**
     * @param SubmitDataSetTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitDataSetTaskResponse
     */
    public function submitDataSetTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSetType)) {
            $body['dataSetType'] = $request->dataSetType;
        }
        if (!Utils::isUnset($request->idType)) {
            $body['idType'] = $request->idType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossFileName)) {
            $body['ossFileName'] = $request->ossFileName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitDataSetTask',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/submitDataSetTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitDataSetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitDataSetTaskRequest $request
     *
     * @return SubmitDataSetTaskResponse
     */
    public function submitDataSetTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDataSetTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CancelYydTaskByBcIdRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CancelYydTaskByBcIdResponse
     */
    public function cancelYydTaskByBcIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bcId)) {
            $query['bcId'] = $request->bcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'cancelYydTaskByBcId',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/yyd/task/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelYydTaskByBcIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelYydTaskByBcIdRequest $request
     *
     * @return CancelYydTaskByBcIdResponse
     */
    public function cancelYydTaskByBcId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelYydTaskByBcIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateYydComputeTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateYydComputeTaskResponse
     */
    public function createYydComputeTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['Remarks'] = $request->remarks;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['appId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'createYydComputeTask',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/yyd/task/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateYydComputeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateYydComputeTaskRequest $request
     *
     * @return CreateYydComputeTaskResponse
     */
    public function createYydComputeTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createYydComputeTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateYydDataSetRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateYydDataSetResponse
     */
    public function createYydDataSetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossFileName)) {
            $body['ossFileName'] = $request->ossFileName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'createYydDataSet',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/yyd/dataset/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateYydDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateYydDataSetRequest $request
     *
     * @return CreateYydDataSetResponse
     */
    public function createYydDataSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createYydDataSetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListYydComputeTaskListResponse
     */
    public function listYydComputeTaskListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'listYydComputeTaskList',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/yyd/task/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListYydComputeTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListYydComputeTaskListResponse
     */
    public function listYydComputeTaskList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listYydComputeTaskListWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListYydDataSetResponse
     */
    public function listYydDataSetWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'listYydDataSet',
            'version'     => '2021-11-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/batch_compute/yyd/dataset/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListYydDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListYydDataSetResponse
     */
    public function listYydDataSet()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listYydDataSetWithOptions($headers, $runtime);
    }
}
