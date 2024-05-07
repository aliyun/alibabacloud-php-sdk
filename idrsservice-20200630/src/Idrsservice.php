<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrRealtimeRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrRealtimeResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrSentenceRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrSentenceResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrSentenceShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrTaskShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AssociateRoomRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AssociateRoomResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTaskGroupRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTaskGroupResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionGroupRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionGroupResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionGroupShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateUserDepartmentsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateUserDepartmentsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateWatermarkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateWatermarkResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserDepartmentsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserDepartmentsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteWatermarkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\DeleteWatermarkResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceCompareRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceCompareResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceCompareShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceLivenessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceLivenessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceLivenessShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceRecognizeRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceRecognizeResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceRecognizeShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAsrResultRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetAsrResultResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectionRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectionResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessJsonFileRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessJsonFileResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetPreSignedUrlRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetPreSignedUrlResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordResultRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordResultResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordsByFeeIdRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordsByFeeIdResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordsByOuterBusinessIdRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordsByOuterBusinessIdResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsRecordsByFeeIdRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsRecordsByFeeIdResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskGroupRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskGroupResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTtsQuestionByGroupIdRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetTtsQuestionByGroupIdResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetUserRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetUserResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetVideoMergeTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetVideoMergeTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetWatermarkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetWatermarkResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinRoomRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinRoomResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\LeaveRoomRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\LeaveRoomResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListAppsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListAppsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDepartmentsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectProcessesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectProcessesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListFilesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListFilesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRecordResultsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRecordResultsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRulesRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListRulesResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskGroupsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskGroupsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskItemsRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTaskItemsResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTasksRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListTasksResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListUsersRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListUsersResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListWatermarksRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListWatermarksResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\RenameDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\RenameDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsCommonRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsCommonResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsCommonShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsTaskRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsTaskResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\TtsTaskShrinkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDepartmentRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDepartmentResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDetectProcessRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDetectProcessResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateRuleRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateRuleResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateWatermarkRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateWatermarkResponse;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UploadReportRequest;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\UploadReportResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Idrsservice extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'idrsservice.aliyuncs.com',
            'ap-northeast-2-pop'          => 'idrsservice.aliyuncs.com',
            'ap-south-1'                  => 'idrsservice.aliyuncs.com',
            'ap-southeast-1'              => 'idrsservice.aliyuncs.com',
            'ap-southeast-2'              => 'idrsservice.aliyuncs.com',
            'ap-southeast-3'              => 'idrsservice.aliyuncs.com',
            'ap-southeast-5'              => 'idrsservice.aliyuncs.com',
            'cn-beijing'                  => 'idrsservice.aliyuncs.com',
            'cn-beijing-finance-1'        => 'idrsservice.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'idrsservice.aliyuncs.com',
            'cn-beijing-gov-1'            => 'idrsservice.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'idrsservice.aliyuncs.com',
            'cn-chengdu'                  => 'idrsservice.aliyuncs.com',
            'cn-edge-1'                   => 'idrsservice.aliyuncs.com',
            'cn-fujian'                   => 'idrsservice.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-finance'         => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'idrsservice.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'idrsservice.aliyuncs.com',
            'cn-hongkong'                 => 'idrsservice.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'idrsservice.aliyuncs.com',
            'cn-huhehaote'                => 'idrsservice.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'idrsservice.aliyuncs.com',
            'cn-north-2-gov-1'            => 'idrsservice.aliyuncs.com',
            'cn-qingdao'                  => 'idrsservice.aliyuncs.com',
            'cn-qingdao-nebula'           => 'idrsservice.aliyuncs.com',
            'cn-shanghai'                 => 'idrsservice.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'idrsservice.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'idrsservice.aliyuncs.com',
            'cn-shanghai-inner'           => 'idrsservice.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'idrsservice.aliyuncs.com',
            'cn-shenzhen'                 => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-inner'           => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'idrsservice.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'idrsservice.aliyuncs.com',
            'cn-wuhan'                    => 'idrsservice.aliyuncs.com',
            'cn-wulanchabu'               => 'idrsservice.aliyuncs.com',
            'cn-yushanfang'               => 'idrsservice.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'idrsservice.aliyuncs.com',
            'cn-zhangjiakou'              => 'idrsservice.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'idrsservice.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'idrsservice.aliyuncs.com',
            'eu-central-1'                => 'idrsservice.aliyuncs.com',
            'eu-west-1'                   => 'idrsservice.aliyuncs.com',
            'eu-west-1-oxs'               => 'idrsservice.aliyuncs.com',
            'me-east-1'                   => 'idrsservice.aliyuncs.com',
            'rus-west-1-pop'              => 'idrsservice.aliyuncs.com',
            'us-east-1'                   => 'idrsservice.aliyuncs.com',
            'us-west-1'                   => 'idrsservice.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('idrsservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AsrRealtimeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AsrRealtimeResponse
     */
    public function asrRealtimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->customizationId)) {
            $query['CustomizationId'] = $request->customizationId;
        }
        if (!Utils::isUnset($request->disfluency)) {
            $query['Disfluency'] = $request->disfluency;
        }
        if (!Utils::isUnset($request->enableIgnoreSentenceTimeout)) {
            $query['EnableIgnoreSentenceTimeout'] = $request->enableIgnoreSentenceTimeout;
        }
        if (!Utils::isUnset($request->enableIntermediateResult)) {
            $query['EnableIntermediateResult'] = $request->enableIntermediateResult;
        }
        if (!Utils::isUnset($request->enableInverseTextNormalization)) {
            $query['EnableInverseTextNormalization'] = $request->enableInverseTextNormalization;
        }
        if (!Utils::isUnset($request->enablePunctuationPrediction)) {
            $query['EnablePunctuationPrediction'] = $request->enablePunctuationPrediction;
        }
        if (!Utils::isUnset($request->enableSemanticSentenceDetection)) {
            $query['EnableSemanticSentenceDetection'] = $request->enableSemanticSentenceDetection;
        }
        if (!Utils::isUnset($request->enableWords)) {
            $query['EnableWords'] = $request->enableWords;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->format)) {
            $query['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->maxSentenceSilence)) {
            $query['MaxSentenceSilence'] = $request->maxSentenceSilence;
        }
        if (!Utils::isUnset($request->sampleRate)) {
            $query['SampleRate'] = $request->sampleRate;
        }
        if (!Utils::isUnset($request->speechNoiseThreshold)) {
            $query['SpeechNoiseThreshold'] = $request->speechNoiseThreshold;
        }
        if (!Utils::isUnset($request->vocabularyId)) {
            $query['VocabularyId'] = $request->vocabularyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AsrRealtime',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AsrRealtimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AsrRealtimeRequest $request
     *
     * @return AsrRealtimeResponse
     */
    public function asrRealtime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asrRealtimeWithOptions($request, $runtime);
    }

    /**
     * @param AsrSentenceRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return AsrSentenceResponse
     */
    public function asrSentenceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AsrSentenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->asrRequest)) {
            $request->asrRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->asrRequest, 'AsrRequest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->asrRequestShrink)) {
            $body['AsrRequest'] = $request->asrRequestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AsrSentence',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AsrSentenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AsrSentenceRequest $request
     *
     * @return AsrSentenceResponse
     */
    public function asrSentence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asrSentenceWithOptions($request, $runtime);
    }

    /**
     * @param AsrTaskRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return AsrTaskResponse
     */
    public function asrTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AsrTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AsrTask',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AsrTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AsrTaskRequest $request
     *
     * @return AsrTaskResponse
     */
    public function asrTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->asrTaskWithOptions($request, $runtime);
    }

    /**
     * @param AssociateRoomRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AssociateRoomResponse
     */
    public function associateRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateRoom',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateRoomRequest $request
     *
     * @return AssociateRoomResponse
     */
    public function associateRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRoomWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDepartment',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDepartmentRequest $request
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDetectProcessResponse
     */
    public function createDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->draft)) {
            $query['Draft'] = $request->draft;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDetectProcess',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDetectProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDetectProcessRequest $request
     *
     * @return CreateDetectProcessResponse
     */
    public function createDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSignatureRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSignatureResponse
     */
    public function createSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSignature',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSignatureRequest $request
     *
     * @return CreateSignatureResponse
     */
    public function createSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSignatureWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTaskGroupResponse
     */
    public function createTaskGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->day)) {
            $query['Day'] = $request->day;
        }
        if (!Utils::isUnset($request->expireAt)) {
            $query['ExpireAt'] = $request->expireAt;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->runnableTimeFrom)) {
            $query['RunnableTimeFrom'] = $request->runnableTimeFrom;
        }
        if (!Utils::isUnset($request->runnableTimeTo)) {
            $query['RunnableTimeTo'] = $request->runnableTimeTo;
        }
        if (!Utils::isUnset($request->triggerPeriod)) {
            $query['TriggerPeriod'] = $request->triggerPeriod;
        }
        if (!Utils::isUnset($request->videoInfo)) {
            $query['VideoInfo'] = $request->videoInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskGroup',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskGroupRequest $request
     *
     * @return CreateTaskGroupResponse
     */
    public function createTaskGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateTtsQuestionRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTtsQuestionResponse
     */
    public function createTtsQuestionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTtsQuestionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTtsQuestion',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTtsQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTtsQuestionRequest $request
     *
     * @return CreateTtsQuestionResponse
     */
    public function createTtsQuestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTtsQuestionWithOptions($request, $runtime);
    }

    /**
     * @param CreateTtsQuestionGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateTtsQuestionGroupResponse
     */
    public function createTtsQuestionGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTtsQuestionGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTtsQuestionGroup',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTtsQuestionGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTtsQuestionGroupRequest $request
     *
     * @return CreateTtsQuestionGroupResponse
     */
    public function createTtsQuestionGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTtsQuestionGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserDepartmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateUserDepartmentsResponse
     */
    public function createUserDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserDepartments',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserDepartmentsRequest $request
     *
     * @return CreateUserDepartmentsResponse
     */
    public function createUserDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoMergeTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateVideoMergeTaskResponse
     */
    public function createVideoMergeTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVideoMergeTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->videoMergeRequest)) {
            $request->videoMergeRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoMergeRequest, 'VideoMergeRequest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->videoMergeRequestShrink)) {
            $body['VideoMergeRequest'] = $request->videoMergeRequestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVideoMergeTask',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVideoMergeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVideoMergeTaskRequest $request
     *
     * @return CreateVideoMergeTaskResponse
     */
    public function createVideoMergeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoMergeTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWatermarkResponse
     */
    public function createWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWatermark',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWatermarkRequest $request
     *
     * @return CreateWatermarkResponse
     */
    public function createWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApp',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDepartment',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDepartmentRequest $request
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDetectProcessResponse
     */
    public function deleteDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDetectProcess',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDetectProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDetectProcessRequest $request
     *
     * @return DeleteDetectProcessResponse
     */
    public function deleteDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserDepartmentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserDepartmentsResponse
     */
    public function deleteUserDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserDepartments',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserDepartmentsRequest $request
     *
     * @return DeleteUserDepartmentsResponse
     */
    public function deleteUserDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWatermark',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWatermarkRequest $request
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param FaceCompareRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return FaceCompareResponse
     */
    public function faceCompareWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FaceCompareShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->faceRequest)) {
            $request->faceRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faceRequest, 'FaceRequest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->faceRequestShrink)) {
            $body['FaceRequest'] = $request->faceRequestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceCompare',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceCompareRequest $request
     *
     * @return FaceCompareResponse
     */
    public function faceCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceCompareWithOptions($request, $runtime);
    }

    /**
     * @param FaceLivenessRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return FaceLivenessResponse
     */
    public function faceLivenessWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FaceLivenessShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->faceRequest)) {
            $request->faceRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faceRequest, 'FaceRequest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->faceRequestShrink)) {
            $body['FaceRequest'] = $request->faceRequestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceLiveness',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceLivenessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceLivenessRequest $request
     *
     * @return FaceLivenessResponse
     */
    public function faceLiveness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceLivenessWithOptions($request, $runtime);
    }

    /**
     * @param FaceRecognizeRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return FaceRecognizeResponse
     */
    public function faceRecognizeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FaceRecognizeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->faceRequest)) {
            $request->faceRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faceRequest, 'FaceRequest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->faceRequestShrink)) {
            $body['FaceRequest'] = $request->faceRequestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceRecognize',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceRecognizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceRecognizeRequest $request
     *
     * @return FaceRecognizeResponse
     */
    public function faceRecognize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceRecognizeWithOptions($request, $runtime);
    }

    /**
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApp',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @param GetAsrResultRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsrResultResponse
     */
    public function getAsrResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asrTaskId)) {
            $query['AsrTaskId'] = $request->asrTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsrResult',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsrResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsrResultRequest $request
     *
     * @return GetAsrResultResponse
     */
    public function getAsrResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsrResultWithOptions($request, $runtime);
    }

    /**
     * @param GetDepartmentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDepartmentResponse
     */
    public function getDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDepartment',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDepartmentRequest $request
     *
     * @return GetDepartmentResponse
     */
    public function getDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectProcessRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDetectProcessResponse
     */
    public function getDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDetectProcess',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDetectProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDetectProcessRequest $request
     *
     * @return GetDetectProcessResponse
     */
    public function getDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectProcessJsonFileRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDetectProcessJsonFileResponse
     */
    public function getDetectProcessJsonFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
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
            'action'      => 'GetDetectProcessJsonFile',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDetectProcessJsonFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDetectProcessJsonFileRequest $request
     *
     * @return GetDetectProcessJsonFileResponse
     */
    public function getDetectProcessJsonFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectProcessJsonFileWithOptions($request, $runtime);
    }

    /**
     * @param GetDetectionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDetectionResponse
     */
    public function getDetectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDetection',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDetectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDetectionRequest $request
     *
     * @return GetDetectionResponse
     */
    public function getDetection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectionWithOptions($request, $runtime);
    }

    /**
     * @param GetPreSignedUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPreSignedUrlResponse
     */
    public function getPreSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->prefix)) {
            $body['Prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPreSignedUrl',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPreSignedUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPreSignedUrlRequest $request
     *
     * @return GetPreSignedUrlResponse
     */
    public function getPreSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPreSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetRecordResultRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRecordResultResponse
     */
    public function getRecordResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecordResult',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRecordResultRequest $request
     *
     * @return GetRecordResultResponse
     */
    public function getRecordResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordResultWithOptions($request, $runtime);
    }

    /**
     * @param GetRecordsByFeeIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRecordsByFeeIdResponse
     */
    public function getRecordsByFeeIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->feeId)) {
            $body['FeeId'] = $request->feeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRecordsByFeeId',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordsByFeeIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRecordsByFeeIdRequest $request
     *
     * @return GetRecordsByFeeIdResponse
     */
    public function getRecordsByFeeId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordsByFeeIdWithOptions($request, $runtime);
    }

    /**
     * @param GetRecordsByOuterBusinessIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetRecordsByOuterBusinessIdResponse
     */
    public function getRecordsByOuterBusinessIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outerBusinessId)) {
            $query['OuterBusinessId'] = $request->outerBusinessId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecordsByOuterBusinessId',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordsByOuterBusinessIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRecordsByOuterBusinessIdRequest $request
     *
     * @return GetRecordsByOuterBusinessIdResponse
     */
    public function getRecordsByOuterBusinessId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordsByOuterBusinessIdWithOptions($request, $runtime);
    }

    /**
     * @param GetRuleRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetRuleResponse
     */
    public function getRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRule',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRuleRequest $request
     *
     * @return GetRuleResponse
     */
    public function getRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetStatisticsRecordsByFeeIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetStatisticsRecordsByFeeIdResponse
     */
    public function getStatisticsRecordsByFeeIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->feeId)) {
            $body['FeeId'] = $request->feeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStatisticsRecordsByFeeId',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStatisticsRecordsByFeeIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStatisticsRecordsByFeeIdRequest $request
     *
     * @return GetStatisticsRecordsByFeeIdResponse
     */
    public function getStatisticsRecordsByFeeId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStatisticsRecordsByFeeIdWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * **1**.
     *   *
     * @param GetTaskGroupRequest $request GetTaskGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskGroupResponse GetTaskGroupResponse
     */
    public function getTaskGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskGroup',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **1**.
     *   *
     * @param GetTaskGroupRequest $request GetTaskGroupRequest
     *
     * @return GetTaskGroupResponse GetTaskGroupResponse
     */
    public function getTaskGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetTtsQuestionByGroupIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTtsQuestionByGroupIdResponse
     */
    public function getTtsQuestionByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTtsQuestionByGroupId',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTtsQuestionByGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTtsQuestionByGroupIdRequest $request
     *
     * @return GetTtsQuestionByGroupIdResponse
     */
    public function getTtsQuestionByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTtsQuestionByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoMergeTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetVideoMergeTaskResponse
     */
    public function getVideoMergeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVideoMergeTask',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoMergeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVideoMergeTaskRequest $request
     *
     * @return GetVideoMergeTaskResponse
     */
    public function getVideoMergeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoMergeTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWatermarkResponse
     */
    public function getWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWatermark',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWatermarkRequest $request
     *
     * @return GetWatermarkResponse
     */
    public function getWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param JoinRoomRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return JoinRoomResponse
     */
    public function joinRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomToken)) {
            $query['RoomToken'] = $request->roomToken;
        }
        if (!Utils::isUnset($request->streamId)) {
            $query['StreamId'] = $request->streamId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinRoom',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinRoomRequest $request
     *
     * @return JoinRoomResponse
     */
    public function joinRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinRoomWithOptions($request, $runtime);
    }

    /**
     * @param LeaveRoomRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LeaveRoomResponse
     */
    public function leaveRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LeaveRoom',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LeaveRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LeaveRoomRequest $request
     *
     * @return LeaveRoomResponse
     */
    public function leaveRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveRoomWithOptions($request, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApps',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListDepartmentsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDepartmentsResponse
     */
    public function listDepartmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDepartments',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDepartmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDepartmentsRequest $request
     *
     * @return ListDepartmentsResponse
     */
    public function listDepartments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDepartmentsWithOptions($request, $runtime);
    }

    /**
     * @param ListDetectProcessesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDetectProcessesResponse
     */
    public function listDetectProcessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publishStatus)) {
            $query['PublishStatus'] = $request->publishStatus;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $query['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDetectProcesses',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDetectProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDetectProcessesRequest $request
     *
     * @return ListDetectProcessesResponse
     */
    public function listDetectProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectProcessesWithOptions($request, $runtime);
    }

    /**
     * @param ListDetectionsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDetectionsResponse
     */
    public function listDetectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createDateFrom)) {
            $query['CreateDateFrom'] = $request->createDateFrom;
        }
        if (!Utils::isUnset($request->createDateTo)) {
            $query['CreateDateTo'] = $request->createDateTo;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recordingType)) {
            $query['RecordingType'] = $request->recordingType;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDetections',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDetectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDetectionsRequest $request
     *
     * @return ListDetectionsResponse
     */
    public function listDetections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDetectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListFilesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFilesResponse
     */
    public function listFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFiles',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFilesRequest $request
     *
     * @return ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @param ListRecordResultsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRecordResultsResponse
     */
    public function listRecordResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createDateFrom)) {
            $query['CreateDateFrom'] = $request->createDateFrom;
        }
        if (!Utils::isUnset($request->createDateTo)) {
            $query['CreateDateTo'] = $request->createDateTo;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->outerBusinessId)) {
            $query['OuterBusinessId'] = $request->outerBusinessId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecordResults',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecordResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRecordResultsRequest $request
     *
     * @return ListRecordResultsResponse
     */
    public function listRecordResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecordResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListRulesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRules',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTaskGroupsResponse
     */
    public function listTaskGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskGroups',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskGroupsRequest $request
     *
     * @return ListTaskGroupsResponse
     */
    public function listTaskGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskItemsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTaskItemsResponse
     */
    public function listTaskItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskItems',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTaskItemsRequest $request
     *
     * @return ListTaskItemsResponse
     */
    public function listTaskItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskGroupId)) {
            $query['TaskGroupId'] = $request->taskGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListWatermarksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListWatermarksResponse
     */
    public function listWatermarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWatermarks',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWatermarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWatermarksRequest $request
     *
     * @return ListWatermarksResponse
     */
    public function listWatermarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWatermarksWithOptions($request, $runtime);
    }

    /**
     * @param RenameDetectProcessRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RenameDetectProcessResponse
     */
    public function renameDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenameDetectProcess',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenameDetectProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenameDetectProcessRequest $request
     *
     * @return RenameDetectProcessResponse
     */
    public function renameDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renameDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param TtsCommonRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return TtsCommonResponse
     */
    public function ttsCommonWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TtsCommonShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ttsRequest)) {
            $request->ttsRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ttsRequest, 'TtsRequest', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ttsRequestShrink)) {
            $body['TtsRequest'] = $request->ttsRequestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TtsCommon',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TtsCommonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TtsCommonRequest $request
     *
     * @return TtsCommonResponse
     */
    public function ttsCommon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ttsCommonWithOptions($request, $runtime);
    }

    /**
     * @param TtsTaskRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return TtsTaskResponse
     */
    public function ttsTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TtsTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TtsTask',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TtsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TtsTaskRequest $request
     *
     * @return TtsTaskResponse
     */
    public function ttsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ttsTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->disabled)) {
            $query['Disabled'] = $request->disabled;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageName)) {
            $query['PackageName'] = $request->packageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApp',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDepartment',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDepartmentRequest $request
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDepartmentWithOptions($request, $runtime);
    }

    /**
     * ********
     *   *
     * @param UpdateDetectProcessRequest $request UpdateDetectProcessRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDetectProcessResponse UpdateDetectProcessResponse
     */
    public function updateDetectProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->draft)) {
            $query['Draft'] = $request->draft;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDetectProcess',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDetectProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ********
     *   *
     * @param UpdateDetectProcessRequest $request UpdateDetectProcessRequest
     *
     * @return UpdateDetectProcessResponse UpdateDetectProcessResponse
     */
    public function updateDetectProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDetectProcessWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRuleResponse
     */
    public function updateRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRule',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRuleRequest $request
     *
     * @return UpdateRuleResponse
     */
    public function updateRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWatermarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        if (!Utils::isUnset($request->watermarkId)) {
            $query['WatermarkId'] = $request->watermarkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWatermark',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWatermarkRequest $request
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param UploadReportRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UploadReportResponse
     */
    public function uploadReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientBaseParam)) {
            $query['ClientBaseParam'] = $request->clientBaseParam;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->detectProcessId)) {
            $query['DetectProcessId'] = $request->detectProcessId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->feeId)) {
            $query['FeeId'] = $request->feeId;
        }
        if (!Utils::isUnset($request->metaUrl)) {
            $query['MetaUrl'] = $request->metaUrl;
        }
        if (!Utils::isUnset($request->outerBusinessId)) {
            $query['OuterBusinessId'] = $request->outerBusinessId;
        }
        if (!Utils::isUnset($request->recordAt)) {
            $query['RecordAt'] = $request->recordAt;
        }
        if (!Utils::isUnset($request->resultUrl)) {
            $query['ResultUrl'] = $request->resultUrl;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->roomId)) {
            $query['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->rtcRecordId)) {
            $query['RtcRecordId'] = $request->rtcRecordId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->videoType)) {
            $query['VideoType'] = $request->videoType;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $query['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadReport',
            'version'     => '2020-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadReportRequest $request
     *
     * @return UploadReportResponse
     */
    public function uploadReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadReportWithOptions($request, $runtime);
    }
}
