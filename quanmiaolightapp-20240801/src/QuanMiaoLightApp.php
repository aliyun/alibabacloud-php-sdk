<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 取消异步任务
     *  *
     * @param string                 $workspaceId
     * @param CancelAsyncTaskRequest $request     CancelAsyncTaskRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return CancelAsyncTaskResponse CancelAsyncTaskResponse
     */
    public function cancelAsyncTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelAsyncTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/cancelAsyncTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消异步任务
     *  *
     * @param string                 $workspaceId
     * @param CancelAsyncTaskRequest $request     CancelAsyncTaskRequest
     *
     * @return CancelAsyncTaskResponse CancelAsyncTaskResponse
     */
    public function cancelAsyncTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelAsyncTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出挖掘任务明细
     *  *
     * @param string                                 $workspaceId
     * @param ExportAnalysisTagDetailByTaskIdRequest $tmpReq      ExportAnalysisTagDetailByTaskIdRequest
     * @param string[]                               $headers     map
     * @param RuntimeOptions                         $runtime     runtime options for this request RuntimeOptions
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskIdWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportAnalysisTagDetailByTaskIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categories)) {
            $request->categoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'categories', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoriesShrink)) {
            $body['categories'] = $request->categoriesShrink;
        }
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportAnalysisTagDetailByTaskId',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/exportAnalysisTagDetailByTaskId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出挖掘任务明细
     *  *
     * @param string                                 $workspaceId
     * @param ExportAnalysisTagDetailByTaskIdRequest $request     ExportAnalysisTagDetailByTaskIdRequest
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskId($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportAnalysisTagDetailByTaskIdWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 新闻播报-抽取分类获取播报热点
     *  *
     * @param string                       $workspaceId
     * @param GenerateBroadcastNewsRequest $request     GenerateBroadcastNewsRequest
     * @param string[]                     $headers     map
     * @param RuntimeOptions               $runtime     runtime options for this request RuntimeOptions
     *
     * @return GenerateBroadcastNewsResponse GenerateBroadcastNewsResponse
     */
    public function generateBroadcastNewsWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateBroadcastNews',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/GenerateBroadcastNews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateBroadcastNewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新闻播报-抽取分类获取播报热点
     *  *
     * @param string                       $workspaceId
     * @param GenerateBroadcastNewsRequest $request     GenerateBroadcastNewsRequest
     *
     * @return GenerateBroadcastNewsResponse GenerateBroadcastNewsResponse
     */
    public function generateBroadcastNews($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateBroadcastNewsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-标签挖掘-获取示例输出格式
     *  *
     * @param string                      $workspaceId
     * @param GenerateOutputFormatRequest $tmpReq      GenerateOutputFormatRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return GenerateOutputFormatResponse GenerateOutputFormatResponse
     */
    public function generateOutputFormatWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateOutputFormatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['businessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['extraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskDescription)) {
            $body['taskDescription'] = $request->taskDescription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateOutputFormat',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/generateOutputFormat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateOutputFormatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-标签挖掘-获取示例输出格式
     *  *
     * @param string                      $workspaceId
     * @param GenerateOutputFormatRequest $request     GenerateOutputFormatRequest
     *
     * @return GenerateOutputFormatResponse GenerateOutputFormatResponse
     */
    public function generateOutputFormat($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateOutputFormatWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取企业VOC分析任务结果
     *  *
     * @param string                              $workspaceId
     * @param GetEnterpriseVocAnalysisTaskRequest $request     GetEnterpriseVocAnalysisTaskRequest
     * @param string[]                            $headers     map
     * @param RuntimeOptions                      $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetEnterpriseVocAnalysisTaskResponse GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnterpriseVocAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/getEnterpriseVocAnalysisTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取企业VOC分析任务结果
     *  *
     * @param string                              $workspaceId
     * @param GetEnterpriseVocAnalysisTaskRequest $request     GetEnterpriseVocAnalysisTaskRequest
     *
     * @return GetEnterpriseVocAnalysisTaskResponse GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnterpriseVocAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取作业批改结果
     *  *
     * @param string                        $workspaceId
     * @param GetEssayCorrectionTaskRequest $request     GetEssayCorrectionTaskRequest
     * @param string[]                      $headers     map
     * @param RuntimeOptions                $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetEssayCorrectionTaskResponse GetEssayCorrectionTaskResponse
     */
    public function getEssayCorrectionTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEssayCorrectionTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/getEssayCorrectionTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEssayCorrectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取作业批改结果
     *  *
     * @param string                        $workspaceId
     * @param GetEssayCorrectionTaskRequest $request     GetEssayCorrectionTaskRequest
     *
     * @return GetEssayCorrectionTaskResponse GetEssayCorrectionTaskResponse
     */
    public function getEssayCorrectionTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEssayCorrectionTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取挖掘分析任务结果
     *  *
     * @param string                          $workspaceId
     * @param GetTagMiningAnalysisTaskRequest $request     GetTagMiningAnalysisTaskRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetTagMiningAnalysisTaskResponse GetTagMiningAnalysisTaskResponse
     */
    public function getTagMiningAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTagMiningAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/getTagMiningAnalysisTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTagMiningAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取挖掘分析任务结果
     *  *
     * @param string                          $workspaceId
     * @param GetTagMiningAnalysisTaskRequest $request     GetTagMiningAnalysisTaskRequest
     *
     * @return GetTagMiningAnalysisTaskResponse GetTagMiningAnalysisTaskResponse
     */
    public function getTagMiningAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTagMiningAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 视频理解-获取配置
     *  *
     * @param string         $workspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetVideoAnalysisConfigResponse GetVideoAnalysisConfigResponse
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
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/videoAnalysis/getVideoAnalysisConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoAnalysisConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频理解-获取配置
     *  *
     * @param string $workspaceId
     *
     * @return GetVideoAnalysisConfigResponse GetVideoAnalysisConfigResponse
     */
    public function getVideoAnalysisConfig($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoAnalysisConfigWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @summary 轻应用-获取视频理解异步任务结果
     *  *
     * @param string                      $workspaceId
     * @param GetVideoAnalysisTaskRequest $request     GetVideoAnalysisTaskRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetVideoAnalysisTaskResponse GetVideoAnalysisTaskResponse
     */
    public function getVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/videoAnalysis/getVideoAnalysisTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-获取视频理解异步任务结果
     *  *
     * @param string                      $workspaceId
     * @param GetVideoAnalysisTaskRequest $request     GetVideoAnalysisTaskRequest
     *
     * @return GetVideoAnalysisTaskResponse GetVideoAnalysisTaskResponse
     */
    public function getVideoAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 热点新闻推荐
     *  *
     * @param string                  $workspaceId
     * @param HotNewsRecommendRequest $request     HotNewsRecommendRequest
     * @param string[]                $headers     map
     * @param RuntimeOptions          $runtime     runtime options for this request RuntimeOptions
     *
     * @return HotNewsRecommendResponse HotNewsRecommendResponse
     */
    public function hotNewsRecommendWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HotNewsRecommend',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/hotNewsRecommend',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotNewsRecommendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 热点新闻推荐
     *  *
     * @param string                  $workspaceId
     * @param HotNewsRecommendRequest $request     HotNewsRecommendRequest
     *
     * @return HotNewsRecommendResponse HotNewsRecommendResponse
     */
    public function hotNewsRecommend($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->hotNewsRecommendWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取挖掘分析结果明细列表
     *  *
     * @param string                               $workspaceId
     * @param ListAnalysisTagDetailByTaskIdRequest $request     ListAnalysisTagDetailByTaskIdRequest
     * @param string[]                             $headers     map
     * @param RuntimeOptions                       $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListAnalysisTagDetailByTaskIdResponse ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskIdWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnalysisTagDetailByTaskId',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/listAnalysisTagDetailByTaskId',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取挖掘分析结果明细列表
     *  *
     * @param string                               $workspaceId
     * @param ListAnalysisTagDetailByTaskIdRequest $request     ListAnalysisTagDetailByTaskIdRequest
     *
     * @return ListAnalysisTagDetailByTaskIdResponse ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskId($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAnalysisTagDetailByTaskIdWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-新闻播报-获取热点话题摘要列表
     *  *
     * @param string                       $workspaceId
     * @param ListHotTopicSummariesRequest $request     ListHotTopicSummariesRequest
     * @param string[]                     $headers     map
     * @param RuntimeOptions               $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListHotTopicSummariesResponse ListHotTopicSummariesResponse
     */
    public function listHotTopicSummariesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->hotTopic)) {
            $body['hotTopic'] = $request->hotTopic;
        }
        if (!Utils::isUnset($request->hotTopicVersion)) {
            $body['hotTopicVersion'] = $request->hotTopicVersion;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHotTopicSummaries',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/listHotTopicSummaries',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotTopicSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-新闻播报-获取热点话题摘要列表
     *  *
     * @param string                       $workspaceId
     * @param ListHotTopicSummariesRequest $request     ListHotTopicSummariesRequest
     *
     * @return ListHotTopicSummariesResponse ListHotTopicSummariesResponse
     */
    public function listHotTopicSummaries($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHotTopicSummariesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 企业VOC分析
     *  *
     * @param string                          $workspaceId
     * @param RunEnterpriseVocAnalysisRequest $tmpReq      RunEnterpriseVocAnalysisRequest
     * @param string[]                        $headers     map
     * @param RuntimeOptions                  $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunEnterpriseVocAnalysisResponse RunEnterpriseVocAnalysisResponse
     */
    public function runEnterpriseVocAnalysisWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunEnterpriseVocAnalysisShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterTags)) {
            $request->filterTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTags, 'filterTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->akProxy)) {
            $body['akProxy'] = $request->akProxy;
        }
        if (!Utils::isUnset($request->apiKey)) {
            $body['apiKey'] = $request->apiKey;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['extraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->filterTagsShrink)) {
            $body['filterTags'] = $request->filterTagsShrink;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputFormat)) {
            $body['outputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->sourceTrace)) {
            $body['sourceTrace'] = $request->sourceTrace;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskDescription)) {
            $body['taskDescription'] = $request->taskDescription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunEnterpriseVocAnalysis',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runEnterpriseVocAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunEnterpriseVocAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 企业VOC分析
     *  *
     * @param string                          $workspaceId
     * @param RunEnterpriseVocAnalysisRequest $request     RunEnterpriseVocAnalysisRequest
     *
     * @return RunEnterpriseVocAnalysisResponse RunEnterpriseVocAnalysisResponse
     */
    public function runEnterpriseVocAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runEnterpriseVocAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 作业批改
     *  *
     * @param string                    $workspaceId
     * @param RunEssayCorrectionRequest $request     RunEssayCorrectionRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunEssayCorrectionResponse RunEssayCorrectionResponse
     */
    public function runEssayCorrectionWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->answer)) {
            $body['answer'] = $request->answer;
        }
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->otherReviewPoints)) {
            $body['otherReviewPoints'] = $request->otherReviewPoints;
        }
        if (!Utils::isUnset($request->question)) {
            $body['question'] = $request->question;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->totalScore)) {
            $body['totalScore'] = $request->totalScore;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunEssayCorrection',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runEssayCorrection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunEssayCorrectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 作业批改
     *  *
     * @param string                    $workspaceId
     * @param RunEssayCorrectionRequest $request     RunEssayCorrectionRequest
     *
     * @return RunEssayCorrectionResponse RunEssayCorrectionResponse
     */
    public function runEssayCorrection($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runEssayCorrectionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-热点播报-问答
     *  *
     * @param string                 $workspaceId
     * @param RunHotTopicChatRequest $tmpReq      RunHotTopicChatRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunHotTopicChatResponse RunHotTopicChatResponse
     */
    public function runHotTopicChatWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunHotTopicChatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->generateOptions)) {
            $request->generateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->hotTopics)) {
            $request->hotTopicsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotTopics, 'hotTopics', 'json');
        }
        if (!Utils::isUnset($tmpReq->messages)) {
            $request->messagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->messages, 'messages', 'json');
        }
        if (!Utils::isUnset($tmpReq->stepForBroadcastContentConfig)) {
            $request->stepForBroadcastContentConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stepForBroadcastContentConfig, 'stepForBroadcastContentConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->generateOptionsShrink)) {
            $body['generateOptions'] = $request->generateOptionsShrink;
        }
        if (!Utils::isUnset($request->hotTopicVersion)) {
            $body['hotTopicVersion'] = $request->hotTopicVersion;
        }
        if (!Utils::isUnset($request->hotTopicsShrink)) {
            $body['hotTopics'] = $request->hotTopicsShrink;
        }
        if (!Utils::isUnset($request->imageCount)) {
            $body['imageCount'] = $request->imageCount;
        }
        if (!Utils::isUnset($request->messagesShrink)) {
            $body['messages'] = $request->messagesShrink;
        }
        if (!Utils::isUnset($request->modelCustomPromptTemplate)) {
            $body['modelCustomPromptTemplate'] = $request->modelCustomPromptTemplate;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->originalSessionId)) {
            $body['originalSessionId'] = $request->originalSessionId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->stepForBroadcastContentConfigShrink)) {
            $body['stepForBroadcastContentConfig'] = $request->stepForBroadcastContentConfigShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunHotTopicChat',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runHotTopicChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunHotTopicChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-热点播报-问答
     *  *
     * @param string                 $workspaceId
     * @param RunHotTopicChatRequest $request     RunHotTopicChatRequest
     *
     * @return RunHotTopicChatResponse RunHotTopicChatResponse
     */
    public function runHotTopicChat($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runHotTopicChatWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-热点播报-热点摘要生成
     *  *
     * @param string                    $workspaceId
     * @param RunHotTopicSummaryRequest $tmpReq      RunHotTopicSummaryRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunHotTopicSummaryResponse RunHotTopicSummaryResponse
     */
    public function runHotTopicSummaryWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunHotTopicSummaryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->stepForCustomSummaryStyleConfig)) {
            $request->stepForCustomSummaryStyleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stepForCustomSummaryStyleConfig, 'stepForCustomSummaryStyleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->topicIds)) {
            $request->topicIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->topicIds, 'topicIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotTopicVersion)) {
            $body['hotTopicVersion'] = $request->hotTopicVersion;
        }
        if (!Utils::isUnset($request->stepForCustomSummaryStyleConfigShrink)) {
            $body['stepForCustomSummaryStyleConfig'] = $request->stepForCustomSummaryStyleConfigShrink;
        }
        if (!Utils::isUnset($request->topicIdsShrink)) {
            $body['topicIds'] = $request->topicIdsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunHotTopicSummary',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runHotTopicSummary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunHotTopicSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-热点播报-热点摘要生成
     *  *
     * @param string                    $workspaceId
     * @param RunHotTopicSummaryRequest $request     RunHotTopicSummaryRequest
     *
     * @return RunHotTopicSummaryResponse RunHotTopicSummaryResponse
     */
    public function runHotTopicSummary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runHotTopicSummaryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 营销信息抽取服务
     *  *
     * @param string                                $workspaceId
     * @param RunMarketingInformationExtractRequest $tmpReq      RunMarketingInformationExtractRequest
     * @param string[]                              $headers     map
     * @param RuntimeOptions                        $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunMarketingInformationExtractResponse RunMarketingInformationExtractResponse
     */
    public function runMarketingInformationExtractWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunMarketingInformationExtractShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sourceMaterials)) {
            $request->sourceMaterialsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceMaterials, 'sourceMaterials', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->customPrompt)) {
            $body['customPrompt'] = $request->customPrompt;
        }
        if (!Utils::isUnset($request->extractType)) {
            $body['extractType'] = $request->extractType;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->sourceMaterialsShrink)) {
            $body['sourceMaterials'] = $request->sourceMaterialsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMarketingInformationExtract',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runMarketingInformationExtract',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMarketingInformationExtractResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 营销信息抽取服务
     *  *
     * @param string                                $workspaceId
     * @param RunMarketingInformationExtractRequest $request     RunMarketingInformationExtractRequest
     *
     * @return RunMarketingInformationExtractResponse RunMarketingInformationExtractResponse
     */
    public function runMarketingInformationExtract($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runMarketingInformationExtractWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 营销文案写作服务
     *  *
     * @param string                                $workspaceId
     * @param RunMarketingInformationWritingRequest $request     RunMarketingInformationWritingRequest
     * @param string[]                              $headers     map
     * @param RuntimeOptions                        $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunMarketingInformationWritingResponse RunMarketingInformationWritingResponse
     */
    public function runMarketingInformationWritingWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiKey)) {
            $body['apiKey'] = $request->apiKey;
        }
        if (!Utils::isUnset($request->customLimitation)) {
            $body['customLimitation'] = $request->customLimitation;
        }
        if (!Utils::isUnset($request->customPrompt)) {
            $body['customPrompt'] = $request->customPrompt;
        }
        if (!Utils::isUnset($request->inputExample)) {
            $body['inputExample'] = $request->inputExample;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputExample)) {
            $body['outputExample'] = $request->outputExample;
        }
        if (!Utils::isUnset($request->sourceMaterial)) {
            $body['sourceMaterial'] = $request->sourceMaterial;
        }
        if (!Utils::isUnset($request->writingType)) {
            $body['writingType'] = $request->writingType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMarketingInformationWriting',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runMarketingInformationWriting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMarketingInformationWritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 营销文案写作服务
     *  *
     * @param string                                $workspaceId
     * @param RunMarketingInformationWritingRequest $request     RunMarketingInformationWritingRequest
     *
     * @return RunMarketingInformationWritingResponse RunMarketingInformationWritingResponse
     */
    public function runMarketingInformationWriting($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runMarketingInformationWritingWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-网络内容审核
     *  *
     * @param string                        $workspaceId
     * @param RunNetworkContentAuditRequest $tmpReq      RunNetworkContentAuditRequest
     * @param string[]                      $headers     map
     * @param RuntimeOptions                $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunNetworkContentAuditResponse RunNetworkContentAuditResponse
     */
    public function runNetworkContentAuditWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunNetworkContentAuditShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->apiKey)) {
            $body['apiKey'] = $request->apiKey;
        }
        if (!Utils::isUnset($request->businessType)) {
            $body['businessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['extraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputFormat)) {
            $body['outputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskDescription)) {
            $body['taskDescription'] = $request->taskDescription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunNetworkContentAudit',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runNetworkContentAudit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunNetworkContentAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-网络内容审核
     *  *
     * @param string                        $workspaceId
     * @param RunNetworkContentAuditRequest $request     RunNetworkContentAuditRequest
     *
     * @return RunNetworkContentAuditResponse RunNetworkContentAuditResponse
     */
    public function runNetworkContentAudit($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runNetworkContentAuditWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 作业批改
     *  *
     * @param string             $workspaceId
     * @param RunOcrParseRequest $request     RunOcrParseRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunOcrParseResponse RunOcrParseResponse
     */
    public function runOcrParseWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileKey)) {
            $body['fileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunOcrParse',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runOcrParse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunOcrParseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 作业批改
     *  *
     * @param string             $workspaceId
     * @param RunOcrParseRequest $request     RunOcrParseRequest
     *
     * @return RunOcrParseResponse RunOcrParseResponse
     */
    public function runOcrParse($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runOcrParseWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 长剧本创作
     *  *
     * @param string               $workspaceId
     * @param RunScriptChatRequest $request     RunScriptChatRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunScriptChatResponse RunScriptChatResponse
     */
    public function runScriptChatWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->prompt)) {
            $body['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptChat',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runScriptChat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 长剧本创作
     *  *
     * @param string               $workspaceId
     * @param RunScriptChatRequest $request     RunScriptChatRequest
     *
     * @return RunScriptChatResponse RunScriptChatResponse
     */
    public function runScriptChat($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptChatWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 剧本续写
     *  *
     * @param string                   $workspaceId
     * @param RunScriptContinueRequest $request     RunScriptContinueRequest
     * @param string[]                 $headers     map
     * @param RuntimeOptions           $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunScriptContinueResponse RunScriptContinueResponse
     */
    public function runScriptContinueWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->scriptSummary)) {
            $body['scriptSummary'] = $request->scriptSummary;
        }
        if (!Utils::isUnset($request->scriptTypeKeyword)) {
            $body['scriptTypeKeyword'] = $request->scriptTypeKeyword;
        }
        if (!Utils::isUnset($request->userProvidedContent)) {
            $body['userProvidedContent'] = $request->userProvidedContent;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptContinue',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runScriptContinue',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptContinueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 剧本续写
     *  *
     * @param string                   $workspaceId
     * @param RunScriptContinueRequest $request     RunScriptContinueRequest
     *
     * @return RunScriptContinueResponse RunScriptContinueResponse
     */
    public function runScriptContinue($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptContinueWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 剧本策划
     *  *
     * @param string                   $workspaceId
     * @param RunScriptPlanningRequest $request     RunScriptPlanningRequest
     * @param string[]                 $headers     map
     * @param RuntimeOptions           $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunScriptPlanningResponse RunScriptPlanningResponse
     */
    public function runScriptPlanningWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->additionalNote)) {
            $body['additionalNote'] = $request->additionalNote;
        }
        if (!Utils::isUnset($request->dialogueInScene)) {
            $body['dialogueInScene'] = $request->dialogueInScene;
        }
        if (!Utils::isUnset($request->plotConflict)) {
            $body['plotConflict'] = $request->plotConflict;
        }
        if (!Utils::isUnset($request->scriptName)) {
            $body['scriptName'] = $request->scriptName;
        }
        if (!Utils::isUnset($request->scriptShotCount)) {
            $body['scriptShotCount'] = $request->scriptShotCount;
        }
        if (!Utils::isUnset($request->scriptSummary)) {
            $body['scriptSummary'] = $request->scriptSummary;
        }
        if (!Utils::isUnset($request->scriptTypeKeyword)) {
            $body['scriptTypeKeyword'] = $request->scriptTypeKeyword;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptPlanning',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runScriptPlanning',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptPlanningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 剧本策划
     *  *
     * @param string                   $workspaceId
     * @param RunScriptPlanningRequest $request     RunScriptPlanningRequest
     *
     * @return RunScriptPlanningResponse RunScriptPlanningResponse
     */
    public function runScriptPlanning($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptPlanningWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 剧本对话内容的整理
     *  *
     * @param string                 $workspaceId
     * @param RunScriptRefineRequest $request     RunScriptRefineRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunScriptRefineResponse RunScriptRefineResponse
     */
    public function runScriptRefineWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunScriptRefine',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runScriptRefine',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunScriptRefineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 剧本对话内容的整理
     *  *
     * @param string                 $workspaceId
     * @param RunScriptRefineRequest $request     RunScriptRefineRequest
     *
     * @return RunScriptRefineResponse RunScriptRefineResponse
     */
    public function runScriptRefine($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runScriptRefineWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 文体学习和写作推理服务
     *  *
     * @param string                 $workspaceId
     * @param RunStyleWritingRequest $tmpReq      RunStyleWritingRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunStyleWritingResponse RunStyleWritingResponse
     */
    public function runStyleWritingWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunStyleWritingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->learningSamples)) {
            $request->learningSamplesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->learningSamples, 'learningSamples', 'json');
        }
        if (!Utils::isUnset($tmpReq->referenceMaterials)) {
            $request->referenceMaterialsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceMaterials, 'referenceMaterials', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->learningSamplesShrink)) {
            $body['learningSamples'] = $request->learningSamplesShrink;
        }
        if (!Utils::isUnset($request->processStage)) {
            $body['processStage'] = $request->processStage;
        }
        if (!Utils::isUnset($request->referenceMaterialsShrink)) {
            $body['referenceMaterials'] = $request->referenceMaterialsShrink;
        }
        if (!Utils::isUnset($request->styleFeature)) {
            $body['styleFeature'] = $request->styleFeature;
        }
        if (!Utils::isUnset($request->useSearch)) {
            $body['useSearch'] = $request->useSearch;
        }
        if (!Utils::isUnset($request->writingTheme)) {
            $body['writingTheme'] = $request->writingTheme;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunStyleWriting',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runStyleWriting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunStyleWritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文体学习和写作推理服务
     *  *
     * @param string                 $workspaceId
     * @param RunStyleWritingRequest $request     RunStyleWritingRequest
     *
     * @return RunStyleWritingResponse RunStyleWritingResponse
     */
    public function runStyleWriting($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runStyleWritingWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-标签挖掘
     *  *
     * @param string                      $workspaceId
     * @param RunTagMiningAnalysisRequest $tmpReq      RunTagMiningAnalysisRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunTagMiningAnalysisResponse RunTagMiningAnalysisResponse
     */
    public function runTagMiningAnalysisWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunTagMiningAnalysisShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->apiKey)) {
            $body['apiKey'] = $request->apiKey;
        }
        if (!Utils::isUnset($request->businessType)) {
            $body['businessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['extraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputFormat)) {
            $body['outputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskDescription)) {
            $body['taskDescription'] = $request->taskDescription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunTagMiningAnalysis',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runTagMiningAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunTagMiningAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-标签挖掘
     *  *
     * @param string                      $workspaceId
     * @param RunTagMiningAnalysisRequest $request     RunTagMiningAnalysisRequest
     *
     * @return RunTagMiningAnalysisResponse RunTagMiningAnalysisResponse
     */
    public function runTagMiningAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runTagMiningAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-视频理解
     *  *
     * @param string                  $workspaceId
     * @param RunVideoAnalysisRequest $tmpReq      RunVideoAnalysisRequest
     * @param string[]                $headers     map
     * @param RuntimeOptions          $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunVideoAnalysisResponse RunVideoAnalysisResponse
     */
    public function runVideoAnalysisWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunVideoAnalysisShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->excludeGenerateOptions)) {
            $request->excludeGenerateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->excludeGenerateOptions, 'excludeGenerateOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->frameSampleMethod)) {
            $request->frameSampleMethodShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->frameSampleMethod, 'frameSampleMethod', 'json');
        }
        if (!Utils::isUnset($tmpReq->generateOptions)) {
            $request->generateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->textProcessTasks)) {
            $request->textProcessTasksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textProcessTasks, 'textProcessTasks', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoCaptionInfo)) {
            $request->videoCaptionInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoCaptionInfo, 'videoCaptionInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoRoles)) {
            $request->videoRolesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoRoles, 'videoRoles', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->autoRoleRecognitionVideoUrl)) {
            $body['autoRoleRecognitionVideoUrl'] = $request->autoRoleRecognitionVideoUrl;
        }
        if (!Utils::isUnset($request->excludeGenerateOptionsShrink)) {
            $body['excludeGenerateOptions'] = $request->excludeGenerateOptionsShrink;
        }
        if (!Utils::isUnset($request->faceIdentitySimilarityMinScore)) {
            $body['faceIdentitySimilarityMinScore'] = $request->faceIdentitySimilarityMinScore;
        }
        if (!Utils::isUnset($request->frameSampleMethodShrink)) {
            $body['frameSampleMethod'] = $request->frameSampleMethodShrink;
        }
        if (!Utils::isUnset($request->generateOptionsShrink)) {
            $body['generateOptions'] = $request->generateOptionsShrink;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        if (!Utils::isUnset($request->modelCustomPromptTemplate)) {
            $body['modelCustomPromptTemplate'] = $request->modelCustomPromptTemplate;
        }
        if (!Utils::isUnset($request->modelCustomPromptTemplateId)) {
            $body['modelCustomPromptTemplateId'] = $request->modelCustomPromptTemplateId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->originalSessionId)) {
            $body['originalSessionId'] = $request->originalSessionId;
        }
        if (!Utils::isUnset($request->snapshotInterval)) {
            $body['snapshotInterval'] = $request->snapshotInterval;
        }
        if (!Utils::isUnset($request->splitInterval)) {
            $body['splitInterval'] = $request->splitInterval;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->textProcessTasksShrink)) {
            $body['textProcessTasks'] = $request->textProcessTasksShrink;
        }
        if (!Utils::isUnset($request->videoCaptionInfoShrink)) {
            $body['videoCaptionInfo'] = $request->videoCaptionInfoShrink;
        }
        if (!Utils::isUnset($request->videoExtraInfo)) {
            $body['videoExtraInfo'] = $request->videoExtraInfo;
        }
        if (!Utils::isUnset($request->videoModelCustomPromptTemplate)) {
            $body['videoModelCustomPromptTemplate'] = $request->videoModelCustomPromptTemplate;
        }
        if (!Utils::isUnset($request->videoModelId)) {
            $body['videoModelId'] = $request->videoModelId;
        }
        if (!Utils::isUnset($request->videoRolesShrink)) {
            $body['videoRoles'] = $request->videoRolesShrink;
        }
        if (!Utils::isUnset($request->videoShotFaceIdentityCount)) {
            $body['videoShotFaceIdentityCount'] = $request->videoShotFaceIdentityCount;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['videoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunVideoAnalysis',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runVideoAnalysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunVideoAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-视频理解
     *  *
     * @param string                  $workspaceId
     * @param RunVideoAnalysisRequest $request     RunVideoAnalysisRequest
     *
     * @return RunVideoAnalysisResponse RunVideoAnalysisResponse
     */
    public function runVideoAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runVideoAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 提交企业VOC异步任务
     *  *
     * @param string                                 $workspaceId
     * @param SubmitEnterpriseVocAnalysisTaskRequest $tmpReq      SubmitEnterpriseVocAnalysisTaskRequest
     * @param string[]                               $headers     map
     * @param RuntimeOptions                         $runtime     runtime options for this request RuntimeOptions
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitEnterpriseVocAnalysisTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterTags)) {
            $request->filterTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTags, 'filterTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->apiKey)) {
            $body['apiKey'] = $request->apiKey;
        }
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['extraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['fileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->filterTagsShrink)) {
            $body['filterTags'] = $request->filterTagsShrink;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputFormat)) {
            $body['outputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->sourceTrace)) {
            $body['sourceTrace'] = $request->sourceTrace;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskDescription)) {
            $body['taskDescription'] = $request->taskDescription;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitEnterpriseVocAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/submitEnterpriseVocAnalysisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交企业VOC异步任务
     *  *
     * @param string                                 $workspaceId
     * @param SubmitEnterpriseVocAnalysisTaskRequest $request     SubmitEnterpriseVocAnalysisTaskRequest
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitEnterpriseVocAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 提交批改任务
     *  *
     * @param string                           $workspaceId
     * @param SubmitEssayCorrectionTaskRequest $tmpReq      SubmitEssayCorrectionTaskRequest
     * @param string[]                         $headers     map
     * @param RuntimeOptions                   $runtime     runtime options for this request RuntimeOptions
     *
     * @return SubmitEssayCorrectionTaskResponse SubmitEssayCorrectionTaskResponse
     */
    public function submitEssayCorrectionTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitEssayCorrectionTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tasks)) {
            $request->tasksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'tasks', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->grade)) {
            $body['grade'] = $request->grade;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->otherReviewPoints)) {
            $body['otherReviewPoints'] = $request->otherReviewPoints;
        }
        if (!Utils::isUnset($request->question)) {
            $body['question'] = $request->question;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tasksShrink)) {
            $body['tasks'] = $request->tasksShrink;
        }
        if (!Utils::isUnset($request->totalScore)) {
            $body['totalScore'] = $request->totalScore;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitEssayCorrectionTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/submitEssayCorrectionTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEssayCorrectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交批改任务
     *  *
     * @param string                           $workspaceId
     * @param SubmitEssayCorrectionTaskRequest $request     SubmitEssayCorrectionTaskRequest
     *
     * @return SubmitEssayCorrectionTaskResponse SubmitEssayCorrectionTaskResponse
     */
    public function submitEssayCorrectionTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitEssayCorrectionTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-标签挖掘
     *  *
     * @param string                             $workspaceId
     * @param SubmitTagMiningAnalysisTaskRequest $tmpReq      SubmitTagMiningAnalysisTaskRequest
     * @param string[]                           $headers     map
     * @param RuntimeOptions                     $runtime     runtime options for this request RuntimeOptions
     *
     * @return SubmitTagMiningAnalysisTaskResponse SubmitTagMiningAnalysisTaskResponse
     */
    public function submitTagMiningAnalysisTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTagMiningAnalysisTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->apiKey)) {
            $body['apiKey'] = $request->apiKey;
        }
        if (!Utils::isUnset($request->businessType)) {
            $body['businessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['extraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->outputFormat)) {
            $body['outputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $body['tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskDescription)) {
            $body['taskDescription'] = $request->taskDescription;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitTagMiningAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/submitTagMiningAnalysisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTagMiningAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-标签挖掘
     *  *
     * @param string                             $workspaceId
     * @param SubmitTagMiningAnalysisTaskRequest $request     SubmitTagMiningAnalysisTaskRequest
     *
     * @return SubmitTagMiningAnalysisTaskResponse SubmitTagMiningAnalysisTaskResponse
     */
    public function submitTagMiningAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitTagMiningAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 轻应用-提交视频理解任务
     *  *
     * @param string                         $workspaceId
     * @param SubmitVideoAnalysisTaskRequest $tmpReq      SubmitVideoAnalysisTaskRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return SubmitVideoAnalysisTaskResponse SubmitVideoAnalysisTaskResponse
     */
    public function submitVideoAnalysisTaskWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitVideoAnalysisTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->excludeGenerateOptions)) {
            $request->excludeGenerateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->excludeGenerateOptions, 'excludeGenerateOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->frameSampleMethod)) {
            $request->frameSampleMethodShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->frameSampleMethod, 'frameSampleMethod', 'json');
        }
        if (!Utils::isUnset($tmpReq->generateOptions)) {
            $request->generateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }
        if (!Utils::isUnset($tmpReq->textProcessTasks)) {
            $request->textProcessTasksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textProcessTasks, 'textProcessTasks', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoCaptionInfo)) {
            $request->videoCaptionInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoCaptionInfo, 'videoCaptionInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoRoles)) {
            $request->videoRolesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoRoles, 'videoRoles', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->autoRoleRecognitionVideoUrl)) {
            $body['autoRoleRecognitionVideoUrl'] = $request->autoRoleRecognitionVideoUrl;
        }
        if (!Utils::isUnset($request->deduplicationId)) {
            $body['deduplicationId'] = $request->deduplicationId;
        }
        if (!Utils::isUnset($request->excludeGenerateOptionsShrink)) {
            $body['excludeGenerateOptions'] = $request->excludeGenerateOptionsShrink;
        }
        if (!Utils::isUnset($request->faceIdentitySimilarityMinScore)) {
            $body['faceIdentitySimilarityMinScore'] = $request->faceIdentitySimilarityMinScore;
        }
        if (!Utils::isUnset($request->frameSampleMethodShrink)) {
            $body['frameSampleMethod'] = $request->frameSampleMethodShrink;
        }
        if (!Utils::isUnset($request->generateOptionsShrink)) {
            $body['generateOptions'] = $request->generateOptionsShrink;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        if (!Utils::isUnset($request->modelCustomPromptTemplate)) {
            $body['modelCustomPromptTemplate'] = $request->modelCustomPromptTemplate;
        }
        if (!Utils::isUnset($request->modelCustomPromptTemplateId)) {
            $body['modelCustomPromptTemplateId'] = $request->modelCustomPromptTemplateId;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->snapshotInterval)) {
            $body['snapshotInterval'] = $request->snapshotInterval;
        }
        if (!Utils::isUnset($request->splitInterval)) {
            $body['splitInterval'] = $request->splitInterval;
        }
        if (!Utils::isUnset($request->textProcessTasksShrink)) {
            $body['textProcessTasks'] = $request->textProcessTasksShrink;
        }
        if (!Utils::isUnset($request->videoCaptionInfoShrink)) {
            $body['videoCaptionInfo'] = $request->videoCaptionInfoShrink;
        }
        if (!Utils::isUnset($request->videoExtraInfo)) {
            $body['videoExtraInfo'] = $request->videoExtraInfo;
        }
        if (!Utils::isUnset($request->videoModelCustomPromptTemplate)) {
            $body['videoModelCustomPromptTemplate'] = $request->videoModelCustomPromptTemplate;
        }
        if (!Utils::isUnset($request->videoModelId)) {
            $body['videoModelId'] = $request->videoModelId;
        }
        if (!Utils::isUnset($request->videoRolesShrink)) {
            $body['videoRoles'] = $request->videoRolesShrink;
        }
        if (!Utils::isUnset($request->videoShotFaceIdentityCount)) {
            $body['videoShotFaceIdentityCount'] = $request->videoShotFaceIdentityCount;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['videoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/videoAnalysis/submitVideoAnalysisTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 轻应用-提交视频理解任务
     *  *
     * @param string                         $workspaceId
     * @param SubmitVideoAnalysisTaskRequest $request     SubmitVideoAnalysisTaskRequest
     *
     * @return SubmitVideoAnalysisTaskResponse SubmitVideoAnalysisTaskResponse
     */
    public function submitVideoAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 视频理解-更新配置
     *  *
     * @param string                           $workspaceId
     * @param UpdateVideoAnalysisConfigRequest $request     UpdateVideoAnalysisConfigRequest
     * @param string[]                         $headers     map
     * @param RuntimeOptions                   $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateVideoAnalysisConfigResponse UpdateVideoAnalysisConfigResponse
     */
    public function updateVideoAnalysisConfigWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->asyncConcurrency)) {
            $body['asyncConcurrency'] = $request->asyncConcurrency;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoAnalysisConfig',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/videoAnalysis/updateVideoAnalysisConfig',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoAnalysisConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频理解-更新配置
     *  *
     * @param string                           $workspaceId
     * @param UpdateVideoAnalysisConfigRequest $request     UpdateVideoAnalysisConfigRequest
     *
     * @return UpdateVideoAnalysisConfigResponse UpdateVideoAnalysisConfigResponse
     */
    public function updateVideoAnalysisConfig($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVideoAnalysisConfigWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 视频理解-修改任务状态
     *  *
     * @param string                         $workspaceId
     * @param UpdateVideoAnalysisTaskRequest $request     UpdateVideoAnalysisTaskRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateVideoAnalysisTaskResponse UpdateVideoAnalysisTaskResponse
     */
    public function updateVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['taskStatus'] = $request->taskStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoAnalysisTask',
            'version' => '2024-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/videoAnalysis/updateVideoAnalysisTask',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频理解-修改任务状态
     *  *
     * @param string                         $workspaceId
     * @param UpdateVideoAnalysisTaskRequest $request     UpdateVideoAnalysisTaskRequest
     *
     * @return UpdateVideoAnalysisTaskResponse UpdateVideoAnalysisTaskResponse
     */
    public function updateVideoAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVideoAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }
}
