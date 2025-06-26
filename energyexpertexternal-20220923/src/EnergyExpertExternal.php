<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\AnalyzeVlRealtimeAdvanceRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\AnalyzeVlRealtimeRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\AnalyzeVlRealtimeResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\BatchSaveInstructionStatusRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\BatchSaveInstructionStatusResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\BatchUpdateSystemRunningPlanRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\BatchUpdateSystemRunningPlanResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ChatRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ChatResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\CreateChatSessionRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\CreateChatSessionResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditProhibitedDevicesRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditProhibitedDevicesResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditUnfavorableAreaDevicesRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditUnfavorableAreaDevicesResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GenerateResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GenerateResultResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetAreaElecConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetAreaElecConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetCarbonEmissionTrendResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatFolderListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatSessionListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatSessionListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataItemListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataItemListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocExtractionResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocExtractionResultResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocParsingResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocParsingResultResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetElecTrendResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSourceConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSourceConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdInventoryConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdInventoryConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdSummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEpdSummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGasConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGasConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpBenchmarkSummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventoryConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventoryConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgConstituteRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgConstituteResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetPcrInfoRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetPcrInfoResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetReductionProposalRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetReductionProposalResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetVLExtractionResultRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetVLExtractionResultResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\IsCompletedRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\IsCompletedResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushItemDataResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\RecalculateCarbonEmissionRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\RecalculateCarbonEmissionResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SendDocumentAskQuestionRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SendDocumentAskQuestionResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SetRunningPlanRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SetRunningPlanResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocExtractionTaskAdvanceRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocExtractionTaskRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocExtractionTaskResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocParsingTaskAdvanceRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocParsingTaskRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocParsingTaskResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobAdvanceRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitDocumentAnalyzeJobResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitVLExtractionTaskAdvanceRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitVLExtractionTaskRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\SubmitVLExtractionTaskResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EnergyExpertExternal extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('energyexpertexternal', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Get Document Results.
     *
     * @remarks
     * Users obtain real-time VL results by uploading a document URL.
     *
     * @param request - AnalyzeVlRealtimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnalyzeVlRealtimeResponse
     *
     * @param AnalyzeVlRealtimeRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return AnalyzeVlRealtimeResponse
     */
    public function analyzeVlRealtimeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileUrl) {
            @$query['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->language) {
            @$query['language'] = $request->language;
        }

        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AnalyzeVlRealtime',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aidoc/document/analyzeVlRealtime',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AnalyzeVlRealtimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Document Results.
     *
     * @remarks
     * Users obtain real-time VL results by uploading a document URL.
     *
     * @param request - AnalyzeVlRealtimeRequest
     *
     * @returns AnalyzeVlRealtimeResponse
     *
     * @param AnalyzeVlRealtimeRequest $request
     *
     * @return AnalyzeVlRealtimeResponse
     */
    public function analyzeVlRealtime($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->analyzeVlRealtimeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AnalyzeVlRealtimeAdvanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return AnalyzeVlRealtimeResponse
     */
    public function analyzeVlRealtimeAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'energyExpertExternal',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $analyzeVlRealtimeReq = new AnalyzeVlRealtimeRequest([]);
        Utils::convert($request, $analyzeVlRealtimeReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $analyzeVlRealtimeReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->analyzeVlRealtimeWithOptions($analyzeVlRealtimeReq, $headers, $runtime);
    }

    /**
     * 策略执行状态反馈.
     *
     * @param request - BatchSaveInstructionStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSaveInstructionStatusResponse
     *
     * @param BatchSaveInstructionStatusRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchSaveInstructionStatusResponse
     */
    public function batchSaveInstructionStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->factoryId) {
            @$body['factoryId'] = $request->factoryId;
        }

        if (null !== $request->pKey) {
            @$body['pKey'] = $request->pKey;
        }

        if (null !== $request->statusList) {
            @$body['statusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSaveInstructionStatus',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/hvac/batchSaveInstructionStatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchSaveInstructionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 策略执行状态反馈.
     *
     * @param request - BatchSaveInstructionStatusRequest
     *
     * @returns BatchSaveInstructionStatusResponse
     *
     * @param BatchSaveInstructionStatusRequest $request
     *
     * @return BatchSaveInstructionStatusResponse
     */
    public function batchSaveInstructionStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchSaveInstructionStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量设置空调站点运行计划.
     *
     * @param request - BatchUpdateSystemRunningPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateSystemRunningPlanResponse
     *
     * @param BatchUpdateSystemRunningPlanRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchUpdateSystemRunningPlanResponse
     */
    public function batchUpdateSystemRunningPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->controlType) {
            @$body['controlType'] = $request->controlType;
        }

        if (null !== $request->dateType) {
            @$body['dateType'] = $request->dateType;
        }

        if (null !== $request->earliestStartupTime) {
            @$body['earliestStartupTime'] = $request->earliestStartupTime;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->factoryId) {
            @$body['factoryId'] = $request->factoryId;
        }

        if (null !== $request->latestShutdownTime) {
            @$body['latestShutdownTime'] = $request->latestShutdownTime;
        }

        if (null !== $request->maxCarbonDioxide) {
            @$body['maxCarbonDioxide'] = $request->maxCarbonDioxide;
        }

        if (null !== $request->maxTem) {
            @$body['maxTem'] = $request->maxTem;
        }

        if (null !== $request->minTem) {
            @$body['minTem'] = $request->minTem;
        }

        if (null !== $request->seasonMode) {
            @$body['seasonMode'] = $request->seasonMode;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->systemId) {
            @$body['systemId'] = $request->systemId;
        }

        if (null !== $request->workingEndTime) {
            @$body['workingEndTime'] = $request->workingEndTime;
        }

        if (null !== $request->workingStartTime) {
            @$body['workingStartTime'] = $request->workingStartTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateSystemRunningPlan',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/hvac/batchUpdateSystemRunningPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchUpdateSystemRunningPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量设置空调站点运行计划.
     *
     * @param request - BatchUpdateSystemRunningPlanRequest
     *
     * @returns BatchUpdateSystemRunningPlanResponse
     *
     * @param BatchUpdateSystemRunningPlanRequest $request
     *
     * @return BatchUpdateSystemRunningPlanResponse
     */
    public function batchUpdateSystemRunningPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUpdateSystemRunningPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Knowledge Base Q\\&A.
     *
     * @remarks
     * - The interface provides Q&A services within the scope of the selected directory in the session.
     * - The sessionId information is obtained through GetChatSessionList.
     * - You can also create a new session via the CreateChatSession interface.
     *
     * @param request - ChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->question) {
            @$body['question'] = $request->question;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Knowledge Base Q\\&A.
     *
     * @remarks
     * - The interface provides Q&A services within the scope of the selected directory in the session.
     * - The sessionId information is obtained through GetChatSessionList.
     * - You can also create a new session via the CreateChatSession interface.
     *
     * @param request - ChatRequest
     *
     * @returns ChatResponse
     *
     * @param ChatRequest $request
     *
     * @return ChatResponse
     */
    public function chat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->chatWithOptions($request, $headers, $runtime);
    }

    /**
     * Create Q&A Window.
     *
     * @param request - CreateChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatSessionResponse
     *
     * @param CreateChatSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->folderId) {
            @$body['folderId'] = $request->folderId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChatSession',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/chat/session/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Q&A Window.
     *
     * @param request - CreateChatSessionRequest
     *
     * @returns CreateChatSessionResponse
     *
     * @param CreateChatSessionRequest $request
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * 编辑禁用设备.
     *
     * @param request - EditProhibitedDevicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditProhibitedDevicesResponse
     *
     * @param EditProhibitedDevicesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return EditProhibitedDevicesResponse
     */
    public function editProhibitedDevicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->factoryId) {
            @$body['factoryId'] = $request->factoryId;
        }

        if (null !== $request->hvacDeviceConfigVOList) {
            @$body['hvacDeviceConfigVOList'] = $request->hvacDeviceConfigVOList;
        }

        if (null !== $request->systemId) {
            @$body['systemId'] = $request->systemId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditProhibitedDevices',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/hvac/editProhibitedDevices',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EditProhibitedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑禁用设备.
     *
     * @param request - EditProhibitedDevicesRequest
     *
     * @returns EditProhibitedDevicesResponse
     *
     * @param EditProhibitedDevicesRequest $request
     *
     * @return EditProhibitedDevicesResponse
     */
    public function editProhibitedDevices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->editProhibitedDevicesWithOptions($request, $headers, $runtime);
    }

    /**
     * 编辑不利区设备.
     *
     * @param request - EditUnfavorableAreaDevicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditUnfavorableAreaDevicesResponse
     *
     * @param EditUnfavorableAreaDevicesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return EditUnfavorableAreaDevicesResponse
     */
    public function editUnfavorableAreaDevicesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->factoryId) {
            @$body['factoryId'] = $request->factoryId;
        }

        if (null !== $request->hvacDeviceConfigVOList) {
            @$body['hvacDeviceConfigVOList'] = $request->hvacDeviceConfigVOList;
        }

        if (null !== $request->systemId) {
            @$body['systemId'] = $request->systemId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditUnfavorableAreaDevices',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/hvac/editUnfavorableAreaDevices',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EditUnfavorableAreaDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑不利区设备.
     *
     * @param request - EditUnfavorableAreaDevicesRequest
     *
     * @returns EditUnfavorableAreaDevicesResponse
     *
     * @param EditUnfavorableAreaDevicesRequest $request
     *
     * @return EditUnfavorableAreaDevicesResponse
     */
    public function editUnfavorableAreaDevices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->editUnfavorableAreaDevicesWithOptions($request, $headers, $runtime);
    }

    /**
     * Generate a report of the specified carbon footprint.
     *
     * @remarks
     * Given a product ID, this API initiates a task to calculate the carbon footprint result for the corresponding product. The task\\"s status can be checked using the `IsCompleted` API. Following the generation of results, other result inquiry APIs can be accessed for display content.
     *
     * @param request - GenerateResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateResultResponse
     *
     * @param GenerateResultRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateResultResponse
     */
    public function generateResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateResult',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/generate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate a report of the specified carbon footprint.
     *
     * @remarks
     * Given a product ID, this API initiates a task to calculate the carbon footprint result for the corresponding product. The task\\"s status can be checked using the `IsCompleted` API. Following the generation of results, other result inquiry APIs can be accessed for display content.
     *
     * @param request - GenerateResultRequest
     *
     * @returns GenerateResultResponse
     *
     * @param GenerateResultRequest $request
     *
     * @return GenerateResultResponse
     */
    public function generateResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateResultWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to obtain electrical constitute analysis data.
     *
     * @param request - GetAreaElecConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAreaElecConstituteResponse
     *
     * @param GetAreaElecConstituteRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetAreaElecConstituteResponse
     */
    public function getAreaElecConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAreaElecConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/elec/area',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAreaElecConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain electrical constitute analysis data.
     *
     * @param request - GetAreaElecConstituteRequest
     *
     * @returns GetAreaElecConstituteResponse
     *
     * @param GetAreaElecConstituteRequest $request
     *
     * @return GetAreaElecConstituteResponse
     */
    public function getAreaElecConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAreaElecConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * Get trends in carbon emissions.
     *
     * @param request - GetCarbonEmissionTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCarbonEmissionTrendResponse
     *
     * @param GetCarbonEmissionTrendRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetCarbonEmissionTrendResponse
     */
    public function getCarbonEmissionTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->moduleCode) {
            @$body['moduleCode'] = $request->moduleCode;
        }

        if (null !== $request->moduleType) {
            @$body['moduleType'] = $request->moduleType;
        }

        if (null !== $request->trendType) {
            @$body['trendType'] = $request->trendType;
        }

        if (null !== $request->yearList) {
            @$body['yearList'] = $request->yearList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCarbonEmissionTrend',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/trend',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCarbonEmissionTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get trends in carbon emissions.
     *
     * @param request - GetCarbonEmissionTrendRequest
     *
     * @returns GetCarbonEmissionTrendResponse
     *
     * @param GetCarbonEmissionTrendRequest $request
     *
     * @return GetCarbonEmissionTrendResponse
     */
    public function getCarbonEmissionTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCarbonEmissionTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * Get Q&A folder List.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatFolderListResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetChatFolderListResponse
     */
    public function getChatFolderListWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetChatFolderList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/chat/folder/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChatFolderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Q&A folder List.
     *
     * @returns GetChatFolderListResponse
     *
     * @return GetChatFolderListResponse
     */
    public function getChatFolderList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatFolderListWithOptions($headers, $runtime);
    }

    /**
     * Retrieve the historical documents of a session.
     *
     * @remarks
     * - This API retrieves the list of historical documents within a session by passing in the session ID.
     * - The sessionId information is obtained through GetChatSessionList.
     * - A new session can also be created using the CreateChatSession interface.
     *
     * @param request - GetChatListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatListResponse
     *
     * @param GetChatListRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetChatListResponse
     */
    public function getChatListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetChatList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/chat/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChatListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the historical documents of a session.
     *
     * @remarks
     * - This API retrieves the list of historical documents within a session by passing in the session ID.
     * - The sessionId information is obtained through GetChatSessionList.
     * - A new session can also be created using the CreateChatSession interface.
     *
     * @param request - GetChatListRequest
     *
     * @returns GetChatListResponse
     *
     * @param GetChatListRequest $request
     *
     * @return GetChatListResponse
     */
    public function getChatList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatListWithOptions($request, $headers, $runtime);
    }

    /**
     * Get Q&A Session List.
     *
     * @param request - GetChatSessionListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatSessionListResponse
     *
     * @param GetChatSessionListRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetChatSessionListResponse
     */
    public function getChatSessionListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['currentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetChatSessionList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/chat/session/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChatSessionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Q&A Session List.
     *
     * @param request - GetChatSessionListRequest
     *
     * @returns GetChatSessionListResponse
     *
     * @param GetChatSessionListRequest $request
     *
     * @return GetChatSessionListResponse
     */
    public function getChatSessionList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatSessionListWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to obtain the details category of a data item.
     *
     * @remarks
     * - obtain data item detail list under the current enterprise.
     *
     * @param request - GetDataItemListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataItemListResponse
     *
     * @param GetDataItemListRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDataItemListResponse
     */
    public function getDataItemListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDataItemList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/data/item/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDataItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain the details category of a data item.
     *
     * @remarks
     * - obtain data item detail list under the current enterprise.
     *
     * @param request - GetDataItemListRequest
     *
     * @returns GetDataItemListResponse
     *
     * @param GetDataItemListRequest $request
     *
     * @return GetDataItemListResponse
     */
    public function getDataItemList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataItemListWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain the data quality evaluation results DQR and DQI.
     *
     * @remarks
     * This API returns the data quality evaluation results based on the user-provided product ID. It\\"s useful for understanding the data quality of the carbon emission factors for each inventory of the product.
     *
     * @param request - GetDataQualityAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataQualityAnalysisResponse
     *
     * @param GetDataQualityAnalysisRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetDataQualityAnalysisResponse
     */
    public function getDataQualityAnalysisWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->dataQualityEvaluationType) {
            @$body['dataQualityEvaluationType'] = $request->dataQualityEvaluationType;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDataQualityAnalysis',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/data/quality/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDataQualityAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the data quality evaluation results DQR and DQI.
     *
     * @remarks
     * This API returns the data quality evaluation results based on the user-provided product ID. It\\"s useful for understanding the data quality of the carbon emission factors for each inventory of the product.
     *
     * @param request - GetDataQualityAnalysisRequest
     *
     * @returns GetDataQualityAnalysisResponse
     *
     * @param GetDataQualityAnalysisRequest $request
     *
     * @return GetDataQualityAnalysisResponse
     */
    public function getDataQualityAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataQualityAnalysisWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a device at a site that is activated by using an Alibaba Cloud account.
     *
     * @remarks
     *   You can call this operation to query the parameters of a data collection device based on the device ID. If the verification is passed, the device parameters are returned. If the verification fails, a null value is returned.
     * *   You can query the parameters of a single device by day. If data of the device does not exist, a null value is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through  <props="china">[official website](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[official website](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *
     * @param request - GetDeviceInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceInfoResponse
     *
     * @param GetDeviceInfoRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeviceInfoResponse
     */
    public function getDeviceInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['deviceId'] = $request->deviceId;
        }

        if (null !== $request->ds) {
            @$query['ds'] = $request->ds;
        }

        if (null !== $request->factoryId) {
            @$query['factoryId'] = $request->factoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceInfo',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/external/getDeviceInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a device at a site that is activated by using an Alibaba Cloud account.
     *
     * @remarks
     *   You can call this operation to query the parameters of a data collection device based on the device ID. If the verification is passed, the device parameters are returned. If the verification fails, a null value is returned.
     * *   You can query the parameters of a single device by day. If data of the device does not exist, a null value is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through  <props="china">[official website](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[official website](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *
     * @param request - GetDeviceInfoRequest
     *
     * @returns GetDeviceInfoResponse
     *
     * @param GetDeviceInfoRequest $request
     *
     * @return GetDeviceInfoResponse
     */
    public function getDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the devices of a site that is activated by using an Alibaba Cloud account.
     *
     * @remarks
     *   You can query the information about data collection devices of a site based on the ID of the site. If the verification is passed, the information about the devices of the site is returned. If the verification fails, a null value is returned.
     * *   Virtual meters at the site are not returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through  <props="china">[official website](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[official website](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *
     * @param request - GetDeviceListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceListResponse
     *
     * @param GetDeviceListRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeviceListResponse
     */
    public function getDeviceListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->factoryId) {
            @$query['factoryId'] = $request->factoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/external/getDeviceList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeviceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the devices of a site that is activated by using an Alibaba Cloud account.
     *
     * @remarks
     *   You can query the information about data collection devices of a site based on the ID of the site. If the verification is passed, the information about the devices of the site is returned. If the verification fails, a null value is returned.
     * *   Virtual meters at the site are not returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through  <props="china">[official website](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[official website](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *
     * @param request - GetDeviceListRequest
     *
     * @returns GetDeviceListResponse
     *
     * @param GetDeviceListRequest $request
     *
     * @return GetDeviceListResponse
     */
    public function getDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceListWithOptions($request, $headers, $runtime);
    }

    /**
     * For Querying Information Extraction Result.
     * The input parameter taskId is obtained from the taskId returned by the interfaces SubmitDocExtractionTaskAdvance or SubmitDocExtractionTask.
     * The query results can reflect one of three statuses: processing, successfully completed, or failed.
     *
     * @param request - GetDocExtractionResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocExtractionResultResponse
     *
     * @param GetDocExtractionResultRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetDocExtractionResultResponse
     */
    public function getDocExtractionResultWithOptions($request, $headers, $runtime)
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
            'action' => 'GetDocExtractionResult',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/getDocExtractionResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocExtractionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For Querying Information Extraction Result.
     * The input parameter taskId is obtained from the taskId returned by the interfaces SubmitDocExtractionTaskAdvance or SubmitDocExtractionTask.
     * The query results can reflect one of three statuses: processing, successfully completed, or failed.
     *
     * @param request - GetDocExtractionResultRequest
     *
     * @returns GetDocExtractionResultResponse
     *
     * @param GetDocExtractionResultRequest $request
     *
     * @return GetDocExtractionResultResponse
     */
    public function getDocExtractionResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocExtractionResultWithOptions($request, $headers, $runtime);
    }

    /**
     * For Querying Document Parsing Results.
     * The input parameter taskId is obtained from the taskId returned by the interfaces SubmitDocParsingTaskAdvance or SubmitDocParsingTask.
     * The query results can be one of three statuses: processing, successful, or failed.
     *
     * @param request - GetDocParsingResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocParsingResultResponse
     *
     * @param GetDocParsingResultRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetDocParsingResultResponse
     */
    public function getDocParsingResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->returnFormat) {
            @$body['returnFormat'] = $request->returnFormat;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocParsingResult',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/getDocParsingResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocParsingResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For Querying Document Parsing Results.
     * The input parameter taskId is obtained from the taskId returned by the interfaces SubmitDocParsingTaskAdvance or SubmitDocParsingTask.
     * The query results can be one of three statuses: processing, successful, or failed.
     *
     * @param request - GetDocParsingResultRequest
     *
     * @returns GetDocParsingResultResponse
     *
     * @param GetDocParsingResultRequest $request
     *
     * @return GetDocParsingResultResponse
     */
    public function getDocParsingResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocParsingResultWithOptions($request, $headers, $runtime);
    }

    /**
     * [Important] The api is no longer maintained, please use GetDocExtractionResult, GetVLExtractionResult to get the extraction results.
     *
     * @param request - GetDocumentAnalyzeResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentAnalyzeResultResponse
     *
     * @param GetDocumentAnalyzeResultRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDocumentAnalyzeResultResponse
     */
    public function getDocumentAnalyzeResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['jobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentAnalyzeResult',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aidoc/document/getDocumentAnalyzeResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentAnalyzeResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * [Important] The api is no longer maintained, please use GetDocExtractionResult, GetVLExtractionResult to get the extraction results.
     *
     * @param request - GetDocumentAnalyzeResultRequest
     *
     * @returns GetDocumentAnalyzeResultResponse
     *
     * @param GetDocumentAnalyzeResultRequest $request
     *
     * @return GetDocumentAnalyzeResultResponse
     */
    public function getDocumentAnalyzeResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentAnalyzeResultWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to obtain power composition analysis data.
     *
     * @param request - GetElecConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetElecConstituteResponse
     *
     * @param GetElecConstituteRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetElecConstituteResponse
     */
    public function getElecConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetElecConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/elec/constitute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetElecConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain power composition analysis data.
     *
     * @param request - GetElecConstituteRequest
     *
     * @returns GetElecConstituteResponse
     *
     * @param GetElecConstituteRequest $request
     *
     * @return GetElecConstituteResponse
     */
    public function getElecConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElecConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to obtain power trend analysis data.
     *
     * @param request - GetElecTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetElecTrendResponse
     *
     * @param GetElecTrendRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetElecTrendResponse
     */
    public function getElecTrendWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->yearList) {
            @$body['yearList'] = $request->yearList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetElecTrend',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/elec/trend',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetElecTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain power trend analysis data.
     *
     * @param request - GetElecTrendRequest
     *
     * @returns GetElecTrendResponse
     *
     * @param GetElecTrendRequest $request
     *
     * @return GetElecTrendResponse
     */
    public function getElecTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getElecTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain the emission source composition.
     *
     * @param request - GetEmissionSourceConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmissionSourceConstituteResponse
     *
     * @param GetEmissionSourceConstituteRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetEmissionSourceConstituteResponse
     */
    public function getEmissionSourceConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->moduleCode) {
            @$body['moduleCode'] = $request->moduleCode;
        }

        if (null !== $request->moduleType) {
            @$body['moduleType'] = $request->moduleType;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEmissionSourceConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/constitute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmissionSourceConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the emission source composition.
     *
     * @param request - GetEmissionSourceConstituteRequest
     *
     * @returns GetEmissionSourceConstituteResponse
     *
     * @param GetEmissionSourceConstituteRequest $request
     *
     * @return GetEmissionSourceConstituteResponse
     */
    public function getEmissionSourceConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmissionSourceConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * Get a summary of carbon emissions.
     *
     * @param request - GetEmissionSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEmissionSummaryResponse
     *
     * @param GetEmissionSummaryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetEmissionSummaryResponse
     */
    public function getEmissionSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->moduleCode) {
            @$body['moduleCode'] = $request->moduleCode;
        }

        if (null !== $request->moduleType) {
            @$body['moduleType'] = $request->moduleType;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEmissionSummary',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/summary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEmissionSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get a summary of carbon emissions.
     *
     * @param request - GetEmissionSummaryRequest
     *
     * @returns GetEmissionSummaryResponse
     *
     * @param GetEmissionSummaryRequest $request
     *
     * @return GetEmissionSummaryResponse
     */
    public function getEmissionSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEmissionSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * Gets the result details of the environmental impact category.
     *
     * @remarks
     * This API returns the emission amounts for various environmental impact categories at different levels for the given product ID. It helps understand the emission quantities for different environmental impact categories and inventories of the product.
     *
     * @param request - GetEpdInventoryConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEpdInventoryConstituteResponse
     *
     * @param GetEpdInventoryConstituteRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetEpdInventoryConstituteResponse
     */
    public function getEpdInventoryConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEpdInventoryConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/epd/inventory/constitute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEpdInventoryConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the result details of the environmental impact category.
     *
     * @remarks
     * This API returns the emission amounts for various environmental impact categories at different levels for the given product ID. It helps understand the emission quantities for different environmental impact categories and inventories of the product.
     *
     * @param request - GetEpdInventoryConstituteRequest
     *
     * @returns GetEpdInventoryConstituteResponse
     *
     * @param GetEpdInventoryConstituteRequest $request
     *
     * @return GetEpdInventoryConstituteResponse
     */
    public function getEpdInventoryConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEpdInventoryConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain the total amount of emissions for various environmental impacts.
     *
     * @remarks
     * This API takes a product ID from the user and returns the summary of environmental impact generated for the product. This info helps understand the overall emissions for different environmental impact categories of the product.
     *
     * @param request - GetEpdSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEpdSummaryResponse
     *
     * @param GetEpdSummaryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetEpdSummaryResponse
     */
    public function getEpdSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEpdSummary',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/epd/summary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEpdSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the total amount of emissions for various environmental impacts.
     *
     * @remarks
     * This API takes a product ID from the user and returns the summary of environmental impact generated for the product. This info helps understand the overall emissions for different environmental impact categories of the product.
     *
     * @param request - GetEpdSummaryRequest
     *
     * @returns GetEpdSummaryResponse
     *
     * @param GetEpdSummaryRequest $request
     *
     * @return GetEpdSummaryResponse
     */
    public function getEpdSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEpdSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the list of product carbon footprints.
     *
     * @remarks
     * With user-specified parameters such as enterprise code, current page, and page size, this API returns a list of matching product carbon footprints (or supply chain carbon footprints), including product names and product IDs. The product ID can be used as input parameters in other APIs to get the corresponding product\\"s detailed information.
     *
     * @param request - GetFootprintListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFootprintListResponse
     *
     * @param GetFootprintListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetFootprintListResponse
     */
    public function getFootprintListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->currentPage) {
            @$body['currentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFootprintList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/product/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFootprintListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of product carbon footprints.
     *
     * @remarks
     * With user-specified parameters such as enterprise code, current page, and page size, this API returns a list of matching product carbon footprints (or supply chain carbon footprints), including product names and product IDs. The product ID can be used as input parameters in other APIs to get the corresponding product\\"s detailed information.
     *
     * @param request - GetFootprintListRequest
     *
     * @returns GetFootprintListResponse
     *
     * @param GetFootprintListRequest $request
     *
     * @return GetFootprintListResponse
     */
    public function getFootprintList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFootprintListWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to obtain gas composition analysis.
     *
     * @param request - GetGasConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGasConstituteResponse
     *
     * @param GetGasConstituteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetGasConstituteResponse
     */
    public function getGasConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->moduleCode) {
            @$body['moduleCode'] = $request->moduleCode;
        }

        if (null !== $request->moduleType) {
            @$body['moduleType'] = $request->moduleType;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGasConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/gas/constitute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGasConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain gas composition analysis.
     *
     * @param request - GetGasConstituteRequest
     *
     * @returns GetGasConstituteResponse
     *
     * @param GetGasConstituteRequest $request
     *
     * @return GetGasConstituteResponse
     */
    public function getGasConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGasConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * obtain the active carbon reduction ranking list.
     *
     * @remarks
     * This interface returns a list of proactive carbon reduction information given product ID. It\\"s used to understand the carbon reduction efforts at various levels of the product.
     *
     * @param request - GetGwpBenchmarkListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGwpBenchmarkListResponse
     *
     * @param GetGwpBenchmarkListRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetGwpBenchmarkListResponse
     */
    public function getGwpBenchmarkListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGwpBenchmarkList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/gwp/benchmark/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGwpBenchmarkListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * obtain the active carbon reduction ranking list.
     *
     * @remarks
     * This interface returns a list of proactive carbon reduction information given product ID. It\\"s used to understand the carbon reduction efforts at various levels of the product.
     *
     * @param request - GetGwpBenchmarkListRequest
     *
     * @returns GetGwpBenchmarkListResponse
     *
     * @param GetGwpBenchmarkListRequest $request
     *
     * @return GetGwpBenchmarkListResponse
     */
    public function getGwpBenchmarkList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpBenchmarkListWithOptions($request, $headers, $runtime);
    }

    /**
     * This API is to obtain the total amount of active carbon reduction.
     *
     * @remarks
     * The API takes a product ID and returns data on the carbon emissions reduction along with a list of the top four contributors to carbon reduction. This info helps understand the total carbon reduction of the product and its main sources.
     *
     * @param request - GetGwpBenchmarkSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGwpBenchmarkSummaryResponse
     *
     * @param GetGwpBenchmarkSummaryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetGwpBenchmarkSummaryResponse
     */
    public function getGwpBenchmarkSummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGwpBenchmarkSummary',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/gwp/benchmark/summary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGwpBenchmarkSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is to obtain the total amount of active carbon reduction.
     *
     * @remarks
     * The API takes a product ID and returns data on the carbon emissions reduction along with a list of the top four contributors to carbon reduction. This info helps understand the total carbon reduction of the product and its main sources.
     *
     * @param request - GetGwpBenchmarkSummaryRequest
     *
     * @returns GetGwpBenchmarkSummaryResponse
     *
     * @param GetGwpBenchmarkSummaryRequest $request
     *
     * @return GetGwpBenchmarkSummaryResponse
     */
    public function getGwpBenchmarkSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpBenchmarkSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *
     * @remarks
     * Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *
     * @param request - GetGwpInventoryConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGwpInventoryConstituteResponse
     *
     * @param GetGwpInventoryConstituteRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetGwpInventoryConstituteResponse
     */
    public function getGwpInventoryConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGwpInventoryConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/gwp/inventory/constitute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGwpInventoryConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *
     * @remarks
     * Used to obtain the carbon emission composition analysis of a specified product. Carbon emission composition analysis includes two analysis dimensions: inventory and type. In the rendering effect, including a hierarchical list and pie chart.
     *
     * @param request - GetGwpInventoryConstituteRequest
     *
     * @returns GetGwpInventoryConstituteResponse
     *
     * @param GetGwpInventoryConstituteRequest $request
     *
     * @return GetGwpInventoryConstituteResponse
     */
    public function getGwpInventoryConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpInventoryConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * This API is used to obtain the total carbon footprint of a product and the top four types of carbon footprint contribution.
     *
     * @remarks
     * Returns the total carbon footprint data for the user-specified product ID, along with details on the top four contributors to the carbon footprint, helping to understand the overall carbon footprint and its main components.
     *
     * @param request - GetGwpInventorySummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGwpInventorySummaryResponse
     *
     * @param GetGwpInventorySummaryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetGwpInventorySummaryResponse
     */
    public function getGwpInventorySummaryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGwpInventorySummary',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/gwp/inventory/summary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGwpInventorySummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is used to obtain the total carbon footprint of a product and the top four types of carbon footprint contribution.
     *
     * @remarks
     * Returns the total carbon footprint data for the user-specified product ID, along with details on the top four contributors to the carbon footprint, helping to understand the overall carbon footprint and its main components.
     *
     * @param request - GetGwpInventorySummaryRequest
     *
     * @returns GetGwpInventorySummaryResponse
     *
     * @param GetGwpInventorySummaryRequest $request
     *
     * @return GetGwpInventorySummaryResponse
     */
    public function getGwpInventorySummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGwpInventorySummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * Get the list of emissions in descending order under the specified environmental impact (methodType), specified aggregate level (group), and specified calculation mode (emissionType).
     *
     * @remarks
     * This interface retrieves a descending order list of emissions for a specified product ID, environmental impact method, group level, and calculation method. It\\"s used to understand various environmental impact emission scenarios.
     *
     * @param request - GetInventoryListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInventoryListResponse
     *
     * @param GetInventoryListRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetInventoryListResponse
     */
    public function getInventoryListWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->emissionType) {
            @$body['emissionType'] = $request->emissionType;
        }

        if (null !== $request->group) {
            @$body['group'] = $request->group;
        }

        if (null !== $request->methodType) {
            @$body['methodType'] = $request->methodType;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInventoryList',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/inventory/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInventoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of emissions in descending order under the specified environmental impact (methodType), specified aggregate level (group), and specified calculation mode (emissionType).
     *
     * @remarks
     * This interface retrieves a descending order list of emissions for a specified product ID, environmental impact method, group level, and calculation method. It\\"s used to understand various environmental impact emission scenarios.
     *
     * @param request - GetInventoryListRequest
     *
     * @returns GetInventoryListResponse
     *
     * @param GetInventoryListRequest $request
     *
     * @return GetInventoryListResponse
     */
    public function getInventoryList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInventoryListWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the organizations and sites that are activated by using an Alibaba Cloud account. You cannot call this operation to query the organizations or sites that have not been activated in the console.
     *
     * @remarks
     *   If an activated site exists, the information about the site and the organization to which the site belongs is returned. If no activated site exists, null is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through  <props="china">[official website](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[official website](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrgAndFactoryResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOrgAndFactoryResponse
     */
    public function getOrgAndFactoryWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOrgAndFactory',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/external/getOrgAndFactory',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrgAndFactoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the organizations and sites that are activated by using an Alibaba Cloud account. You cannot call this operation to query the organizations or sites that have not been activated in the console.
     *
     * @remarks
     *   If an activated site exists, the information about the site and the organization to which the site belongs is returned. If no activated site exists, null is returned.
     * - By current, endpoint only supports Hangzhou: `energyexpertexternal.cn-hangzhou.aliyuncs.com`.
     * - To use this API, you need to be added to the whitelist. Please contact us through  <props="china">[official website](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)
     * <props="intl">[official website](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en) to apply for whitelist activation.
     *
     * @returns GetOrgAndFactoryResponse
     *
     * @return GetOrgAndFactoryResponse
     */
    public function getOrgAndFactory()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgAndFactoryWithOptions($headers, $runtime);
    }

    /**
     * This interface is used to obtain carbon inventory organization analysis data.
     *
     * @param request - GetOrgConstituteRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrgConstituteResponse
     *
     * @param GetOrgConstituteRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetOrgConstituteResponse
     */
    public function getOrgConstituteWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->moduleCode) {
            @$body['moduleCode'] = $request->moduleCode;
        }

        if (null !== $request->moduleType) {
            @$body['moduleType'] = $request->moduleType;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOrgConstitute',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/analysis/org',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrgConstituteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain carbon inventory organization analysis data.
     *
     * @param request - GetOrgConstituteRequest
     *
     * @returns GetOrgConstituteResponse
     *
     * @param GetOrgConstituteRequest $request
     *
     * @return GetOrgConstituteResponse
     */
    public function getOrgConstitute($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgConstituteWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains the oss address of the Product Carbon footprint Report.
     *
     * @remarks
     * With the user-specified product ID, this interface retrieves detailed information and download links for previously generated PCR reports. To use it, two conditions must be met: 1) the result has already been generated; 2) the PCR report has been created.
     *
     * @param request - GetPcrInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPcrInfoResponse
     *
     * @param GetPcrInfoRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPcrInfoResponse
     */
    public function getPcrInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPcrInfo',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/pcr/detail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPcrInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the oss address of the Product Carbon footprint Report.
     *
     * @remarks
     * With the user-specified product ID, this interface retrieves detailed information and download links for previously generated PCR reports. To use it, two conditions must be met: 1) the result has already been generated; 2) the PCR report has been created.
     *
     * @param request - GetPcrInfoRequest
     *
     * @returns GetPcrInfoResponse
     *
     * @param GetPcrInfoRequest $request
     *
     * @return GetPcrInfoResponse
     */
    public function getPcrInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPcrInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Get carbon reduction recommendations.
     *
     * @remarks
     * This API returns carbon reduction proposals based on the product ID. It\\"s useful for understanding optimization tips to reduce the carbon emissions associated with a product.
     *
     * @param request - GetReductionProposalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReductionProposalResponse
     *
     * @param GetReductionProposalRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetReductionProposalResponse
     */
    public function getReductionProposalWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->dataQualityEvaluationType) {
            @$body['dataQualityEvaluationType'] = $request->dataQualityEvaluationType;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetReductionProposal',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/reduction/proposal',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReductionProposalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get carbon reduction recommendations.
     *
     * @remarks
     * This API returns carbon reduction proposals based on the product ID. It\\"s useful for understanding optimization tips to reduce the carbon emissions associated with a product.
     *
     * @param request - GetReductionProposalRequest
     *
     * @returns GetReductionProposalResponse
     *
     * @param GetReductionProposalRequest $request
     *
     * @return GetReductionProposalResponse
     */
    public function getReductionProposal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReductionProposalWithOptions($request, $headers, $runtime);
    }

    /**
     * For Querying Qwen-VL Model Information Extraction Results.
     * The input parameter taskId is obtained from the taskId returned by the interfaces SubmitVLExtractionTask or SubmitVLExtractionTaskAdvance.
     * The query results can be in one of three statuses: processing, successfully completed, or failed.
     *
     * @param request - GetVLExtractionResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVLExtractionResultResponse
     *
     * @param GetVLExtractionResultRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetVLExtractionResultResponse
     */
    public function getVLExtractionResultWithOptions($request, $headers, $runtime)
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
            'action' => 'GetVLExtractionResult',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/getVLExtractionResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVLExtractionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For Querying Qwen-VL Model Information Extraction Results.
     * The input parameter taskId is obtained from the taskId returned by the interfaces SubmitVLExtractionTask or SubmitVLExtractionTaskAdvance.
     * The query results can be in one of three statuses: processing, successfully completed, or failed.
     *
     * @param request - GetVLExtractionResultRequest
     *
     * @returns GetVLExtractionResultResponse
     *
     * @param GetVLExtractionResultRequest $request
     *
     * @return GetVLExtractionResultResponse
     */
    public function getVLExtractionResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVLExtractionResultWithOptions($request, $headers, $runtime);
    }

    /**
     * Check if the result generation is complete.
     *
     * @remarks
     * This API checks the completion status of generating a report. It should be used before calling other result APIs, as they will only display content once the report generation is complete.
     *
     * @param request - IsCompletedRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsCompletedResponse
     *
     * @param IsCompletedRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return IsCompletedResponse
     */
    public function isCompletedWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->productType) {
            @$body['productType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IsCompleted',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/footprint/result/completed',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IsCompletedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if the result generation is complete.
     *
     * @remarks
     * This API checks the completion status of generating a report. It should be used before calling other result APIs, as they will only display content once the report generation is complete.
     *
     * @param request - IsCompletedRequest
     *
     * @returns IsCompletedResponse
     *
     * @param IsCompletedRequest $request
     *
     * @return IsCompletedResponse
     */
    public function isCompleted($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->isCompletedWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to push device measuring point data, such as power meter voltage and other data.
     *
     * @param request - PushDeviceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushDeviceDataResponse
     *
     * @param PushDeviceDataRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PushDeviceDataResponse
     */
    public function pushDeviceDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceType) {
            @$body['deviceType'] = $request->deviceType;
        }

        if (null !== $request->devices) {
            @$body['devices'] = $request->devices;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushDeviceData',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/data/increment/push',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushDeviceDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to push device measuring point data, such as power meter voltage and other data.
     *
     * @param request - PushDeviceDataRequest
     *
     * @returns PushDeviceDataResponse
     *
     * @param PushDeviceDataRequest $request
     *
     * @return PushDeviceDataResponse
     */
    public function pushDeviceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDeviceDataWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to push data items.
     *
     * @remarks
     * - This interface is used for individual data item data.
     * - Data items can link data to services such as carbon footprints and carbon inventories.
     * - Depending on the platform configuration, active data on a yearly and monthly basis is supported.
     *
     * @param request - PushItemDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushItemDataResponse
     *
     * @param PushItemDataRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PushItemDataResponse
     */
    public function pushItemDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->items) {
            @$body['items'] = $request->items;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushItemData',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/data/item/push',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PushItemDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to push data items.
     *
     * @remarks
     * - This interface is used for individual data item data.
     * - Data items can link data to services such as carbon footprints and carbon inventories.
     * - Depending on the platform configuration, active data on a yearly and monthly basis is supported.
     *
     * @param request - PushItemDataRequest
     *
     * @returns PushItemDataResponse
     *
     * @param PushItemDataRequest $request
     *
     * @return PushItemDataResponse
     */
    public function pushItemData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushItemDataWithOptions($request, $headers, $runtime);
    }

    /**
     * Recalculate carbon emissions.
     *
     * @remarks
     * - After uploading the data items, you need to call this interface to recalculate the carbon inventory data.
     *
     * @param request - RecalculateCarbonEmissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecalculateCarbonEmissionResponse
     *
     * @param RecalculateCarbonEmissionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RecalculateCarbonEmissionResponse
     */
    public function recalculateCarbonEmissionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->year) {
            @$body['year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecalculateCarbonEmission',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/emission/data/item/recalculate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RecalculateCarbonEmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recalculate carbon emissions.
     *
     * @remarks
     * - After uploading the data items, you need to call this interface to recalculate the carbon inventory data.
     *
     * @param request - RecalculateCarbonEmissionRequest
     *
     * @returns RecalculateCarbonEmissionResponse
     *
     * @param RecalculateCarbonEmissionRequest $request
     *
     * @return RecalculateCarbonEmissionResponse
     */
    public function recalculateCarbonEmission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recalculateCarbonEmissionWithOptions($request, $headers, $runtime);
    }

    /**
     * [Important] This api is no longer maintained, please use the Chat api.
     *
     * @param request - SendDocumentAskQuestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendDocumentAskQuestionResponse
     *
     * @param SendDocumentAskQuestionRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return SendDocumentAskQuestionResponse
     */
    public function sendDocumentAskQuestionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->folderId) {
            @$body['folderId'] = $request->folderId;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendDocumentAskQuestion',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aidoc/document/sendDocumentAskQuestion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SendDocumentAskQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * [Important] This api is no longer maintained, please use the Chat api.
     *
     * @param request - SendDocumentAskQuestionRequest
     *
     * @returns SendDocumentAskQuestionResponse
     *
     * @param SendDocumentAskQuestionRequest $request
     *
     * @return SendDocumentAskQuestionResponse
     */
    public function sendDocumentAskQuestion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendDocumentAskQuestionWithOptions($request, $headers, $runtime);
    }

    /**
     * 设置运行计划.
     *
     * @param request - SetRunningPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetRunningPlanResponse
     *
     * @param SetRunningPlanRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return SetRunningPlanResponse
     */
    public function setRunningPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->controlType) {
            @$body['controlType'] = $request->controlType;
        }

        if (null !== $request->dateType) {
            @$body['dateType'] = $request->dateType;
        }

        if (null !== $request->earliestStartupTime) {
            @$body['earliestStartupTime'] = $request->earliestStartupTime;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->factoryId) {
            @$body['factoryId'] = $request->factoryId;
        }

        if (null !== $request->latestShutdownTime) {
            @$body['latestShutdownTime'] = $request->latestShutdownTime;
        }

        if (null !== $request->maxCarbonDioxide) {
            @$body['maxCarbonDioxide'] = $request->maxCarbonDioxide;
        }

        if (null !== $request->maxTem) {
            @$body['maxTem'] = $request->maxTem;
        }

        if (null !== $request->minTem) {
            @$body['minTem'] = $request->minTem;
        }

        if (null !== $request->pKey) {
            @$body['pKey'] = $request->pKey;
        }

        if (null !== $request->seasonMode) {
            @$body['seasonMode'] = $request->seasonMode;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->statisticsTime) {
            @$body['statisticsTime'] = $request->statisticsTime;
        }

        if (null !== $request->systemId) {
            @$body['systemId'] = $request->systemId;
        }

        if (null !== $request->workingEndTime) {
            @$body['workingEndTime'] = $request->workingEndTime;
        }

        if (null !== $request->workingStartTime) {
            @$body['workingStartTime'] = $request->workingStartTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetRunningPlan',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/carbon/hvac/setRunningPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SetRunningPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置运行计划.
     *
     * @param request - SetRunningPlanRequest
     *
     * @returns SetRunningPlanResponse
     *
     * @param SetRunningPlanRequest $request
     *
     * @return SetRunningPlanResponse
     */
    public function setRunningPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setRunningPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Extracts key information from documents using user-defined Key-Value or prompt templates. A taskId is returned upon successful execution for retrieving extraction results via GetDocExtractionResult.
     * Supports:
     * URL Upload: SubmitDocExtractionTask
     * Local File Upload: SubmitDocExtractionTask.
     *
     * @param request - SubmitDocExtractionTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocExtractionTaskResponse
     *
     * @param SubmitDocExtractionTaskRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitDocExtractionTaskResponse
     */
    public function submitDocExtractionTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extractType) {
            @$query['extractType'] = $request->extractType;
        }

        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->folderId) {
            @$query['folderId'] = $request->folderId;
        }

        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDocExtractionTask',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/submitDocExtractionTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitDocExtractionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Extracts key information from documents using user-defined Key-Value or prompt templates. A taskId is returned upon successful execution for retrieving extraction results via GetDocExtractionResult.
     * Supports:
     * URL Upload: SubmitDocExtractionTask
     * Local File Upload: SubmitDocExtractionTask.
     *
     * @param request - SubmitDocExtractionTaskRequest
     *
     * @returns SubmitDocExtractionTaskResponse
     *
     * @param SubmitDocExtractionTaskRequest $request
     *
     * @return SubmitDocExtractionTaskResponse
     */
    public function submitDocExtractionTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDocExtractionTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitDocExtractionTaskAdvanceRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitDocExtractionTaskResponse
     */
    public function submitDocExtractionTaskAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'energyExpertExternal',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDocExtractionTaskReq = new SubmitDocExtractionTaskRequest([]);
        Utils::convert($request, $submitDocExtractionTaskReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocExtractionTaskReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocExtractionTaskWithOptions($submitDocExtractionTaskReq, $headers, $runtime);
    }

    /**
     * Parses text, tables, images, and more from documents. After execution, a taskId is returned for retrieving document parsing results via GetDocParsingResult.
     * Supports:
     * URL Upload: SubmitDocParsingTask
     * Local File Upload: SubmitDocParsingTaskAdvance.
     *
     * @param request - SubmitDocParsingTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocParsingTaskResponse
     *
     * @param SubmitDocParsingTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitDocParsingTaskResponse
     */
    public function submitDocParsingTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->folderId) {
            @$query['folderId'] = $request->folderId;
        }

        if (null !== $request->needAnalyzeImg) {
            @$query['needAnalyzeImg'] = $request->needAnalyzeImg;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDocParsingTask',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/submitDocParsingTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitDocParsingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Parses text, tables, images, and more from documents. After execution, a taskId is returned for retrieving document parsing results via GetDocParsingResult.
     * Supports:
     * URL Upload: SubmitDocParsingTask
     * Local File Upload: SubmitDocParsingTaskAdvance.
     *
     * @param request - SubmitDocParsingTaskRequest
     *
     * @returns SubmitDocParsingTaskResponse
     *
     * @param SubmitDocParsingTaskRequest $request
     *
     * @return SubmitDocParsingTaskResponse
     */
    public function submitDocParsingTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDocParsingTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitDocParsingTaskAdvanceRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitDocParsingTaskResponse
     */
    public function submitDocParsingTaskAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'energyExpertExternal',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDocParsingTaskReq = new SubmitDocParsingTaskRequest([]);
        Utils::convert($request, $submitDocParsingTaskReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocParsingTaskReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocParsingTaskWithOptions($submitDocParsingTaskReq, $headers, $runtime);
    }

    /**
     * [Important] The api is no longer maintained, please use the following api:
     * Document parsing using SubmitDocParsingTask.
     * Document extraction using SubmitVLExtractionTask, SubmitDocExtractionTask.
     *
     * @param request - SubmitDocumentAnalyzeJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocumentAnalyzeJobResponse
     *
     * @param SubmitDocumentAnalyzeJobRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitDocumentAnalyzeJobResponse
     */
    public function submitDocumentAnalyzeJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisType) {
            @$query['analysisType'] = $request->analysisType;
        }

        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->folderId) {
            @$query['folderId'] = $request->folderId;
        }

        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitDocumentAnalyzeJob',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/aidoc/document/submitDocumentAnalyzeJob',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitDocumentAnalyzeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * [Important] The api is no longer maintained, please use the following api:
     * Document parsing using SubmitDocParsingTask.
     * Document extraction using SubmitVLExtractionTask, SubmitDocExtractionTask.
     *
     * @param request - SubmitDocumentAnalyzeJobRequest
     *
     * @returns SubmitDocumentAnalyzeJobResponse
     *
     * @param SubmitDocumentAnalyzeJobRequest $request
     *
     * @return SubmitDocumentAnalyzeJobResponse
     */
    public function submitDocumentAnalyzeJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDocumentAnalyzeJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitDocumentAnalyzeJobAdvanceRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitDocumentAnalyzeJobResponse
     */
    public function submitDocumentAnalyzeJobAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'energyExpertExternal',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitDocumentAnalyzeJobReq = new SubmitDocumentAnalyzeJobRequest([]);
        Utils::convert($request, $submitDocumentAnalyzeJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitDocumentAnalyzeJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitDocumentAnalyzeJobWithOptions($submitDocumentAnalyzeJobReq, $headers, $runtime);
    }

    /**
     * Extracts key information from documents using KV templates or prompts with the Qwen-VL model, ideal for image extraction.
     * Supports:
     * URL Upload: SubmitVLExtractionTask.
     * Local File Upload: SubmitVLExtractionTaskAdvance.
     *
     * @param request - SubmitVLExtractionTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVLExtractionTaskResponse
     *
     * @param SubmitVLExtractionTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitVLExtractionTaskResponse
     */
    public function submitVLExtractionTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->folderId) {
            @$query['folderId'] = $request->folderId;
        }

        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVLExtractionTask',
            'version' => '2022-09-23',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/aidoc/document/submitVLExtractionTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitVLExtractionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Extracts key information from documents using KV templates or prompts with the Qwen-VL model, ideal for image extraction.
     * Supports:
     * URL Upload: SubmitVLExtractionTask.
     * Local File Upload: SubmitVLExtractionTaskAdvance.
     *
     * @param request - SubmitVLExtractionTaskRequest
     *
     * @returns SubmitVLExtractionTaskResponse
     *
     * @param SubmitVLExtractionTaskRequest $request
     *
     * @return SubmitVLExtractionTaskResponse
     */
    public function submitVLExtractionTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitVLExtractionTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitVLExtractionTaskAdvanceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitVLExtractionTaskResponse
     */
    public function submitVLExtractionTaskAdvance($request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'energyExpertExternal',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $submitVLExtractionTaskReq = new SubmitVLExtractionTaskRequest([]);
        Utils::convert($request, $submitVLExtractionTaskReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $submitVLExtractionTaskReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitVLExtractionTaskWithOptions($submitVLExtractionTaskReq, $headers, $runtime);
    }
}
