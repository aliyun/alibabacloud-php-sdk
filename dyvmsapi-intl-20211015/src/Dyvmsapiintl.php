<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallGroupShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallSignalRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\BackendCallSignalResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\CancleGroupCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\CancleGroupCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteApplyNumberRecordRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteApplyNumberRecordResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteQualificationRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteQualificationResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteSipTrunkApplyRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteSipTrunkApplyResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteVoiceFileRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteVoiceFileResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteVoiceTtsRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DeleteVoiceTtsResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DownloadTemplateFileRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\DownloadTemplateFileResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GetIntlVoiceOpenStatusRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GetIntlVoiceOpenStatusResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GetOssInfoForUploadFileRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\GetOssInfoForUploadFileResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\HomeStartRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\HomeStartResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListApplyNumberRecordRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListApplyNumberRecordResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListNumberRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListNumberResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListQualificationRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListQualificationResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListReceiptRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListReceiptResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkDetailRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkDetailResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkStatRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkStatResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallDetailRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallDetailResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallStatRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceCallStatResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceFileRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceFileResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceTtsRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListVoiceTtsResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\NumberEnableRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\NumberEnableResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\OpenIntlVoiceServiceRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\OpenIntlVoiceServiceResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\OswTest1Request;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\OswTest1Response;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryFileOssUrlRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryFileOssUrlResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryHomeStatRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryHomeStatResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryRecordingEnableRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryRecordingEnableResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryServiceEnableRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\QueryServiceEnableResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\RecordingEnableRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\RecordingEnableResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SetReceiptUrlRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SetReceiptUrlResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SipTrunkDetailRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SipTrunkDetailResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitGroupCallRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitGroupCallResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitNumberRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitNumberResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitNumberShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitQualificationRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitQualificationResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitSipTrunkRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitSipTrunkResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitVoiceFileRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitVoiceFileResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitVoiceTtsRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\SubmitVoiceTtsResponse;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\Test02Request;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\Test02Response;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\UpdateNumberRequest;
use AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\UpdateNumberResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dyvmsapiintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyvmsapi-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BackendCallGroupRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BackendCallGroupResponse
     */
    public function backendCallGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BackendCallGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->calledNumber)) {
            $request->calledNumberShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->calledNumber, 'CalledNumber', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->calledNumberShrink)) {
            $query['CalledNumber'] = $request->calledNumberShrink;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendType)) {
            $query['SendType'] = $request->sendType;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->timingStart)) {
            $query['TimingStart'] = $request->timingStart;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->voiceCode)) {
            $query['VoiceCode'] = $request->voiceCode;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BackendCallGroup',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BackendCallGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BackendCallGroupRequest $request
     *
     * @return BackendCallGroupResponse
     */
    public function backendCallGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backendCallGroupWithOptions($request, $runtime);
    }

    /**
     * @param BackendCallSignalRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BackendCallSignalResponse
     */
    public function backendCallSignalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BackendCallSignal',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BackendCallSignalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BackendCallSignalRequest $request
     *
     * @return BackendCallSignalResponse
     */
    public function backendCallSignal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->backendCallSignalWithOptions($request, $runtime);
    }

    /**
     * @param CancleGroupCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancleGroupCallResponse
     */
    public function cancleGroupCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancleGroupCall',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancleGroupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancleGroupCallRequest $request
     *
     * @return CancleGroupCallResponse
     */
    public function cancleGroupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancleGroupCallWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApplyNumberRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteApplyNumberRecordResponse
     */
    public function deleteApplyNumberRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplyNumberRecord',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplyNumberRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApplyNumberRecordRequest $request
     *
     * @return DeleteApplyNumberRecordResponse
     */
    public function deleteApplyNumberRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplyNumberRecordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualificationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteQualificationResponse
     */
    public function deleteQualificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualification',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualificationRequest $request
     *
     * @return DeleteQualificationResponse
     */
    public function deleteQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualificationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSipTrunkApplyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSipTrunkApplyResponse
     */
    public function deleteSipTrunkApplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSipTrunkApply',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSipTrunkApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSipTrunkApplyRequest $request
     *
     * @return DeleteSipTrunkApplyResponse
     */
    public function deleteSipTrunkApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSipTrunkApplyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVoiceFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteVoiceFileResponse
     */
    public function deleteVoiceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVoiceFile',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVoiceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVoiceFileRequest $request
     *
     * @return DeleteVoiceFileResponse
     */
    public function deleteVoiceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVoiceFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVoiceTtsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteVoiceTtsResponse
     */
    public function deleteVoiceTtsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVoiceTts',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVoiceTtsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVoiceTtsRequest $request
     *
     * @return DeleteVoiceTtsResponse
     */
    public function deleteVoiceTts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVoiceTtsWithOptions($request, $runtime);
    }

    /**
     * @param DownloadTemplateFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DownloadTemplateFileResponse
     */
    public function downloadTemplateFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadTemplateFile',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadTemplateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadTemplateFileRequest $request
     *
     * @return DownloadTemplateFileResponse
     */
    public function downloadTemplateFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadTemplateFileWithOptions($request, $runtime);
    }

    /**
     * @param GetIntlVoiceOpenStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetIntlVoiceOpenStatusResponse
     */
    public function getIntlVoiceOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIntlVoiceOpenStatus',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntlVoiceOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIntlVoiceOpenStatusRequest $request
     *
     * @return GetIntlVoiceOpenStatusResponse
     */
    public function getIntlVoiceOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntlVoiceOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetOssInfoForUploadFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOssInfoForUploadFileResponse
     */
    public function getOssInfoForUploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssInfoForUploadFile',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssInfoForUploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssInfoForUploadFileRequest $request
     *
     * @return GetOssInfoForUploadFileResponse
     */
    public function getOssInfoForUploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssInfoForUploadFileWithOptions($request, $runtime);
    }

    /**
     * @param HomeStartRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return HomeStartResponse
     */
    public function homeStartWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HomeStart',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HomeStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HomeStartRequest $request
     *
     * @return HomeStartResponse
     */
    public function homeStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->homeStartWithOptions($request, $runtime);
    }

    /**
     * @param ListApplyNumberRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApplyNumberRecordResponse
     */
    public function listApplyNumberRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplyNumberRecord',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplyNumberRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApplyNumberRecordRequest $request
     *
     * @return ListApplyNumberRecordResponse
     */
    public function listApplyNumberRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplyNumberRecordWithOptions($request, $runtime);
    }

    /**
     * @param ListNumberRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListNumberResponse
     */
    public function listNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyId)) {
            $query['ApplyId'] = $request->applyId;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->numberName)) {
            $query['NumberName'] = $request->numberName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneType)) {
            $query['PhoneType'] = $request->phoneType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNumber',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNumberRequest $request
     *
     * @return ListNumberResponse
     */
    public function listNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNumberWithOptions($request, $runtime);
    }

    /**
     * @param ListQualificationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListQualificationResponse
     */
    public function listQualificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->contactPhone)) {
            $query['ContactPhone'] = $request->contactPhone;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQualification',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListQualificationRequest $request
     *
     * @return ListQualificationResponse
     */
    public function listQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQualificationWithOptions($request, $runtime);
    }

    /**
     * @param ListReceiptRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListReceiptResponse
     */
    public function listReceiptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReceipt',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListReceiptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListReceiptRequest $request
     *
     * @return ListReceiptResponse
     */
    public function listReceipt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReceiptWithOptions($request, $runtime);
    }

    /**
     * @param ListSipTrunkRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSipTrunkResponse
     */
    public function listSipTrunkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSipTrunk',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSipTrunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSipTrunkRequest $request
     *
     * @return ListSipTrunkResponse
     */
    public function listSipTrunk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSipTrunkWithOptions($request, $runtime);
    }

    /**
     * @param ListSipTrunkDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSipTrunkDetailResponse
     */
    public function listSipTrunkDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSipTrunkDetail',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSipTrunkDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSipTrunkDetailRequest $request
     *
     * @return ListSipTrunkDetailResponse
     */
    public function listSipTrunkDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSipTrunkDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListSipTrunkStatRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSipTrunkStatResponse
     */
    public function listSipTrunkStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSipTrunkStat',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSipTrunkStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSipTrunkStatRequest $request
     *
     * @return ListSipTrunkStatResponse
     */
    public function listSipTrunkStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSipTrunkStatWithOptions($request, $runtime);
    }

    /**
     * @param ListVoiceCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListVoiceCallResponse
     */
    public function listVoiceCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendType)) {
            $query['SendType'] = $request->sendType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoiceCall',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVoiceCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVoiceCallRequest $request
     *
     * @return ListVoiceCallResponse
     */
    public function listVoiceCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceCallWithOptions($request, $runtime);
    }

    /**
     * @param ListVoiceCallDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListVoiceCallDetailResponse
     */
    public function listVoiceCallDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->hangupType)) {
            $query['HangupType'] = $request->hangupType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoiceCallDetail',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVoiceCallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVoiceCallDetailRequest $request
     *
     * @return ListVoiceCallDetailResponse
     */
    public function listVoiceCallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceCallDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListVoiceCallStatRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListVoiceCallStatResponse
     */
    public function listVoiceCallStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoiceCallStat',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVoiceCallStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVoiceCallStatRequest $request
     *
     * @return ListVoiceCallStatResponse
     */
    public function listVoiceCallStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceCallStatWithOptions($request, $runtime);
    }

    /**
     * @param ListVoiceFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListVoiceFileResponse
     */
    public function listVoiceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoiceFile',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVoiceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVoiceFileRequest $request
     *
     * @return ListVoiceFileResponse
     */
    public function listVoiceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceFileWithOptions($request, $runtime);
    }

    /**
     * @param ListVoiceTtsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVoiceTtsResponse
     */
    public function listVoiceTtsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVoiceTts',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVoiceTtsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVoiceTtsRequest $request
     *
     * @return ListVoiceTtsResponse
     */
    public function listVoiceTts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVoiceTtsWithOptions($request, $runtime);
    }

    /**
     * @param NumberEnableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return NumberEnableResponse
     */
    public function numberEnableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NumberEnable',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NumberEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param NumberEnableRequest $request
     *
     * @return NumberEnableResponse
     */
    public function numberEnable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->numberEnableWithOptions($request, $runtime);
    }

    /**
     * @param OpenIntlVoiceServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OpenIntlVoiceServiceResponse
     */
    public function openIntlVoiceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenIntlVoiceService',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenIntlVoiceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenIntlVoiceServiceRequest $request
     *
     * @return OpenIntlVoiceServiceResponse
     */
    public function openIntlVoiceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openIntlVoiceServiceWithOptions($request, $runtime);
    }

    /**
     * @param OswTest1Request $request
     * @param RuntimeOptions  $runtime
     *
     * @return OswTest1Response
     */
    public function oswTest1WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OswTest1',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OswTest1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OswTest1Request $request
     *
     * @return OswTest1Response
     */
    public function oswTest1($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->oswTest1WithOptions($request, $runtime);
    }

    /**
     * @param QueryFileOssUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryFileOssUrlResponse
     */
    public function queryFileOssUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $query['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFileOssUrl',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFileOssUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFileOssUrlRequest $request
     *
     * @return QueryFileOssUrlResponse
     */
    public function queryFileOssUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFileOssUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryHomeStatRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryHomeStatResponse
     */
    public function queryHomeStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHomeStat',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHomeStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHomeStatRequest $request
     *
     * @return QueryHomeStatResponse
     */
    public function queryHomeStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHomeStatWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordingEnableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRecordingEnableResponse
     */
    public function queryRecordingEnableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordingEnable',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordingEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRecordingEnableRequest $request
     *
     * @return QueryRecordingEnableResponse
     */
    public function queryRecordingEnable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordingEnableWithOptions($request, $runtime);
    }

    /**
     * @param QueryServiceEnableRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryServiceEnableResponse
     */
    public function queryServiceEnableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryServiceEnable',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryServiceEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryServiceEnableRequest $request
     *
     * @return QueryServiceEnableResponse
     */
    public function queryServiceEnable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServiceEnableWithOptions($request, $runtime);
    }

    /**
     * @param RecordingEnableRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecordingEnableResponse
     */
    public function recordingEnableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecordingEnable',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordingEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecordingEnableRequest $request
     *
     * @return RecordingEnableResponse
     */
    public function recordingEnable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordingEnableWithOptions($request, $runtime);
    }

    /**
     * @param SetReceiptUrlRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetReceiptUrlResponse
     */
    public function setReceiptUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdrDrUrl)) {
            $query['CdrDrUrl'] = $request->cdrDrUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetReceiptUrl',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetReceiptUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetReceiptUrlRequest $request
     *
     * @return SetReceiptUrlResponse
     */
    public function setReceiptUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setReceiptUrlWithOptions($request, $runtime);
    }

    /**
     * @param SipTrunkDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SipTrunkDetailResponse
     */
    public function sipTrunkDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SipTrunkDetail',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SipTrunkDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SipTrunkDetailRequest $request
     *
     * @return SipTrunkDetailResponse
     */
    public function sipTrunkDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sipTrunkDetailWithOptions($request, $runtime);
    }

    /**
     * @param SubmitGroupCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitGroupCallResponse
     */
    public function submitGroupCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->callerIdNumber)) {
            $query['CallerIdNumber'] = $request->callerIdNumber;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $query['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->groupCallType)) {
            $query['GroupCallType'] = $request->groupCallType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendType)) {
            $query['SendType'] = $request->sendType;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->timingStart)) {
            $query['TimingStart'] = $request->timingStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitGroupCall',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitGroupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitGroupCallRequest $request
     *
     * @return SubmitGroupCallResponse
     */
    public function submitGroupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitGroupCallWithOptions($request, $runtime);
    }

    /**
     * @param SubmitNumberRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitNumberResponse
     */
    public function submitNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numberList)) {
            $request->numberListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numberList, 'NumberList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applyNote)) {
            $query['ApplyNote'] = $request->applyNote;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->numberListShrink)) {
            $query['NumberList'] = $request->numberListShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitNumber',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitNumberRequest $request
     *
     * @return SubmitNumberResponse
     */
    public function submitNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitNumberWithOptions($request, $runtime);
    }

    /**
     * @param SubmitQualificationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitQualificationResponse
     */
    public function submitQualificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->businessLicenseFileKey)) {
            $query['BusinessLicenseFileKey'] = $request->businessLicenseFileKey;
        }
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactPhone)) {
            $query['ContactPhone'] = $request->contactPhone;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->legalId)) {
            $query['LegalId'] = $request->legalId;
        }
        if (!Utils::isUnset($request->legalLicenseFileKey)) {
            $query['LegalLicenseFileKey'] = $request->legalLicenseFileKey;
        }
        if (!Utils::isUnset($request->legalName)) {
            $query['LegalName'] = $request->legalName;
        }
        if (!Utils::isUnset($request->networkAccessFileKey)) {
            $query['NetworkAccessFileKey'] = $request->networkAccessFileKey;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->unifiedCode)) {
            $query['UnifiedCode'] = $request->unifiedCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitQualification',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitQualificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitQualificationRequest $request
     *
     * @return SubmitQualificationResponse
     */
    public function submitQualification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitQualificationWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSipTrunkRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSipTrunkResponse
     */
    public function submitSipTrunkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyNote)) {
            $query['ApplyNote'] = $request->applyNote;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->inboundIpPorts)) {
            $query['InboundIpPorts'] = $request->inboundIpPorts;
        }
        if (!Utils::isUnset($request->outboundIps)) {
            $query['OutboundIps'] = $request->outboundIps;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scene)) {
            $query['Scene'] = $request->scene;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSipTrunk',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSipTrunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSipTrunkRequest $request
     *
     * @return SubmitSipTrunkResponse
     */
    public function submitSipTrunk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSipTrunkWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVoiceFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitVoiceFileResponse
     */
    public function submitVoiceFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $query['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVoiceFile',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVoiceFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitVoiceFileRequest $request
     *
     * @return SubmitVoiceFileResponse
     */
    public function submitVoiceFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVoiceFileWithOptions($request, $runtime);
    }

    /**
     * @param SubmitVoiceTtsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitVoiceTtsResponse
     */
    public function submitVoiceTtsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateText)) {
            $query['TemplateText'] = $request->templateText;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitVoiceTts',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitVoiceTtsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitVoiceTtsRequest $request
     *
     * @return SubmitVoiceTtsResponse
     */
    public function submitVoiceTts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVoiceTtsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNumberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateNumberResponse
     */
    public function updateNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNumber',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNumberRequest $request
     *
     * @return UpdateNumberResponse
     */
    public function updateNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNumberWithOptions($request, $runtime);
    }

    /**
     * @param Test02Request  $request
     * @param RuntimeOptions $runtime
     *
     * @return Test02Response
     */
    public function test02WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'test02',
            'version'     => '2021-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Test02Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Test02Request $request
     *
     * @return Test02Response
     */
    public function test02($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->test02WithOptions($request, $runtime);
    }
}
