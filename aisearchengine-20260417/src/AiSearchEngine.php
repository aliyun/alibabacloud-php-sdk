<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchResponse;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\GetDatasetResourceUrlRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\GetDatasetResourceUrlResponse;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\ImportDatasetDataRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\ImportDatasetDataResponse;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatRequest;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AiSearchEngine extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aisearchengine', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Provides a search API operation for the CleverSee AI Search platform. After you create a search application on the platform, you can invoke this search API operation to retrieve images, documents, and audio/video content in datasets. The platform supports text (natural language), image, or combined text-and-image input, enabling fast adaptation to multi-modal large-scale data search scenarios and helping you efficiently locate target content.
     *
     * @remarks
     * ## Operation description
     * This operation supports calling two types of search applications on the [CleverSee AI Search platform](https://aisearch.aliyun.com/web-search): **image search applications** (text-to-image, image-to-image, and combined text-and-image search) and **audio/video search applications** (text-to-audio/video, image-to-video, and combined text-and-image-to-video search).
     * ### Data sources
     * Audio and video data is supported. You can upload and update data through the [CleverSee AI Search platform](https://aisearch.aliyun.com/web-search) UI or through the [Dataset Data Add/Update API](https://www.alibabacloud.com/help/en/document_detail/3038471.html).
     * # Authentication
     * Call the CleverSee - Intelligent Search service by using the Alibaba Cloud SDK. For more information, see [AI search engine operation](https://api.aliyun.com/document/AiSearchEngine/2026-04-17/EngineSearch).
     *
     * @param request - EngineSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EngineSearchResponse
     *
     * @param EngineSearchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return EngineSearchResponse
     */
    public function engineSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->grey) {
            @$body['grey'] = $request->grey;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->user) {
            @$body['user'] = $request->user;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EngineSearch',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/platform/app/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EngineSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides a search API operation for the CleverSee AI Search platform. After you create a search application on the platform, you can invoke this search API operation to retrieve images, documents, and audio/video content in datasets. The platform supports text (natural language), image, or combined text-and-image input, enabling fast adaptation to multi-modal large-scale data search scenarios and helping you efficiently locate target content.
     *
     * @remarks
     * ## Operation description
     * This operation supports calling two types of search applications on the [CleverSee AI Search platform](https://aisearch.aliyun.com/web-search): **image search applications** (text-to-image, image-to-image, and combined text-and-image search) and **audio/video search applications** (text-to-audio/video, image-to-video, and combined text-and-image-to-video search).
     * ### Data sources
     * Audio and video data is supported. You can upload and update data through the [CleverSee AI Search platform](https://aisearch.aliyun.com/web-search) UI or through the [Dataset Data Add/Update API](https://www.alibabacloud.com/help/en/document_detail/3038471.html).
     * # Authentication
     * Call the CleverSee - Intelligent Search service by using the Alibaba Cloud SDK. For more information, see [AI search engine operation](https://api.aliyun.com/document/AiSearchEngine/2026-04-17/EngineSearch).
     *
     * @param request - EngineSearchRequest
     *
     * @returns EngineSearchResponse
     *
     * @param EngineSearchRequest $request
     *
     * @return EngineSearchResponse
     */
    public function engineSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->engineSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a temporary public network access URL for an image, audio, or video resource in your dataset.
     *
     * @remarks
     * Retrieves a temporary secure access URL for an underlying media resource (such as audio, video, or image) stored in AI Search Platform, based on the dataset ID and data primary key. The URL can be used directly for frontend display or download.
     * Key use case: When you make a Search API call for a search application created in AI Search Platform, the returned image, audio, and video result URLs are pre-signed links with a validity period of 24 hours. If your application persists these URLs in local storage, subsequent access may fail because the URLs have expired. In this case, invoke this operation with the corresponding dataset ID and data record primary key to retrieve the latest valid access URL for the resource.
     *
     * @param request - GetDatasetResourceUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetResourceUrlResponse
     *
     * @param GetDatasetResourceUrlRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetDatasetResourceUrlResponse
     */
    public function getDatasetResourceUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['datasetId'] = $request->datasetId;
        }

        if (null !== $request->primaryKey) {
            @$body['primaryKey'] = $request->primaryKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDatasetResourceUrl',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/dataset/open/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatasetResourceUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a temporary public network access URL for an image, audio, or video resource in your dataset.
     *
     * @remarks
     * Retrieves a temporary secure access URL for an underlying media resource (such as audio, video, or image) stored in AI Search Platform, based on the dataset ID and data primary key. The URL can be used directly for frontend display or download.
     * Key use case: When you make a Search API call for a search application created in AI Search Platform, the returned image, audio, and video result URLs are pre-signed links with a validity period of 24 hours. If your application persists these URLs in local storage, subsequent access may fail because the URLs have expired. In this case, invoke this operation with the corresponding dataset ID and data record primary key to retrieve the latest valid access URL for the resource.
     *
     * @param request - GetDatasetResourceUrlRequest
     *
     * @returns GetDatasetResourceUrlResponse
     *
     * @param GetDatasetResourceUrlRequest $request
     *
     * @return GetDatasetResourceUrlResponse
     */
    public function getDatasetResourceUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetResourceUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds or updates data in a specific dataset in real time. The system matches records based on the primary key value of the target dataset and the primary key value of the new data record (such as "pk_id" = "2026aa01"). If a matching primary key value is found, the corresponding data record is updated. If no match is found, a new data record is added.
     *
     * @remarks
     * *Common scenarios**
     * | Scenario | Description |
     * | --- | --- |
     * | Real-time data addition | Pushes new data to the AI search platform in real time when the business system generates new data. |
     * | Status update | Promptly updates data when changes occur on the business side, such as title modifications or delisting. |
     * **Before you begin**
     * - **Primary key handling**: The system determines whether to add or update a record based on the primary key type (user-defined or system-generated) of the target dataset.
     * - **Batch limit**: A maximum of 100 records can be processed per request.
     * - **Schema matching**: The `records` field must strictly follow the schema configured for the target dataset in the console.
     * - **Permission requirements**: Make sure you have sufficient permissions to write to or update the target dataset.
     * - **Status check**: Before sending a request, confirm that the target dataset is in a writable state and not in read-only mode.
     *
     * @param request - ImportDatasetDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportDatasetDataResponse
     *
     * @param ImportDatasetDataRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ImportDatasetDataResponse
     */
    public function importDatasetDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['datasetId'] = $request->datasetId;
        }

        if (null !== $request->records) {
            @$body['records'] = $request->records;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportDatasetData',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/dataset/open/upsert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportDatasetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or updates data in a specific dataset in real time. The system matches records based on the primary key value of the target dataset and the primary key value of the new data record (such as "pk_id" = "2026aa01"). If a matching primary key value is found, the corresponding data record is updated. If no match is found, a new data record is added.
     *
     * @remarks
     * *Common scenarios**
     * | Scenario | Description |
     * | --- | --- |
     * | Real-time data addition | Pushes new data to the AI search platform in real time when the business system generates new data. |
     * | Status update | Promptly updates data when changes occur on the business side, such as title modifications or delisting. |
     * **Before you begin**
     * - **Primary key handling**: The system determines whether to add or update a record based on the primary key type (user-defined or system-generated) of the target dataset.
     * - **Batch limit**: A maximum of 100 records can be processed per request.
     * - **Schema matching**: The `records` field must strictly follow the schema configured for the target dataset in the console.
     * - **Permission requirements**: Make sure you have sufficient permissions to write to or update the target dataset.
     * - **Status check**: Before sending a request, confirm that the target dataset is in a writable state and not in read-only mode.
     *
     * @param request - ImportDatasetDataRequest
     *
     * @returns ImportDatasetDataResponse
     *
     * @param ImportDatasetDataRequest $request
     *
     * @return ImportDatasetDataResponse
     */
    public function importDatasetData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importDatasetDataWithOptions($request, $headers, $runtime);
    }

    /**
     * Build Q&A applications leveraging powerful omni-modal search and comprehension capabilities on the CleverSee AI Search Platform, enabling deep understanding and precise Q&A over images, documents, and video content in datasets. The platform supports flexible customization of the Q&A assistant\\"s response style and interaction mode, allowing rapid adaptation to diverse large-scale data Q&A scenarios. Users can ask questions via text, images, or a combination of both, and the platform performs deep semantic understanding across the complete dataset, producing answers in multiple formats including text, images, and video. For video content, the platform also provides template-based output capabilities for generating customized content summaries, information extraction, and video scripts.
     *
     * @remarks
     * Streaming API for [CleverSee AI Search Platform](https://aisearch.aliyun.com/web-search) intelligent Q&A applications, supporting multimodal input (text, images, structured data) and streaming output (text, images, video, sources, etc.). The API uses the SSE (Server-Sent Events) protocol to push response data, where each data stream is a JSON object with different data types identified by the `type` field.
     * ### Integration Guide:
     * Streaming API for intelligent Q&A, supporting multimodal input (text, images, structured data) and streaming output (text, images, video, sources, etc.). The API uses the SSE (Server-Sent Events) protocol to push response data, where each data stream is a JSON object with different data types identified by the `type` field.
     * ### Data Sources:
     * Supports video Q&A. Data can be uploaded and updated through the [CleverSee AI Search Platform](https://aisearch.aliyun.com/web-search) product interface or via the [Dataset Data Add/Update API](https://help.aliyun.com/zh/document_detail/3038471.html?spm=a2c4g.11186623.help-menu-3037946.d_0_2_1_0.54ed1e97NGXVV1&scm=20140722.H_3038471._.OR_help-T_cn~zh-V_1).
     * # Authentication
     * Call the CleverSee - Intelligent Q&A service through the Alibaba Cloud SDK. For the detailed calling guide, please refer to: [AI Q&A Engine API](https://api.aliyun.com/document/AiSearchEngine/2026-04-17/QaChat)
     *
     * @param request - QaChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QaChatResponse
     *
     * @param QaChatRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QaChatResponse
     */
    public function qaChatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QaChat',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/platform/app/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield QaChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Build Q&A applications leveraging powerful omni-modal search and comprehension capabilities on the CleverSee AI Search Platform, enabling deep understanding and precise Q&A over images, documents, and video content in datasets. The platform supports flexible customization of the Q&A assistant\\"s response style and interaction mode, allowing rapid adaptation to diverse large-scale data Q&A scenarios. Users can ask questions via text, images, or a combination of both, and the platform performs deep semantic understanding across the complete dataset, producing answers in multiple formats including text, images, and video. For video content, the platform also provides template-based output capabilities for generating customized content summaries, information extraction, and video scripts.
     *
     * @remarks
     * Streaming API for [CleverSee AI Search Platform](https://aisearch.aliyun.com/web-search) intelligent Q&A applications, supporting multimodal input (text, images, structured data) and streaming output (text, images, video, sources, etc.). The API uses the SSE (Server-Sent Events) protocol to push response data, where each data stream is a JSON object with different data types identified by the `type` field.
     * ### Integration Guide:
     * Streaming API for intelligent Q&A, supporting multimodal input (text, images, structured data) and streaming output (text, images, video, sources, etc.). The API uses the SSE (Server-Sent Events) protocol to push response data, where each data stream is a JSON object with different data types identified by the `type` field.
     * ### Data Sources:
     * Supports video Q&A. Data can be uploaded and updated through the [CleverSee AI Search Platform](https://aisearch.aliyun.com/web-search) product interface or via the [Dataset Data Add/Update API](https://help.aliyun.com/zh/document_detail/3038471.html?spm=a2c4g.11186623.help-menu-3037946.d_0_2_1_0.54ed1e97NGXVV1&scm=20140722.H_3038471._.OR_help-T_cn~zh-V_1).
     * # Authentication
     * Call the CleverSee - Intelligent Q&A service through the Alibaba Cloud SDK. For the detailed calling guide, please refer to: [AI Q&A Engine API](https://api.aliyun.com/document/AiSearchEngine/2026-04-17/QaChat)
     *
     * @param request - QaChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QaChatResponse
     *
     * @param QaChatRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QaChatResponse
     */
    public function qaChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QaChat',
            'version' => '2026-04-17',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/platform/app/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QaChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Build Q&A applications leveraging powerful omni-modal search and comprehension capabilities on the CleverSee AI Search Platform, enabling deep understanding and precise Q&A over images, documents, and video content in datasets. The platform supports flexible customization of the Q&A assistant\\"s response style and interaction mode, allowing rapid adaptation to diverse large-scale data Q&A scenarios. Users can ask questions via text, images, or a combination of both, and the platform performs deep semantic understanding across the complete dataset, producing answers in multiple formats including text, images, and video. For video content, the platform also provides template-based output capabilities for generating customized content summaries, information extraction, and video scripts.
     *
     * @remarks
     * Streaming API for [CleverSee AI Search Platform](https://aisearch.aliyun.com/web-search) intelligent Q&A applications, supporting multimodal input (text, images, structured data) and streaming output (text, images, video, sources, etc.). The API uses the SSE (Server-Sent Events) protocol to push response data, where each data stream is a JSON object with different data types identified by the `type` field.
     * ### Integration Guide:
     * Streaming API for intelligent Q&A, supporting multimodal input (text, images, structured data) and streaming output (text, images, video, sources, etc.). The API uses the SSE (Server-Sent Events) protocol to push response data, where each data stream is a JSON object with different data types identified by the `type` field.
     * ### Data Sources:
     * Supports video Q&A. Data can be uploaded and updated through the [CleverSee AI Search Platform](https://aisearch.aliyun.com/web-search) product interface or via the [Dataset Data Add/Update API](https://help.aliyun.com/zh/document_detail/3038471.html?spm=a2c4g.11186623.help-menu-3037946.d_0_2_1_0.54ed1e97NGXVV1&scm=20140722.H_3038471._.OR_help-T_cn~zh-V_1).
     * # Authentication
     * Call the CleverSee - Intelligent Q&A service through the Alibaba Cloud SDK. For the detailed calling guide, please refer to: [AI Q&A Engine API](https://api.aliyun.com/document/AiSearchEngine/2026-04-17/QaChat)
     *
     * @param request - QaChatRequest
     *
     * @returns QaChatResponse
     *
     * @param QaChatRequest $request
     *
     * @return QaChatResponse
     */
    public function qaChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->qaChatWithOptions($request, $headers, $runtime);
    }
}
