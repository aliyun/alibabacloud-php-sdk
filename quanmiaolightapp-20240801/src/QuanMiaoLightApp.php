<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\CancelAsyncTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\CancelAsyncTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ExportAnalysisTagDetailByTaskIdRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ExportAnalysisTagDetailByTaskIdResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ExportAnalysisTagDetailByTaskIdShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateOutputFormatRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateOutputFormatResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateOutputFormatShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetTagMiningAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetTagMiningAnalysisTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisConfigResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEssayCorrectionRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEssayCorrectionResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationWritingRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationWritingResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunNetworkContentAuditRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunNetworkContentAuditResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunNetworkContentAuditShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunOcrParseRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunOcrParseResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptChatRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptChatResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptContinueRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptContinueResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptPlanningRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptPlanningResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptRefineRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptRefineResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunTagMiningAnalysisRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunTagMiningAnalysisResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunTagMiningAnalysisShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEnterpriseVocAnalysisTaskShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEssayCorrectionTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEssayCorrectionTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitEssayCorrectionTaskShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitTagMiningAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitTagMiningAnalysisTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitTagMiningAnalysisTaskShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\UpdateVideoAnalysisConfigRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\UpdateVideoAnalysisConfigResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\UpdateVideoAnalysisTaskRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\UpdateVideoAnalysisTaskResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class QuanMiaoLightApp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('quanmiaolightapp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 取消异步任务
     *
     * @param request - CancelAsyncTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAsyncTaskResponse
     *
     * @param string                 $workspaceId
     * @param CancelAsyncTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CancelAsyncTaskResponse
     */
    public function cancelAsyncTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelAsyncTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/cancelAsyncTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消异步任务
     *
     * @param request - CancelAsyncTaskRequest
     *
     * @returns CancelAsyncTaskResponse
     *
     * @param string                 $workspaceId
     * @param CancelAsyncTaskRequest $request
     *
     * @return CancelAsyncTaskResponse
     */
    public function cancelAsyncTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelAsyncTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 导出挖掘任务明细.
     *
     * @param tmpReq - ExportAnalysisTagDetailByTaskIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportAnalysisTagDetailByTaskIdResponse
     *
     * @param string                                 $workspaceId
     * @param ExportAnalysisTagDetailByTaskIdRequest $tmpReq
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskIdWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportAnalysisTagDetailByTaskIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categories) {
            $request->categoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'categories', 'json');
        }

        $body = [];
        if (null !== $request->categoriesShrink) {
            @$body['categories'] = $request->categoriesShrink;
        }

        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportAnalysisTagDetailByTaskId',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/exportAnalysisTagDetailByTaskId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出挖掘任务明细.
     *
     * @param request - ExportAnalysisTagDetailByTaskIdRequest
     *
     * @returns ExportAnalysisTagDetailByTaskIdResponse
     *
     * @param string                                 $workspaceId
     * @param ExportAnalysisTagDetailByTaskIdRequest $request
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskId($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportAnalysisTagDetailByTaskIdWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 新闻播报-抽取分类获取播报热点.
     *
     * @param request - GenerateBroadcastNewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateBroadcastNewsResponse
     *
     * @param string                       $workspaceId
     * @param GenerateBroadcastNewsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateBroadcastNewsResponse
     */
    public function generateBroadcastNewsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateBroadcastNews',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/GenerateBroadcastNews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateBroadcastNewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新闻播报-抽取分类获取播报热点.
     *
     * @param request - GenerateBroadcastNewsRequest
     *
     * @returns GenerateBroadcastNewsResponse
     *
     * @param string                       $workspaceId
     * @param GenerateBroadcastNewsRequest $request
     *
     * @return GenerateBroadcastNewsResponse
     */
    public function generateBroadcastNews($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateBroadcastNewsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-标签挖掘-获取示例输出格式.
     *
     * @param tmpReq - GenerateOutputFormatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateOutputFormatResponse
     *
     * @param string                      $workspaceId
     * @param GenerateOutputFormatRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateOutputFormatResponse
     */
    public function generateOutputFormatWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateOutputFormatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $body = [];
        if (null !== $request->businessType) {
            @$body['businessType'] = $request->businessType;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->extraInfo) {
            @$body['extraInfo'] = $request->extraInfo;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateOutputFormat',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/generateOutputFormat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateOutputFormatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-标签挖掘-获取示例输出格式.
     *
     * @param request - GenerateOutputFormatRequest
     *
     * @returns GenerateOutputFormatResponse
     *
     * @param string                      $workspaceId
     * @param GenerateOutputFormatRequest $request
     *
     * @return GenerateOutputFormatResponse
     */
    public function generateOutputFormat($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateOutputFormatWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取企业VOC分析任务结果.
     *
     * @param request - GetEnterpriseVocAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnterpriseVocAnalysisTaskResponse
     *
     * @param string                              $workspaceId
     * @param GetEnterpriseVocAnalysisTaskRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnterpriseVocAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/getEnterpriseVocAnalysisTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取企业VOC分析任务结果.
     *
     * @param request - GetEnterpriseVocAnalysisTaskRequest
     *
     * @returns GetEnterpriseVocAnalysisTaskResponse
     *
     * @param string                              $workspaceId
     * @param GetEnterpriseVocAnalysisTaskRequest $request
     *
     * @return GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnterpriseVocAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取作业批改结果.
     *
     * @param request - GetEssayCorrectionTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEssayCorrectionTaskResponse
     *
     * @param string                        $workspaceId
     * @param GetEssayCorrectionTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetEssayCorrectionTaskResponse
     */
    public function getEssayCorrectionTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEssayCorrectionTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/getEssayCorrectionTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEssayCorrectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取作业批改结果.
     *
     * @param request - GetEssayCorrectionTaskRequest
     *
     * @returns GetEssayCorrectionTaskResponse
     *
     * @param string                        $workspaceId
     * @param GetEssayCorrectionTaskRequest $request
     *
     * @return GetEssayCorrectionTaskResponse
     */
    public function getEssayCorrectionTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEssayCorrectionTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取挖掘分析任务结果.
     *
     * @param request - GetTagMiningAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTagMiningAnalysisTaskResponse
     *
     * @param string                          $workspaceId
     * @param GetTagMiningAnalysisTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetTagMiningAnalysisTaskResponse
     */
    public function getTagMiningAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTagMiningAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/getTagMiningAnalysisTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTagMiningAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取挖掘分析任务结果.
     *
     * @param request - GetTagMiningAnalysisTaskRequest
     *
     * @returns GetTagMiningAnalysisTaskResponse
     *
     * @param string                          $workspaceId
     * @param GetTagMiningAnalysisTaskRequest $request
     *
     * @return GetTagMiningAnalysisTaskResponse
     */
    public function getTagMiningAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTagMiningAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 视频理解-获取配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoAnalysisConfigResponse
     *
     * @param string         $workspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVideoAnalysisConfigResponse
     */
    public function getVideoAnalysisConfigWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetVideoAnalysisConfig',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/videoAnalysis/getVideoAnalysisConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoAnalysisConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频理解-获取配置.
     *
     * @returns GetVideoAnalysisConfigResponse
     *
     * @param string $workspaceId
     *
     * @return GetVideoAnalysisConfigResponse
     */
    public function getVideoAnalysisConfig($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoAnalysisConfigWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * 轻应用-获取视频理解异步任务结果.
     *
     * @param request - GetVideoAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoAnalysisTaskResponse
     *
     * @param string                      $workspaceId
     * @param GetVideoAnalysisTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetVideoAnalysisTaskResponse
     */
    public function getVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/videoAnalysis/getVideoAnalysisTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-获取视频理解异步任务结果.
     *
     * @param request - GetVideoAnalysisTaskRequest
     *
     * @returns GetVideoAnalysisTaskResponse
     *
     * @param string                      $workspaceId
     * @param GetVideoAnalysisTaskRequest $request
     *
     * @return GetVideoAnalysisTaskResponse
     */
    public function getVideoAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 热点新闻推荐.
     *
     * @param request - HotNewsRecommendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotNewsRecommendResponse
     *
     * @param string                  $workspaceId
     * @param HotNewsRecommendRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HotNewsRecommendResponse
     */
    public function hotNewsRecommendWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HotNewsRecommend',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/hotNewsRecommend',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotNewsRecommendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 热点新闻推荐.
     *
     * @param request - HotNewsRecommendRequest
     *
     * @returns HotNewsRecommendResponse
     *
     * @param string                  $workspaceId
     * @param HotNewsRecommendRequest $request
     *
     * @return HotNewsRecommendResponse
     */
    public function hotNewsRecommend($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->hotNewsRecommendWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取挖掘分析结果明细列表.
     *
     * @param request - ListAnalysisTagDetailByTaskIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnalysisTagDetailByTaskIdResponse
     *
     * @param string                               $workspaceId
     * @param ListAnalysisTagDetailByTaskIdRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskIdWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnalysisTagDetailByTaskId',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/listAnalysisTagDetailByTaskId',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取挖掘分析结果明细列表.
     *
     * @param request - ListAnalysisTagDetailByTaskIdRequest
     *
     * @returns ListAnalysisTagDetailByTaskIdResponse
     *
     * @param string                               $workspaceId
     * @param ListAnalysisTagDetailByTaskIdRequest $request
     *
     * @return ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskId($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnalysisTagDetailByTaskIdWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-新闻播报-获取热点话题摘要列表.
     *
     * @param request - ListHotTopicSummariesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotTopicSummariesResponse
     *
     * @param string                       $workspaceId
     * @param ListHotTopicSummariesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListHotTopicSummariesResponse
     */
    public function listHotTopicSummariesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->hotTopic) {
            @$body['hotTopic'] = $request->hotTopic;
        }

        if (null !== $request->hotTopicVersion) {
            @$body['hotTopicVersion'] = $request->hotTopicVersion;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHotTopicSummaries',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/listHotTopicSummaries',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotTopicSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-新闻播报-获取热点话题摘要列表.
     *
     * @param request - ListHotTopicSummariesRequest
     *
     * @returns ListHotTopicSummariesResponse
     *
     * @param string                       $workspaceId
     * @param ListHotTopicSummariesRequest $request
     *
     * @return ListHotTopicSummariesResponse
     */
    public function listHotTopicSummaries($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHotTopicSummariesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 企业VOC分析.
     *
     * @param tmpReq - RunEnterpriseVocAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunEnterpriseVocAnalysisResponse
     *
     * @param string                          $workspaceId
     * @param RunEnterpriseVocAnalysisRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return RunEnterpriseVocAnalysisResponse
     */
    public function runEnterpriseVocAnalysisWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunEnterpriseVocAnalysisShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterTags) {
            $request->filterTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterTags, 'filterTags', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $body = [];
        if (null !== $request->akProxy) {
            @$body['akProxy'] = $request->akProxy;
        }

        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->extraInfo) {
            @$body['extraInfo'] = $request->extraInfo;
        }

        if (null !== $request->filterTagsShrink) {
            @$body['filterTags'] = $request->filterTagsShrink;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->outputFormat) {
            @$body['outputFormat'] = $request->outputFormat;
        }

        if (null !== $request->sourceTrace) {
            @$body['sourceTrace'] = $request->sourceTrace;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunEnterpriseVocAnalysis',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runEnterpriseVocAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunEnterpriseVocAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 企业VOC分析.
     *
     * @param request - RunEnterpriseVocAnalysisRequest
     *
     * @returns RunEnterpriseVocAnalysisResponse
     *
     * @param string                          $workspaceId
     * @param RunEnterpriseVocAnalysisRequest $request
     *
     * @return RunEnterpriseVocAnalysisResponse
     */
    public function runEnterpriseVocAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runEnterpriseVocAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 作业批改.
     *
     * @param request - RunEssayCorrectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunEssayCorrectionResponse
     *
     * @param string                    $workspaceId
     * @param RunEssayCorrectionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RunEssayCorrectionResponse
     */
    public function runEssayCorrectionWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->answer) {
            @$body['answer'] = $request->answer;
        }

        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->otherReviewPoints) {
            @$body['otherReviewPoints'] = $request->otherReviewPoints;
        }

        if (null !== $request->question) {
            @$body['question'] = $request->question;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        if (null !== $request->totalScore) {
            @$body['totalScore'] = $request->totalScore;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunEssayCorrection',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runEssayCorrection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunEssayCorrectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 作业批改.
     *
     * @param request - RunEssayCorrectionRequest
     *
     * @returns RunEssayCorrectionResponse
     *
     * @param string                    $workspaceId
     * @param RunEssayCorrectionRequest $request
     *
     * @return RunEssayCorrectionResponse
     */
    public function runEssayCorrection($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runEssayCorrectionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-热点播报-问答.
     *
     * @param tmpReq - RunHotTopicChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunHotTopicChatResponse
     *
     * @param string                 $workspaceId
     * @param RunHotTopicChatRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RunHotTopicChatResponse
     */
    public function runHotTopicChatWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunHotTopicChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->generateOptions) {
            $request->generateOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }

        if (null !== $tmpReq->hotTopics) {
            $request->hotTopicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hotTopics, 'hotTopics', 'json');
        }

        if (null !== $tmpReq->messages) {
            $request->messagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'messages', 'json');
        }

        if (null !== $tmpReq->stepForBroadcastContentConfig) {
            $request->stepForBroadcastContentConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->stepForBroadcastContentConfig, 'stepForBroadcastContentConfig', 'json');
        }

        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->generateOptionsShrink) {
            @$body['generateOptions'] = $request->generateOptionsShrink;
        }

        if (null !== $request->hotTopicVersion) {
            @$body['hotTopicVersion'] = $request->hotTopicVersion;
        }

        if (null !== $request->hotTopicsShrink) {
            @$body['hotTopics'] = $request->hotTopicsShrink;
        }

        if (null !== $request->imageCount) {
            @$body['imageCount'] = $request->imageCount;
        }

        if (null !== $request->messagesShrink) {
            @$body['messages'] = $request->messagesShrink;
        }

        if (null !== $request->modelCustomPromptTemplate) {
            @$body['modelCustomPromptTemplate'] = $request->modelCustomPromptTemplate;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->originalSessionId) {
            @$body['originalSessionId'] = $request->originalSessionId;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->stepForBroadcastContentConfigShrink) {
            @$body['stepForBroadcastContentConfig'] = $request->stepForBroadcastContentConfigShrink;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunHotTopicChat',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runHotTopicChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunHotTopicChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-热点播报-问答.
     *
     * @param request - RunHotTopicChatRequest
     *
     * @returns RunHotTopicChatResponse
     *
     * @param string                 $workspaceId
     * @param RunHotTopicChatRequest $request
     *
     * @return RunHotTopicChatResponse
     */
    public function runHotTopicChat($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runHotTopicChatWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-热点播报-热点摘要生成.
     *
     * @param tmpReq - RunHotTopicSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunHotTopicSummaryResponse
     *
     * @param string                    $workspaceId
     * @param RunHotTopicSummaryRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RunHotTopicSummaryResponse
     */
    public function runHotTopicSummaryWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunHotTopicSummaryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->stepForCustomSummaryStyleConfig) {
            $request->stepForCustomSummaryStyleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->stepForCustomSummaryStyleConfig, 'stepForCustomSummaryStyleConfig', 'json');
        }

        if (null !== $tmpReq->topicIds) {
            $request->topicIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topicIds, 'topicIds', 'json');
        }

        $body = [];
        if (null !== $request->hotTopicVersion) {
            @$body['hotTopicVersion'] = $request->hotTopicVersion;
        }

        if (null !== $request->stepForCustomSummaryStyleConfigShrink) {
            @$body['stepForCustomSummaryStyleConfig'] = $request->stepForCustomSummaryStyleConfigShrink;
        }

        if (null !== $request->topicIdsShrink) {
            @$body['topicIds'] = $request->topicIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunHotTopicSummary',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runHotTopicSummary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunHotTopicSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-热点播报-热点摘要生成.
     *
     * @param request - RunHotTopicSummaryRequest
     *
     * @returns RunHotTopicSummaryResponse
     *
     * @param string                    $workspaceId
     * @param RunHotTopicSummaryRequest $request
     *
     * @return RunHotTopicSummaryResponse
     */
    public function runHotTopicSummary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runHotTopicSummaryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 营销信息抽取服务
     *
     * @param tmpReq - RunMarketingInformationExtractRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunMarketingInformationExtractResponse
     *
     * @param string                                $workspaceId
     * @param RunMarketingInformationExtractRequest $tmpReq
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return RunMarketingInformationExtractResponse
     */
    public function runMarketingInformationExtractWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunMarketingInformationExtractShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sourceMaterials) {
            $request->sourceMaterialsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceMaterials, 'sourceMaterials', 'json');
        }

        $body = [];
        if (null !== $request->customPrompt) {
            @$body['customPrompt'] = $request->customPrompt;
        }

        if (null !== $request->extractType) {
            @$body['extractType'] = $request->extractType;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->sourceMaterialsShrink) {
            @$body['sourceMaterials'] = $request->sourceMaterialsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMarketingInformationExtract',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runMarketingInformationExtract',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMarketingInformationExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 营销信息抽取服务
     *
     * @param request - RunMarketingInformationExtractRequest
     *
     * @returns RunMarketingInformationExtractResponse
     *
     * @param string                                $workspaceId
     * @param RunMarketingInformationExtractRequest $request
     *
     * @return RunMarketingInformationExtractResponse
     */
    public function runMarketingInformationExtract($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runMarketingInformationExtractWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 营销文案写作服务
     *
     * @param request - RunMarketingInformationWritingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunMarketingInformationWritingResponse
     *
     * @param string                                $workspaceId
     * @param RunMarketingInformationWritingRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return RunMarketingInformationWritingResponse
     */
    public function runMarketingInformationWritingWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->customLimitation) {
            @$body['customLimitation'] = $request->customLimitation;
        }

        if (null !== $request->customPrompt) {
            @$body['customPrompt'] = $request->customPrompt;
        }

        if (null !== $request->inputExample) {
            @$body['inputExample'] = $request->inputExample;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->outputExample) {
            @$body['outputExample'] = $request->outputExample;
        }

        if (null !== $request->sourceMaterial) {
            @$body['sourceMaterial'] = $request->sourceMaterial;
        }

        if (null !== $request->writingType) {
            @$body['writingType'] = $request->writingType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMarketingInformationWriting',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runMarketingInformationWriting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMarketingInformationWritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 营销文案写作服务
     *
     * @param request - RunMarketingInformationWritingRequest
     *
     * @returns RunMarketingInformationWritingResponse
     *
     * @param string                                $workspaceId
     * @param RunMarketingInformationWritingRequest $request
     *
     * @return RunMarketingInformationWritingResponse
     */
    public function runMarketingInformationWriting($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runMarketingInformationWritingWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-网络内容审核.
     *
     * @param tmpReq - RunNetworkContentAuditRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunNetworkContentAuditResponse
     *
     * @param string                        $workspaceId
     * @param RunNetworkContentAuditRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return RunNetworkContentAuditResponse
     */
    public function runNetworkContentAuditWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunNetworkContentAuditShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->businessType) {
            @$body['businessType'] = $request->businessType;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->extraInfo) {
            @$body['extraInfo'] = $request->extraInfo;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->outputFormat) {
            @$body['outputFormat'] = $request->outputFormat;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunNetworkContentAudit',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runNetworkContentAudit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunNetworkContentAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-网络内容审核.
     *
     * @param request - RunNetworkContentAuditRequest
     *
     * @returns RunNetworkContentAuditResponse
     *
     * @param string                        $workspaceId
     * @param RunNetworkContentAuditRequest $request
     *
     * @return RunNetworkContentAuditResponse
     */
    public function runNetworkContentAudit($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runNetworkContentAuditWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 作业批改.
     *
     * @param request - RunOcrParseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunOcrParseResponse
     *
     * @param string             $workspaceId
     * @param RunOcrParseRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RunOcrParseResponse
     */
    public function runOcrParseWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileKey) {
            @$body['fileKey'] = $request->fileKey;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunOcrParse',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runOcrParse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunOcrParseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 作业批改.
     *
     * @param request - RunOcrParseRequest
     *
     * @returns RunOcrParseResponse
     *
     * @param string             $workspaceId
     * @param RunOcrParseRequest $request
     *
     * @return RunOcrParseResponse
     */
    public function runOcrParse($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runOcrParseWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 长剧本创作.
     *
     * @param request - RunScriptChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunScriptChatResponse
     *
     * @param string               $workspaceId
     * @param RunScriptChatRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RunScriptChatResponse
     */
    public function runScriptChatWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptChat',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runScriptChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 长剧本创作.
     *
     * @param request - RunScriptChatRequest
     *
     * @returns RunScriptChatResponse
     *
     * @param string               $workspaceId
     * @param RunScriptChatRequest $request
     *
     * @return RunScriptChatResponse
     */
    public function runScriptChat($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptChatWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 剧本续写.
     *
     * @param request - RunScriptContinueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunScriptContinueResponse
     *
     * @param string                   $workspaceId
     * @param RunScriptContinueRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunScriptContinueResponse
     */
    public function runScriptContinueWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->scriptSummary) {
            @$body['scriptSummary'] = $request->scriptSummary;
        }

        if (null !== $request->scriptTypeKeyword) {
            @$body['scriptTypeKeyword'] = $request->scriptTypeKeyword;
        }

        if (null !== $request->userProvidedContent) {
            @$body['userProvidedContent'] = $request->userProvidedContent;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptContinue',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runScriptContinue',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptContinueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 剧本续写.
     *
     * @param request - RunScriptContinueRequest
     *
     * @returns RunScriptContinueResponse
     *
     * @param string                   $workspaceId
     * @param RunScriptContinueRequest $request
     *
     * @return RunScriptContinueResponse
     */
    public function runScriptContinue($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptContinueWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 剧本策划.
     *
     * @param request - RunScriptPlanningRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunScriptPlanningResponse
     *
     * @param string                   $workspaceId
     * @param RunScriptPlanningRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunScriptPlanningResponse
     */
    public function runScriptPlanningWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->additionalNote) {
            @$body['additionalNote'] = $request->additionalNote;
        }

        if (null !== $request->dialogueInScene) {
            @$body['dialogueInScene'] = $request->dialogueInScene;
        }

        if (null !== $request->plotConflict) {
            @$body['plotConflict'] = $request->plotConflict;
        }

        if (null !== $request->scriptName) {
            @$body['scriptName'] = $request->scriptName;
        }

        if (null !== $request->scriptShotCount) {
            @$body['scriptShotCount'] = $request->scriptShotCount;
        }

        if (null !== $request->scriptSummary) {
            @$body['scriptSummary'] = $request->scriptSummary;
        }

        if (null !== $request->scriptTypeKeyword) {
            @$body['scriptTypeKeyword'] = $request->scriptTypeKeyword;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptPlanning',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runScriptPlanning',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptPlanningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 剧本策划.
     *
     * @param request - RunScriptPlanningRequest
     *
     * @returns RunScriptPlanningResponse
     *
     * @param string                   $workspaceId
     * @param RunScriptPlanningRequest $request
     *
     * @return RunScriptPlanningResponse
     */
    public function runScriptPlanning($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptPlanningWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 剧本对话内容的整理.
     *
     * @param request - RunScriptRefineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunScriptRefineResponse
     *
     * @param string                 $workspaceId
     * @param RunScriptRefineRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RunScriptRefineResponse
     */
    public function runScriptRefineWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptRefine',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runScriptRefine',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptRefineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 剧本对话内容的整理.
     *
     * @param request - RunScriptRefineRequest
     *
     * @returns RunScriptRefineResponse
     *
     * @param string                 $workspaceId
     * @param RunScriptRefineRequest $request
     *
     * @return RunScriptRefineResponse
     */
    public function runScriptRefine($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptRefineWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 文体学习和写作推理服务
     *
     * @param tmpReq - RunStyleWritingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunStyleWritingResponse
     *
     * @param string                 $workspaceId
     * @param RunStyleWritingRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RunStyleWritingResponse
     */
    public function runStyleWritingWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunStyleWritingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->learningSamples) {
            $request->learningSamplesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->learningSamples, 'learningSamples', 'json');
        }

        if (null !== $tmpReq->referenceMaterials) {
            $request->referenceMaterialsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceMaterials, 'referenceMaterials', 'json');
        }

        $body = [];
        if (null !== $request->learningSamplesShrink) {
            @$body['learningSamples'] = $request->learningSamplesShrink;
        }

        if (null !== $request->processStage) {
            @$body['processStage'] = $request->processStage;
        }

        if (null !== $request->referenceMaterialsShrink) {
            @$body['referenceMaterials'] = $request->referenceMaterialsShrink;
        }

        if (null !== $request->styleFeature) {
            @$body['styleFeature'] = $request->styleFeature;
        }

        if (null !== $request->useSearch) {
            @$body['useSearch'] = $request->useSearch;
        }

        if (null !== $request->writingTheme) {
            @$body['writingTheme'] = $request->writingTheme;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunStyleWriting',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runStyleWriting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunStyleWritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文体学习和写作推理服务
     *
     * @param request - RunStyleWritingRequest
     *
     * @returns RunStyleWritingResponse
     *
     * @param string                 $workspaceId
     * @param RunStyleWritingRequest $request
     *
     * @return RunStyleWritingResponse
     */
    public function runStyleWriting($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runStyleWritingWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-标签挖掘.
     *
     * @param tmpReq - RunTagMiningAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunTagMiningAnalysisResponse
     *
     * @param string                      $workspaceId
     * @param RunTagMiningAnalysisRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RunTagMiningAnalysisResponse
     */
    public function runTagMiningAnalysisWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunTagMiningAnalysisShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->businessType) {
            @$body['businessType'] = $request->businessType;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->extraInfo) {
            @$body['extraInfo'] = $request->extraInfo;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->outputFormat) {
            @$body['outputFormat'] = $request->outputFormat;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunTagMiningAnalysis',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runTagMiningAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunTagMiningAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-标签挖掘.
     *
     * @param request - RunTagMiningAnalysisRequest
     *
     * @returns RunTagMiningAnalysisResponse
     *
     * @param string                      $workspaceId
     * @param RunTagMiningAnalysisRequest $request
     *
     * @return RunTagMiningAnalysisResponse
     */
    public function runTagMiningAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runTagMiningAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-视频理解.
     *
     * @param tmpReq - RunVideoAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunVideoAnalysisResponse
     *
     * @param string                  $workspaceId
     * @param RunVideoAnalysisRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RunVideoAnalysisResponse
     */
    public function runVideoAnalysisWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunVideoAnalysisShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeGenerateOptions) {
            $request->excludeGenerateOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeGenerateOptions, 'excludeGenerateOptions', 'json');
        }

        if (null !== $tmpReq->frameSampleMethod) {
            $request->frameSampleMethodShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->frameSampleMethod, 'frameSampleMethod', 'json');
        }

        if (null !== $tmpReq->generateOptions) {
            $request->generateOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }

        if (null !== $tmpReq->textProcessTasks) {
            $request->textProcessTasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->textProcessTasks, 'textProcessTasks', 'json');
        }

        if (null !== $tmpReq->videoCaptionInfo) {
            $request->videoCaptionInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoCaptionInfo, 'videoCaptionInfo', 'json');
        }

        if (null !== $tmpReq->videoRoles) {
            $request->videoRolesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoRoles, 'videoRoles', 'json');
        }

        $body = [];
        if (null !== $request->excludeGenerateOptionsShrink) {
            @$body['excludeGenerateOptions'] = $request->excludeGenerateOptionsShrink;
        }

        if (null !== $request->faceIdentitySimilarityMinScore) {
            @$body['faceIdentitySimilarityMinScore'] = $request->faceIdentitySimilarityMinScore;
        }

        if (null !== $request->frameSampleMethodShrink) {
            @$body['frameSampleMethod'] = $request->frameSampleMethodShrink;
        }

        if (null !== $request->generateOptionsShrink) {
            @$body['generateOptions'] = $request->generateOptionsShrink;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        if (null !== $request->modelCustomPromptTemplate) {
            @$body['modelCustomPromptTemplate'] = $request->modelCustomPromptTemplate;
        }

        if (null !== $request->modelCustomPromptTemplateId) {
            @$body['modelCustomPromptTemplateId'] = $request->modelCustomPromptTemplateId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->originalSessionId) {
            @$body['originalSessionId'] = $request->originalSessionId;
        }

        if (null !== $request->snapshotInterval) {
            @$body['snapshotInterval'] = $request->snapshotInterval;
        }

        if (null !== $request->splitInterval) {
            @$body['splitInterval'] = $request->splitInterval;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->textProcessTasksShrink) {
            @$body['textProcessTasks'] = $request->textProcessTasksShrink;
        }

        if (null !== $request->videoCaptionInfoShrink) {
            @$body['videoCaptionInfo'] = $request->videoCaptionInfoShrink;
        }

        if (null !== $request->videoExtraInfo) {
            @$body['videoExtraInfo'] = $request->videoExtraInfo;
        }

        if (null !== $request->videoModelCustomPromptTemplate) {
            @$body['videoModelCustomPromptTemplate'] = $request->videoModelCustomPromptTemplate;
        }

        if (null !== $request->videoModelId) {
            @$body['videoModelId'] = $request->videoModelId;
        }

        if (null !== $request->videoRolesShrink) {
            @$body['videoRoles'] = $request->videoRolesShrink;
        }

        if (null !== $request->videoShotFaceIdentityCount) {
            @$body['videoShotFaceIdentityCount'] = $request->videoShotFaceIdentityCount;
        }

        if (null !== $request->videoUrl) {
            @$body['videoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunVideoAnalysis',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/runVideoAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunVideoAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-视频理解.
     *
     * @param request - RunVideoAnalysisRequest
     *
     * @returns RunVideoAnalysisResponse
     *
     * @param string                  $workspaceId
     * @param RunVideoAnalysisRequest $request
     *
     * @return RunVideoAnalysisResponse
     */
    public function runVideoAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runVideoAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 提交企业VOC异步任务
     *
     * @param tmpReq - SubmitEnterpriseVocAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitEnterpriseVocAnalysisTaskResponse
     *
     * @param string                                 $workspaceId
     * @param SubmitEnterpriseVocAnalysisTaskRequest $tmpReq
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitEnterpriseVocAnalysisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contents) {
            $request->contentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'contents', 'json');
        }

        if (null !== $tmpReq->filterTags) {
            $request->filterTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterTags, 'filterTags', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->contentsShrink) {
            @$body['contents'] = $request->contentsShrink;
        }

        if (null !== $request->extraInfo) {
            @$body['extraInfo'] = $request->extraInfo;
        }

        if (null !== $request->fileKey) {
            @$body['fileKey'] = $request->fileKey;
        }

        if (null !== $request->filterTagsShrink) {
            @$body['filterTags'] = $request->filterTagsShrink;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->outputFormat) {
            @$body['outputFormat'] = $request->outputFormat;
        }

        if (null !== $request->sourceTrace) {
            @$body['sourceTrace'] = $request->sourceTrace;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitEnterpriseVocAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/submitEnterpriseVocAnalysisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交企业VOC异步任务
     *
     * @param request - SubmitEnterpriseVocAnalysisTaskRequest
     *
     * @returns SubmitEnterpriseVocAnalysisTaskResponse
     *
     * @param string                                 $workspaceId
     * @param SubmitEnterpriseVocAnalysisTaskRequest $request
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitEnterpriseVocAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 提交批改任务
     *
     * @param tmpReq - SubmitEssayCorrectionTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitEssayCorrectionTaskResponse
     *
     * @param string                           $workspaceId
     * @param SubmitEssayCorrectionTaskRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitEssayCorrectionTaskResponse
     */
    public function submitEssayCorrectionTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitEssayCorrectionTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tasks) {
            $request->tasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'tasks', 'json');
        }

        $body = [];
        if (null !== $request->grade) {
            @$body['grade'] = $request->grade;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->otherReviewPoints) {
            @$body['otherReviewPoints'] = $request->otherReviewPoints;
        }

        if (null !== $request->question) {
            @$body['question'] = $request->question;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        if (null !== $request->tasksShrink) {
            @$body['tasks'] = $request->tasksShrink;
        }

        if (null !== $request->totalScore) {
            @$body['totalScore'] = $request->totalScore;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitEssayCorrectionTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/submitEssayCorrectionTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEssayCorrectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交批改任务
     *
     * @param request - SubmitEssayCorrectionTaskRequest
     *
     * @returns SubmitEssayCorrectionTaskResponse
     *
     * @param string                           $workspaceId
     * @param SubmitEssayCorrectionTaskRequest $request
     *
     * @return SubmitEssayCorrectionTaskResponse
     */
    public function submitEssayCorrectionTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitEssayCorrectionTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-标签挖掘.
     *
     * @param tmpReq - SubmitTagMiningAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTagMiningAnalysisTaskResponse
     *
     * @param string                             $workspaceId
     * @param SubmitTagMiningAnalysisTaskRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitTagMiningAnalysisTaskResponse
     */
    public function submitTagMiningAnalysisTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTagMiningAnalysisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contents) {
            $request->contentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'contents', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->businessType) {
            @$body['businessType'] = $request->businessType;
        }

        if (null !== $request->contentsShrink) {
            @$body['contents'] = $request->contentsShrink;
        }

        if (null !== $request->extraInfo) {
            @$body['extraInfo'] = $request->extraInfo;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->outputFormat) {
            @$body['outputFormat'] = $request->outputFormat;
        }

        if (null !== $request->tagsShrink) {
            @$body['tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskDescription) {
            @$body['taskDescription'] = $request->taskDescription;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitTagMiningAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/submitTagMiningAnalysisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTagMiningAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-标签挖掘.
     *
     * @param request - SubmitTagMiningAnalysisTaskRequest
     *
     * @returns SubmitTagMiningAnalysisTaskResponse
     *
     * @param string                             $workspaceId
     * @param SubmitTagMiningAnalysisTaskRequest $request
     *
     * @return SubmitTagMiningAnalysisTaskResponse
     */
    public function submitTagMiningAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitTagMiningAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 轻应用-提交视频理解任务
     *
     * @param tmpReq - SubmitVideoAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoAnalysisTaskResponse
     *
     * @param string                         $workspaceId
     * @param SubmitVideoAnalysisTaskRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitVideoAnalysisTaskResponse
     */
    public function submitVideoAnalysisTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitVideoAnalysisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeGenerateOptions) {
            $request->excludeGenerateOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeGenerateOptions, 'excludeGenerateOptions', 'json');
        }

        if (null !== $tmpReq->frameSampleMethod) {
            $request->frameSampleMethodShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->frameSampleMethod, 'frameSampleMethod', 'json');
        }

        if (null !== $tmpReq->generateOptions) {
            $request->generateOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }

        if (null !== $tmpReq->textProcessTasks) {
            $request->textProcessTasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->textProcessTasks, 'textProcessTasks', 'json');
        }

        if (null !== $tmpReq->videoCaptionInfo) {
            $request->videoCaptionInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoCaptionInfo, 'videoCaptionInfo', 'json');
        }

        if (null !== $tmpReq->videoRoles) {
            $request->videoRolesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoRoles, 'videoRoles', 'json');
        }

        $body = [];
        if (null !== $request->deduplicationId) {
            @$body['deduplicationId'] = $request->deduplicationId;
        }

        if (null !== $request->excludeGenerateOptionsShrink) {
            @$body['excludeGenerateOptions'] = $request->excludeGenerateOptionsShrink;
        }

        if (null !== $request->faceIdentitySimilarityMinScore) {
            @$body['faceIdentitySimilarityMinScore'] = $request->faceIdentitySimilarityMinScore;
        }

        if (null !== $request->frameSampleMethodShrink) {
            @$body['frameSampleMethod'] = $request->frameSampleMethodShrink;
        }

        if (null !== $request->generateOptionsShrink) {
            @$body['generateOptions'] = $request->generateOptionsShrink;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        if (null !== $request->modelCustomPromptTemplate) {
            @$body['modelCustomPromptTemplate'] = $request->modelCustomPromptTemplate;
        }

        if (null !== $request->modelCustomPromptTemplateId) {
            @$body['modelCustomPromptTemplateId'] = $request->modelCustomPromptTemplateId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->snapshotInterval) {
            @$body['snapshotInterval'] = $request->snapshotInterval;
        }

        if (null !== $request->splitInterval) {
            @$body['splitInterval'] = $request->splitInterval;
        }

        if (null !== $request->textProcessTasksShrink) {
            @$body['textProcessTasks'] = $request->textProcessTasksShrink;
        }

        if (null !== $request->videoCaptionInfoShrink) {
            @$body['videoCaptionInfo'] = $request->videoCaptionInfoShrink;
        }

        if (null !== $request->videoExtraInfo) {
            @$body['videoExtraInfo'] = $request->videoExtraInfo;
        }

        if (null !== $request->videoModelCustomPromptTemplate) {
            @$body['videoModelCustomPromptTemplate'] = $request->videoModelCustomPromptTemplate;
        }

        if (null !== $request->videoModelId) {
            @$body['videoModelId'] = $request->videoModelId;
        }

        if (null !== $request->videoRolesShrink) {
            @$body['videoRoles'] = $request->videoRolesShrink;
        }

        if (null !== $request->videoShotFaceIdentityCount) {
            @$body['videoShotFaceIdentityCount'] = $request->videoShotFaceIdentityCount;
        }

        if (null !== $request->videoUrl) {
            @$body['videoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/videoAnalysis/submitVideoAnalysisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 轻应用-提交视频理解任务
     *
     * @param request - SubmitVideoAnalysisTaskRequest
     *
     * @returns SubmitVideoAnalysisTaskResponse
     *
     * @param string                         $workspaceId
     * @param SubmitVideoAnalysisTaskRequest $request
     *
     * @return SubmitVideoAnalysisTaskResponse
     */
    public function submitVideoAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 视频理解-更新配置.
     *
     * @param request - UpdateVideoAnalysisConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVideoAnalysisConfigResponse
     *
     * @param string                           $workspaceId
     * @param UpdateVideoAnalysisConfigRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateVideoAnalysisConfigResponse
     */
    public function updateVideoAnalysisConfigWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->asyncConcurrency) {
            @$body['asyncConcurrency'] = $request->asyncConcurrency;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoAnalysisConfig',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/videoAnalysis/updateVideoAnalysisConfig',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoAnalysisConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频理解-更新配置.
     *
     * @param request - UpdateVideoAnalysisConfigRequest
     *
     * @returns UpdateVideoAnalysisConfigResponse
     *
     * @param string                           $workspaceId
     * @param UpdateVideoAnalysisConfigRequest $request
     *
     * @return UpdateVideoAnalysisConfigResponse
     */
    public function updateVideoAnalysisConfig($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVideoAnalysisConfigWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 视频理解-修改任务状态
     *
     * @param request - UpdateVideoAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVideoAnalysisTaskResponse
     *
     * @param string                         $workspaceId
     * @param UpdateVideoAnalysisTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateVideoAnalysisTaskResponse
     */
    public function updateVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['taskStatus'] = $request->taskStatus;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/quanmiao/lightapp/videoAnalysis/updateVideoAnalysisTask',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频理解-修改任务状态
     *
     * @param request - UpdateVideoAnalysisTaskRequest
     *
     * @returns UpdateVideoAnalysisTaskResponse
     *
     * @param string                         $workspaceId
     * @param UpdateVideoAnalysisTaskRequest $request
     *
     * @return UpdateVideoAnalysisTaskResponse
     */
    public function updateVideoAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }
}
