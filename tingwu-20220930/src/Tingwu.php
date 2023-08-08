<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\CreateFileTransRequest;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\CreateFileTransResponse;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\CreateMeetingTransRequest;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\CreateMeetingTransResponse;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\GetFileTransResponse;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\GetMeetingTransResponse;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\StopMeetingTransRequest;
use AlibabaCloud\SDK\Tingwu\V20220930\Models\StopMeetingTransResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Tingwu extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tingwu', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateFileTransRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFileTransResponse
     */
    public function createFileTransWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->abilityParams)) {
            $body['AbilityParams'] = $request->abilityParams;
        }
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->asrParams)) {
            $body['AsrParams'] = $request->asrParams;
        }
        if (!Utils::isUnset($request->audioLanguage)) {
            $body['AudioLanguage'] = $request->audioLanguage;
        }
        if (!Utils::isUnset($request->audioOssBucket)) {
            $body['AudioOssBucket'] = $request->audioOssBucket;
        }
        if (!Utils::isUnset($request->audioOssPath)) {
            $body['AudioOssPath'] = $request->audioOssPath;
        }
        if (!Utils::isUnset($request->audioOutputEnabled)) {
            $body['AudioOutputEnabled'] = $request->audioOutputEnabled;
        }
        if (!Utils::isUnset($request->audioOutputOssBucket)) {
            $body['AudioOutputOssBucket'] = $request->audioOutputOssBucket;
        }
        if (!Utils::isUnset($request->audioOutputOssPath)) {
            $body['AudioOutputOssPath'] = $request->audioOutputOssPath;
        }
        if (!Utils::isUnset($request->audioRoleNum)) {
            $body['AudioRoleNum'] = $request->audioRoleNum;
        }
        if (!Utils::isUnset($request->audioSegmentsEnabled)) {
            $body['AudioSegmentsEnabled'] = $request->audioSegmentsEnabled;
        }
        if (!Utils::isUnset($request->labParams)) {
            $body['LabParams'] = $request->labParams;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->transKey)) {
            $body['TransKey'] = $request->transKey;
        }
        if (!Utils::isUnset($request->transResultOssBucket)) {
            $body['TransResultOssBucket'] = $request->transResultOssBucket;
        }
        if (!Utils::isUnset($request->transResultOssPath)) {
            $body['TransResultOssPath'] = $request->transResultOssPath;
        }
        if (!Utils::isUnset($request->videoOutputEnabled)) {
            $body['VideoOutputEnabled'] = $request->videoOutputEnabled;
        }
        if (!Utils::isUnset($request->videoOutputOssBucket)) {
            $body['VideoOutputOssBucket'] = $request->videoOutputOssBucket;
        }
        if (!Utils::isUnset($request->videoOutputOssPath)) {
            $body['VideoOutputOssPath'] = $request->videoOutputOssPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFileTrans',
            'version'     => '2022-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/file-trans',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFileTransResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFileTransRequest $request
     *
     * @return CreateFileTransResponse
     */
    public function createFileTrans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileTransWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateMeetingTransRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMeetingTransResponse
     */
    public function createMeetingTransWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->abilityParams)) {
            $body['AbilityParams'] = $request->abilityParams;
        }
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->asrParams)) {
            $body['AsrParams'] = $request->asrParams;
        }
        if (!Utils::isUnset($request->audioBitRate)) {
            $body['AudioBitRate'] = $request->audioBitRate;
        }
        if (!Utils::isUnset($request->audioFormat)) {
            $body['AudioFormat'] = $request->audioFormat;
        }
        if (!Utils::isUnset($request->audioLanguage)) {
            $body['AudioLanguage'] = $request->audioLanguage;
        }
        if (!Utils::isUnset($request->audioOutputEnabled)) {
            $body['AudioOutputEnabled'] = $request->audioOutputEnabled;
        }
        if (!Utils::isUnset($request->audioOutputOssBucket)) {
            $body['AudioOutputOssBucket'] = $request->audioOutputOssBucket;
        }
        if (!Utils::isUnset($request->audioOutputOssPath)) {
            $body['AudioOutputOssPath'] = $request->audioOutputOssPath;
        }
        if (!Utils::isUnset($request->audioPackage)) {
            $body['AudioPackage'] = $request->audioPackage;
        }
        if (!Utils::isUnset($request->audioSampleRate)) {
            $body['AudioSampleRate'] = $request->audioSampleRate;
        }
        if (!Utils::isUnset($request->audioSegmentsEnabled)) {
            $body['AudioSegmentsEnabled'] = $request->audioSegmentsEnabled;
        }
        if (!Utils::isUnset($request->docResultEnabled)) {
            $body['DocResultEnabled'] = $request->docResultEnabled;
        }
        if (!Utils::isUnset($request->labParams)) {
            $body['LabParams'] = $request->labParams;
        }
        if (!Utils::isUnset($request->meetingKey)) {
            $body['MeetingKey'] = $request->meetingKey;
        }
        if (!Utils::isUnset($request->meetingResultEnabled)) {
            $body['MeetingResultEnabled'] = $request->meetingResultEnabled;
        }
        if (!Utils::isUnset($request->meetingResultOssBucket)) {
            $body['MeetingResultOssBucket'] = $request->meetingResultOssBucket;
        }
        if (!Utils::isUnset($request->meetingResultOssPath)) {
            $body['MeetingResultOssPath'] = $request->meetingResultOssPath;
        }
        if (!Utils::isUnset($request->realtimeActiveResultLevel)) {
            $body['RealtimeActiveResultLevel'] = $request->realtimeActiveResultLevel;
        }
        if (!Utils::isUnset($request->realtimeResultEnabled)) {
            $body['RealtimeResultEnabled'] = $request->realtimeResultEnabled;
        }
        if (!Utils::isUnset($request->realtimeResultLevel)) {
            $body['RealtimeResultLevel'] = $request->realtimeResultLevel;
        }
        if (!Utils::isUnset($request->realtimeResultMeetingInfoEnabled)) {
            $body['RealtimeResultMeetingInfoEnabled'] = $request->realtimeResultMeetingInfoEnabled;
        }
        if (!Utils::isUnset($request->realtimeResultWordsEnabled)) {
            $body['RealtimeResultWordsEnabled'] = $request->realtimeResultWordsEnabled;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->translateActiveResultLevel)) {
            $body['TranslateActiveResultLevel'] = $request->translateActiveResultLevel;
        }
        if (!Utils::isUnset($request->translateLanguages)) {
            $body['TranslateLanguages'] = $request->translateLanguages;
        }
        if (!Utils::isUnset($request->translateResultEnabled)) {
            $body['TranslateResultEnabled'] = $request->translateResultEnabled;
        }
        if (!Utils::isUnset($request->translateResultLevel)) {
            $body['TranslateResultLevel'] = $request->translateResultLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMeetingTrans',
            'version'     => '2022-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/meeting-trans',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMeetingTransResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMeetingTransRequest $request
     *
     * @return CreateMeetingTransResponse
     */
    public function createMeetingTrans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMeetingTransWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $TransId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFileTransResponse
     */
    public function getFileTransWithOptions($TransId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFileTrans',
            'version'     => '2022-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/file-trans/' . OpenApiUtilClient::getEncodeParam($TransId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileTransResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $TransId
     *
     * @return GetFileTransResponse
     */
    public function getFileTrans($TransId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileTransWithOptions($TransId, $headers, $runtime);
    }

    /**
     * @param string         $MeetingId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMeetingTransResponse
     */
    public function getMeetingTransWithOptions($MeetingId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMeetingTrans',
            'version'     => '2022-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/meeting-trans/' . OpenApiUtilClient::getEncodeParam($MeetingId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMeetingTransResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $MeetingId
     *
     * @return GetMeetingTransResponse
     */
    public function getMeetingTrans($MeetingId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMeetingTransWithOptions($MeetingId, $headers, $runtime);
    }

    /**
     * @param string                  $MeetingId
     * @param StopMeetingTransRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StopMeetingTransResponse
     */
    public function stopMeetingTransWithOptions($MeetingId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->meetingRoleNum)) {
            $body['MeetingRoleNum'] = $request->meetingRoleNum;
        }
        if (!Utils::isUnset($request->onlyRoleSplitResult)) {
            $body['OnlyRoleSplitResult'] = $request->onlyRoleSplitResult;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopMeetingTrans',
            'version'     => '2022-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/openapi/meeting-trans/' . OpenApiUtilClient::getEncodeParam($MeetingId) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopMeetingTransResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $MeetingId
     * @param StopMeetingTransRequest $request
     *
     * @return StopMeetingTransResponse
     */
    public function stopMeetingTrans($MeetingId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopMeetingTransWithOptions($MeetingId, $request, $headers, $runtime);
    }
}
