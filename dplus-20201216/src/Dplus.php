<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskShrinkRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dplus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dplus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateImageAmazonTaskRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateImageAmazonTaskResponse
     */
    public function createImageAmazonTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageAmazonTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imgUrlList)) {
            $request->imgUrlListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imgUrlList, 'ImgUrlList', 'json');
        }
        if (!Utils::isUnset($tmpReq->textList)) {
            $request->textListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textList, 'TextList', 'json');
        }
        $query                 = [];
        $query['Gif']          = $request->gif;
        $query['ImgUrlList']   = $request->imgUrlListShrink;
        $query['TemplateMode'] = $request->templateMode;
        $query['TextList']     = $request->textListShrink;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateImageAmazonTask',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateImageAmazonTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImageAmazonTaskRequest $request
     *
     * @return CreateImageAmazonTaskResponse
     */
    public function createImageAmazonTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageAmazonTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTaskResult',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }
}
