<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CancelAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CancelAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteMaterialByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteMaterialByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportGeneratedContentResponse;
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
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskResponse;
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
     * @param CancelAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelAsyncTaskResponse
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
     * @param CancelAsyncTaskRequest $request
     *
     * @return CancelAsyncTaskResponse
     */
    public function cancelAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateGeneratedContentRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGeneratedContentResponse
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
     * @param CreateGeneratedContentRequest $request
     *
     * @return CreateGeneratedContentResponse
     */
    public function createGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @param CreateTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTokenResponse
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
     * @param CreateTokenRequest $request
     *
     * @return CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGeneratedContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteGeneratedContentResponse
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
     * @param DeleteGeneratedContentRequest $request
     *
     * @return DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMaterialByIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMaterialByIdResponse
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
     * @param DeleteMaterialByIdRequest $request
     *
     * @return DeleteMaterialByIdResponse
     */
    public function deleteMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * @param ExportGeneratedContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExportGeneratedContentResponse
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
     * @param ExportGeneratedContentRequest $request
     *
     * @return ExportGeneratedContentResponse
     */
    public function exportGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @param FeedbackDialogueRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return FeedbackDialogueResponse
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
     * @param FeedbackDialogueRequest $request
     *
     * @return FeedbackDialogueResponse
     */
    public function feedbackDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackDialogueWithOptions($request, $runtime);
    }

    /**
     * @param FetchImageTaskRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return FetchImageTaskResponse
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
     * @param FetchImageTaskRequest $request
     *
     * @return FetchImageTaskResponse
     */
    public function fetchImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchImageTaskWithOptions($request, $runtime);
    }

    /**
     * @param GenerateFileUrlByKeyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateFileUrlByKeyResponse
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
     * @param GenerateFileUrlByKeyRequest $request
     *
     * @return GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileUrlByKeyWithOptions($request, $runtime);
    }

    /**
     * @param GenerateImageTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateImageTaskResponse
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
     * @param GenerateImageTaskRequest $request
     *
     * @return GenerateImageTaskResponse
     */
    public function generateImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateImageTaskWithOptions($request, $runtime);
    }

    /**
     * @param GenerateUploadConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateUploadConfigResponse
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
     * @param GenerateUploadConfigRequest $request
     *
     * @return GenerateUploadConfigResponse
     */
    public function generateUploadConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadConfigWithOptions($request, $runtime);
    }

    /**
     * @param GenerateViewPointRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateViewPointResponse
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
     * @param GenerateViewPointRequest $request
     *
     * @return GenerateViewPointResponse
     */
    public function generateViewPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateViewPointWithOptions($request, $runtime);
    }

    /**
     * @param GetDataSourceOrderConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataSourceOrderConfigResponse
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
     * @param GetDataSourceOrderConfigRequest $request
     *
     * @return GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetGeneratedContentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetGeneratedContentResponse
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
     * @param GetGeneratedContentRequest $request
     *
     * @return GetGeneratedContentResponse
     */
    public function getGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @param GetMaterialByIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMaterialByIdResponse
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
     * @param GetMaterialByIdRequest $request
     *
     * @return GetMaterialByIdResponse
     */
    public function getMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetPropertiesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPropertiesResponse
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
     * @param GetPropertiesRequest $request
     *
     * @return GetPropertiesResponse
     */
    public function getProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPropertiesWithOptions($request, $runtime);
    }

    /**
     * @param ListAsyncTasksRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListAsyncTasksResponse
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
     * @param ListAsyncTasksRequest $request
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsyncTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListBuildConfigsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBuildConfigsResponse
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
     * @param ListBuildConfigsRequest $request
     *
     * @return ListBuildConfigsResponse
     */
    public function listBuildConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBuildConfigsWithOptions($request, $runtime);
    }

    /**
     * @param ListDialoguesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDialoguesResponse
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
     * @param ListDialoguesRequest $request
     *
     * @return ListDialoguesResponse
     */
    public function listDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialoguesWithOptions($request, $runtime);
    }

    /**
     * @param ListGeneratedContentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListGeneratedContentsResponse
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
     * @param ListGeneratedContentsRequest $request
     *
     * @return ListGeneratedContentsResponse
     */
    public function listGeneratedContents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGeneratedContentsWithOptions($request, $runtime);
    }

    /**
     * @param ListHotNewsWithTypeRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListHotNewsWithTypeResponse
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
     * @param ListHotNewsWithTypeRequest $request
     *
     * @return ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotNewsWithTypeWithOptions($request, $runtime);
    }

    /**
     * @param ListMaterialDocumentsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListMaterialDocumentsResponse
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
     * @param ListMaterialDocumentsRequest $request
     *
     * @return ListMaterialDocumentsResponse
     */
    public function listMaterialDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMaterialDocumentsWithOptions($request, $runtime);
    }

    /**
     * @param ListVersionsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVersionsResponse
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
     * @param ListVersionsRequest $request
     *
     * @return ListVersionsResponse
     */
    public function listVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryAsyncTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryAsyncTaskResponse
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
     * @param QueryAsyncTaskRequest $request
     *
     * @return QueryAsyncTaskResponse
     */
    public function queryAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param SaveDataSourceOrderConfigRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveDataSourceOrderConfigResponse
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
     * @param SaveDataSourceOrderConfigRequest $request
     *
     * @return SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @param SaveMaterialDocumentRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SaveMaterialDocumentResponse
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
     * @param SaveMaterialDocumentRequest $request
     *
     * @return SaveMaterialDocumentResponse
     */
    public function saveMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMaterialDocumentWithOptions($request, $runtime);
    }

    /**
     * @param SearchNewsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return SearchNewsResponse
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
     * @param SearchNewsRequest $request
     *
     * @return SearchNewsResponse
     */
    public function searchNews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNewsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitAsyncTaskResponse
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
     * @param SubmitAsyncTaskRequest $request
     *
     * @return SubmitAsyncTaskResponse
     */
    public function submitAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGeneratedContentRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGeneratedContentResponse
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
     * @param UpdateGeneratedContentRequest $request
     *
     * @return UpdateGeneratedContentResponse
     */
    public function updateGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMaterialDocumentRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMaterialDocumentResponse
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
     * @param UpdateMaterialDocumentRequest $request
     *
     * @return UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMaterialDocumentWithOptions($request, $runtime);
    }
}
