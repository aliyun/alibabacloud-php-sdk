<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\BuildStsAK2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\BuildStsAK2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\BuildStsAKRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\BuildStsAKResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CancelTask2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CancelTask2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateComputeTask2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateComputeTask2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateComputeTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateComputeTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateDataSet2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateDataSet2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateDataSetRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateDataSetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateInstanceTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateInstanceTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateKnowLedgeRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateKnowLedgeResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateKnowLedgeShrinkRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\EncryptInvokeRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\EncryptInvokeResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetCrowdDatasetRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetCrowdDatasetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetCrowdDatasetShrinkRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetKnowledgeDataRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetKnowledgeDataResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetKnowledgeDataShrinkRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdInstanceTaskResultShrinkRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdStsAKResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListComputeTask2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListComputeTask2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListComputeTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListDataSet2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListDataSet2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ListDataSetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\RemoveDataSet2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\RemoveDataSet2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\RemoveDataSetRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\RemoveDataSetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SaveCrowdDatasetAndBindingDatasetRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SaveCrowdDatasetAndBindingDatasetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SaveCrowdDatasetAndBindingDatasetShrinkRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTask2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTask2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectDataSet2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectDataSet2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectDataSetRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectDataSetResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SubmitDataSetTask2Request;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SubmitDataSetTask2Response;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SubmitDataSetTaskRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SubmitDataSetTaskResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ValidateKnowLedgeRequest;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ValidateKnowLedgeResponse;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\ValidateKnowLedgeShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - BuildStsAKRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuildStsAKResponse
     *
     * @param BuildStsAKRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return BuildStsAKResponse
     */
    public function buildStsAKWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'BuildStsAK',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/buildStsAK',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BuildStsAKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - BuildStsAKRequest
     *
     * @returns BuildStsAKResponse
     *
     * @param BuildStsAKRequest $request
     *
     * @return BuildStsAKResponse
     */
    public function buildStsAK($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->buildStsAKWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - BuildStsAK2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BuildStsAK2Response
     *
     * @param BuildStsAK2Request $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return BuildStsAK2Response
     */
    public function buildStsAK2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->dataSetId) {
            @$body['dataSetId'] = $request->dataSetId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BuildStsAK2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/buildStsAK2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BuildStsAK2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - BuildStsAK2Request
     *
     * @returns BuildStsAK2Response
     *
     * @param BuildStsAK2Request $request
     *
     * @return BuildStsAK2Response
     */
    public function buildStsAK2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->buildStsAK2WithOptions($request, $headers, $runtime);
    }

    /**
     * 取消批量计算任务
     *
     * @param request - CancelTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param CancelTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CancelTask',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/cancelTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消批量计算任务
     *
     * @param request - CancelTaskRequest
     *
     * @returns CancelTaskResponse
     *
     * @param CancelTaskRequest $request
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消批量计算任务
     *
     * @param request - CancelTask2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTask2Response
     *
     * @param CancelTask2Request $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CancelTask2Response
     */
    public function cancelTask2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bcId) {
            @$body['bcId'] = $request->bcId;
        }

        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelTask2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/cancelTask2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelTask2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消批量计算任务
     *
     * @param request - CancelTask2Request
     *
     * @returns CancelTask2Response
     *
     * @param CancelTask2Request $request
     *
     * @return CancelTask2Response
     */
    public function cancelTask2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTask2WithOptions($request, $headers, $runtime);
    }

    /**
     * 创建批量计算任务
     *
     * @param request - CreateComputeTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComputeTaskResponse
     *
     * @param CreateComputeTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateComputeTaskResponse
     */
    public function createComputeTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->dataSetIds) {
            @$body['dataSetIds'] = $request->dataSetIds;
        }

        if (null !== $request->morseInfoList) {
            @$body['morseInfoList'] = $request->morseInfoList;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->remarks) {
            @$body['remarks'] = $request->remarks;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComputeTask',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/createComputeTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateComputeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建批量计算任务
     *
     * @param request - CreateComputeTaskRequest
     *
     * @returns CreateComputeTaskResponse
     *
     * @param CreateComputeTaskRequest $request
     *
     * @return CreateComputeTaskResponse
     */
    public function createComputeTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComputeTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建批量计算任务
     *
     * @param request - CreateComputeTask2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComputeTask2Response
     *
     * @param CreateComputeTask2Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateComputeTask2Response
     */
    public function createComputeTask2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->dataSetIds) {
            @$body['dataSetIds'] = $request->dataSetIds;
        }

        if (null !== $request->morseInfoList) {
            @$body['morseInfoList'] = $request->morseInfoList;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->remarks) {
            @$body['remarks'] = $request->remarks;
        }

        if (null !== $request->taskSource) {
            @$body['taskSource'] = $request->taskSource;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComputeTask2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/createComputeTask2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateComputeTask2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建批量计算任务
     *
     * @param request - CreateComputeTask2Request
     *
     * @returns CreateComputeTask2Response
     *
     * @param CreateComputeTask2Request $request
     *
     * @return CreateComputeTask2Response
     */
    public function createComputeTask2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComputeTask2WithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDataSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataSetResponse
     *
     * @param CreateDataSetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDataSetResponse
     */
    public function createDataSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataSet',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/createDataSet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDataSetRequest
     *
     * @returns CreateDataSetResponse
     *
     * @param CreateDataSetRequest $request
     *
     * @return CreateDataSetResponse
     */
    public function createDataSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataSetWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDataSet2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataSet2Response
     *
     * @param CreateDataSet2Request $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDataSet2Response
     */
    public function createDataSet2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataSet2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/createDataSet2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDataSet2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDataSet2Request
     *
     * @returns CreateDataSet2Response
     *
     * @param CreateDataSet2Request $request
     *
     * @return CreateDataSet2Response
     */
    public function createDataSet2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataSet2WithOptions($request, $headers, $runtime);
    }

    /**
     * 创建友准达实例任务
     *
     * @param request - CreateInstanceTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceTaskResponse
     *
     * @param CreateInstanceTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateInstanceTaskResponse
     */
    public function createInstanceTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->calbackUrl) {
            @$body['CalbackUrl'] = $request->calbackUrl;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->datasetIds) {
            @$body['DatasetIds'] = $request->datasetIds;
        }

        if (null !== $request->monitorType) {
            @$body['MonitorType'] = $request->monitorType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->outputConfig) {
            @$body['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->requestId) {
            @$body['RequestId'] = $request->requestId;
        }

        if (null !== $request->scoreStrategyConfig) {
            @$body['ScoreStrategyConfig'] = $request->scoreStrategyConfig;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceTask',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/CreateInstanceTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建友准达实例任务
     *
     * @param request - CreateInstanceTaskRequest
     *
     * @returns CreateInstanceTaskResponse
     *
     * @param CreateInstanceTaskRequest $request
     *
     * @return CreateInstanceTaskResponse
     */
    public function createInstanceTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 友准达-创建知识库.
     *
     * @param tmpReq - CreateKnowLedgeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKnowLedgeResponse
     *
     * @param CreateKnowLedgeRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateKnowLedgeResponse
     */
    public function createKnowLedgeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateKnowLedgeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKnowLedge',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/createKnowLedge',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKnowLedgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 友准达-创建知识库.
     *
     * @param request - CreateKnowLedgeRequest
     *
     * @returns CreateKnowLedgeResponse
     *
     * @param CreateKnowLedgeRequest $request
     *
     * @return CreateKnowLedgeResponse
     */
    public function createKnowLedge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createKnowLedgeWithOptions($request, $headers, $runtime);
    }

    /**
     * 加密调用OpenAPI.
     *
     * @param request - EncryptInvokeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EncryptInvokeResponse
     *
     * @param EncryptInvokeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return EncryptInvokeResponse
     */
    public function encryptInvokeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->encryptKey) {
            @$body['encryptKey'] = $request->encryptKey;
        }

        if (null !== $request->methodName) {
            @$body['methodName'] = $request->methodName;
        }

        if (null !== $request->sign) {
            @$body['sign'] = $request->sign;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EncryptInvoke',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/encryptInvoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EncryptInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 加密调用OpenAPI.
     *
     * @param request - EncryptInvokeRequest
     *
     * @returns EncryptInvokeResponse
     *
     * @param EncryptInvokeRequest $request
     *
     * @return EncryptInvokeResponse
     */
    public function encryptInvoke($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->encryptInvokeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取人群集信息.
     *
     * @param tmpReq - GetCrowdDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCrowdDatasetResponse
     *
     * @param GetCrowdDatasetRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetCrowdDatasetResponse
     */
    public function getCrowdDatasetWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetCrowdDatasetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->bodyShrink) {
            @$query['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCrowdDataset',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/getCrowdDataset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCrowdDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取人群集信息.
     *
     * @param request - GetCrowdDatasetRequest
     *
     * @returns GetCrowdDatasetResponse
     *
     * @param GetCrowdDatasetRequest $request
     *
     * @return GetCrowdDatasetResponse
     */
    public function getCrowdDataset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCrowdDatasetWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取知识库数据数据.
     *
     * @param tmpReq - GetKnowledgeDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKnowledgeDataResponse
     *
     * @param GetKnowledgeDataRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetKnowledgeDataResponse
     */
    public function getKnowledgeDataWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetKnowledgeDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->bodyShrink) {
            @$query['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKnowledgeData',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/getKnowledgeData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取知识库数据数据.
     *
     * @param request - GetKnowledgeDataRequest
     *
     * @returns GetKnowledgeDataResponse
     *
     * @param GetKnowledgeDataRequest $request
     *
     * @return GetKnowledgeDataResponse
     */
    public function getKnowledgeData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getKnowledgeDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例结果.
     *
     * @param tmpReq - GetYzdInstanceTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYzdInstanceTaskResultResponse
     *
     * @param GetYzdInstanceTaskResultRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetYzdInstanceTaskResultResponse
     */
    public function getYzdInstanceTaskResultWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetYzdInstanceTaskResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $query = [];
        if (null !== $request->bodyShrink) {
            @$query['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYzdInstanceTaskResult',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/getYzdInstanceTaskResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetYzdInstanceTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例结果.
     *
     * @param request - GetYzdInstanceTaskResultRequest
     *
     * @returns GetYzdInstanceTaskResultResponse
     *
     * @param GetYzdInstanceTaskResultRequest $request
     *
     * @return GetYzdInstanceTaskResultResponse
     */
    public function getYzdInstanceTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getYzdInstanceTaskResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 友准达知识库获取上传OSS数据文件的TOKEN.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYzdStsAKResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetYzdStsAKResponse
     */
    public function getYzdStsAKWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetYzdStsAK',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/getYzdStsAK',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetYzdStsAKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 友准达知识库获取上传OSS数据文件的TOKEN.
     *
     * @returns GetYzdStsAKResponse
     *
     * @return GetYzdStsAKResponse
     */
    public function getYzdStsAK()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getYzdStsAKWithOptions($headers, $runtime);
    }

    /**
     * 查询单个批量任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeTaskResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListComputeTaskResponse
     */
    public function listComputeTaskWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListComputeTask',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/listComputeTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComputeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个批量任务
     *
     * @returns ListComputeTaskResponse
     *
     * @return ListComputeTaskResponse
     */
    public function listComputeTask()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComputeTaskWithOptions($headers, $runtime);
    }

    /**
     * 查询单个批量任务
     *
     * @param request - ListComputeTask2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComputeTask2Response
     *
     * @param ListComputeTask2Request $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListComputeTask2Response
     */
    public function listComputeTask2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->pageNum) {
            @$body['pageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListComputeTask2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/listComputeTask2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComputeTask2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个批量任务
     *
     * @param request - ListComputeTask2Request
     *
     * @returns ListComputeTask2Response
     *
     * @param ListComputeTask2Request $request
     *
     * @return ListComputeTask2Response
     */
    public function listComputeTask2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComputeTask2WithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个数据集.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSetResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSetResponse
     */
    public function listDataSetWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDataSet',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/listDataSet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个数据集.
     *
     * @returns ListDataSetResponse
     *
     * @return ListDataSetResponse
     */
    public function listDataSet()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSetWithOptions($headers, $runtime);
    }

    /**
     * 查询单个数据集.
     *
     * @param request - ListDataSet2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSet2Response
     *
     * @param ListDataSet2Request $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListDataSet2Response
     */
    public function listDataSet2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->pageNo) {
            @$body['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSet2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/listDataSet2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSet2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个数据集.
     *
     * @param request - ListDataSet2Request
     *
     * @returns ListDataSet2Response
     *
     * @param ListDataSet2Request $request
     *
     * @return ListDataSet2Response
     */
    public function listDataSet2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSet2WithOptions($request, $headers, $runtime);
    }

    /**
     * 删除数据集.
     *
     * @param request - RemoveDataSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDataSetResponse
     *
     * @param RemoveDataSetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RemoveDataSetResponse
     */
    public function removeDataSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RemoveDataSet',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/removeDataSet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据集.
     *
     * @param request - RemoveDataSetRequest
     *
     * @returns RemoveDataSetResponse
     *
     * @param RemoveDataSetRequest $request
     *
     * @return RemoveDataSetResponse
     */
    public function removeDataSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeDataSetWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除数据集.
     *
     * @param request - RemoveDataSet2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDataSet2Response
     *
     * @param RemoveDataSet2Request $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveDataSet2Response
     */
    public function removeDataSet2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->dataSetId) {
            @$body['dataSetId'] = $request->dataSetId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveDataSet2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/removeDataSet2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveDataSet2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据集.
     *
     * @param request - RemoveDataSet2Request
     *
     * @returns RemoveDataSet2Response
     *
     * @param RemoveDataSet2Request $request
     *
     * @return RemoveDataSet2Response
     */
    public function removeDataSet2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeDataSet2WithOptions($request, $headers, $runtime);
    }

    /**
     * 创建人群集并绑定数据集.
     *
     * @param tmpReq - SaveCrowdDatasetAndBindingDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveCrowdDatasetAndBindingDatasetResponse
     *
     * @param SaveCrowdDatasetAndBindingDatasetRequest $tmpReq
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveCrowdDatasetAndBindingDatasetResponse
     */
    public function saveCrowdDatasetAndBindingDatasetWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveCrowdDatasetAndBindingDatasetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveCrowdDatasetAndBindingDataset',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/saveCrowdDatasetAndBindingDataset',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveCrowdDatasetAndBindingDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建人群集并绑定数据集.
     *
     * @param request - SaveCrowdDatasetAndBindingDatasetRequest
     *
     * @returns SaveCrowdDatasetAndBindingDatasetResponse
     *
     * @param SaveCrowdDatasetAndBindingDatasetRequest $request
     *
     * @return SaveCrowdDatasetAndBindingDatasetResponse
     */
    public function saveCrowdDatasetAndBindingDataset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveCrowdDatasetAndBindingDatasetWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个批量任务
     *
     * @param request - SelectComputeTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectComputeTaskResponse
     *
     * @param SelectComputeTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SelectComputeTaskResponse
     */
    public function selectComputeTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'SelectComputeTask',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/selectComputeTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SelectComputeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个批量任务
     *
     * @param request - SelectComputeTaskRequest
     *
     * @returns SelectComputeTaskResponse
     *
     * @param SelectComputeTaskRequest $request
     *
     * @return SelectComputeTaskResponse
     */
    public function selectComputeTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectComputeTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个批量任务
     *
     * @param request - SelectComputeTask2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectComputeTask2Response
     *
     * @param SelectComputeTask2Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SelectComputeTask2Response
     */
    public function selectComputeTask2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bcConfirm) {
            @$body['bcConfirm'] = $request->bcConfirm;
        }

        if (null !== $request->bcId) {
            @$body['bcId'] = $request->bcId;
        }

        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SelectComputeTask2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/selectComputeTask2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SelectComputeTask2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个批量任务
     *
     * @param request - SelectComputeTask2Request
     *
     * @returns SelectComputeTask2Response
     *
     * @param SelectComputeTask2Request $request
     *
     * @return SelectComputeTask2Response
     */
    public function selectComputeTask2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectComputeTask2WithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个数据集.
     *
     * @param request - SelectDataSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectDataSetResponse
     *
     * @param SelectDataSetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SelectDataSetResponse
     */
    public function selectDataSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'SelectDataSet',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/selectDataSet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SelectDataSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个数据集.
     *
     * @param request - SelectDataSetRequest
     *
     * @returns SelectDataSetResponse
     *
     * @param SelectDataSetRequest $request
     *
     * @return SelectDataSetResponse
     */
    public function selectDataSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectDataSetWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个数据集.
     *
     * @param request - SelectDataSet2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectDataSet2Response
     *
     * @param SelectDataSet2Request $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SelectDataSet2Response
     */
    public function selectDataSet2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->dataSetId) {
            @$body['dataSetId'] = $request->dataSetId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SelectDataSet2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/selectDataSet2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SelectDataSet2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个数据集.
     *
     * @param request - SelectDataSet2Request
     *
     * @returns SelectDataSet2Response
     *
     * @param SelectDataSet2Request $request
     *
     * @return SelectDataSet2Response
     */
    public function selectDataSet2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->selectDataSet2WithOptions($request, $headers, $runtime);
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - SubmitDataSetTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDataSetTaskResponse
     *
     * @param SubmitDataSetTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitDataSetTaskResponse
     */
    public function submitDataSetTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'SubmitDataSetTask',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/submitDataSetTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitDataSetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - SubmitDataSetTaskRequest
     *
     * @returns SubmitDataSetTaskResponse
     *
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
     * 提交数据集任务，校验数据集.
     *
     * @param request - SubmitDataSetTask2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDataSetTask2Response
     *
     * @param SubmitDataSetTask2Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitDataSetTask2Response
     */
    public function submitDataSetTask2WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->dataSetId) {
            @$body['dataSetId'] = $request->dataSetId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitDataSetTask2',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/bc/submitDataSetTask2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitDataSetTask2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交数据集任务，校验数据集.
     *
     * @param request - SubmitDataSetTask2Request
     *
     * @returns SubmitDataSetTask2Response
     *
     * @param SubmitDataSetTask2Request $request
     *
     * @return SubmitDataSetTask2Response
     */
    public function submitDataSetTask2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDataSetTask2WithOptions($request, $headers, $runtime);
    }

    /**
     * 提交知识库校验任务
     *
     * @param tmpReq - ValidateKnowLedgeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateKnowLedgeResponse
     *
     * @param ValidateKnowLedgeRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ValidateKnowLedgeResponse
     */
    public function validateKnowLedgeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ValidateKnowLedgeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'simple');
        }

        $body = [];
        if (null !== $request->bodyShrink) {
            @$body['body'] = $request->bodyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateKnowLedge',
            'version' => '2022-09-13',
            'protocol' => 'HTTPS',
            'pathname' => '/yzd/validateKnowLedge',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateKnowLedgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交知识库校验任务
     *
     * @param request - ValidateKnowLedgeRequest
     *
     * @returns ValidateKnowLedgeResponse
     *
     * @param ValidateKnowLedgeRequest $request
     *
     * @return ValidateKnowLedgeResponse
     */
    public function validateKnowLedge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateKnowLedgeWithOptions($request, $headers, $runtime);
    }
}
