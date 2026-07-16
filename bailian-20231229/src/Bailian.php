<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddChunkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddChunkResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddChunkShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddConnectorRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddConnectorResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddConnectorShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddFileShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddTableRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddTableResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddTableShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyFileUploadLeaseResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyTempStorageLeaseRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ApplyTempStorageLeaseResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\BatchUpdateFileTagRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\BatchUpdateFileTagResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\BatchUpdateFileTagShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ChangeParseSettingRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ChangeParseSettingResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ChangeParseSettingShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryNodeRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreateMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreatePromptTemplateRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\CreatePromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteChunkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteChunkResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteChunkShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteConnectorRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteConnectorResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFilesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFilesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteFilesShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexDocumentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteMemoryNodeRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteMemoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeletePromptTemplateRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DeletePromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\DescribeFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetAlipayTransferStatusRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetAlipayTransferStatusResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetAlipayUrlRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetAlipayUrlResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetAvailableParserTypesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetAvailableParserTypesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetConnectorRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetConnectorResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexMonitorRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexMonitorResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetMemoryNodeRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetMemoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetParseSettingsRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetParseSettingsResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPromptTemplateRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPublishedAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPublishedAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\HighCodeDeployRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\HighCodeDeployResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListFileShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexFileDetailsRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexFileDetailsResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoriesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListMemoryNodesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPromptTemplatesResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexAddDocumentsJobShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateChunkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateChunkResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateConnectorRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateConnectorResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateFileTagRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateFileTagResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateFileTagShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateIndexRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateIndexResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryNodeRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryNodeResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdatePromptTemplateRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdatePromptTemplateResponse;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateTableFromAuthorizedOssRequest;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateTableFromAuthorizedOssResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Bailian extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'bailian.cn-beijing.aliyuncs.com',
            'ap-southeast-1' => 'bailian.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailian', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a category in a specified workspace to classify and manage files. Each workspace supports a maximum of 500 categories.
     *
     * @remarks
     * - You cannot use an API to add data tables. To add data tables, go to the [Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center) page in the console.
     * - A RAM user must obtain the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. The `AliyunBailianDataFullAccess` permission, which includes the `sfm:AddCategory` permission, is required. An Alibaba Cloud account can call this operation directly without requiring authorization. To call this operation, use the latest version of the [Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Rate limiting:** Frequent calls to this operation are subject to rate limiting. Do not exceed a frequency of 5 calls per second. If rate limiting is triggered, try again later.
     *
     * @param request - AddCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCategoryResponse
     *
     * @param string             $WorkspaceId
     * @param AddCategoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryName) {
            @$body['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->parentCategoryId) {
            @$body['ParentCategoryId'] = $request->parentCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddCategory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/category/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a category in a specified workspace to classify and manage files. Each workspace supports a maximum of 500 categories.
     *
     * @remarks
     * - You cannot use an API to add data tables. To add data tables, go to the [Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center) page in the console.
     * - A RAM user must obtain the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. The `AliyunBailianDataFullAccess` permission, which includes the `sfm:AddCategory` permission, is required. An Alibaba Cloud account can call this operation directly without requiring authorization. To call this operation, use the latest version of the [Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Rate limiting:** Frequent calls to this operation are subject to rate limiting. Do not exceed a frequency of 5 calls per second. If rate limiting is triggered, try again later.
     *
     * @param request - AddCategoryRequest
     *
     * @returns AddCategoryResponse
     *
     * @param string             $WorkspaceId
     * @param AddCategoryRequest $request
     *
     * @return AddCategoryResponse
     */
    public function addCategory($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addCategoryWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Adds chunks to a document search (document), data query (table), or image Q&A (image) knowledge base.
     *
     * @remarks
     * - This operation adds chunk content to a specified knowledge base of the document search (document), data query (table), or image Q&A (image) type. Operations on multimedia search (multimedia) knowledge bases are not supported. For data query and image Q&A knowledge bases, this operation takes effect only when the data source is a spreadsheet connector (excel).
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:ChunkList permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest [Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     * **Related operations:**
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param tmpReq - AddChunkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddChunkResponse
     *
     * @param string          $WorkspaceId
     * @param AddChunkRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddChunkResponse
     */
    public function addChunkWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddChunkShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->field) {
            $request->fieldShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->field, 'field', 'json');
        }

        $query = [];
        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->dataId) {
            @$query['dataId'] = $request->dataId;
        }

        if (null !== $request->fieldShrink) {
            @$query['field'] = $request->fieldShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddChunk',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/chunk/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddChunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds chunks to a document search (document), data query (table), or image Q&A (image) knowledge base.
     *
     * @remarks
     * - This operation adds chunk content to a specified knowledge base of the document search (document), data query (table), or image Q&A (image) type. Operations on multimedia search (multimedia) knowledge bases are not supported. For data query and image Q&A knowledge bases, this operation takes effect only when the data source is a spreadsheet connector (excel).
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:ChunkList permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest [Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     * **Related operations:**
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - AddChunkRequest
     *
     * @returns AddChunkResponse
     *
     * @param string          $WorkspaceId
     * @param AddChunkRequest $request
     *
     * @return AddChunkResponse
     */
    public function addChunk($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addChunkWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a connector. This API currently supports only file connectors.
     *
     * @remarks
     * - To call this operation, a RAM user (sub-account) must first have the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio and be a member of a [business space](https://help.aliyun.com/document_detail/2851098.html). This requires the `AliyunBailianDataFullAccess` policy, which includes the sfm:AddCategory permission. A primary account can call this operation directly without authorization. We recommend using the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is not idempotent.
     * **Throttling:**
     * Do not call this operation more than 5 times per second. If a request is throttled, try again later.
     *
     * @param tmpReq - AddConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddConnectorResponse
     *
     * @param string              $WorkspaceId
     * @param AddConnectorRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return AddConnectorResponse
     */
    public function addConnectorWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddConnectorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileConnectorConfig) {
            $request->fileConnectorConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileConnectorConfig, 'FileConnectorConfig', 'json');
        }

        $body = [];
        if (null !== $request->connectorName) {
            @$body['ConnectorName'] = $request->connectorName;
        }

        if (null !== $request->connectorType) {
            @$body['ConnectorType'] = $request->connectorType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->fileConnectorConfigShrink) {
            @$body['FileConnectorConfig'] = $request->fileConnectorConfigShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddConnector',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/connector',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a connector. This API currently supports only file connectors.
     *
     * @remarks
     * - To call this operation, a RAM user (sub-account) must first have the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio and be a member of a [business space](https://help.aliyun.com/document_detail/2851098.html). This requires the `AliyunBailianDataFullAccess` policy, which includes the sfm:AddCategory permission. A primary account can call this operation directly without authorization. We recommend using the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is not idempotent.
     * **Throttling:**
     * Do not call this operation more than 5 times per second. If a request is throttled, try again later.
     *
     * @param request - AddConnectorRequest
     *
     * @returns AddConnectorResponse
     *
     * @param string              $WorkspaceId
     * @param AddConnectorRequest $request
     *
     * @return AddConnectorResponse
     */
    public function addConnector($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addConnectorWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Imports a file from the temporary storage of Alibaba Cloud Model Studio into an Alibaba Cloud Model Studio data connection (formerly known as application data).
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:AddFile permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Invoke this operation by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Throttling:**
     * This operation is subject to throttling. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param tmpReq - AddFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFileResponse
     *
     * @param string         $WorkspaceId
     * @param AddFileRequest $tmpReq
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AddFileResponse
     */
    public function addFileWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parserConfig) {
            $request->parserConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parserConfig, 'ParserConfig', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->leaseId) {
            @$body['LeaseId'] = $request->leaseId;
        }

        if (null !== $request->originalFileUrl) {
            @$body['OriginalFileUrl'] = $request->originalFileUrl;
        }

        if (null !== $request->parser) {
            @$body['Parser'] = $request->parser;
        }

        if (null !== $request->parserConfigShrink) {
            @$body['ParserConfig'] = $request->parserConfigShrink;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports a file from the temporary storage of Alibaba Cloud Model Studio into an Alibaba Cloud Model Studio data connection (formerly known as application data).
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:AddFile permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Invoke this operation by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Throttling:**
     * This operation is subject to throttling. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - AddFileRequest
     *
     * @returns AddFileResponse
     *
     * @param string         $WorkspaceId
     * @param AddFileRequest $request
     *
     * @return AddFileResponse
     */
    public function addFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Imports files from an authorized OSS bucket into Alibaba Cloud Model Studio application data.
     *
     * @remarks
     * - Make sure the OSS bucket belongs to the same Alibaba Cloud account as Model Studio and that authorization has been completed as described in [Importing data from OSS configuration instructions](https://help.aliyun.com/document_detail/2782155.html).
     *
     *      - Supported bucket storage types do not include Archive, Cold Archive, or Deep Cold Archive. Buckets with content encryption enabled are supported. Buckets with public read/write, public read, or private access are supported.
     *      - To use a bucket with [Referer-based hotlink protection](https://help.aliyun.com/document_detail/2636937.html) enabled, add the domain name `*.console.aliyun.com` to the Referer whitelist as described in [Allow access only from trusted websites](https://help.aliyun.com/document_detail/2636937.html).
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (the `AliyunBailianDataFullAccess` permission is required, which includes the sfm:AddFilesFromAuthorizedOss permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Call this operation by using the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation does not have idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 5 calls per second. If throttled, retry later.
     *
     * @param tmpReq - AddFilesFromAuthorizedOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFilesFromAuthorizedOssResponse
     *
     * @param string                           $WorkspaceId
     * @param AddFilesFromAuthorizedOssRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return AddFilesFromAuthorizedOssResponse
     */
    public function addFilesFromAuthorizedOssWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddFilesFromAuthorizedOssShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileDetails) {
            $request->fileDetailsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileDetails, 'FileDetails', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->fileDetailsShrink) {
            @$body['FileDetails'] = $request->fileDetailsShrink;
        }

        if (null !== $request->ossBucketName) {
            @$body['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossRegionId) {
            @$body['OssRegionId'] = $request->ossRegionId;
        }

        if (null !== $request->overWriteFileByOssKey) {
            @$body['OverWriteFileByOssKey'] = $request->overWriteFileByOssKey;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFilesFromAuthorizedOss',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/fromoss',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFilesFromAuthorizedOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports files from an authorized OSS bucket into Alibaba Cloud Model Studio application data.
     *
     * @remarks
     * - Make sure the OSS bucket belongs to the same Alibaba Cloud account as Model Studio and that authorization has been completed as described in [Importing data from OSS configuration instructions](https://help.aliyun.com/document_detail/2782155.html).
     *
     *      - Supported bucket storage types do not include Archive, Cold Archive, or Deep Cold Archive. Buckets with content encryption enabled are supported. Buckets with public read/write, public read, or private access are supported.
     *      - To use a bucket with [Referer-based hotlink protection](https://help.aliyun.com/document_detail/2636937.html) enabled, add the domain name `*.console.aliyun.com` to the Referer whitelist as described in [Allow access only from trusted websites](https://help.aliyun.com/document_detail/2636937.html).
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (the `AliyunBailianDataFullAccess` permission is required, which includes the sfm:AddFilesFromAuthorizedOss permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Call this operation by using the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation does not have idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 5 calls per second. If throttled, retry later.
     *
     * @param request - AddFilesFromAuthorizedOssRequest
     *
     * @returns AddFilesFromAuthorizedOssResponse
     *
     * @param string                           $WorkspaceId
     * @param AddFilesFromAuthorizedOssRequest $request
     *
     * @return AddFilesFromAuthorizedOssResponse
     */
    public function addFilesFromAuthorizedOss($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addFilesFromAuthorizedOssWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Add a table for the table data connector.
     *
     * @remarks
     * - RAM users (sub-accounts) must first obtain the [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Chinese China Bailian (requires `AliyunBailianDataFullAccess`, which includes the sfm:AddTable permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this API. Alibaba Cloud accounts (primary accounts) can call this API directly without authorization. We recommend that you call this API by using the latest <props="china">[Chinese China Bailian SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Chinese China Bailian SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This API is not idempotent.
     * **Throttling:**
     * This API is subject to throttling when called frequently. Do not exceed 10 calls per second. If throttling is triggered, retry later.
     *
     * @param tmpReq - AddTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTableResponse
     *
     * @param string          $WorkspaceId
     * @param AddTableRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddTableResponse
     */
    public function addTableWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AddTableShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tableColumns) {
            $request->tableColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableColumns, 'TableColumns', 'json');
        }

        $body = [];
        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->tableColumnsShrink) {
            @$body['TableColumns'] = $request->tableColumnsShrink;
        }

        if (null !== $request->tableDesc) {
            @$body['TableDesc'] = $request->tableDesc;
        }

        if (null !== $request->tableName) {
            @$body['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTable',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/table',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a table for the table data connector.
     *
     * @remarks
     * - RAM users (sub-accounts) must first obtain the [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Chinese China Bailian (requires `AliyunBailianDataFullAccess`, which includes the sfm:AddTable permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this API. Alibaba Cloud accounts (primary accounts) can call this API directly without authorization. We recommend that you call this API by using the latest <props="china">[Chinese China Bailian SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Chinese China Bailian SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This API is not idempotent.
     * **Throttling:**
     * This API is subject to throttling when called frequently. Do not exceed 10 calls per second. If throttling is triggered, retry later.
     *
     * @param request - AddTableRequest
     *
     * @returns AddTableResponse
     *
     * @param string          $WorkspaceId
     * @param AddTableRequest $request
     *
     * @return AddTableResponse
     */
    public function addTable($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addTableWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Request an upload lease for uploading knowledge base files or files for agent application conversational interactions.
     *
     * @remarks
     * - RAM users (sub-accounts) must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ApplyFileUploadLease permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this API. Alibaba Cloud accounts (primary accounts) can directly call this API without authorization. We recommend that you call this API by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This API is not idempotent.
     * **Throttling:**
     * This API is subject to throttling if called too frequently. The frequency must not exceed 10 calls per second. If throttled, please retry later.
     *
     * @param request - ApplyFileUploadLeaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyFileUploadLeaseResponse
     *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->md5) {
            @$body['Md5'] = $request->md5;
        }

        if (null !== $request->sizeInBytes) {
            @$body['SizeInBytes'] = $request->sizeInBytes;
        }

        if (null !== $request->useInternalEndpoint) {
            @$body['UseInternalEndpoint'] = $request->useInternalEndpoint;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyFileUploadLease',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/category/' . Url::percentEncode($CategoryId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyFileUploadLeaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Request an upload lease for uploading knowledge base files or files for agent application conversational interactions.
     *
     * @remarks
     * - RAM users (sub-accounts) must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ApplyFileUploadLease permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this API. Alibaba Cloud accounts (primary accounts) can directly call this API without authorization. We recommend that you call this API by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This API is not idempotent.
     * **Throttling:**
     * This API is subject to throttling if called too frequently. The frequency must not exceed 10 calls per second. If throttled, please retry later.
     *
     * @param request - ApplyFileUploadLeaseRequest
     *
     * @returns ApplyFileUploadLeaseResponse
     *
     * @param string                      $CategoryId
     * @param string                      $WorkspaceId
     * @param ApplyFileUploadLeaseRequest $request
     *
     * @return ApplyFileUploadLeaseResponse
     */
    public function applyFileUploadLease($CategoryId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyFileUploadLeaseWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * This interface is intended for pro-code deployment only; other scenarios are currently not supported. It is used to apply for a temporary file upload lease. After obtaining the lease, you must upload the file manually.
     *
     * @remarks
     * 1\\. This interface is intended for pro-code deployment only; other scenarios are currently not supported. 2. After obtaining the temporary file upload lease via this interface, upload the file manually.
     *
     * @param request - ApplyTempStorageLeaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyTempStorageLeaseResponse
     *
     * @param string                       $WorkspaceId
     * @param ApplyTempStorageLeaseRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ApplyTempStorageLeaseResponse
     */
    public function applyTempStorageLeaseWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->sizeInBytes) {
            @$body['SizeInBytes'] = $request->sizeInBytes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyTempStorageLease',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyTempStorageLeaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is intended for pro-code deployment only; other scenarios are currently not supported. It is used to apply for a temporary file upload lease. After obtaining the lease, you must upload the file manually.
     *
     * @remarks
     * 1\\. This interface is intended for pro-code deployment only; other scenarios are currently not supported. 2. After obtaining the temporary file upload lease via this interface, upload the file manually.
     *
     * @param request - ApplyTempStorageLeaseRequest
     *
     * @returns ApplyTempStorageLeaseResponse
     *
     * @param string                       $WorkspaceId
     * @param ApplyTempStorageLeaseRequest $request
     *
     * @return ApplyTempStorageLeaseResponse
     */
    public function applyTempStorageLease($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyTempStorageLeaseWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * This operation updates document tags in a data connection in batches.
     *
     * @param tmpReq - BatchUpdateFileTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateFileTagResponse
     *
     * @param string                    $WorkspaceId
     * @param BatchUpdateFileTagRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BatchUpdateFileTagResponse
     */
    public function batchUpdateFileTagWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateFileTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileInfos) {
            $request->fileInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileInfos, 'FileInfos', 'json');
        }

        $body = [];
        if (null !== $request->fileInfosShrink) {
            @$body['FileInfos'] = $request->fileInfosShrink;
        }

        if (null !== $request->updateMode) {
            @$body['UpdateMode'] = $request->updateMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateFileTag',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/batchupdatetag',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUpdateFileTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation updates document tags in a data connection in batches.
     *
     * @param request - BatchUpdateFileTagRequest
     *
     * @returns BatchUpdateFileTagResponse
     *
     * @param string                    $WorkspaceId
     * @param BatchUpdateFileTagRequest $request
     *
     * @return BatchUpdateFileTagResponse
     */
    public function batchUpdateFileTag($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUpdateFileTagWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Configures the parsing method for specific file types. For example, specifies large model document parsing for .pdf files or Qwen VL parsing for .jpg files.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ChangeParseSetting permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Invoke this operation by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param tmpReq - ChangeParseSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeParseSettingResponse
     *
     * @param string                    $WorkspaceId
     * @param ChangeParseSettingRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeParseSettingResponse
     */
    public function changeParseSettingWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ChangeParseSettingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parserConfig) {
            $request->parserConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parserConfig, 'ParserConfig', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->fileType) {
            @$body['FileType'] = $request->fileType;
        }

        if (null !== $request->parser) {
            @$body['Parser'] = $request->parser;
        }

        if (null !== $request->parserConfigShrink) {
            @$body['ParserConfig'] = $request->parserConfigShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeParseSetting',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/parser/settings',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeParseSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the parsing method for specific file types. For example, specifies large model document parsing for .pdf files or Qwen VL parsing for .jpg files.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ChangeParseSetting permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Invoke this operation by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - ChangeParseSettingRequest
     *
     * @returns ChangeParseSettingResponse
     *
     * @param string                    $WorkspaceId
     * @param ChangeParseSettingRequest $request
     *
     * @return ChangeParseSettingResponse
     */
    public function changeParseSetting($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeParseSettingWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建并发布智能体应用.
     *
     * @param tmpReq - CreateAndPulishAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndPulishAgentResponse
     *
     * @param string                      $workspaceId
     * @param CreateAndPulishAgentRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAndPulishAgentResponse
     */
    public function createAndPulishAgentWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAndPulishAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfig) {
            $request->applicationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfig, 'applicationConfig', 'json');
        }

        if (null !== $tmpReq->sampleLibrary) {
            $request->sampleLibraryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sampleLibrary, 'sampleLibrary', 'json');
        }

        $body = [];
        if (null !== $request->applicationConfigShrink) {
            @$body['applicationConfig'] = $request->applicationConfigShrink;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sampleLibraryShrink) {
            @$body['sampleLibrary'] = $request->sampleLibraryShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAndPulishAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndPulishAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建并发布智能体应用.
     *
     * @param request - CreateAndPulishAgentRequest
     *
     * @returns CreateAndPulishAgentResponse
     *
     * @param string                      $workspaceId
     * @param CreateAndPulishAgentRequest $request
     *
     * @return CreateAndPulishAgentResponse
     */
    public function createAndPulishAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAndPulishAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Use this API to create two types of knowledge bases: unstructured knowledge bases for documents, audio, or video, and structured knowledge bases for data queries or image Q&A.
     *
     * @remarks
     * - **Permissions**:
     *   - **RAM user**: A RAM user must obtain the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. You can use the `AliyunBailianDataFullAccess` policy, which includes the \\`sfm:CreateIndex\\` permission required for this operation.
     *   - **Alibaba Cloud account**: By default, Alibaba Cloud accounts have the required permissions and can call this operation directly.
     * - **How to call**: Use the latest version of the <props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation. The SDK handles the complex signature calculation logic to simplify the process.
     * - **What to do next**: This operation only initializes a knowledge base creation job. After calling this operation, you must call the **SubmitIndexJob** operation to complete the creation. Otherwise, an empty knowledge base is created. For related code examples, see [Knowledge base API guide](https://help.aliyun.com/document_detail/2852772.html).
     * - **Idempotence**: This operation is not idempotent. Repeated calls may create multiple knowledge bases with the same name. To ensure idempotence, query for the knowledge base before you create it.
     * **Rate limiting:**
     * Frequent calls to this operation are subject to rate limiting. Do not exceed a frequency of 10 calls per second. If you encounter rate limiting, retry the call later.
     *
     * @param tmpReq - CreateIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIndexResponse
     *
     * @param string             $WorkspaceId
     * @param CreateIndexRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateIndexShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        if (null !== $tmpReq->columns) {
            $request->columnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columns, 'Columns', 'json');
        }

        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        if (null !== $tmpReq->tableIds) {
            $request->tableIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableIds, 'TableIds', 'json');
        }

        if (null !== $tmpReq->metaExtractColumns) {
            $request->metaExtractColumnsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metaExtractColumns, 'metaExtractColumns', 'json');
        }

        $query = [];
        if (null !== $request->categoryIdsShrink) {
            @$query['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->chunkSize) {
            @$query['ChunkSize'] = $request->chunkSize;
        }

        if (null !== $request->columnsShrink) {
            @$query['Columns'] = $request->columnsShrink;
        }

        if (null !== $request->createIndexType) {
            @$query['CreateIndexType'] = $request->createIndexType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->documentIdsShrink) {
            @$query['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->embeddingModelName) {
            @$query['EmbeddingModelName'] = $request->embeddingModelName;
        }

        if (null !== $request->enableRewrite) {
            @$query['EnableRewrite'] = $request->enableRewrite;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->overlapSize) {
            @$query['OverlapSize'] = $request->overlapSize;
        }

        if (null !== $request->rerankInstruct) {
            @$query['RerankInstruct'] = $request->rerankInstruct;
        }

        if (null !== $request->rerankMinScore) {
            @$query['RerankMinScore'] = $request->rerankMinScore;
        }

        if (null !== $request->rerankMode) {
            @$query['RerankMode'] = $request->rerankMode;
        }

        if (null !== $request->rerankModelName) {
            @$query['RerankModelName'] = $request->rerankModelName;
        }

        if (null !== $request->separator) {
            @$query['Separator'] = $request->separator;
        }

        if (null !== $request->sinkInstanceId) {
            @$query['SinkInstanceId'] = $request->sinkInstanceId;
        }

        if (null !== $request->sinkRegion) {
            @$query['SinkRegion'] = $request->sinkRegion;
        }

        if (null !== $request->sinkType) {
            @$query['SinkType'] = $request->sinkType;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->structureType) {
            @$query['StructureType'] = $request->structureType;
        }

        if (null !== $request->tableIdsShrink) {
            @$query['TableIds'] = $request->tableIdsShrink;
        }

        if (null !== $request->channelType) {
            @$query['channelType'] = $request->channelType;
        }

        if (null !== $request->chunkMode) {
            @$query['chunkMode'] = $request->chunkMode;
        }

        if (null !== $request->connectId) {
            @$query['connectId'] = $request->connectId;
        }

        if (null !== $request->database) {
            @$query['database'] = $request->database;
        }

        if (null !== $request->datasourceCode) {
            @$query['datasourceCode'] = $request->datasourceCode;
        }

        if (null !== $request->enableHeaders) {
            @$query['enableHeaders'] = $request->enableHeaders;
        }

        if (null !== $request->knowledgeScene) {
            @$query['knowledgeScene'] = $request->knowledgeScene;
        }

        if (null !== $request->knowledgeType) {
            @$query['knowledgeType'] = $request->knowledgeType;
        }

        if (null !== $request->metaExtractColumnsShrink) {
            @$query['metaExtractColumns'] = $request->metaExtractColumnsShrink;
        }

        if (null !== $request->pipelineCommercialCu) {
            @$query['pipelineCommercialCu'] = $request->pipelineCommercialCu;
        }

        if (null !== $request->pipelineCommercialType) {
            @$query['pipelineCommercialType'] = $request->pipelineCommercialType;
        }

        if (null !== $request->pipelineRetrieveRateLimitStrategy) {
            @$query['pipelineRetrieveRateLimitStrategy'] = $request->pipelineRetrieveRateLimitStrategy;
        }

        if (null !== $request->table) {
            @$query['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIndex',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Use this API to create two types of knowledge bases: unstructured knowledge bases for documents, audio, or video, and structured knowledge bases for data queries or image Q&A.
     *
     * @remarks
     * - **Permissions**:
     *   - **RAM user**: A RAM user must obtain the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. You can use the `AliyunBailianDataFullAccess` policy, which includes the \\`sfm:CreateIndex\\` permission required for this operation.
     *   - **Alibaba Cloud account**: By default, Alibaba Cloud accounts have the required permissions and can call this operation directly.
     * - **How to call**: Use the latest version of the <props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation. The SDK handles the complex signature calculation logic to simplify the process.
     * - **What to do next**: This operation only initializes a knowledge base creation job. After calling this operation, you must call the **SubmitIndexJob** operation to complete the creation. Otherwise, an empty knowledge base is created. For related code examples, see [Knowledge base API guide](https://help.aliyun.com/document_detail/2852772.html).
     * - **Idempotence**: This operation is not idempotent. Repeated calls may create multiple knowledge bases with the same name. To ensure idempotence, query for the knowledge base before you create it.
     * **Rate limiting:**
     * Frequent calls to this operation are subject to rate limiting. Do not exceed a frequency of 10 calls per second. If you encounter rate limiting, retry the call later.
     *
     * @param request - CreateIndexRequest
     *
     * @returns CreateIndexResponse
     *
     * @param string             $WorkspaceId
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a long-term memory.
     *
     * @remarks
     * - You can store specific information from conversations (memory nodes. For more information, see [Long-term memory](https://www.alibabacloud.com/help/en/model-studio/user-guide/long-term-memory)) in a long-term memory. Agent applications can then reference this information in subsequent conversations. This is not an automatic creation procedure. You must first invoke the [CreateMemory](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-creatememory) operation to create a long-term memory and obtain the `memoryId`. Then pass the `memoryId` when you [invoke the agent application through the API](https://www.alibabacloud.com/help/en/model-studio/user-guide/application-calling).
     *     > Long-term memory does not support storing and managing user profiles through the API. Perform related operations in the console. For more information, see [Long-term memory](https://www.alibabacloud.com/help/en/model-studio/user-guide/long-term-memory#578ebae524m6l).
     * - If you pass a `memoryId`, the system uses automatic creation to generate memory nodes (MemoryNode) under the specified long-term memory based on conversation records. You can also invoke the [CreateMemoryNode](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-creatememorynode) operation to manually create memory nodes.
     * - This operation does not support idempotence.
     * **Throttling:** Ensure that the interval between two consecutive requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - CreateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryResponse
     *
     * @param string              $workspaceId
     * @param CreateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemoryResponse
     */
    public function createMemoryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a long-term memory.
     *
     * @remarks
     * - You can store specific information from conversations (memory nodes. For more information, see [Long-term memory](https://www.alibabacloud.com/help/en/model-studio/user-guide/long-term-memory)) in a long-term memory. Agent applications can then reference this information in subsequent conversations. This is not an automatic creation procedure. You must first invoke the [CreateMemory](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-creatememory) operation to create a long-term memory and obtain the `memoryId`. Then pass the `memoryId` when you [invoke the agent application through the API](https://www.alibabacloud.com/help/en/model-studio/user-guide/application-calling).
     *     > Long-term memory does not support storing and managing user profiles through the API. Perform related operations in the console. For more information, see [Long-term memory](https://www.alibabacloud.com/help/en/model-studio/user-guide/long-term-memory#578ebae524m6l).
     * - If you pass a `memoryId`, the system uses automatic creation to generate memory nodes (MemoryNode) under the specified long-term memory based on conversation records. You can also invoke the [CreateMemoryNode](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-creatememorynode) operation to manually create memory nodes.
     * - This operation does not support idempotence.
     * **Throttling:** Ensure that the interval between two consecutive requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - CreateMemoryRequest
     *
     * @returns CreateMemoryResponse
     *
     * @param string              $workspaceId
     * @param CreateMemoryRequest $request
     *
     * @return CreateMemoryResponse
     */
    public function createMemory($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a memory node.
     *
     * @param request - CreateMemoryNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param CreateMemoryNodeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMemoryNodeResponse
     */
    public function createMemoryNodeWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a memory node.
     *
     * @param request - CreateMemoryNodeRequest
     *
     * @returns CreateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param CreateMemoryNodeRequest $request
     *
     * @return CreateMemoryNodeResponse
     */
    public function createMemoryNode($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemoryNodeWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Create a prompt template.
     *
     * @remarks
     * This API does not currently support the creation of text-to-image prompt templates.
     *
     * @param request - CreatePromptTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param CreatePromptTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePromptTemplateResponse
     */
    public function createPromptTemplateWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a prompt template.
     *
     * @remarks
     * This API does not currently support the creation of text-to-image prompt templates.
     *
     * @param request - CreatePromptTemplateRequest
     *
     * @returns CreatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param CreatePromptTemplateRequest $request
     *
     * @return CreatePromptTemplateResponse
     */
    public function createPromptTemplate($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPromptTemplateWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除智能体.
     *
     * @param request - DeleteAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param string             $workspaceId
     * @param string             $appCode
     * @param DeleteAgentRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($workspaceId, $appCode, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除智能体.
     *
     * @param request - DeleteAgentRequest
     *
     * @returns DeleteAgentResponse
     *
     * @param string             $workspaceId
     * @param string             $appCode
     * @param DeleteAgentRequest $request
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($workspaceId, $appCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentWithOptions($workspaceId, $appCode, $request, $headers, $runtime);
    }

    /**
     * Permanently deletes a specified category.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:DeleteCategory permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. Alibaba Cloud accounts can call this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is idempotent.
     * **Rate limiting:**
     * This operation is subject to rate limiting. Do not exceed 5 calls per second. If you are throttled, retry later.
     *
     * @param request - DeleteCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCategoryResponse
     *
     * @param string                $CategoryId
     * @param string                $WorkspaceId
     * @param DeleteCategoryRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteCategory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/category/' . Url::percentEncode($CategoryId) . '/',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Permanently deletes a specified category.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:DeleteCategory permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. Alibaba Cloud accounts can call this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is idempotent.
     * **Rate limiting:**
     * This operation is subject to rate limiting. Do not exceed 5 calls per second. If you are throttled, retry later.
     *
     * @param request - DeleteCategoryRequest
     *
     * @returns DeleteCategoryResponse
     *
     * @param string                $CategoryId
     * @param string                $WorkspaceId
     * @param DeleteCategoryRequest $request
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategory($CategoryId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCategoryWithOptions($CategoryId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Deletes specified text chunks from a knowledge base. Deleted text chunks cannot be retrieved or recalled.
     *
     * @remarks
     * <warning>  Deleted text chunks cannot be recovered (hard delete). Proceed with caution.
     * - **Permission requirements**:
     *   - **Resource Access Management (RAM) user**: Obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio first (you can use the `AliyunBailianDataFullAccess` policy, which includes the sfm:DeleteChunk permission required by this operation), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation.
     *   - **Alibaba Cloud account**: Has permissions by default and can invoke this operation directly.
     * - **Invocation method**: Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29). The SDK provides encapsulation of complex signature calculation logic and simplifies the invocation procedure.
     * - **Effective latency**: Changes typically take effect immediately. During peak hours, there may be a slight delay (seconds).
     * - **Idempotence**: This operation is idempotent. Repeated calls to delete an already deleted text chunk return a success response.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param tmpReq - DeleteChunkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChunkResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteChunkRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteChunkResponse
     */
    public function deleteChunkWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteChunkShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->chunkIds) {
            $request->chunkIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->chunkIds, 'ChunkIds', 'json');
        }

        $query = [];
        if (null !== $request->chunkIdsShrink) {
            @$query['ChunkIds'] = $request->chunkIdsShrink;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChunk',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/chunk/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteChunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes specified text chunks from a knowledge base. Deleted text chunks cannot be retrieved or recalled.
     *
     * @remarks
     * <warning>  Deleted text chunks cannot be recovered (hard delete). Proceed with caution.
     * - **Permission requirements**:
     *   - **Resource Access Management (RAM) user**: Obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio first (you can use the `AliyunBailianDataFullAccess` policy, which includes the sfm:DeleteChunk permission required by this operation), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation.
     *   - **Alibaba Cloud account**: Has permissions by default and can invoke this operation directly.
     * - **Invocation method**: Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29). The SDK provides encapsulation of complex signature calculation logic and simplifies the invocation procedure.
     * - **Effective latency**: Changes typically take effect immediately. During peak hours, there may be a slight delay (seconds).
     * - **Idempotence**: This operation is idempotent. Repeated calls to delete an already deleted text chunk return a success response.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - DeleteChunkRequest
     *
     * @returns DeleteChunkResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteChunkRequest $request
     *
     * @return DeleteChunkResponse
     */
    public function deleteChunk($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteChunkWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除连接器.
     *
     * @remarks
     * - RAM用户（子账号）需要首先获取阿里云百炼的[API权限](https://help.aliyun.com/document_detail/2848578.html)（需要`AliyunBailianDataFullAccess`，已包括sfm:DeleteConnector权限点），并[加入一个业务空间](https://help.aliyun.com/document_detail/2851098.html)后，方可调用本接口。阿里云账号（主账号）可直接调用无须授权。建议您通过最新版[阿里云百炼SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)[阿里云百炼SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29)来调用本接口。
     * - 本接口不具备幂等性。
     * **限流说明：**
     * 本接口频繁调用会被限流，频率请勿超过5次/秒。如遇限流，请稍后重试。
     *
     * @param request - DeleteConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConnectorResponse
     *
     * @param string                 $ConnectorId
     * @param string                 $WorkspaceId
     * @param DeleteConnectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteConnectorResponse
     */
    public function deleteConnectorWithOptions($ConnectorId, $WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConnector',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/connector/' . Url::percentEncode($ConnectorId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除连接器.
     *
     * @remarks
     * - RAM用户（子账号）需要首先获取阿里云百炼的[API权限](https://help.aliyun.com/document_detail/2848578.html)（需要`AliyunBailianDataFullAccess`，已包括sfm:DeleteConnector权限点），并[加入一个业务空间](https://help.aliyun.com/document_detail/2851098.html)后，方可调用本接口。阿里云账号（主账号）可直接调用无须授权。建议您通过最新版[阿里云百炼SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)[阿里云百炼SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29)来调用本接口。
     * - 本接口不具备幂等性。
     * **限流说明：**
     * 本接口频繁调用会被限流，频率请勿超过5次/秒。如遇限流，请稍后重试。
     *
     * @param request - DeleteConnectorRequest
     *
     * @returns DeleteConnectorResponse
     *
     * @param string                 $ConnectorId
     * @param string                 $WorkspaceId
     * @param DeleteConnectorRequest $request
     *
     * @return DeleteConnectorResponse
     */
    public function deleteConnector($ConnectorId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConnectorWithOptions($ConnectorId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Permanently delete a specified file from application data. Deleting data tables via API is not supported. For details, see the API Guide below.
     *
     * @remarks
     * - Deleting data tables via API is not supported. To delete a data table or specific data within a table, go to <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center) to perform the operation.
     * - This API is used to delete files in <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center) and does not affect any knowledge bases that have already been built. To delete a file from a knowledge base, invoke the **DeleteIndexDocument** API.
     * - A RAM user must first obtain the [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the `sfm:DeleteFile` permission point) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this API. An Alibaba Cloud account can invoke this API directly without authorization. We recommend that you use the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this API.
     * - This API can only delete files whose status is either Failed to Parse (`PARSE_FAILED`) or Parse Succeeded (`PARSE_SUCCESS`).
     * - This API is idempotent.
     * **Rate Limiting Notice:**
     * Frequent invocation of this API will trigger rate limiting. Do not exceed 10 requests per second. If rate limited, retry after a short wait.
     *
     * @param request - DeleteFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileResponse
     *
     * @param string            $FileId
     * @param string            $WorkspaceId
     * @param DeleteFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($FileId, $WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/' . Url::percentEncode($FileId) . '/',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Permanently delete a specified file from application data. Deleting data tables via API is not supported. For details, see the API Guide below.
     *
     * @remarks
     * - Deleting data tables via API is not supported. To delete a data table or specific data within a table, go to <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center) to perform the operation.
     * - This API is used to delete files in <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center) and does not affect any knowledge bases that have already been built. To delete a file from a knowledge base, invoke the **DeleteIndexDocument** API.
     * - A RAM user must first obtain the [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the `sfm:DeleteFile` permission point) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this API. An Alibaba Cloud account can invoke this API directly without authorization. We recommend that you use the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this API.
     * - This API can only delete files whose status is either Failed to Parse (`PARSE_FAILED`) or Parse Succeeded (`PARSE_SUCCESS`).
     * - This API is idempotent.
     * **Rate Limiting Notice:**
     * Frequent invocation of this API will trigger rate limiting. Do not exceed 10 requests per second. If rate limited, retry after a short wait.
     *
     * @param request - DeleteFileRequest
     *
     * @returns DeleteFileResponse
     *
     * @param string            $FileId
     * @param string            $WorkspaceId
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($FileId, $WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($FileId, $WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Delete files in batch.
     *
     * @remarks
     * - Deleting data tables through the API is not supported. To delete a data table or specific data in a table, go to <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center).
     * - This API is used to delete files in <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center). It does not affect knowledge bases that have already been built. To delete files in a knowledge base, call the **DeleteIndexDocument** operation.
     * - A RAM user (sub-account) must first obtain the [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which already includes the sfm:DeleteFiles permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. The Alibaba Cloud account (main account) can call this operation directly without authorization. We recommend that you use the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation can only delete files whose status is parsing failed (PARSE_FAILED) or parsing succeeded (PARSE_SUCCESS).
     * - This operation is idempotent.
     * **Throttling:**
     * Frequent calls to this operation are throttled. Do not exceed 10 queries per second (QPS). If you are throttled, try again later.
     *
     * @param tmpReq - DeleteFilesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFilesResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteFilesRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteFilesResponse
     */
    public function deleteFilesWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteFilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileIds) {
            $request->fileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }

        $body = [];
        if (null !== $request->fileIdsShrink) {
            @$body['FileIds'] = $request->fileIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFiles',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete files in batch.
     *
     * @remarks
     * - Deleting data tables through the API is not supported. To delete a data table or specific data in a table, go to <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center).
     * - This API is used to delete files in <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center). It does not affect knowledge bases that have already been built. To delete files in a knowledge base, call the **DeleteIndexDocument** operation.
     * - A RAM user (sub-account) must first obtain the [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which already includes the sfm:DeleteFiles permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. The Alibaba Cloud account (main account) can call this operation directly without authorization. We recommend that you use the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation can only delete files whose status is parsing failed (PARSE_FAILED) or parsing succeeded (PARSE_SUCCESS).
     * - This operation is idempotent.
     * **Throttling:**
     * Frequent calls to this operation are throttled. Do not exceed 10 queries per second (QPS). If you are throttled, try again later.
     *
     * @param request - DeleteFilesRequest
     *
     * @returns DeleteFilesResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteFilesRequest $request
     *
     * @return DeleteFilesResponse
     */
    public function deleteFiles($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFilesWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Permanently deletes a specified knowledge base.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:DeleteIndex permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - If the knowledge base is associated with an application, you must first dissociate it from the application before deleting it. This can currently only be done through the console. For more information, see [Knowledge base](https://help.aliyun.com/document_detail/2807740.html).
     * - Deletion is irreversible. A deleted knowledge base cannot be recovered. Proceed with caution.
     * - Invoking this operation does not delete files that have been imported into <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center).
     * - This operation has idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - DeleteIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIndex',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Permanently deletes a specified knowledge base.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:DeleteIndex permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - If the knowledge base is associated with an application, you must first dissociate it from the application before deleting it. This can currently only be done through the console. For more information, see [Knowledge base](https://help.aliyun.com/document_detail/2807740.html).
     * - Deletion is irreversible. A deleted knowledge base cannot be recovered. Proceed with caution.
     * - Invoking this operation does not delete files that have been imported into <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center).
     * - This operation has idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - DeleteIndexRequest
     *
     * @returns DeleteIndexResponse
     *
     * @param string             $WorkspaceId
     * @param DeleteIndexRequest $request
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Permanently deletes files from a specified knowledge base.
     *
     * @remarks
     * - This operation does not support deleting data from data query or image Q&A knowledge bases. Use the Model Studio console instead.
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:DeleteIndexDocument permission), before calling this operation. Alibaba Cloud accounts can call this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - Before calling this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - You can only delete files whose status is import failed (INSERT_ERROR) or import succeeded (FINISH) in the knowledge base. To query the file status in a specified knowledge base, call the **ListIndexDocuments** operation.
     * - Deletion is irreversible. The content of deleted files cannot be recovered, and the **Retrieve** operation can no longer retrieve related information. Proceed with caution.
     * - Calling this operation does not delete documents that have been imported into <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center).
     * - This operation is idempotent.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param tmpReq - DeleteIndexDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIndexDocumentResponse
     *
     * @param string                     $WorkspaceId
     * @param DeleteIndexDocumentRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteIndexDocumentResponse
     */
    public function deleteIndexDocumentWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteIndexDocumentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        $query = [];
        if (null !== $request->documentIdsShrink) {
            @$query['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIndexDocument',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/delete_index_document',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIndexDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Permanently deletes files from a specified knowledge base.
     *
     * @remarks
     * - This operation does not support deleting data from data query or image Q&A knowledge bases. Use the Model Studio console instead.
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requiring `AliyunBailianDataFullAccess`, which includes the sfm:DeleteIndexDocument permission), before calling this operation. Alibaba Cloud accounts can call this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - Before calling this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - You can only delete files whose status is import failed (INSERT_ERROR) or import succeeded (FINISH) in the knowledge base. To query the file status in a specified knowledge base, call the **ListIndexDocuments** operation.
     * - Deletion is irreversible. The content of deleted files cannot be recovered, and the **Retrieve** operation can no longer retrieve related information. Proceed with caution.
     * - Calling this operation does not delete documents that have been imported into <props="china">[Application Data](https://bailian.console.aliyun.com/?tab=app#/data-center)<props="intl">[Application Data](https://modelstudio.console.alibabacloud.com/?tab=app#/data-center).
     * - This operation is idempotent.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - DeleteIndexDocumentRequest
     *
     * @returns DeleteIndexDocumentResponse
     *
     * @param string                     $WorkspaceId
     * @param DeleteIndexDocumentRequest $request
     *
     * @return DeleteIndexDocumentResponse
     */
    public function deleteIndexDocument($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexDocumentWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Permanently deletes a specified long-term memory.
     *
     * @remarks
     * - Before calling this operation, make sure that your long-term memory has been created and has not been deleted (that is, the memoryId is valid).
     * - The delete operation is irreversible. The deleted long-term memory, including all of its long-term memory nodes, cannot be recovered. The [GetMemory](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-getmemory) operation will no longer be able to retrieve its information. Proceed with caution.
     * - This operation is idempotent.
     * **Rate limit:** Make sure that the interval between two requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - DeleteMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Permanently deletes a specified long-term memory.
     *
     * @remarks
     * - Before calling this operation, make sure that your long-term memory has been created and has not been deleted (that is, the memoryId is valid).
     * - The delete operation is irreversible. The deleted long-term memory, including all of its long-term memory nodes, cannot be recovered. The [GetMemory](https://www.alibabacloud.com/help/en/model-studio/developer-reference/api-bailian-2023-12-29-getmemory) operation will no longer be able to retrieve its information. Proceed with caution.
     * - This operation is idempotent.
     * **Rate limit:** Make sure that the interval between two requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - DeleteMemoryRequest
     *
     * @returns DeleteMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryId
     * @param DeleteMemoryRequest $request
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Deletes a memory fragment.
     *
     * @param request - DeleteMemoryNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param string                  $memoryNodeId
     * @param DeleteMemoryNodeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMemoryNodeResponse
     */
    public function deleteMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes/' . Url::percentEncode($memoryNodeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a memory fragment.
     *
     * @param request - DeleteMemoryNodeRequest
     *
     * @returns DeleteMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param string                  $memoryNodeId
     * @param DeleteMemoryNodeRequest $request
     *
     * @return DeleteMemoryNodeResponse
     */
    public function deleteMemoryNode($workspaceId, $memoryId, $memoryNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime);
    }

    /**
     * Deletes a prompt template based on the template ID.
     *
     * @param request - DeletePromptTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param string                      $promptTemplateId
     * @param DeletePromptTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePromptTemplateResponse
     */
    public function deletePromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates/' . Url::percentEncode($promptTemplateId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a prompt template based on the template ID.
     *
     * @param request - DeletePromptTemplateRequest
     *
     * @returns DeletePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param string                      $promptTemplateId
     * @param DeletePromptTemplateRequest $request
     *
     * @return DeletePromptTemplateResponse
     */
    public function deletePromptTemplate($workspaceId, $promptTemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime);
    }

    /**
     * Queries the basic information of a file in application data, including the file name, type, and status.
     *
     * @remarks
     * - A Resource Access Management (RAM) user must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (`AliyunBailianDataFullAccess` or `AliyunBailianDataReadOnlyAccess`, both of which include the sfm:DescribeFile permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. An Alibaba Cloud account can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - This operation is idempotent.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - DescribeFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileResponse
     *
     * @param string              $WorkspaceId
     * @param string              $FileId
     * @param DescribeFileRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFileResponse
     */
    public function describeFileWithOptions($WorkspaceId, $FileId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/' . Url::percentEncode($FileId) . '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information of a file in application data, including the file name, type, and status.
     *
     * @remarks
     * - A Resource Access Management (RAM) user must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (`AliyunBailianDataFullAccess` or `AliyunBailianDataReadOnlyAccess`, both of which include the sfm:DescribeFile permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. An Alibaba Cloud account can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - This operation is idempotent.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - DescribeFileRequest
     *
     * @returns DescribeFileResponse
     *
     * @param string              $WorkspaceId
     * @param string              $FileId
     * @param DescribeFileRequest $request
     *
     * @return DescribeFileResponse
     */
    public function describeFile($WorkspaceId, $FileId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFileWithOptions($WorkspaceId, $FileId, $request, $headers, $runtime);
    }

    /**
     * Queries the tipping status of the Alipay wallet bound to an application.
     *
     * @param request - GetAlipayTransferStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlipayTransferStatusResponse
     *
     * @param GetAlipayTransferStatusRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAlipayTransferStatusResponse
     */
    public function getAlipayTransferStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['code'] = $request->code;
        }

        if (null !== $request->workspaceId) {
            @$query['workspace_id'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlipayTransferStatus',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/alipay/transfer/status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlipayTransferStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tipping status of the Alipay wallet bound to an application.
     *
     * @param request - GetAlipayTransferStatusRequest
     *
     * @returns GetAlipayTransferStatusResponse
     *
     * @param GetAlipayTransferStatusRequest $request
     *
     * @return GetAlipayTransferStatusResponse
     */
    public function getAlipayTransferStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlipayTransferStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the Alipay tipping URL for an application.
     *
     * @param request - GetAlipayUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlipayUrlResponse
     *
     * @param GetAlipayUrlRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAlipayUrlResponse
     */
    public function getAlipayUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['app_id'] = $request->appId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspace_id'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlipayUrl',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/alipay/transfer/url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlipayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Alipay tipping URL for an application.
     *
     * @param request - GetAlipayUrlRequest
     *
     * @returns GetAlipayUrlResponse
     *
     * @param GetAlipayUrlRequest $request
     *
     * @return GetAlipayUrlResponse
     */
    public function getAlipayUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlipayUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists all supported parser types based on the input file type (file extension).
     *
     * @remarks
     * - RAM用户（子账号）需要首先获取阿里云百炼的[API权限](https://help.aliyun.com/document_detail/2848578.html)（`AliyunBailianDataFullAccess`或`AliyunBailianDataReadOnlyAccess`均可，已包括sfm:GetAvailableParserTypes权限点），并[加入一个业务空间](https://help.aliyun.com/document_detail/2851098.html)后，方可调用本接口。阿里云账号（主账号）可直接调用无须授权。建议您通过最新版<props="china">[阿里云百炼SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[阿里云百炼SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29)来调用本接口。
     * - 本接口具有幂等性。
     * **限流说明：**
     * 本接口频繁调用会被限流，频率请勿超过10次/秒。如遇限流，请稍后重试。
     *
     * @param request - GetAvailableParserTypesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAvailableParserTypesResponse
     *
     * @param string                         $WorkspaceId
     * @param GetAvailableParserTypesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAvailableParserTypesResponse
     */
    public function getAvailableParserTypesWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAvailableParserTypes',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/parser/parsertype',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAvailableParserTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all supported parser types based on the input file type (file extension).
     *
     * @remarks
     * - RAM用户（子账号）需要首先获取阿里云百炼的[API权限](https://help.aliyun.com/document_detail/2848578.html)（`AliyunBailianDataFullAccess`或`AliyunBailianDataReadOnlyAccess`均可，已包括sfm:GetAvailableParserTypes权限点），并[加入一个业务空间](https://help.aliyun.com/document_detail/2851098.html)后，方可调用本接口。阿里云账号（主账号）可直接调用无须授权。建议您通过最新版<props="china">[阿里云百炼SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[阿里云百炼SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29)来调用本接口。
     * - 本接口具有幂等性。
     * **限流说明：**
     * 本接口频繁调用会被限流，频率请勿超过10次/秒。如遇限流，请稍后重试。
     *
     * @param request - GetAvailableParserTypesRequest
     *
     * @returns GetAvailableParserTypesResponse
     *
     * @param string                         $WorkspaceId
     * @param GetAvailableParserTypesRequest $request
     *
     * @return GetAvailableParserTypesResponse
     */
    public function getAvailableParserTypes($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAvailableParserTypesWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves details about a connector. This operation currently supports only file connectors.
     *
     * @remarks
     * - To call this operation, a RAM user (sub-account) must have the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and must [join a business space](https://help.aliyun.com/document_detail/2851098.html). This requires the `AliyunBailianDataFullAccess` policy, which includes the sfm:GetConnector permission. An Alibaba Cloud account (primary account) can call this operation directly. We recommend using the latest [Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is idempotent.
     * **Throttling:**
     * This operation is subject to throttling. Do not exceed a frequency of 5 calls per second. If a request is throttled, try again later.
     *
     * @param request - GetConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectorResponse
     *
     * @param string              $WorkspaceId
     * @param GetConnectorRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetConnectorResponse
     */
    public function getConnectorWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorName) {
            @$query['ConnectorName'] = $request->connectorName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnector',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/connector',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves details about a connector. This operation currently supports only file connectors.
     *
     * @remarks
     * - To call this operation, a RAM user (sub-account) must have the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and must [join a business space](https://help.aliyun.com/document_detail/2851098.html). This requires the `AliyunBailianDataFullAccess` policy, which includes the sfm:GetConnector permission. An Alibaba Cloud account (primary account) can call this operation directly. We recommend using the latest [Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is idempotent.
     * **Throttling:**
     * This operation is subject to throttling. Do not exceed a frequency of 5 calls per second. If a request is throttled, try again later.
     *
     * @param request - GetConnectorRequest
     *
     * @returns GetConnectorResponse
     *
     * @param string              $WorkspaceId
     * @param GetConnectorRequest $request
     *
     * @return GetConnectorResponse
     */
    public function getConnector($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConnectorWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the current status of a specified knowledge base creation task or knowledge base document append task.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (`AliyunBailianDataFullAccess` or `AliyunBailianDataReadOnlyAccess`, both of which include the sfm:GetIndexJobStatus permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - You must have a knowledge base job that is in progress. You can create a knowledge base creation task by invoking the **SubmitIndexJob** operation, or create a knowledge base document append task by invoking the **SubmitIndexAddDocumentsJob** operation. Obtain the corresponding `JobId`.
     * - Invoke this operation at intervals of 5 seconds or more.
     * - This operation supports idempotence.
     *
     * @param request - GetIndexJobStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexJobStatusResponse
     *
     * @param string                   $WorkspaceId
     * @param GetIndexJobStatusRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetIndexJobStatusResponse
     */
    public function getIndexJobStatusWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIndexJobStatus',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/job/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current status of a specified knowledge base creation task or knowledge base document append task.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (`AliyunBailianDataFullAccess` or `AliyunBailianDataReadOnlyAccess`, both of which include the sfm:GetIndexJobStatus permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - You must have a knowledge base job that is in progress. You can create a knowledge base creation task by invoking the **SubmitIndexJob** operation, or create a knowledge base document append task by invoking the **SubmitIndexAddDocumentsJob** operation. Obtain the corresponding `JobId`.
     * - Invoke this operation at intervals of 5 seconds or more.
     * - This operation supports idempotence.
     *
     * @param request - GetIndexJobStatusRequest
     *
     * @returns GetIndexJobStatusResponse
     *
     * @param string                   $WorkspaceId
     * @param GetIndexJobStatusRequest $request
     *
     * @return GetIndexJobStatusResponse
     */
    public function getIndexJobStatus($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexJobStatusWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * You can call the GetIndexMonitor operation to query monitoring data for a specified knowledge base within a specific time range. This data is crucial for App Performance Analytics, capacity planning, and cost management. The monitoring data includes two main dimensions: storage and retrieval. Storage monitoring retrieves the index storage limit and current usage of the knowledge base. Retrieval monitoring retrieves performance metrics for the query period, such as peak queries per second (QPS), total requests, and average QPS. The metrics are provided as totals and are also broken down by time window. The requests are categorized as successful, failed, and rate-limited.
     *
     * @remarks
     * <props="intl">
     * This operation is not available on the Alibaba Cloud International Website (www\\.alibabacloud.com).
     * <props="china">
     * - Before you call this operation, a RAM user must obtain the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (which requires the `AliyunBailianDataFullAccess` permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). Alibaba Cloud accounts can call this operation directly without authorization. You can call this operation using the latest version of the [Alibaba Cloud Model Studio software development kit (SDK)](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29). Before you call this operation, make sure that the specified knowledge base has been created and has not been deleted. This means that the knowledge base ID (`IndexId`) must be valid. This operation is idempotent. The maximum query time range (EndTimestamp - StartTimestamp) is 30 days. The granularity of the time window in the returned data is dynamically adjusted based on the query time range.
     *
     * @param request - GetIndexMonitorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexMonitorResponse
     *
     * @param string                 $WorkspaceId
     * @param GetIndexMonitorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetIndexMonitorResponse
     */
    public function getIndexMonitorWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIndexMonitor',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/rag/index/monitor',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIndexMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the GetIndexMonitor operation to query monitoring data for a specified knowledge base within a specific time range. This data is crucial for App Performance Analytics, capacity planning, and cost management. The monitoring data includes two main dimensions: storage and retrieval. Storage monitoring retrieves the index storage limit and current usage of the knowledge base. Retrieval monitoring retrieves performance metrics for the query period, such as peak queries per second (QPS), total requests, and average QPS. The metrics are provided as totals and are also broken down by time window. The requests are categorized as successful, failed, and rate-limited.
     *
     * @remarks
     * <props="intl">
     * This operation is not available on the Alibaba Cloud International Website (www\\.alibabacloud.com).
     * <props="china">
     * - Before you call this operation, a RAM user must obtain the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (which requires the `AliyunBailianDataFullAccess` permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). Alibaba Cloud accounts can call this operation directly without authorization. You can call this operation using the latest version of the [Alibaba Cloud Model Studio software development kit (SDK)](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29). Before you call this operation, make sure that the specified knowledge base has been created and has not been deleted. This means that the knowledge base ID (`IndexId`) must be valid. This operation is idempotent. The maximum query time range (EndTimestamp - StartTimestamp) is 30 days. The granularity of the time window in the returned data is dynamically adjusted based on the query time range.
     *
     * @param request - GetIndexMonitorRequest
     *
     * @returns GetIndexMonitorResponse
     *
     * @param string                 $WorkspaceId
     * @param GetIndexMonitorRequest $request
     *
     * @return GetIndexMonitorResponse
     */
    public function getIndexMonitor($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexMonitorWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the description of a specified long-term memory.
     *
     * @remarks
     * - This operation is idempotent.
     * **Rate limit:** Ensure that the interval between two consecutive requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - GetMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspaceId
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemoryResponse
     */
    public function getMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the description of a specified long-term memory.
     *
     * @remarks
     * - This operation is idempotent.
     * **Rate limit:** Ensure that the interval between two consecutive requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - GetMemoryRequest
     *
     * @returns GetMemoryResponse
     *
     * @param string           $workspaceId
     * @param string           $memoryId
     * @param GetMemoryRequest $request
     *
     * @return GetMemoryResponse
     */
    public function getMemory($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a memory fragment.
     *
     * @param request - GetMemoryNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMemoryNodeResponse
     *
     * @param string               $workspaceId
     * @param string               $memoryId
     * @param string               $memoryNodeId
     * @param GetMemoryNodeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetMemoryNodeResponse
     */
    public function getMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes/' . Url::percentEncode($memoryNodeId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a memory fragment.
     *
     * @param request - GetMemoryNodeRequest
     *
     * @returns GetMemoryNodeResponse
     *
     * @param string               $workspaceId
     * @param string               $memoryId
     * @param string               $memoryNodeId
     * @param GetMemoryNodeRequest $request
     *
     * @return GetMemoryNodeResponse
     */
    public function getMemoryNode($workspaceId, $memoryId, $memoryNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime);
    }

    /**
     * Queries the data parsing settings in a specified category.
     *
     * @remarks
     * - RAM用户（子账号）需要首先获取阿里云百炼的[API权限](https://help.aliyun.com/document_detail/2848578.html)（`AliyunBailianDataFullAccess`或`AliyunBailianDataReadOnlyAccess`均可，已包括sfm:GetParseSettings权限点），并[加入一个业务空间](https://help.aliyun.com/document_detail/2851098.html)后，方可调用本接口。阿里云账号（主账号）可直接调用无须授权。建议您通过最新版<props="china">[阿里云百炼SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[阿里云百炼SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29)来调用本接口。
     * - 本接口具有幂等性。
     * **限流说明：**
     * 本接口频繁调用会被限流，频率请勿超过10次/秒。如遇限流，请稍后重试。
     *
     * @param request - GetParseSettingsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParseSettingsResponse
     *
     * @param string                  $WorkspaceId
     * @param GetParseSettingsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetParseSettingsResponse
     */
    public function getParseSettingsWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetParseSettings',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/parser/settings',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetParseSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data parsing settings in a specified category.
     *
     * @remarks
     * - RAM用户（子账号）需要首先获取阿里云百炼的[API权限](https://help.aliyun.com/document_detail/2848578.html)（`AliyunBailianDataFullAccess`或`AliyunBailianDataReadOnlyAccess`均可，已包括sfm:GetParseSettings权限点），并[加入一个业务空间](https://help.aliyun.com/document_detail/2851098.html)后，方可调用本接口。阿里云账号（主账号）可直接调用无须授权。建议您通过最新版<props="china">[阿里云百炼SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[阿里云百炼SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29)来调用本接口。
     * - 本接口具有幂等性。
     * **限流说明：**
     * 本接口频繁调用会被限流，频率请勿超过10次/秒。如遇限流，请稍后重试。
     *
     * @param request - GetParseSettingsRequest
     *
     * @returns GetParseSettingsResponse
     *
     * @param string                  $WorkspaceId
     * @param GetParseSettingsRequest $request
     *
     * @return GetParseSettingsResponse
     */
    public function getParseSettings($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParseSettingsWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Obtains a prompt template based on the template ID.
     *
     * @param request - GetPromptTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPromptTemplateResponse
     *
     * @param string                   $workspaceId
     * @param string                   $promptTemplateId
     * @param GetPromptTemplateRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetPromptTemplateResponse
     */
    public function getPromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates/' . Url::percentEncode($promptTemplateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a prompt template based on the template ID.
     *
     * @param request - GetPromptTemplateRequest
     *
     * @returns GetPromptTemplateResponse
     *
     * @param string                   $workspaceId
     * @param string                   $promptTemplateId
     * @param GetPromptTemplateRequest $request
     *
     * @return GetPromptTemplateResponse
     */
    public function getPromptTemplate($workspaceId, $promptTemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime);
    }

    /**
     * 获取发布态智能体应用.
     *
     * @param request - GetPublishedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPublishedAgentResponse
     *
     * @param string                   $workspaceId
     * @param string                   $appCode
     * @param GetPublishedAgentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetPublishedAgentResponse
     */
    public function getPublishedAgentWithOptions($workspaceId, $appCode, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPublishedAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPublishedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取发布态智能体应用.
     *
     * @param request - GetPublishedAgentRequest
     *
     * @returns GetPublishedAgentResponse
     *
     * @param string                   $workspaceId
     * @param string                   $appCode
     * @param GetPublishedAgentRequest $request
     *
     * @return GetPublishedAgentResponse
     */
    public function getPublishedAgent($workspaceId, $appCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPublishedAgentWithOptions($workspaceId, $appCode, $request, $headers, $runtime);
    }

    /**
     * 高代码部署服务
     *
     * @param request - HighCodeDeployRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HighCodeDeployResponse
     *
     * @param string                $workspaceId
     * @param HighCodeDeployRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HighCodeDeployResponse
     */
    public function highCodeDeployWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentDesc) {
            @$body['agentDesc'] = $request->agentDesc;
        }

        if (null !== $request->agentId) {
            @$body['agentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$body['agentName'] = $request->agentName;
        }

        if (null !== $request->sourceCodeName) {
            @$body['sourceCodeName'] = $request->sourceCodeName;
        }

        if (null !== $request->sourceCodeOssUrl) {
            @$body['sourceCodeOssUrl'] = $request->sourceCodeOssUrl;
        }

        if (null !== $request->telemetryEnabled) {
            @$body['telemetryEnabled'] = $request->telemetryEnabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HighCodeDeploy',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/' . Url::percentEncode($workspaceId) . '/highCode/publish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return HighCodeDeployResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 高代码部署服务
     *
     * @param request - HighCodeDeployRequest
     *
     * @returns HighCodeDeployResponse
     *
     * @param string                $workspaceId
     * @param HighCodeDeployRequest $request
     *
     * @return HighCodeDeployResponse
     */
    public function highCodeDeploy($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->highCodeDeployWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of one or more categories in a specified workspace.
     *
     * @remarks
     * - This API does not support querying data tables.
     * - To call this API, a RAM user must first obtain the required [API permission](https://help.aliyun.com/document_detail/2848578.html) for Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). This requires the `AliyunBailianDataFullAccess` permission, which includes the `sfm:ListCategory` permission. Alibaba Cloud accounts can call this API directly. Use the latest version of the <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation supports pagination. When making your first request, set the `MaxResults` parameter to specify the maximum number of items to return. If more items are available, the response includes a `NextToken`. To retrieve the next page of results, set the `NextToken` parameter to the value from the previous response and specify `MaxResults` again. An empty `NextToken` indicates that no more results are available.
     * - This operation is idempotent.
     * **Rate limiting:** This API is subject to rate limiting. Do not exceed 5 requests per second. If the system throttles a request, retry it after a short interval.
     *
     * @param request - ListCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCategoryResponse
     *
     * @param string              $WorkspaceId
     * @param ListCategoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListCategoryResponse
     */
    public function listCategoryWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryName) {
            @$body['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->categoryType) {
            @$body['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->connectorId) {
            @$body['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentCategoryId) {
            @$body['ParentCategoryId'] = $request->parentCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCategory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/categories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of one or more categories in a specified workspace.
     *
     * @remarks
     * - This API does not support querying data tables.
     * - To call this API, a RAM user must first obtain the required [API permission](https://help.aliyun.com/document_detail/2848578.html) for Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). This requires the `AliyunBailianDataFullAccess` permission, which includes the `sfm:ListCategory` permission. Alibaba Cloud accounts can call this API directly. Use the latest version of the <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation supports pagination. When making your first request, set the `MaxResults` parameter to specify the maximum number of items to return. If more items are available, the response includes a `NextToken`. To retrieve the next page of results, set the `NextToken` parameter to the value from the previous response and specify `MaxResults` again. An empty `NextToken` indicates that no more results are available.
     * - This operation is idempotent.
     * **Rate limiting:** This API is subject to rate limiting. Do not exceed 5 requests per second. If the system throttles a request, retry it after a short interval.
     *
     * @param request - ListCategoryRequest
     *
     * @returns ListCategoryResponse
     *
     * @param string              $WorkspaceId
     * @param ListCategoryRequest $request
     *
     * @return ListCategoryResponse
     */
    public function listCategory($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCategoryWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Queries the list and information of text chunks.
     *
     * @remarks
     * - For document search<props="china"> or audio/video search knowledge bases, this operation queries all chunks of a specified file. For data query or image Q&A knowledge bases, this operation retrieves information about all text chunks.
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ChunkList permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - ListChunksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChunksResponse
     *
     * @param string            $WorkspaceId
     * @param ListChunksRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListChunksResponse
     */
    public function listChunksWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->fileId) {
            @$body['FileId'] = $request->fileId;
        }

        if (null !== $request->filed) {
            @$body['Filed'] = $request->filed;
        }

        if (null !== $request->indexId) {
            @$body['IndexId'] = $request->indexId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListChunks',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_chunks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChunksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list and information of text chunks.
     *
     * @remarks
     * - For document search<props="china"> or audio/video search knowledge bases, this operation queries all chunks of a specified file. For data query or image Q&A knowledge bases, this operation retrieves information about all text chunks.
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ChunkList permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - ListChunksRequest
     *
     * @returns ListChunksResponse
     *
     * @param string            $WorkspaceId
     * @param ListChunksRequest $request
     *
     * @return ListChunksResponse
     */
    public function listChunks($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChunksWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of one or more documents in a specified category.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ListFile permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Invoke this operation by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - For paging on the first page, only set `MaxResults` to limit the number of entries returned. The `NextToken` in the response serves as the credential for querying subsequent pages. When querying subsequent pages, set the `NextToken` parameter to the `NextToken` value obtained from the previous response (if `NextToken` is empty, all results have been returned and no further requests are needed), and set `MaxResults` to limit the number of entries returned.
     * - This operation is idempotent.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 5 calls per second. If throttled, retry later.
     *
     * @param tmpReq - ListFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFileResponse
     *
     * @param string          $WorkspaceId
     * @param ListFileRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListFileResponse
     */
    public function listFileWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileIds) {
            $request->fileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }

        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->fileIdsShrink) {
            @$query['FileIds'] = $request->fileIdsShrink;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFile',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/files',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of one or more documents in a specified category.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ListFile permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Invoke this operation by using the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - For paging on the first page, only set `MaxResults` to limit the number of entries returned. The `NextToken` in the response serves as the credential for querying subsequent pages. When querying subsequent pages, set the `NextToken` parameter to the `NextToken` value obtained from the previous response (if `NextToken` is empty, all results have been returned and no further requests are needed), and set `MaxResults` to limit the number of entries returned.
     * - This operation is idempotent.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 5 calls per second. If throttled, retry later.
     *
     * @param request - ListFileRequest
     *
     * @returns ListFileResponse
     *
     * @param string          $WorkspaceId
     * @param ListFileRequest $request
     *
     * @return ListFileResponse
     */
    public function listFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves files and their summary information from a specified knowledge base.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ListIndexFiles permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 15 calls per second. If you are throttled, retry later.
     *
     * @param request - ListIndexDocumentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndexDocumentsResponse
     *
     * @param string                    $WorkspaceId
     * @param ListIndexDocumentsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListIndexDocumentsResponse
     */
    public function listIndexDocumentsWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentName) {
            @$query['DocumentName'] = $request->documentName;
        }

        if (null !== $request->documentStatus) {
            @$query['DocumentStatus'] = $request->documentStatus;
        }

        if (null !== $request->enableNameLike) {
            @$query['EnableNameLike'] = $request->enableNameLike;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndexDocuments',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_index_documents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndexDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves files and their summary information from a specified knowledge base.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ListIndexFiles permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     * **Throttling:**
     * This operation is throttled if called too frequently. Do not exceed 15 calls per second. If you are throttled, retry later.
     *
     * @param request - ListIndexDocumentsRequest
     *
     * @returns ListIndexDocumentsResponse
     *
     * @param string                    $WorkspaceId
     * @param ListIndexDocumentsRequest $request
     *
     * @return ListIndexDocumentsResponse
     */
    public function listIndexDocuments($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexDocumentsWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the files in a specified knowledge base along with their details.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (`AliyunBailianDataFullAccess` is required, which includes the sfm:ListIndexFiles permission), before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     *
     * @param request - ListIndexFileDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndexFileDetailsResponse
     *
     * @param string                      $WorkspaceId
     * @param ListIndexFileDetailsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListIndexFileDetailsResponse
     */
    public function listIndexFileDetailsWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentName) {
            @$query['DocumentName'] = $request->documentName;
        }

        if (null !== $request->documentStatus) {
            @$query['DocumentStatus'] = $request->documentStatus;
        }

        if (null !== $request->enableNameLike) {
            @$query['EnableNameLike'] = $request->enableNameLike;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndexFileDetails',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_index_file_detail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndexFileDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the files in a specified knowledge base along with their details.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (`AliyunBailianDataFullAccess` is required, which includes the sfm:ListIndexFiles permission), before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, make sure that your knowledge base has been created and has not been deleted (that is, the knowledge base ID `IndexId` is valid).
     * - This operation has idempotence.
     *
     * @param request - ListIndexFileDetailsRequest
     *
     * @returns ListIndexFileDetailsResponse
     *
     * @param string                      $WorkspaceId
     * @param ListIndexFileDetailsRequest $request
     *
     * @return ListIndexFileDetailsResponse
     */
    public function listIndexFileDetails($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndexFileDetailsWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of knowledge bases in a specified workspace.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ListIndex permission) before calling this operation. Alibaba Cloud accounts can call this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is idempotent.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - ListIndicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIndicesResponse
     *
     * @param string             $WorkspaceId
     * @param ListIndicesRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListIndicesResponse
     */
    public function listIndicesWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexName) {
            @$query['IndexName'] = $request->indexName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIndices',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/list_indices',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIndicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of knowledge bases in a specified workspace.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:ListIndex permission) before calling this operation. Alibaba Cloud accounts can call this operation directly without authorization. Use the latest <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is idempotent.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - ListIndicesRequest
     *
     * @returns ListIndicesResponse
     *
     * @param string             $WorkspaceId
     * @param ListIndicesRequest $request
     *
     * @return ListIndicesResponse
     */
    public function listIndices($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIndicesWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of one or more long-term memory entities in a specified workspace.
     *
     * @remarks
     * - When querying the first page of a paging query, set only `MaxResults` to limit the number of entries returned. The `NextToken` value in the response serves as the credential for querying subsequent pages. When querying subsequent pages, set the `NextToken` parameter to the `NextToken` value obtained from the previous response as the query credential (if `NextToken` is empty, all results have been returned and no further requests are needed), and settings `MaxResults` to limit the number of entries returned.
     * - This operation supports idempotence.
     * **Rate limit:** Ensure that the interval between two consecutive requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - ListMemoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoriesResponse
     *
     * @param string              $workspaceId
     * @param ListMemoriesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMemoriesResponse
     */
    public function listMemoriesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemories',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of one or more long-term memory entities in a specified workspace.
     *
     * @remarks
     * - When querying the first page of a paging query, set only `MaxResults` to limit the number of entries returned. The `NextToken` value in the response serves as the credential for querying subsequent pages. When querying subsequent pages, set the `NextToken` parameter to the `NextToken` value obtained from the previous response as the query credential (if `NextToken` is empty, all results have been returned and no further requests are needed), and settings `MaxResults` to limit the number of entries returned.
     * - This operation supports idempotence.
     * **Rate limit:** Ensure that the interval between two consecutive requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - ListMemoriesRequest
     *
     * @returns ListMemoriesResponse
     *
     * @param string              $workspaceId
     * @param ListMemoriesRequest $request
     *
     * @return ListMemoriesResponse
     */
    public function listMemories($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoriesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of memory nodes.
     *
     * @param request - ListMemoryNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMemoryNodesResponse
     *
     * @param string                 $workspaceId
     * @param string                 $memoryId
     * @param ListMemoryNodesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListMemoryNodesResponse
     */
    public function listMemoryNodesWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMemoryNodes',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMemoryNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of memory nodes.
     *
     * @param request - ListMemoryNodesRequest
     *
     * @returns ListMemoryNodesResponse
     *
     * @param string                 $workspaceId
     * @param string                 $memoryId
     * @param ListMemoryNodesRequest $request
     *
     * @return ListMemoryNodesResponse
     */
    public function listMemoryNodes($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMemoryNodesWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Obtains a list of prompt templates.
     *
     * @param request - ListPromptTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPromptTemplatesResponse
     *
     * @param string                     $workspaceId
     * @param ListPromptTemplatesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPromptTemplatesResponse
     */
    public function listPromptTemplatesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPromptTemplates',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPromptTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of prompt templates.
     *
     * @param request - ListPromptTemplatesRequest
     *
     * @returns ListPromptTemplatesResponse
     *
     * @param string                     $workspaceId
     * @param ListPromptTemplatesRequest $request
     *
     * @return ListPromptTemplatesResponse
     */
    public function listPromptTemplates($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPromptTemplatesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 查询已发布的智能体应用列表.
     *
     * @param request - ListPublishedAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAgentResponse
     *
     * @param string                    $workspaceId
     * @param ListPublishedAgentRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListPublishedAgentResponse
     */
    public function listPublishedAgentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['pageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishedAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPublishedAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询已发布的智能体应用列表.
     *
     * @param request - ListPublishedAgentRequest
     *
     * @returns ListPublishedAgentResponse
     *
     * @param string                    $workspaceId
     * @param ListPublishedAgentRequest $request
     *
     * @return ListPublishedAgentResponse
     */
    public function listPublishedAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPublishedAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves information from a specified knowledge base.
     *
     * @remarks
     * <props="china">
     * - **How to call**: To retrieve information from a knowledge base, use the latest [Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29) with an [AccessKey](https://help.aliyun.com/document_detail/116401.html) or [Spring AI Alibaba](https://help.aliyun.com/document_detail/2990886.html) with an Alibaba Cloud Model Studio [API key](https://help.aliyun.com/document_detail/2712195.html). Both tools simplify your API calls by handling the complex signature calculation.
     * - **Required permissions**:
     *   - **RAM user (sub-account)**: To call this API, a RAM user must be granted [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). You can use the `AliyunBailianDataFullAccess` policy, which includes the required `sfm:Retrieve` permission.
     *   - **Alibaba Cloud account (main account)**: This account has the required permissions by default and can call the API directly.
     * - **Response latency**: This API call involves complex retrieval and matching operations, which can cause longer response times. We recommend configuring appropriate request timeouts and retry strategies.
     * - **Idempotency**: This API is idempotent.
     * <props="intl">
     * - **How to call**: We recommend using the latest [Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this API. The SDK simplifies API calls by handling the complex signature calculation.
     * - **Required permissions**:
     *   - **RAM user (sub-account)**: To call this API, a RAM user must be granted [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). You can use the `AliyunBailianDataFullAccess` policy, which includes the required `sfm:Retrieve` permission.
     *   - **Alibaba Cloud account (main account)**: This account has the required permissions by default and can call the API directly.
     * - **Response latency**: This API call involves complex retrieval and matching operations, which can cause longer response times. We recommend configuring appropriate request timeouts and retry strategies.
     * - **Idempotency**: This API is idempotent.
     *
     * @param tmpReq - RetrieveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveResponse
     *
     * @param string          $WorkspaceId
     * @param RetrieveRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RetrieveResponse
     */
    public function retrieveWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RetrieveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        if (null !== $tmpReq->images) {
            $request->imagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->images, 'Images', 'simple');
        }

        if (null !== $tmpReq->queryHistory) {
            $request->queryHistoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryHistory, 'QueryHistory', 'json');
        }

        if (null !== $tmpReq->rerank) {
            $request->rerankShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rerank, 'Rerank', 'json');
        }

        if (null !== $tmpReq->rewrite) {
            $request->rewriteShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rewrite, 'Rewrite', 'json');
        }

        if (null !== $tmpReq->searchFilters) {
            $request->searchFiltersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchFilters, 'SearchFilters', 'json');
        }

        $query = [];
        if (null !== $request->denseSimilarityTopK) {
            @$query['DenseSimilarityTopK'] = $request->denseSimilarityTopK;
        }

        if (null !== $request->enableReranking) {
            @$query['EnableReranking'] = $request->enableReranking;
        }

        if (null !== $request->enableRewrite) {
            @$query['EnableRewrite'] = $request->enableRewrite;
        }

        if (null !== $request->extraShrink) {
            @$query['Extra'] = $request->extraShrink;
        }

        if (null !== $request->imagesShrink) {
            @$query['Images'] = $request->imagesShrink;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->queryHistoryShrink) {
            @$query['QueryHistory'] = $request->queryHistoryShrink;
        }

        if (null !== $request->rerankShrink) {
            @$query['Rerank'] = $request->rerankShrink;
        }

        if (null !== $request->rerankMinScore) {
            @$query['RerankMinScore'] = $request->rerankMinScore;
        }

        if (null !== $request->rerankTopN) {
            @$query['RerankTopN'] = $request->rerankTopN;
        }

        if (null !== $request->rewriteShrink) {
            @$query['Rewrite'] = $request->rewriteShrink;
        }

        if (null !== $request->saveRetrieverHistory) {
            @$query['SaveRetrieverHistory'] = $request->saveRetrieverHistory;
        }

        if (null !== $request->searchFiltersShrink) {
            @$query['SearchFilters'] = $request->searchFiltersShrink;
        }

        if (null !== $request->sparseSimilarityTopK) {
            @$query['SparseSimilarityTopK'] = $request->sparseSimilarityTopK;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Retrieve',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/retrieve',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetrieveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information from a specified knowledge base.
     *
     * @remarks
     * <props="china">
     * - **How to call**: To retrieve information from a knowledge base, use the latest [Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29) with an [AccessKey](https://help.aliyun.com/document_detail/116401.html) or [Spring AI Alibaba](https://help.aliyun.com/document_detail/2990886.html) with an Alibaba Cloud Model Studio [API key](https://help.aliyun.com/document_detail/2712195.html). Both tools simplify your API calls by handling the complex signature calculation.
     * - **Required permissions**:
     *   - **RAM user (sub-account)**: To call this API, a RAM user must be granted [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). You can use the `AliyunBailianDataFullAccess` policy, which includes the required `sfm:Retrieve` permission.
     *   - **Alibaba Cloud account (main account)**: This account has the required permissions by default and can call the API directly.
     * - **Response latency**: This API call involves complex retrieval and matching operations, which can cause longer response times. We recommend configuring appropriate request timeouts and retry strategies.
     * - **Idempotency**: This API is idempotent.
     * <props="intl">
     * - **How to call**: We recommend using the latest [Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this API. The SDK simplifies API calls by handling the complex signature calculation.
     * - **Required permissions**:
     *   - **RAM user (sub-account)**: To call this API, a RAM user must be granted [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). You can use the `AliyunBailianDataFullAccess` policy, which includes the required `sfm:Retrieve` permission.
     *   - **Alibaba Cloud account (main account)**: This account has the required permissions by default and can call the API directly.
     * - **Response latency**: This API call involves complex retrieval and matching operations, which can cause longer response times. We recommend configuring appropriate request timeouts and retry strategies.
     * - **Idempotency**: This API is idempotent.
     *
     * @param request - RetrieveRequest
     *
     * @returns RetrieveResponse
     *
     * @param string          $WorkspaceId
     * @param RetrieveRequest $request
     *
     * @return RetrieveResponse
     */
    public function retrieve($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retrieveWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Adds parsed files to the specified knowledge base.
     *
     * @remarks
     * <props="china">
     * - This API does not support knowledge bases for data queries or image Q\\&A. To update these knowledge bases, see the [knowledge base](https://help.aliyun.com/document_detail/2807740.html) documentation.
     * <props="intl">
     * - This API does not support knowledge bases for data queries or image Q\\&A. To update these knowledge bases, see the [knowledge base](https://help.aliyun.com/document_detail/2807740.html) documentation.
     * - A RAM user (sub-account) can call this API only after being granted the required [api permission](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (specifically, the `AliyunBailianDataFullAccess` policy, which includes the `sfm:SubmitIndexAddDocumentsJob` permission) and joining a [workspace](https://help.aliyun.com/document_detail/2851098.html). An Alibaba Cloud account can call this API directly without authorization. We recommend using the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this API.
     * - Before calling this API, ensure your knowledge base exists and has a valid knowledge base ID (`IndexId`).
     * - Before calling this API, you must first upload files to Alibaba Cloud Model Studio using the **AddFile** API.
     * - After calling this API, the job runs in the background and may take several hours to complete, especially during peak times. Do not submit duplicate requests until the job is complete. To check the job status, call the **GetIndexJobStatus** API. The `Documents` file list returned by the GetIndexJobStatus API contains all files for the job, which is uniquely identified by the `job_id` you provided. You can check this list to verify whether each file was imported (parsed) successfully. Note that frequent calls to the GetIndexJobStatus API are subject to rate limiting. Do not exceed 20 calls per minute.
     * - A successful API call indicates the job has been submitted for processing, which takes time. This API is not idempotent, so do not send duplicate requests; doing so will create multiple jobs.
     * **Rate limiting:** This API is limited to 10 calls per second. If you exceed this limit, wait before retrying.
     *
     * @param tmpReq - SubmitIndexAddDocumentsJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIndexAddDocumentsJobResponse
     *
     * @param string                            $WorkspaceId
     * @param SubmitIndexAddDocumentsJobRequest $tmpReq
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitIndexAddDocumentsJobResponse
     */
    public function submitIndexAddDocumentsJobWithOptions($WorkspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitIndexAddDocumentsJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        if (null !== $tmpReq->documentIds) {
            $request->documentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentIds, 'DocumentIds', 'json');
        }

        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        $query = [];
        if (null !== $request->categoryIdsShrink) {
            @$query['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->chunkMode) {
            @$query['ChunkMode'] = $request->chunkMode;
        }

        if (null !== $request->chunkSize) {
            @$query['ChunkSize'] = $request->chunkSize;
        }

        if (null !== $request->documentIdsShrink) {
            @$query['DocumentIds'] = $request->documentIdsShrink;
        }

        if (null !== $request->enableHeaders) {
            @$query['EnableHeaders'] = $request->enableHeaders;
        }

        if (null !== $request->extraShrink) {
            @$query['Extra'] = $request->extraShrink;
        }

        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        if (null !== $request->overlapSize) {
            @$query['OverlapSize'] = $request->overlapSize;
        }

        if (null !== $request->separator) {
            @$query['Separator'] = $request->separator;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIndexAddDocumentsJob',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/add_documents_to_index',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitIndexAddDocumentsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds parsed files to the specified knowledge base.
     *
     * @remarks
     * <props="china">
     * - This API does not support knowledge bases for data queries or image Q\\&A. To update these knowledge bases, see the [knowledge base](https://help.aliyun.com/document_detail/2807740.html) documentation.
     * <props="intl">
     * - This API does not support knowledge bases for data queries or image Q\\&A. To update these knowledge bases, see the [knowledge base](https://help.aliyun.com/document_detail/2807740.html) documentation.
     * - A RAM user (sub-account) can call this API only after being granted the required [api permission](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (specifically, the `AliyunBailianDataFullAccess` policy, which includes the `sfm:SubmitIndexAddDocumentsJob` permission) and joining a [workspace](https://help.aliyun.com/document_detail/2851098.html). An Alibaba Cloud account can call this API directly without authorization. We recommend using the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this API.
     * - Before calling this API, ensure your knowledge base exists and has a valid knowledge base ID (`IndexId`).
     * - Before calling this API, you must first upload files to Alibaba Cloud Model Studio using the **AddFile** API.
     * - After calling this API, the job runs in the background and may take several hours to complete, especially during peak times. Do not submit duplicate requests until the job is complete. To check the job status, call the **GetIndexJobStatus** API. The `Documents` file list returned by the GetIndexJobStatus API contains all files for the job, which is uniquely identified by the `job_id` you provided. You can check this list to verify whether each file was imported (parsed) successfully. Note that frequent calls to the GetIndexJobStatus API are subject to rate limiting. Do not exceed 20 calls per minute.
     * - A successful API call indicates the job has been submitted for processing, which takes time. This API is not idempotent, so do not send duplicate requests; doing so will create multiple jobs.
     * **Rate limiting:** This API is limited to 10 calls per second. If you exceed this limit, wait before retrying.
     *
     * @param request - SubmitIndexAddDocumentsJobRequest
     *
     * @returns SubmitIndexAddDocumentsJobResponse
     *
     * @param string                            $WorkspaceId
     * @param SubmitIndexAddDocumentsJobRequest $request
     *
     * @return SubmitIndexAddDocumentsJobResponse
     */
    public function submitIndexAddDocumentsJob($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitIndexAddDocumentsJobWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Submits a specified CreateIndex task to complete knowledge base creation.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:SubmitIndexJob permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, you must invoke the **CreateIndex** operation and obtain the corresponding `IndexId`.
     * - After invoking this operation, the node requires time to execute and may take several hours during peak periods. Do not submit duplicate requests before the node completes. To query the node execution status, invoke the **GetIndexJobStatus** operation.
     * - After the knowledge base is created, you can associate it with an agent application<props="china"> or workflow application in the same workspace through <props="china">[Application Management](https://bailian.console.aliyun.com/?tab=app#/app-center)<props="intl">[Application Management](https://modelstudio.console.alibabacloud.com/?tab=app#/app-center) (or pass the `IndexID` through `rag_options` in [Application Calls](https://help.aliyun.com/document_detail/2846132.html)) to supplement your Model Studio application with private knowledge and up-to-date information. You can also choose not to use a Model Studio application and directly query the knowledge base by invoking the **Retrieve** operation.
     * - This operation does not support idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - SubmitIndexJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIndexJobResponse
     *
     * @param string                $WorkspaceId
     * @param SubmitIndexJobRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitIndexJobResponse
     */
    public function submitIndexJobWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexId) {
            @$query['IndexId'] = $request->indexId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIndexJob',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/submit_index_job',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a specified CreateIndex task to complete knowledge base creation.
     *
     * @remarks
     * - Resource Access Management (RAM) users must first obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (requires `AliyunBailianDataFullAccess`, which includes the sfm:SubmitIndexJob permission), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before invoking this operation. Alibaba Cloud accounts can invoke this operation directly without authorization. Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to invoke this operation.
     * - Before invoking this operation, you must invoke the **CreateIndex** operation and obtain the corresponding `IndexId`.
     * - After invoking this operation, the node requires time to execute and may take several hours during peak periods. Do not submit duplicate requests before the node completes. To query the node execution status, invoke the **GetIndexJobStatus** operation.
     * - After the knowledge base is created, you can associate it with an agent application<props="china"> or workflow application in the same workspace through <props="china">[Application Management](https://bailian.console.aliyun.com/?tab=app#/app-center)<props="intl">[Application Management](https://modelstudio.console.alibabacloud.com/?tab=app#/app-center) (or pass the `IndexID` through `rag_options` in [Application Calls](https://help.aliyun.com/document_detail/2846132.html)) to supplement your Model Studio application with private knowledge and up-to-date information. You can also choose not to use a Model Studio application and directly query the knowledge base by invoking the **Retrieve** operation.
     * - This operation does not support idempotence.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If throttled, retry later.
     *
     * @param request - SubmitIndexJobRequest
     *
     * @returns SubmitIndexJobResponse
     *
     * @param string                $WorkspaceId
     * @param SubmitIndexJobRequest $request
     *
     * @return SubmitIndexJobResponse
     */
    public function submitIndexJob($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitIndexJobWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 更新并发布智能体应用.
     *
     * @param tmpReq - UpdateAndPublishAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndPublishAgentResponse
     *
     * @param string                       $workspaceId
     * @param string                       $appCode
     * @param UpdateAndPublishAgentRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAndPublishAgentResponse
     */
    public function updateAndPublishAgentWithOptions($workspaceId, $appCode, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAndPublishAgentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfig) {
            $request->applicationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfig, 'applicationConfig', 'json');
        }

        if (null !== $tmpReq->sampleLibrary) {
            $request->sampleLibraryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sampleLibrary, 'sampleLibrary', 'json');
        }

        $body = [];
        if (null !== $request->applicationConfigShrink) {
            @$body['applicationConfig'] = $request->applicationConfigShrink;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sampleLibraryShrink) {
            @$body['sampleLibrary'] = $request->sampleLibraryShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndPublishAgent',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAndPublishAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新并发布智能体应用.
     *
     * @param request - UpdateAndPublishAgentRequest
     *
     * @returns UpdateAndPublishAgentResponse
     *
     * @param string                       $workspaceId
     * @param string                       $appCode
     * @param UpdateAndPublishAgentRequest $request
     *
     * @return UpdateAndPublishAgentResponse
     */
    public function updateAndPublishAgent($workspaceId, $appCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndPublishAgentWithOptions($workspaceId, $appCode, $request, $headers, $runtime);
    }

    /**
     * 选择更新并发布智能体应用.
     *
     * @param tmpReq - UpdateAndPublishAgentSelectiveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAndPublishAgentSelectiveResponse
     *
     * @param string                                $workspaceId
     * @param string                                $appCode
     * @param UpdateAndPublishAgentSelectiveRequest $tmpReq
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateAndPublishAgentSelectiveResponse
     */
    public function updateAndPublishAgentSelectiveWithOptions($workspaceId, $appCode, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAndPublishAgentSelectiveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfig) {
            $request->applicationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfig, 'applicationConfig', 'json');
        }

        if (null !== $tmpReq->sampleLibrary) {
            $request->sampleLibraryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sampleLibrary, 'sampleLibrary', 'json');
        }

        $body = [];
        if (null !== $request->applicationConfigShrink) {
            @$body['applicationConfig'] = $request->applicationConfigShrink;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->sampleLibraryShrink) {
            @$body['sampleLibrary'] = $request->sampleLibraryShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAndPublishAgentSelective',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/application/agents/' . Url::percentEncode($appCode) . '/updateAndPublishAgentSelective',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAndPublishAgentSelectiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 选择更新并发布智能体应用.
     *
     * @param request - UpdateAndPublishAgentSelectiveRequest
     *
     * @returns UpdateAndPublishAgentSelectiveResponse
     *
     * @param string                                $workspaceId
     * @param string                                $appCode
     * @param UpdateAndPublishAgentSelectiveRequest $request
     *
     * @return UpdateAndPublishAgentSelectiveResponse
     */
    public function updateAndPublishAgentSelective($workspaceId, $appCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAndPublishAgentSelectiveWithOptions($workspaceId, $appCode, $request, $headers, $runtime);
    }

    /**
     * Modifies the content and title of a specified text chunk in a knowledge base, and specifies whether the chunk participates in knowledge base retrieval.
     *
     * @remarks
     * - **Key limits**: This operation supports only document search knowledge bases. Data query and image Q&A knowledge bases are not supported.
     * - **Permission requirements**:
     *   - **Resource Access Management (RAM) user**: Before invoking this operation, obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (you can use the `AliyunBailianDataFullAccess` policy, which includes the sfm:UpdateChunk permission required by this operation), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html).
     *   - **Alibaba Cloud account**: Has permissions by default and can invoke this operation directly.
     * - **Calling method**: Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29). The SDK provides encapsulation of complex signature calculation logic and simplifies the invocation procedure.
     * - **Effective latency**: Updates typically take effect immediately. During peak hours, a slight delay (seconds) may occur.
     * - **Idempotence**: This operation is idempotent. If you repeat the operation on a text chunk that has already been updated, the operation returns a success response.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - UpdateChunkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateChunkResponse
     *
     * @param string             $WorkspaceId
     * @param UpdateChunkRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateChunkResponse
     */
    public function updateChunkWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chunkId) {
            @$query['ChunkId'] = $request->chunkId;
        }

        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->isDisplayedChunkContent) {
            @$query['IsDisplayedChunkContent'] = $request->isDisplayedChunkContent;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->title) {
            @$query['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateChunk',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/chunk/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateChunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the content and title of a specified text chunk in a knowledge base, and specifies whether the chunk participates in knowledge base retrieval.
     *
     * @remarks
     * - **Key limits**: This operation supports only document search knowledge bases. Data query and image Q&A knowledge bases are not supported.
     * - **Permission requirements**:
     *   - **Resource Access Management (RAM) user**: Before invoking this operation, obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Model Studio (you can use the `AliyunBailianDataFullAccess` policy, which includes the sfm:UpdateChunk permission required by this operation), and [join a workspace](https://help.aliyun.com/document_detail/2851098.html).
     *   - **Alibaba Cloud account**: Has permissions by default and can invoke this operation directly.
     * - **Calling method**: Use the latest <props="china">[Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29). The SDK provides encapsulation of complex signature calculation logic and simplifies the invocation procedure.
     * - **Effective latency**: Updates typically take effect immediately. During peak hours, a slight delay (seconds) may occur.
     * - **Idempotence**: This operation is idempotent. If you repeat the operation on a text chunk that has already been updated, the operation returns a success response.
     * **Rate limit:**
     * This operation is throttled if called too frequently. Do not exceed 10 calls per second. If you are throttled, retry later.
     *
     * @param request - UpdateChunkRequest
     *
     * @returns UpdateChunkResponse
     *
     * @param string             $WorkspaceId
     * @param UpdateChunkRequest $request
     *
     * @return UpdateChunkResponse
     */
    public function updateChunk($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateChunkWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Updates a connector.
     *
     * @remarks
     * - A RAM user can call this operation only after they join a workspace and are granted the required [API permission](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (Bailian). The `AliyunBailianDataFullAccess` policy, which includes the `sfm:UpdateConnector` permission, is required. An Alibaba Cloud account can call this operation directly. Use the latest version of the <props="china">[Alibaba Cloud Model Studio (Bailian) SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio (Bailian) SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is not idempotent.
     * **Throttling:** If you call this operation too frequently, the system may throttle your requests. Do not exceed a frequency of 5 calls per second. If a request is throttled, try again later.
     *
     * @param request - UpdateConnectorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConnectorResponse
     *
     * @param string                 $WorkspaceId
     * @param string                 $ConnectorId
     * @param UpdateConnectorRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateConnectorResponse
     */
    public function updateConnectorWithOptions($WorkspaceId, $ConnectorId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->connectorName) {
            @$body['ConnectorName'] = $request->connectorName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConnector',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/connector/' . Url::percentEncode($ConnectorId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a connector.
     *
     * @remarks
     * - A RAM user can call this operation only after they join a workspace and are granted the required [API permission](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (Bailian). The `AliyunBailianDataFullAccess` policy, which includes the `sfm:UpdateConnector` permission, is required. An Alibaba Cloud account can call this operation directly. Use the latest version of the <props="china">[Alibaba Cloud Model Studio (Bailian) SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio (Bailian) SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * - This operation is not idempotent.
     * **Throttling:** If you call this operation too frequently, the system may throttle your requests. Do not exceed a frequency of 5 calls per second. If a request is throttled, try again later.
     *
     * @param request - UpdateConnectorRequest
     *
     * @returns UpdateConnectorResponse
     *
     * @param string                 $WorkspaceId
     * @param string                 $ConnectorId
     * @param UpdateConnectorRequest $request
     *
     * @return UpdateConnectorResponse
     */
    public function updateConnector($WorkspaceId, $ConnectorId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConnectorWithOptions($WorkspaceId, $ConnectorId, $request, $headers, $runtime);
    }

    /**
     * Updates the tags for a specified file.
     *
     * @remarks
     * - A RAM User (sub-account) must be granted the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (the `AliyunBailianDataFullAccess` policy, which includes the `sfm:UpdateFileTag` permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. An Alibaba Cloud account (main account) can call this operation directly without authorization. We recommend using the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * **Throttling:** Do not call this operation more than 5 times per second. If a request is throttled, try again later.
     *
     * @param tmpReq - UpdateFileTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFileTagResponse
     *
     * @param string               $WorkspaceId
     * @param string               $FileId
     * @param UpdateFileTagRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateFileTagResponse
     */
    public function updateFileTagWithOptions($WorkspaceId, $FileId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateFileTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $body = [];
        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFileTag',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/file/' . Url::percentEncode($FileId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFileTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the tags for a specified file.
     *
     * @remarks
     * - A RAM User (sub-account) must be granted the required [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio (the `AliyunBailianDataFullAccess` policy, which includes the `sfm:UpdateFileTag` permission) and [join a workspace](https://help.aliyun.com/document_detail/2851098.html) before calling this operation. An Alibaba Cloud account (main account) can call this operation directly without authorization. We recommend using the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29)<props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29) to call this operation.
     * **Throttling:** Do not call this operation more than 5 times per second. If a request is throttled, try again later.
     *
     * @param request - UpdateFileTagRequest
     *
     * @returns UpdateFileTagResponse
     *
     * @param string               $WorkspaceId
     * @param string               $FileId
     * @param UpdateFileTagRequest $request
     *
     * @return UpdateFileTagResponse
     */
    public function updateFileTag($WorkspaceId, $FileId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileTagWithOptions($WorkspaceId, $FileId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration of a specified knowledge base.
     *
     * @remarks
     * <props="intl">This operation is not available on the Alibaba Cloud International Website (www\\.alibabacloud.com).<props="china">
     * Before a RAM user can call this operation, the RAM user must have the `AliyunBailianDataFullAccess` permission for Alibaba Cloud Model Studio. For more information, see [Grant permissions](https://help.aliyun.com/document_detail/2848578.html). The RAM user must also be added to a workspace. For more information, see [Add a member to a workspace](https://help.aliyun.com/document_detail/2851098.html). An Alibaba Cloud account can call this operation without authorization. Use the latest version of the Alibaba Cloud Model Studio SDK to call this operation. For more information, see [Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29).
     * Before you call this operation, ensure that the knowledge base is created and has not been deleted. The knowledge base ID (`Id`) must be valid.
     * This operation is idempotent.
     *
     * @param request - UpdateIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIndexResponse
     *
     * @param string             $WorkspaceId
     * @param UpdateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIndexResponse
     */
    public function updateIndexWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->denseSimilarityTopK) {
            @$query['DenseSimilarityTopK'] = $request->denseSimilarityTopK;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pipelineCommercialCu) {
            @$query['PipelineCommercialCu'] = $request->pipelineCommercialCu;
        }

        if (null !== $request->pipelineCommercialType) {
            @$query['PipelineCommercialType'] = $request->pipelineCommercialType;
        }

        if (null !== $request->rerankMinScore) {
            @$query['RerankMinScore'] = $request->rerankMinScore;
        }

        if (null !== $request->sparseSimilarityTopK) {
            @$query['SparseSimilarityTopK'] = $request->sparseSimilarityTopK;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIndex',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/index/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of a specified knowledge base.
     *
     * @remarks
     * <props="intl">This operation is not available on the Alibaba Cloud International Website (www\\.alibabacloud.com).<props="china">
     * Before a RAM user can call this operation, the RAM user must have the `AliyunBailianDataFullAccess` permission for Alibaba Cloud Model Studio. For more information, see [Grant permissions](https://help.aliyun.com/document_detail/2848578.html). The RAM user must also be added to a workspace. For more information, see [Add a member to a workspace](https://help.aliyun.com/document_detail/2851098.html). An Alibaba Cloud account can call this operation without authorization. Use the latest version of the Alibaba Cloud Model Studio SDK to call this operation. For more information, see [Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29).
     * Before you call this operation, ensure that the knowledge base is created and has not been deleted. The knowledge base ID (`Id`) must be valid.
     * This operation is idempotent.
     *
     * @param request - UpdateIndexRequest
     *
     * @returns UpdateIndexResponse
     *
     * @param string             $WorkspaceId
     * @param UpdateIndexRequest $request
     *
     * @return UpdateIndexResponse
     */
    public function updateIndex($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * Updates the description of a specified long-term memory.
     *
     * @remarks
     * - This operation is idempotent.
     * **Rate limit:** Ensure that the interval between two requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - UpdateMemoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description of a specified long-term memory.
     *
     * @remarks
     * - This operation is idempotent.
     * **Rate limit:** Ensure that the interval between two requests is at least 1 second. Otherwise, throttling may be triggered. If throttling occurs, retry later.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param string              $workspaceId
     * @param string              $memoryId
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($workspaceId, $memoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryWithOptions($workspaceId, $memoryId, $request, $headers, $runtime);
    }

    /**
     * Updates a memory fragment.
     *
     * @param request - UpdateMemoryNodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param string                  $memoryNodeId
     * @param UpdateMemoryNodeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMemoryNodeResponse
     */
    public function updateMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMemoryNode',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/memories/' . Url::percentEncode($memoryId) . '/memoryNodes/' . Url::percentEncode($memoryNodeId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a memory fragment.
     *
     * @param request - UpdateMemoryNodeRequest
     *
     * @returns UpdateMemoryNodeResponse
     *
     * @param string                  $workspaceId
     * @param string                  $memoryId
     * @param string                  $memoryNodeId
     * @param UpdateMemoryNodeRequest $request
     *
     * @return UpdateMemoryNodeResponse
     */
    public function updateMemoryNode($workspaceId, $memoryId, $memoryNodeId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMemoryNodeWithOptions($workspaceId, $memoryId, $memoryNodeId, $request, $headers, $runtime);
    }

    /**
     * Updates a prompt template based on the template ID.
     *
     * @param request - UpdatePromptTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param string                      $promptTemplateId
     * @param UpdatePromptTemplateRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePromptTemplateResponse
     */
    public function updatePromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePromptTemplate',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/promptTemplates/' . Url::percentEncode($promptTemplateId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePromptTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a prompt template based on the template ID.
     *
     * @param request - UpdatePromptTemplateRequest
     *
     * @returns UpdatePromptTemplateResponse
     *
     * @param string                      $workspaceId
     * @param string                      $promptTemplateId
     * @param UpdatePromptTemplateRequest $request
     *
     * @return UpdatePromptTemplateResponse
     */
    public function updatePromptTemplate($workspaceId, $promptTemplateId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePromptTemplateWithOptions($workspaceId, $promptTemplateId, $request, $headers, $runtime);
    }

    /**
     * Update a table in an Alibaba Cloud Model Studio data connector using a file from an authorized OSS bucket.
     *
     * @remarks
     * - Ensure that the OSS bucket belongs to the same Alibaba Cloud account as your Alibaba Cloud Model Studio instance. You must also complete the authorization steps described in [Configure data import from OSS](https://help.aliyun.com/document_detail/2782155.html).
     *   - The bucket storage class must not be Archive, Cold Archive, or Deep Cold Archive. Buckets with server-side encryption are supported. public-read-write, public-read, and private buckets are also supported.
     *   - If you use a bucket with [Referer-based hotlink protection](https://help.aliyun.com/document_detail/2636937.html), you must add `*.console.aliyun.com` to the Referer whitelist. For more information, see [Allow access only from trusted websites](https://help.aliyun.com/document_detail/2636937.html).
     * - Before a RAM user (sub-account) can call this operation, they must obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). The AliyunBailianDataFullAccess policy includes the required `sfm:UpdateTableFromAuthorizedOss` permission. An Alibaba Cloud account (root account) can call this operation directly without additional permissions. We recommend that you use the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29) or <props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Rate limiting:** This operation is subject to rate limiting. Do not call it more than five times per second. If you reach the limit, wait before you try again.
     *
     * @param request - UpdateTableFromAuthorizedOssRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTableFromAuthorizedOssResponse
     *
     * @param string                              $WorkspaceId
     * @param string                              $TableId
     * @param UpdateTableFromAuthorizedOssRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateTableFromAuthorizedOssResponse
     */
    public function updateTableFromAuthorizedOssWithOptions($WorkspaceId, $TableId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ossBucket) {
            @$body['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossKey) {
            @$body['OssKey'] = $request->ossKey;
        }

        if (null !== $request->ossRegionId) {
            @$body['OssRegionId'] = $request->ossRegionId;
        }

        if (null !== $request->updateMode) {
            @$body['UpdateMode'] = $request->updateMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTableFromAuthorizedOss',
            'version' => '2023-12-29',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/datacenter/table/fromoss/' . Url::percentEncode($TableId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTableFromAuthorizedOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a table in an Alibaba Cloud Model Studio data connector using a file from an authorized OSS bucket.
     *
     * @remarks
     * - Ensure that the OSS bucket belongs to the same Alibaba Cloud account as your Alibaba Cloud Model Studio instance. You must also complete the authorization steps described in [Configure data import from OSS](https://help.aliyun.com/document_detail/2782155.html).
     *   - The bucket storage class must not be Archive, Cold Archive, or Deep Cold Archive. Buckets with server-side encryption are supported. public-read-write, public-read, and private buckets are also supported.
     *   - If you use a bucket with [Referer-based hotlink protection](https://help.aliyun.com/document_detail/2636937.html), you must add `*.console.aliyun.com` to the Referer whitelist. For more information, see [Allow access only from trusted websites](https://help.aliyun.com/document_detail/2636937.html).
     * - Before a RAM user (sub-account) can call this operation, they must obtain [API permissions](https://help.aliyun.com/document_detail/2848578.html) for Alibaba Cloud Model Studio and [join a workspace](https://help.aliyun.com/document_detail/2851098.html). The AliyunBailianDataFullAccess policy includes the required `sfm:UpdateTableFromAuthorizedOss` permission. An Alibaba Cloud account (root account) can call this operation directly without additional permissions. We recommend that you use the latest version of the <props="china">[Alibaba Cloud Model Studio SDK](https://api.aliyun.com/api-tools/sdk/bailian?version=2023-12-29) or <props="intl">[Alibaba Cloud Model Studio SDK](https://api.alibabacloud.com/api-tools/sdk/bailian?version=2023-12-29).
     * - This operation is not idempotent.
     * **Rate limiting:** This operation is subject to rate limiting. Do not call it more than five times per second. If you reach the limit, wait before you try again.
     *
     * @param request - UpdateTableFromAuthorizedOssRequest
     *
     * @returns UpdateTableFromAuthorizedOssResponse
     *
     * @param string                              $WorkspaceId
     * @param string                              $TableId
     * @param UpdateTableFromAuthorizedOssRequest $request
     *
     * @return UpdateTableFromAuthorizedOssResponse
     */
    public function updateTableFromAuthorizedOss($WorkspaceId, $TableId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTableFromAuthorizedOssWithOptions($WorkspaceId, $TableId, $request, $headers, $runtime);
    }
}
