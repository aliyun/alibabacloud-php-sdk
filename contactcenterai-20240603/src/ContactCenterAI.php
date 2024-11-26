<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeImageRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeImageResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ContactCenterAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('contactcenterai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 根据类型调用大模型
     *  *
     * @param string                     $workspaceId
     * @param string                     $appId
     * @param AnalyzeConversationRequest $request     AnalyzeConversationRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return AnalyzeConversationResponse AnalyzeConversationResponse
     */
    public function analyzeConversationWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryTags)) {
            $body['categoryTags'] = $request->categoryTags;
        }
        if (!Utils::isUnset($request->dialogue)) {
            $body['dialogue'] = $request->dialogue;
        }
        if (!Utils::isUnset($request->examples)) {
            $body['examples'] = $request->examples;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $body['modelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->resultTypes)) {
            $body['resultTypes'] = $request->resultTypes;
        }
        if (!Utils::isUnset($request->sceneName)) {
            $body['sceneName'] = $request->sceneName;
        }
        if (!Utils::isUnset($request->serviceInspection)) {
            $body['serviceInspection'] = $request->serviceInspection;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->timeConstraintList)) {
            $body['timeConstraintList'] = $request->timeConstraintList;
        }
        if (!Utils::isUnset($request->userProfiles)) {
            $body['userProfiles'] = $request->userProfiles;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeConversation',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/analyze_conversation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AnalyzeConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据类型调用大模型
     *  *
     * @param string                     $workspaceId
     * @param string                     $appId
     * @param AnalyzeConversationRequest $request     AnalyzeConversationRequest
     *
     * @return AnalyzeConversationResponse AnalyzeConversationResponse
     */
    public function analyzeConversation($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->analyzeConversationWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary 图片分析
     *  *
     * @param string              $workspaceId
     * @param string              $appId
     * @param AnalyzeImageRequest $request     AnalyzeImageRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return AnalyzeImageResponse AnalyzeImageResponse
     */
    public function analyzeImageWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrls)) {
            $body['imageUrls'] = $request->imageUrls;
        }
        if (!Utils::isUnset($request->resultTypes)) {
            $body['resultTypes'] = $request->resultTypes;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeImage',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/analyzeImage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AnalyzeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 图片分析
     *  *
     * @param string              $workspaceId
     * @param string              $appId
     * @param AnalyzeImageRequest $request     AnalyzeImageRequest
     *
     * @return AnalyzeImageResponse AnalyzeImageResponse
     */
    public function analyzeImage($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->analyzeImageWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建语音文件调用llm任务
     *  *
     * @param string            $workspaceId
     * @param string            $appId
     * @param CreateTaskRequest $request     CreateTaskRequest
     * @param string[]          $headers     map
     * @param RuntimeOptions    $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTaskWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dialogue)) {
            $body['dialogue'] = $request->dialogue;
        }
        if (!Utils::isUnset($request->examples)) {
            $body['examples'] = $request->examples;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $body['modelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->resultTypes)) {
            $body['resultTypes'] = $request->resultTypes;
        }
        if (!Utils::isUnset($request->serviceInspection)) {
            $body['serviceInspection'] = $request->serviceInspection;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['taskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $body['templateIds'] = $request->templateIds;
        }
        if (!Utils::isUnset($request->transcription)) {
            $body['transcription'] = $request->transcription;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/createTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建语音文件调用llm任务
     *  *
     * @param string            $workspaceId
     * @param string            $appId
     * @param CreateTaskRequest $request     CreateTaskRequest
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTask($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary 语音文件调用大模型获取结果
     *  *
     * @param GetTaskResultRequest $request GetTaskResultRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResultResponse GetTaskResultResponse
     */
    public function getTaskResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['taskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskResult',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ccai/app/getTaskResult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 语音文件调用大模型获取结果
     *  *
     * @param GetTaskResultRequest $request GetTaskResultRequest
     *
     * @return GetTaskResultResponse GetTaskResultResponse
     */
    public function getTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string               $workspaceId
     * @param string               $appId
     * @param RunCompletionRequest $request     RunCompletionRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunCompletionResponse RunCompletionResponse
     */
    public function runCompletionWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dialogue)) {
            $body['Dialogue'] = $request->dialogue;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $body['ModelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->serviceInspection)) {
            $body['ServiceInspection'] = $request->serviceInspection;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['Stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $body['TemplateIds'] = $request->templateIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCompletion',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/completion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunCompletionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string               $workspaceId
     * @param string               $appId
     * @param RunCompletionRequest $request     RunCompletionRequest
     *
     * @return RunCompletionResponse RunCompletionResponse
     */
    public function runCompletion($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runCompletionWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string                      $workspaceId
     * @param string                      $appId
     * @param RunCompletionMessageRequest $request     RunCompletionMessageRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunCompletionMessageResponse RunCompletionMessageResponse
     */
    public function runCompletionMessageWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->messages)) {
            $body['Messages'] = $request->messages;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $body['ModelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['Stream'] = $request->stream;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCompletionMessage',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/ccai/app/' . OpenApiUtilClient::getEncodeParam($appId) . '/completion_message',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunCompletionMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CCAI服务面API
     *  *
     * @param string                      $workspaceId
     * @param string                      $appId
     * @param RunCompletionMessageRequest $request     RunCompletionMessageRequest
     *
     * @return RunCompletionMessageResponse RunCompletionMessageResponse
     */
    public function runCompletionMessage($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runCompletionMessageWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }
}
