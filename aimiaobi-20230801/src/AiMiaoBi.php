<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CancelAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CancelAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ClearIntervenesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ClearIntervenesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteInterveneRuleRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteInterveneRuleResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteMaterialByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteMaterialByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DocumentExtractionRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DocumentExtractionResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DocumentExtractionShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportIntervenesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportIntervenesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FeedbackDialogueRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FeedbackDialogueResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FeedbackDialogueShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateFileUrlByKeyRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateFileUrlByKeyResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateUploadConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateUploadConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneTemplateFileUrlRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneTemplateFileUrlResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileAsyncRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileAsyncResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneCntRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneCntResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveMaterialDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveMaterialDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveMaterialDocumentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneratedContentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateMaterialDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateMaterialDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateMaterialDocumentShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AiMiaoBi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aimiaobi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelAsyncTaskRequest $request CancelAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAsyncTaskResponse CancelAsyncTaskResponse
     */
    public function cancelAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelAsyncTask',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消异步任务
     *  *
     * @param CancelAsyncTaskRequest $request CancelAsyncTaskRequest
     *
     * @return CancelAsyncTaskResponse CancelAsyncTaskResponse
     */
    public function cancelAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 清除所有干预内容
     *  *
     * @param ClearIntervenesRequest $request ClearIntervenesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearIntervenesResponse ClearIntervenesResponse
     */
    public function clearIntervenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearIntervenes',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 清除所有干预内容
     *  *
     * @param ClearIntervenesRequest $request ClearIntervenesRequest
     *
     * @return ClearIntervenesResponse ClearIntervenesResponse
     */
    public function clearIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearIntervenesWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-创建
     *  *
     * @param CreateGeneratedContentRequest $tmpReq  CreateGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGeneratedContentResponse CreateGeneratedContentResponse
     */
    public function createGeneratedContentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateGeneratedContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->keywords)) {
            $request->keywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentDomain)) {
            $body['ContentDomain'] = $request->contentDomain;
        }
        if (!Utils::isUnset($request->contentText)) {
            $body['ContentText'] = $request->contentText;
        }
        if (!Utils::isUnset($request->keywordsShrink)) {
            $body['Keywords'] = $request->keywordsShrink;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGeneratedContent',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-创建
     *  *
     * @param CreateGeneratedContentRequest $request CreateGeneratedContentRequest
     *
     * @return CreateGeneratedContentResponse CreateGeneratedContentResponse
     */
    public function createGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 获取授权token
     *  *
     * @param CreateTokenRequest $request CreateTokenRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTokenResponse CreateTokenResponse
     */
    public function createTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateToken',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取授权token
     *  *
     * @param CreateTokenRequest $request CreateTokenRequest
     *
     * @return CreateTokenResponse CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自定义文本
     *  *
     * @param DeleteCustomTextRequest $request DeleteCustomTextRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomTextResponse DeleteCustomTextResponse
     */
    public function deleteCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomText',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义文本
     *  *
     * @param DeleteCustomTextRequest $request DeleteCustomTextRequest
     *
     * @return DeleteCustomTextResponse DeleteCustomTextResponse
     */
    public function deleteCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-删除。
     *  *
     * @param DeleteGeneratedContentRequest $request DeleteGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGeneratedContentResponse DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGeneratedContent',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-删除。
     *  *
     * @param DeleteGeneratedContentRequest $request DeleteGeneratedContentRequest
     *
     * @return DeleteGeneratedContentResponse DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除干预规则
     *  *
     * @param DeleteInterveneRuleRequest $request DeleteInterveneRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInterveneRuleResponse DeleteInterveneRuleResponse
     */
    public function deleteInterveneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInterveneRule',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInterveneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除干预规则
     *  *
     * @param DeleteInterveneRuleRequest $request DeleteInterveneRuleRequest
     *
     * @return DeleteInterveneRuleResponse DeleteInterveneRuleResponse
     */
    public function deleteInterveneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInterveneRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID删除素材
     *  *
     * @param DeleteMaterialByIdRequest $request DeleteMaterialByIdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMaterialByIdResponse DeleteMaterialByIdResponse
     */
    public function deleteMaterialByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMaterialById',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMaterialByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据ID删除素材
     *  *
     * @param DeleteMaterialByIdRequest $request DeleteMaterialByIdRequest
     *
     * @return DeleteMaterialByIdResponse DeleteMaterialByIdResponse
     */
    public function deleteMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 从链接中提取文档内容
     *  *
     * @param DocumentExtractionRequest $tmpReq  DocumentExtractionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DocumentExtractionResponse DocumentExtractionResponse
     */
    public function documentExtractionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DocumentExtractionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->urls)) {
            $request->urlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->urls, 'Urls', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->urlsShrink)) {
            $body['Urls'] = $request->urlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DocumentExtraction',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DocumentExtractionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从链接中提取文档内容
     *  *
     * @param DocumentExtractionRequest $request DocumentExtractionRequest
     *
     * @return DocumentExtractionResponse DocumentExtractionResponse
     */
    public function documentExtraction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->documentExtractionWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-导出。
     *  *
     * @param ExportGeneratedContentRequest $request ExportGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportGeneratedContentResponse ExportGeneratedContentResponse
     */
    public function exportGeneratedContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportGeneratedContent',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-导出。
     *  *
     * @param ExportGeneratedContentRequest $request ExportGeneratedContentRequest
     *
     * @return ExportGeneratedContentResponse ExportGeneratedContentResponse
     */
    public function exportGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 导出所有干预内容
     *  *
     * @param ExportIntervenesRequest $request ExportIntervenesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportIntervenesResponse ExportIntervenesResponse
     */
    public function exportIntervenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportIntervenes',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出所有干预内容
     *  *
     * @param ExportIntervenesRequest $request ExportIntervenesRequest
     *
     * @return ExportIntervenesResponse ExportIntervenesResponse
     */
    public function exportIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportIntervenesWithOptions($request, $runtime);
    }

    /**
     * @summary 反馈某次生成的结果
     *  *
     * @param FeedbackDialogueRequest $tmpReq  FeedbackDialogueRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FeedbackDialogueResponse FeedbackDialogueResponse
     */
    public function feedbackDialogueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FeedbackDialogueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ratingTags)) {
            $request->ratingTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ratingTags, 'RatingTags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->customerResponse)) {
            $body['CustomerResponse'] = $request->customerResponse;
        }
        if (!Utils::isUnset($request->goodText)) {
            $body['GoodText'] = $request->goodText;
        }
        if (!Utils::isUnset($request->modifiedResponse)) {
            $body['ModifiedResponse'] = $request->modifiedResponse;
        }
        if (!Utils::isUnset($request->rating)) {
            $body['Rating'] = $request->rating;
        }
        if (!Utils::isUnset($request->ratingTagsShrink)) {
            $body['RatingTags'] = $request->ratingTagsShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FeedbackDialogue',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FeedbackDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 反馈某次生成的结果
     *  *
     * @param FeedbackDialogueRequest $request FeedbackDialogueRequest
     *
     * @return FeedbackDialogueResponse FeedbackDialogueResponse
     */
    public function feedbackDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackDialogueWithOptions($request, $runtime);
    }

    /**
     * @param FetchImageTaskRequest $tmpReq  FetchImageTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchImageTaskResponse FetchImageTaskResponse
     */
    public function fetchImageTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FetchImageTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIdList)) {
            $request->taskIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'TaskIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->articleTaskId)) {
            $body['ArticleTaskId'] = $request->articleTaskId;
        }
        if (!Utils::isUnset($request->taskIdListShrink)) {
            $body['TaskIdList'] = $request->taskIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FetchImageTask',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FetchImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FetchImageTaskRequest $request FetchImageTaskRequest
     *
     * @return FetchImageTaskResponse FetchImageTaskResponse
     */
    public function fetchImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchImageTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 生成临时可访问的公开url
     *  *
     * @param GenerateFileUrlByKeyRequest $request GenerateFileUrlByKeyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateFileUrlByKeyResponse GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateFileUrlByKey',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateFileUrlByKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成临时可访问的公开url
     *  *
     * @param GenerateFileUrlByKeyRequest $request GenerateFileUrlByKeyRequest
     *
     * @return GenerateFileUrlByKeyResponse GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileUrlByKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 智能配图，图片生成任务
     *  *
     * @param GenerateImageTaskRequest $tmpReq  GenerateImageTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateImageTaskResponse GenerateImageTaskResponse
     */
    public function generateImageTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateImageTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->paragraphList)) {
            $request->paragraphListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->paragraphList, 'ParagraphList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->articleTaskId)) {
            $body['ArticleTaskId'] = $request->articleTaskId;
        }
        if (!Utils::isUnset($request->paragraphListShrink)) {
            $body['ParagraphList'] = $request->paragraphListShrink;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->style)) {
            $body['Style'] = $request->style;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateImageTask',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能配图，图片生成任务
     *  *
     * @param GenerateImageTaskRequest $request GenerateImageTaskRequest
     *
     * @return GenerateImageTaskResponse GenerateImageTaskResponse
     */
    public function generateImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateImageTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 生成上传配置
     *  *
     * @param GenerateUploadConfigRequest $request GenerateUploadConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateUploadConfigResponse GenerateUploadConfigResponse
     */
    public function generateUploadConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->parentDir)) {
            $body['ParentDir'] = $request->parentDir;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateUploadConfig',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUploadConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成上传配置
     *  *
     * @param GenerateUploadConfigRequest $request GenerateUploadConfigRequest
     *
     * @return GenerateUploadConfigResponse GenerateUploadConfigResponse
     */
    public function generateUploadConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 视角生成
     *  *
     * @param GenerateViewPointRequest $tmpReq  GenerateViewPointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateViewPointResponse GenerateViewPointResponse
     */
    public function generateViewPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateViewPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateViewPoint',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateViewPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视角生成
     *  *
     * @param GenerateViewPointRequest $request GenerateViewPointRequest
     *
     * @return GenerateViewPointResponse GenerateViewPointResponse
     */
    public function generateViewPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateViewPointWithOptions($request, $runtime);
    }

    /**
     * @summary 获取自定义文本
     *  *
     * @param GetCustomTextRequest $request GetCustomTextRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomTextResponse GetCustomTextResponse
     */
    public function getCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCustomText',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义文本
     *  *
     * @param GetCustomTextRequest $request GetCustomTextRequest
     *
     * @return GetCustomTextResponse GetCustomTextResponse
     */
    public function getCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统数据源配置和个人配置
     *  *
     * @param GetDataSourceOrderConfigRequest $request GetDataSourceOrderConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataSourceOrderConfigResponse GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDataSourceOrderConfig',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取系统数据源配置和个人配置
     *  *
     * @param GetDataSourceOrderConfigRequest $request GetDataSourceOrderConfigRequest
     *
     * @return GetDataSourceOrderConfigResponse GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-查询详情。
     *  *
     * @param GetGeneratedContentRequest $request GetGeneratedContentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGeneratedContentResponse GetGeneratedContentResponse
     */
    public function getGeneratedContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGeneratedContent',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-查询详情。
     *  *
     * @param GetGeneratedContentRequest $request GetGeneratedContentRequest
     *
     * @return GetGeneratedContentResponse GetGeneratedContentResponse
     */
    public function getGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预全局回复
     *  *
     * @param GetInterveneGlobalReplyRequest $request GetInterveneGlobalReplyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneGlobalReplyResponse GetInterveneGlobalReplyResponse
     */
    public function getInterveneGlobalReplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInterveneGlobalReply',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterveneGlobalReplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得干预全局回复
     *  *
     * @param GetInterveneGlobalReplyRequest $request GetInterveneGlobalReplyRequest
     *
     * @return GetInterveneGlobalReplyResponse GetInterveneGlobalReplyResponse
     */
    public function getInterveneGlobalReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneGlobalReplyWithOptions($request, $runtime);
    }

    /**
     * @summary 获得导入任务信息
     *  *
     * @param GetInterveneImportTaskInfoRequest $request GetInterveneImportTaskInfoRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneImportTaskInfoResponse GetInterveneImportTaskInfoResponse
     */
    public function getInterveneImportTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInterveneImportTaskInfo',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterveneImportTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得导入任务信息
     *  *
     * @param GetInterveneImportTaskInfoRequest $request GetInterveneImportTaskInfoRequest
     *
     * @return GetInterveneImportTaskInfoResponse GetInterveneImportTaskInfoResponse
     */
    public function getInterveneImportTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneImportTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预项规则详情
     *  *
     * @param GetInterveneRuleDetailRequest $request GetInterveneRuleDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneRuleDetailResponse GetInterveneRuleDetailResponse
     */
    public function getInterveneRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInterveneRuleDetail',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterveneRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得干预项规则详情
     *  *
     * @param GetInterveneRuleDetailRequest $request GetInterveneRuleDetailRequest
     *
     * @return GetInterveneRuleDetailResponse GetInterveneRuleDetailResponse
     */
    public function getInterveneRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预导入模版文件下载地址
     *  *
     * @param GetInterveneTemplateFileUrlRequest $request GetInterveneTemplateFileUrlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneTemplateFileUrlResponse GetInterveneTemplateFileUrlResponse
     */
    public function getInterveneTemplateFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInterveneTemplateFileUrl',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInterveneTemplateFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得干预导入模版文件下载地址
     *  *
     * @param GetInterveneTemplateFileUrlRequest $request GetInterveneTemplateFileUrlRequest
     *
     * @return GetInterveneTemplateFileUrlResponse GetInterveneTemplateFileUrlResponse
     */
    public function getInterveneTemplateFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneTemplateFileUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID获取素材内容
     *  *
     * @param GetMaterialByIdRequest $request GetMaterialByIdRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMaterialByIdResponse GetMaterialByIdResponse
     */
    public function getMaterialByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMaterialById',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMaterialByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据ID获取素材内容
     *  *
     * @param GetMaterialByIdRequest $request GetMaterialByIdRequest
     *
     * @return GetMaterialByIdResponse GetMaterialByIdResponse
     */
    public function getMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前用户的配置
     *  *
     * @param GetPropertiesRequest $request GetPropertiesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPropertiesResponse GetPropertiesResponse
     */
    public function getPropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProperties',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取当前用户的配置
     *  *
     * @param GetPropertiesRequest $request GetPropertiesRequest
     *
     * @return GetPropertiesResponse GetPropertiesResponse
     */
    public function getProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPropertiesWithOptions($request, $runtime);
    }

    /**
     * @summary 导入干预文件
     *  *
     * @param ImportInterveneFileRequest $request ImportInterveneFileRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportInterveneFileResponse ImportInterveneFileResponse
     */
    public function importInterveneFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->docName)) {
            $body['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportInterveneFile',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportInterveneFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导入干预文件
     *  *
     * @param ImportInterveneFileRequest $request ImportInterveneFileRequest
     *
     * @return ImportInterveneFileResponse ImportInterveneFileResponse
     */
    public function importInterveneFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importInterveneFileWithOptions($request, $runtime);
    }

    /**
     * @summary 异步导入干预文件
     *  *
     * @param ImportInterveneFileAsyncRequest $request ImportInterveneFileAsyncRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportInterveneFileAsyncResponse ImportInterveneFileAsyncResponse
     */
    public function importInterveneFileAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->docName)) {
            $body['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportInterveneFileAsync',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportInterveneFileAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 异步导入干预文件
     *  *
     * @param ImportInterveneFileAsyncRequest $request ImportInterveneFileAsyncRequest
     *
     * @return ImportInterveneFileAsyncResponse ImportInterveneFileAsyncResponse
     */
    public function importInterveneFileAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importInterveneFileAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary 设置干预全局回复
     *  *
     * @param InsertInterveneGlobalReplyRequest $tmpReq  InsertInterveneGlobalReplyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertInterveneGlobalReplyResponse InsertInterveneGlobalReplyResponse
     */
    public function insertInterveneGlobalReplyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertInterveneGlobalReplyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->replyMessagList)) {
            $request->replyMessagListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->replyMessagList, 'ReplyMessagList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->replyMessagListShrink)) {
            $body['ReplyMessagList'] = $request->replyMessagListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertInterveneGlobalReply',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertInterveneGlobalReplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置干预全局回复
     *  *
     * @param InsertInterveneGlobalReplyRequest $request InsertInterveneGlobalReplyRequest
     *
     * @return InsertInterveneGlobalReplyResponse InsertInterveneGlobalReplyResponse
     */
    public function insertInterveneGlobalReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInterveneGlobalReplyWithOptions($request, $runtime);
    }

    /**
     * @summary 插入干预规则
     *  *
     * @param InsertInterveneRuleRequest $tmpReq  InsertInterveneRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertInterveneRuleResponse InsertInterveneRuleResponse
     */
    public function insertInterveneRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertInterveneRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->interveneRuleConfig)) {
            $request->interveneRuleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->interveneRuleConfig, 'InterveneRuleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->interveneRuleConfigShrink)) {
            $body['InterveneRuleConfig'] = $request->interveneRuleConfigShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertInterveneRule',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertInterveneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 插入干预规则
     *  *
     * @param InsertInterveneRuleRequest $request InsertInterveneRuleRequest
     *
     * @return InsertInterveneRuleResponse InsertInterveneRuleResponse
     */
    public function insertInterveneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInterveneRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListAsyncTasksRequest $tmpReq  ListAsyncTasksRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAsyncTasksResponse ListAsyncTasksResponse
     */
    public function listAsyncTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAsyncTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskStatusList)) {
            $request->taskStatusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskStatusList, 'TaskStatusList', 'json');
        }
        if (!Utils::isUnset($tmpReq->taskTypeList)) {
            $request->taskTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskTypeList, 'TaskTypeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->taskCode)) {
            $body['TaskCode'] = $request->taskCode;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->taskStatusListShrink)) {
            $body['TaskStatusList'] = $request->taskStatusListShrink;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->taskTypeListShrink)) {
            $body['TaskTypeList'] = $request->taskTypeListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAsyncTasks',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListAsyncTasksRequest $request ListAsyncTasksRequest
     *
     * @return ListAsyncTasksResponse ListAsyncTasksResponse
     */
    public function listAsyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsyncTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统自定义预设
     *  *
     * @param ListBuildConfigsRequest $request ListBuildConfigsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBuildConfigsResponse ListBuildConfigsResponse
     */
    public function listBuildConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBuildConfigs',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBuildConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取系统自定义预设
     *  *
     * @param ListBuildConfigsRequest $request ListBuildConfigsRequest
     *
     * @return ListBuildConfigsResponse ListBuildConfigsResponse
     */
    public function listBuildConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBuildConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义文本列表
     *  *
     * @param ListCustomTextRequest $request ListCustomTextRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomTextResponse ListCustomTextResponse
     */
    public function listCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCustomText',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自定义文本列表
     *  *
     * @param ListCustomTextRequest $request ListCustomTextRequest
     *
     * @return ListCustomTextResponse ListCustomTextResponse
     */
    public function listCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 生成历史列表
     *  *
     * @param ListDialoguesRequest $request ListDialoguesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDialoguesResponse ListDialoguesResponse
     */
    public function listDialoguesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->dialogueType)) {
            $body['DialogueType'] = $request->dialogueType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDialogues',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成历史列表
     *  *
     * @param ListDialoguesRequest $request ListDialoguesRequest
     *
     * @return ListDialoguesResponse ListDialoguesResponse
     */
    public function listDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialoguesWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-列表。
     *  *
     * @param ListGeneratedContentsRequest $request ListGeneratedContentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGeneratedContentsResponse ListGeneratedContentsResponse
     */
    public function listGeneratedContentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->contentDomain)) {
            $body['ContentDomain'] = $request->contentDomain;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGeneratedContents',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGeneratedContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-列表。
     *  *
     * @param ListGeneratedContentsRequest $request ListGeneratedContentsRequest
     *
     * @return ListGeneratedContentsResponse ListGeneratedContentsResponse
     */
    public function listGeneratedContents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGeneratedContentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取分类的热点新闻
     *  *
     * @param ListHotNewsWithTypeRequest $tmpReq  ListHotNewsWithTypeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotNewsWithTypeResponse ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithTypeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotNewsWithTypeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->newsTypes)) {
            $request->newsTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->newsTypes, 'NewsTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->newsType)) {
            $body['NewsType'] = $request->newsType;
        }
        if (!Utils::isUnset($request->newsTypesShrink)) {
            $body['NewsTypes'] = $request->newsTypesShrink;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListHotNewsWithType',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotNewsWithTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取分类的热点新闻
     *  *
     * @param ListHotNewsWithTypeRequest $request ListHotNewsWithTypeRequest
     *
     * @return ListHotNewsWithTypeResponse ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotNewsWithTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预项目数量列表
     *  *
     * @param ListInterveneCntRequest $request ListInterveneCntRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterveneCntResponse ListInterveneCntResponse
     */
    public function listInterveneCntWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInterveneCnt',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterveneCntResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得干预项目数量列表
     *  *
     * @param ListInterveneCntRequest $request ListInterveneCntRequest
     *
     * @return ListInterveneCntResponse ListInterveneCntResponse
     */
    public function listInterveneCnt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneCntWithOptions($request, $runtime);
    }

    /**
     * @summary 获得导入任务列表
     *  *
     * @param ListInterveneImportTasksRequest $request ListInterveneImportTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterveneImportTasksResponse ListInterveneImportTasksResponse
     */
    public function listInterveneImportTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInterveneImportTasks',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterveneImportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得导入任务列表
     *  *
     * @param ListInterveneImportTasksRequest $request ListInterveneImportTasksRequest
     *
     * @return ListInterveneImportTasksResponse ListInterveneImportTasksResponse
     */
    public function listInterveneImportTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneImportTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预规则列表
     *  *
     * @param ListInterveneRulesRequest $request ListInterveneRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterveneRulesResponse ListInterveneRulesResponse
     */
    public function listInterveneRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInterveneRules',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInterveneRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得干预规则列表
     *  *
     * @param ListInterveneRulesRequest $request ListInterveneRulesRequest
     *
     * @return ListInterveneRulesResponse ListInterveneRulesResponse
     */
    public function listInterveneRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预项列表
     *  *
     * @param ListIntervenesRequest $request ListIntervenesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntervenesResponse ListIntervenesResponse
     */
    public function listIntervenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->interveneType)) {
            $body['InterveneType'] = $request->interveneType;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIntervenes',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得干预项列表
     *  *
     * @param ListIntervenesRequest $request ListIntervenesRequest
     *
     * @return ListIntervenesResponse ListIntervenesResponse
     */
    public function listIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervenesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询素材列表
     *  *
     * @param ListMaterialDocumentsRequest $tmpReq  ListMaterialDocumentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMaterialDocumentsResponse ListMaterialDocumentsResponse
     */
    public function listMaterialDocumentsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMaterialDocumentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docTypeList)) {
            $request->docTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docTypeList, 'DocTypeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->keywords)) {
            $request->keywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->docTypeListShrink)) {
            $body['DocTypeList'] = $request->docTypeListShrink;
        }
        if (!Utils::isUnset($request->generatePublicUrl)) {
            $body['GeneratePublicUrl'] = $request->generatePublicUrl;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->keywordsShrink)) {
            $body['Keywords'] = $request->keywordsShrink;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->shareAttr)) {
            $body['ShareAttr'] = $request->shareAttr;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->updateTimeEnd)) {
            $body['UpdateTimeEnd'] = $request->updateTimeEnd;
        }
        if (!Utils::isUnset($request->updateTimeStart)) {
            $body['UpdateTimeStart'] = $request->updateTimeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMaterialDocuments',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMaterialDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询素材列表
     *  *
     * @param ListMaterialDocumentsRequest $request ListMaterialDocumentsRequest
     *
     * @return ListMaterialDocumentsResponse ListMaterialDocumentsResponse
     */
    public function listMaterialDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMaterialDocumentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统所有实例信息
     *  *
     * @param ListVersionsRequest $request ListVersionsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVersionsResponse ListVersionsResponse
     */
    public function listVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVersions',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取系统所有实例信息
     *  *
     * @param ListVersionsRequest $request ListVersionsRequest
     *
     * @return ListVersionsResponse ListVersionsResponse
     */
    public function listVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary 根据taskId查询异步任务状态
     *  *
     * @param QueryAsyncTaskRequest $request QueryAsyncTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAsyncTaskResponse QueryAsyncTaskResponse
     */
    public function queryAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAsyncTask',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据taskId查询异步任务状态
     *  *
     * @param QueryAsyncTaskRequest $request QueryAsyncTaskRequest
     *
     * @return QueryAsyncTaskResponse QueryAsyncTaskResponse
     */
    public function queryAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 保存自定义文本
     *  *
     * @param SaveCustomTextRequest $request SaveCustomTextRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveCustomTextResponse SaveCustomTextResponse
     */
    public function saveCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveCustomText',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保存自定义文本
     *  *
     * @param SaveCustomTextRequest $request SaveCustomTextRequest
     *
     * @return SaveCustomTextResponse SaveCustomTextResponse
     */
    public function saveCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 保存用户的信源配置
     *  *
     * @param SaveDataSourceOrderConfigRequest $tmpReq  SaveDataSourceOrderConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveDataSourceOrderConfigResponse SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveDataSourceOrderConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userConfigDataSourceList)) {
            $request->userConfigDataSourceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userConfigDataSourceList, 'UserConfigDataSourceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->userConfigDataSourceListShrink)) {
            $body['UserConfigDataSourceList'] = $request->userConfigDataSourceListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveDataSourceOrderConfig',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveDataSourceOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保存用户的信源配置
     *  *
     * @param SaveDataSourceOrderConfigRequest $request SaveDataSourceOrderConfigRequest
     *
     * @return SaveDataSourceOrderConfigResponse SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 保存素材
     *  *
     * @param SaveMaterialDocumentRequest $tmpReq  SaveMaterialDocumentRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveMaterialDocumentResponse SaveMaterialDocumentResponse
     */
    public function saveMaterialDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveMaterialDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docKeywords)) {
            $request->docKeywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docKeywords, 'DocKeywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->author)) {
            $body['Author'] = $request->author;
        }
        if (!Utils::isUnset($request->bothSavePrivateAndShare)) {
            $body['BothSavePrivateAndShare'] = $request->bothSavePrivateAndShare;
        }
        if (!Utils::isUnset($request->docKeywordsShrink)) {
            $body['DocKeywords'] = $request->docKeywordsShrink;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->externalUrl)) {
            $body['ExternalUrl'] = $request->externalUrl;
        }
        if (!Utils::isUnset($request->htmlContent)) {
            $body['HtmlContent'] = $request->htmlContent;
        }
        if (!Utils::isUnset($request->pubTime)) {
            $body['PubTime'] = $request->pubTime;
        }
        if (!Utils::isUnset($request->shareAttr)) {
            $body['ShareAttr'] = $request->shareAttr;
        }
        if (!Utils::isUnset($request->srcFrom)) {
            $body['SrcFrom'] = $request->srcFrom;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['TextContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveMaterialDocument',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveMaterialDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保存素材
     *  *
     * @param SaveMaterialDocumentRequest $request SaveMaterialDocumentRequest
     *
     * @return SaveMaterialDocumentResponse SaveMaterialDocumentResponse
     */
    public function saveMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMaterialDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 新闻检索
     *  *
     * @param SearchNewsRequest $tmpReq  SearchNewsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchNewsResponse SearchNewsResponse
     */
    public function searchNewsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchNewsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->searchSources)) {
            $request->searchSourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchSources, 'SearchSources', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->filterNotNull)) {
            $body['FilterNotNull'] = $request->filterNotNull;
        }
        if (!Utils::isUnset($request->includeContent)) {
            $body['IncludeContent'] = $request->includeContent;
        }
        if (!Utils::isUnset($request->page)) {
            $body['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->searchSourcesShrink)) {
            $body['SearchSources'] = $request->searchSourcesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchNews',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchNewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新闻检索
     *  *
     * @param SearchNewsRequest $request SearchNewsRequest
     *
     * @return SearchNewsResponse SearchNewsResponse
     */
    public function searchNews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNewsWithOptions($request, $runtime);
    }

    /**
     * @summary 提交异步任务
     *  *
     * @param SubmitAsyncTaskRequest $request SubmitAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAsyncTaskResponse SubmitAsyncTaskResponse
     */
    public function submitAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskCode)) {
            $body['TaskCode'] = $request->taskCode;
        }
        if (!Utils::isUnset($request->taskExecuteTime)) {
            $body['TaskExecuteTime'] = $request->taskExecuteTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskParam)) {
            $body['TaskParam'] = $request->taskParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitAsyncTask',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交异步任务
     *  *
     * @param SubmitAsyncTaskRequest $request SubmitAsyncTaskRequest
     *
     * @return SubmitAsyncTaskResponse SubmitAsyncTaskResponse
     */
    public function submitAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 更新自定义文本
     *  *
     * @param UpdateCustomTextRequest $request UpdateCustomTextRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomTextResponse UpdateCustomTextResponse
     */
    public function updateCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomText',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新自定义文本
     *  *
     * @param UpdateCustomTextRequest $request UpdateCustomTextRequest
     *
     * @return UpdateCustomTextResponse UpdateCustomTextResponse
     */
    public function updateCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-更新。
     *  *
     * @param UpdateGeneratedContentRequest $tmpReq  UpdateGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGeneratedContentResponse UpdateGeneratedContentResponse
     */
    public function updateGeneratedContentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGeneratedContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->keywords)) {
            $request->keywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentText)) {
            $body['ContentText'] = $request->contentText;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->keywordsShrink)) {
            $body['Keywords'] = $request->keywordsShrink;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGeneratedContent',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-更新。
     *  *
     * @param UpdateGeneratedContentRequest $request UpdateGeneratedContentRequest
     *
     * @return UpdateGeneratedContentResponse UpdateGeneratedContentResponse
     */
    public function updateGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID更新素材
     *  *
     * @param UpdateMaterialDocumentRequest $tmpReq  UpdateMaterialDocumentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMaterialDocumentResponse UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMaterialDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docKeywords)) {
            $request->docKeywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docKeywords, 'DocKeywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->author)) {
            $body['Author'] = $request->author;
        }
        if (!Utils::isUnset($request->docKeywordsShrink)) {
            $body['DocKeywords'] = $request->docKeywordsShrink;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->externalUrl)) {
            $body['ExternalUrl'] = $request->externalUrl;
        }
        if (!Utils::isUnset($request->htmlContent)) {
            $body['HtmlContent'] = $request->htmlContent;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pubTime)) {
            $body['PubTime'] = $request->pubTime;
        }
        if (!Utils::isUnset($request->shareAttr)) {
            $body['ShareAttr'] = $request->shareAttr;
        }
        if (!Utils::isUnset($request->srcFrom)) {
            $body['SrcFrom'] = $request->srcFrom;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['TextContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMaterialDocument',
            'version'     => '2023-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMaterialDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据ID更新素材
     *  *
     * @param UpdateMaterialDocumentRequest $request UpdateMaterialDocumentRequest
     *
     * @return UpdateMaterialDocumentResponse UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMaterialDocumentWithOptions($request, $runtime);
    }
}
