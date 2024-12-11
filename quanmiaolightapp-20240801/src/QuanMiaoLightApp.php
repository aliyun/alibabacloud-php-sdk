<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponse;
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
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptContinueRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptContinueResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptPlanningRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptPlanningResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingShrinkRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponse;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisShrinkRequest;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateBroadcastNews',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/GenerateBroadcastNews',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotTopicSummaries',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/listHotTopicSummaries',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunHotTopicChat',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runHotTopicChat',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunHotTopicSummary',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runHotTopicSummary',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunMarketingInformationExtract',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runMarketingInformationExtract',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunMarketingInformationWriting',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runMarketingInformationWriting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunScriptContinue',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runScriptContinue',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunScriptPlanning',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runScriptPlanning',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
        if (!Utils::isUnset($request->referenceMaterialsShrink)) {
            $body['referenceMaterials'] = $request->referenceMaterialsShrink;
        }
        if (!Utils::isUnset($request->styleFeature)) {
            $body['styleFeature'] = $request->styleFeature;
        }
        if (!Utils::isUnset($request->writingTheme)) {
            $body['writingTheme'] = $request->writingTheme;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunStyleWriting',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runStyleWriting',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
        if (!Utils::isUnset($tmpReq->generateOptions)) {
            $request->generateOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->generateOptions, 'generateOptions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->generateOptionsShrink)) {
            $body['generateOptions'] = $request->generateOptionsShrink;
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
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
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
        if (!Utils::isUnset($request->videoUrl)) {
            $body['videoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunVideoAnalysis',
            'version'     => '2024-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/quanmiao/lightapp/runVideoAnalysis',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
}
