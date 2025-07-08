<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryMessageCallbackNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $aiccsCallMidRecordCallbackUrl;

    /**
     * @var string
     */
    public $aiccsCallRecordCallbackUrl;

    /**
     * @var string
     */
    public $aiccsSentRecordCallbackUrl;

    /**
     * @var string
     */
    public $artcCdrReportCallBackUrl;

    /**
     * @var string
     */
    public $artcTempStatusReportCallBackUrl;

    /**
     * @var string
     */
    public $cardDyncResCallbackUrl;

    /**
     * @var string
     */
    public $cardTemplateCallBackUrl;

    /**
     * @var string
     */
    public $cardVerderCallBackUrl;

    /**
     * @var string
     */
    public $dcdpCallbackUrl;

    /**
     * @var string
     */
    public $digitSmsTemplateCallBackUrl;

    /**
     * @var bool
     */
    public $globeSmsReportCallback;

    /**
     * @var string
     */
    public $globeSmsReportCallbackUrl;

    /**
     * @var bool
     */
    public $isAiccsCallMidRecord;

    /**
     * @var bool
     */
    public $isAiccsCallRecord;

    /**
     * @var bool
     */
    public $isAiccsSentRecord;

    /**
     * @var bool
     */
    public $isArtcCdrReportCallBack;

    /**
     * @var bool
     */
    public $isArtcTempStatusReportCallBack;

    /**
     * @var bool
     */
    public $isDcdpCallback;

    /**
     * @var bool
     */
    public $isDigitSmsTemplateCallBack;

    /**
     * @var bool
     */
    public $isGlobeSmsReportCallback;

    /**
     * @var bool
     */
    public $isOpened;

    /**
     * @var bool
     */
    public $isSecretReportMessageCallback;

    /**
     * @var bool
     */
    public $isSecretSmsMessageCallback;

    /**
     * @var bool
     */
    public $isSignReportCallback;

    /**
     * @var bool
     */
    public $isSmartCallAsrCallBack;

    /**
     * @var bool
     */
    public $isSmsReportMessageCallback;

    /**
     * @var bool
     */
    public $isSmsUpMessageCallback;

    /**
     * @var bool
     */
    public $isTemplateReportCallback;

    /**
     * @var bool
     */
    public $isVoiceAsrCallBack;

    /**
     * @var bool
     */
    public $isVoiceCallMidStateCallBack;

    /**
     * @var bool
     */
    public $isVoiceCallRecordCallBack;

    /**
     * @var bool
     */
    public $isVoiceRecordingCallBack;

    /**
     * @var string
     */
    public $reportCallbackUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secretCallbackUrl;

    /**
     * @var string
     */
    public $secretSmsCallbackUrl;

    /**
     * @var string
     */
    public $shortLinkCallBackUrl;

    /**
     * @var string
     */
    public $signReportCallbackUrl;

    /**
     * @var string
     */
    public $smartCallAsrCallBackUrl;

    /**
     * @var string
     */
    public $templateReportCallbackUrl;

    /**
     * @var string
     */
    public $upCallbackUrl;

    /**
     * @var string
     */
    public $voiceAsrCallBackUrl;

    /**
     * @var string
     */
    public $voiceCallMidStateCallBackUrl;

    /**
     * @var string
     */
    public $voiceCallRecordCallBackUrl;

    /**
     * @var string
     */
    public $voiceRecordingCallBackUrl;
    protected $_name = [
        'aiccsCallMidRecordCallbackUrl' => 'AiccsCallMidRecordCallbackUrl',
        'aiccsCallRecordCallbackUrl' => 'AiccsCallRecordCallbackUrl',
        'aiccsSentRecordCallbackUrl' => 'AiccsSentRecordCallbackUrl',
        'artcCdrReportCallBackUrl' => 'ArtcCdrReportCallBackUrl',
        'artcTempStatusReportCallBackUrl' => 'ArtcTempStatusReportCallBackUrl',
        'cardDyncResCallbackUrl' => 'CardDyncResCallbackUrl',
        'cardTemplateCallBackUrl' => 'CardTemplateCallBackUrl',
        'cardVerderCallBackUrl' => 'CardVerderCallBackUrl',
        'dcdpCallbackUrl' => 'DcdpCallbackUrl',
        'digitSmsTemplateCallBackUrl' => 'DigitSmsTemplateCallBackUrl',
        'globeSmsReportCallback' => 'GlobeSmsReportCallback',
        'globeSmsReportCallbackUrl' => 'GlobeSmsReportCallbackUrl',
        'isAiccsCallMidRecord' => 'IsAiccsCallMidRecord',
        'isAiccsCallRecord' => 'IsAiccsCallRecord',
        'isAiccsSentRecord' => 'IsAiccsSentRecord',
        'isArtcCdrReportCallBack' => 'IsArtcCdrReportCallBack',
        'isArtcTempStatusReportCallBack' => 'IsArtcTempStatusReportCallBack',
        'isDcdpCallback' => 'IsDcdpCallback',
        'isDigitSmsTemplateCallBack' => 'IsDigitSmsTemplateCallBack',
        'isGlobeSmsReportCallback' => 'IsGlobeSmsReportCallback',
        'isOpened' => 'IsOpened',
        'isSecretReportMessageCallback' => 'IsSecretReportMessageCallback',
        'isSecretSmsMessageCallback' => 'IsSecretSmsMessageCallback',
        'isSignReportCallback' => 'IsSignReportCallback',
        'isSmartCallAsrCallBack' => 'IsSmartCallAsrCallBack',
        'isSmsReportMessageCallback' => 'IsSmsReportMessageCallback',
        'isSmsUpMessageCallback' => 'IsSmsUpMessageCallback',
        'isTemplateReportCallback' => 'IsTemplateReportCallback',
        'isVoiceAsrCallBack' => 'IsVoiceAsrCallBack',
        'isVoiceCallMidStateCallBack' => 'IsVoiceCallMidStateCallBack',
        'isVoiceCallRecordCallBack' => 'IsVoiceCallRecordCallBack',
        'isVoiceRecordingCallBack' => 'IsVoiceRecordingCallBack',
        'reportCallbackUrl' => 'ReportCallbackUrl',
        'requestId' => 'RequestId',
        'secretCallbackUrl' => 'SecretCallbackUrl',
        'secretSmsCallbackUrl' => 'SecretSmsCallbackUrl',
        'shortLinkCallBackUrl' => 'ShortLinkCallBackUrl',
        'signReportCallbackUrl' => 'SignReportCallbackUrl',
        'smartCallAsrCallBackUrl' => 'SmartCallAsrCallBackUrl',
        'templateReportCallbackUrl' => 'TemplateReportCallbackUrl',
        'upCallbackUrl' => 'UpCallbackUrl',
        'voiceAsrCallBackUrl' => 'VoiceAsrCallBackUrl',
        'voiceCallMidStateCallBackUrl' => 'VoiceCallMidStateCallBackUrl',
        'voiceCallRecordCallBackUrl' => 'VoiceCallRecordCallBackUrl',
        'voiceRecordingCallBackUrl' => 'VoiceRecordingCallBackUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiccsCallMidRecordCallbackUrl) {
            $res['AiccsCallMidRecordCallbackUrl'] = $this->aiccsCallMidRecordCallbackUrl;
        }

        if (null !== $this->aiccsCallRecordCallbackUrl) {
            $res['AiccsCallRecordCallbackUrl'] = $this->aiccsCallRecordCallbackUrl;
        }

        if (null !== $this->aiccsSentRecordCallbackUrl) {
            $res['AiccsSentRecordCallbackUrl'] = $this->aiccsSentRecordCallbackUrl;
        }

        if (null !== $this->artcCdrReportCallBackUrl) {
            $res['ArtcCdrReportCallBackUrl'] = $this->artcCdrReportCallBackUrl;
        }

        if (null !== $this->artcTempStatusReportCallBackUrl) {
            $res['ArtcTempStatusReportCallBackUrl'] = $this->artcTempStatusReportCallBackUrl;
        }

        if (null !== $this->cardDyncResCallbackUrl) {
            $res['CardDyncResCallbackUrl'] = $this->cardDyncResCallbackUrl;
        }

        if (null !== $this->cardTemplateCallBackUrl) {
            $res['CardTemplateCallBackUrl'] = $this->cardTemplateCallBackUrl;
        }

        if (null !== $this->cardVerderCallBackUrl) {
            $res['CardVerderCallBackUrl'] = $this->cardVerderCallBackUrl;
        }

        if (null !== $this->dcdpCallbackUrl) {
            $res['DcdpCallbackUrl'] = $this->dcdpCallbackUrl;
        }

        if (null !== $this->digitSmsTemplateCallBackUrl) {
            $res['DigitSmsTemplateCallBackUrl'] = $this->digitSmsTemplateCallBackUrl;
        }

        if (null !== $this->globeSmsReportCallback) {
            $res['GlobeSmsReportCallback'] = $this->globeSmsReportCallback;
        }

        if (null !== $this->globeSmsReportCallbackUrl) {
            $res['GlobeSmsReportCallbackUrl'] = $this->globeSmsReportCallbackUrl;
        }

        if (null !== $this->isAiccsCallMidRecord) {
            $res['IsAiccsCallMidRecord'] = $this->isAiccsCallMidRecord;
        }

        if (null !== $this->isAiccsCallRecord) {
            $res['IsAiccsCallRecord'] = $this->isAiccsCallRecord;
        }

        if (null !== $this->isAiccsSentRecord) {
            $res['IsAiccsSentRecord'] = $this->isAiccsSentRecord;
        }

        if (null !== $this->isArtcCdrReportCallBack) {
            $res['IsArtcCdrReportCallBack'] = $this->isArtcCdrReportCallBack;
        }

        if (null !== $this->isArtcTempStatusReportCallBack) {
            $res['IsArtcTempStatusReportCallBack'] = $this->isArtcTempStatusReportCallBack;
        }

        if (null !== $this->isDcdpCallback) {
            $res['IsDcdpCallback'] = $this->isDcdpCallback;
        }

        if (null !== $this->isDigitSmsTemplateCallBack) {
            $res['IsDigitSmsTemplateCallBack'] = $this->isDigitSmsTemplateCallBack;
        }

        if (null !== $this->isGlobeSmsReportCallback) {
            $res['IsGlobeSmsReportCallback'] = $this->isGlobeSmsReportCallback;
        }

        if (null !== $this->isOpened) {
            $res['IsOpened'] = $this->isOpened;
        }

        if (null !== $this->isSecretReportMessageCallback) {
            $res['IsSecretReportMessageCallback'] = $this->isSecretReportMessageCallback;
        }

        if (null !== $this->isSecretSmsMessageCallback) {
            $res['IsSecretSmsMessageCallback'] = $this->isSecretSmsMessageCallback;
        }

        if (null !== $this->isSignReportCallback) {
            $res['IsSignReportCallback'] = $this->isSignReportCallback;
        }

        if (null !== $this->isSmartCallAsrCallBack) {
            $res['IsSmartCallAsrCallBack'] = $this->isSmartCallAsrCallBack;
        }

        if (null !== $this->isSmsReportMessageCallback) {
            $res['IsSmsReportMessageCallback'] = $this->isSmsReportMessageCallback;
        }

        if (null !== $this->isSmsUpMessageCallback) {
            $res['IsSmsUpMessageCallback'] = $this->isSmsUpMessageCallback;
        }

        if (null !== $this->isTemplateReportCallback) {
            $res['IsTemplateReportCallback'] = $this->isTemplateReportCallback;
        }

        if (null !== $this->isVoiceAsrCallBack) {
            $res['IsVoiceAsrCallBack'] = $this->isVoiceAsrCallBack;
        }

        if (null !== $this->isVoiceCallMidStateCallBack) {
            $res['IsVoiceCallMidStateCallBack'] = $this->isVoiceCallMidStateCallBack;
        }

        if (null !== $this->isVoiceCallRecordCallBack) {
            $res['IsVoiceCallRecordCallBack'] = $this->isVoiceCallRecordCallBack;
        }

        if (null !== $this->isVoiceRecordingCallBack) {
            $res['IsVoiceRecordingCallBack'] = $this->isVoiceRecordingCallBack;
        }

        if (null !== $this->reportCallbackUrl) {
            $res['ReportCallbackUrl'] = $this->reportCallbackUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->secretCallbackUrl) {
            $res['SecretCallbackUrl'] = $this->secretCallbackUrl;
        }

        if (null !== $this->secretSmsCallbackUrl) {
            $res['SecretSmsCallbackUrl'] = $this->secretSmsCallbackUrl;
        }

        if (null !== $this->shortLinkCallBackUrl) {
            $res['ShortLinkCallBackUrl'] = $this->shortLinkCallBackUrl;
        }

        if (null !== $this->signReportCallbackUrl) {
            $res['SignReportCallbackUrl'] = $this->signReportCallbackUrl;
        }

        if (null !== $this->smartCallAsrCallBackUrl) {
            $res['SmartCallAsrCallBackUrl'] = $this->smartCallAsrCallBackUrl;
        }

        if (null !== $this->templateReportCallbackUrl) {
            $res['TemplateReportCallbackUrl'] = $this->templateReportCallbackUrl;
        }

        if (null !== $this->upCallbackUrl) {
            $res['UpCallbackUrl'] = $this->upCallbackUrl;
        }

        if (null !== $this->voiceAsrCallBackUrl) {
            $res['VoiceAsrCallBackUrl'] = $this->voiceAsrCallBackUrl;
        }

        if (null !== $this->voiceCallMidStateCallBackUrl) {
            $res['VoiceCallMidStateCallBackUrl'] = $this->voiceCallMidStateCallBackUrl;
        }

        if (null !== $this->voiceCallRecordCallBackUrl) {
            $res['VoiceCallRecordCallBackUrl'] = $this->voiceCallRecordCallBackUrl;
        }

        if (null !== $this->voiceRecordingCallBackUrl) {
            $res['VoiceRecordingCallBackUrl'] = $this->voiceRecordingCallBackUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiccsCallMidRecordCallbackUrl'])) {
            $model->aiccsCallMidRecordCallbackUrl = $map['AiccsCallMidRecordCallbackUrl'];
        }

        if (isset($map['AiccsCallRecordCallbackUrl'])) {
            $model->aiccsCallRecordCallbackUrl = $map['AiccsCallRecordCallbackUrl'];
        }

        if (isset($map['AiccsSentRecordCallbackUrl'])) {
            $model->aiccsSentRecordCallbackUrl = $map['AiccsSentRecordCallbackUrl'];
        }

        if (isset($map['ArtcCdrReportCallBackUrl'])) {
            $model->artcCdrReportCallBackUrl = $map['ArtcCdrReportCallBackUrl'];
        }

        if (isset($map['ArtcTempStatusReportCallBackUrl'])) {
            $model->artcTempStatusReportCallBackUrl = $map['ArtcTempStatusReportCallBackUrl'];
        }

        if (isset($map['CardDyncResCallbackUrl'])) {
            $model->cardDyncResCallbackUrl = $map['CardDyncResCallbackUrl'];
        }

        if (isset($map['CardTemplateCallBackUrl'])) {
            $model->cardTemplateCallBackUrl = $map['CardTemplateCallBackUrl'];
        }

        if (isset($map['CardVerderCallBackUrl'])) {
            $model->cardVerderCallBackUrl = $map['CardVerderCallBackUrl'];
        }

        if (isset($map['DcdpCallbackUrl'])) {
            $model->dcdpCallbackUrl = $map['DcdpCallbackUrl'];
        }

        if (isset($map['DigitSmsTemplateCallBackUrl'])) {
            $model->digitSmsTemplateCallBackUrl = $map['DigitSmsTemplateCallBackUrl'];
        }

        if (isset($map['GlobeSmsReportCallback'])) {
            $model->globeSmsReportCallback = $map['GlobeSmsReportCallback'];
        }

        if (isset($map['GlobeSmsReportCallbackUrl'])) {
            $model->globeSmsReportCallbackUrl = $map['GlobeSmsReportCallbackUrl'];
        }

        if (isset($map['IsAiccsCallMidRecord'])) {
            $model->isAiccsCallMidRecord = $map['IsAiccsCallMidRecord'];
        }

        if (isset($map['IsAiccsCallRecord'])) {
            $model->isAiccsCallRecord = $map['IsAiccsCallRecord'];
        }

        if (isset($map['IsAiccsSentRecord'])) {
            $model->isAiccsSentRecord = $map['IsAiccsSentRecord'];
        }

        if (isset($map['IsArtcCdrReportCallBack'])) {
            $model->isArtcCdrReportCallBack = $map['IsArtcCdrReportCallBack'];
        }

        if (isset($map['IsArtcTempStatusReportCallBack'])) {
            $model->isArtcTempStatusReportCallBack = $map['IsArtcTempStatusReportCallBack'];
        }

        if (isset($map['IsDcdpCallback'])) {
            $model->isDcdpCallback = $map['IsDcdpCallback'];
        }

        if (isset($map['IsDigitSmsTemplateCallBack'])) {
            $model->isDigitSmsTemplateCallBack = $map['IsDigitSmsTemplateCallBack'];
        }

        if (isset($map['IsGlobeSmsReportCallback'])) {
            $model->isGlobeSmsReportCallback = $map['IsGlobeSmsReportCallback'];
        }

        if (isset($map['IsOpened'])) {
            $model->isOpened = $map['IsOpened'];
        }

        if (isset($map['IsSecretReportMessageCallback'])) {
            $model->isSecretReportMessageCallback = $map['IsSecretReportMessageCallback'];
        }

        if (isset($map['IsSecretSmsMessageCallback'])) {
            $model->isSecretSmsMessageCallback = $map['IsSecretSmsMessageCallback'];
        }

        if (isset($map['IsSignReportCallback'])) {
            $model->isSignReportCallback = $map['IsSignReportCallback'];
        }

        if (isset($map['IsSmartCallAsrCallBack'])) {
            $model->isSmartCallAsrCallBack = $map['IsSmartCallAsrCallBack'];
        }

        if (isset($map['IsSmsReportMessageCallback'])) {
            $model->isSmsReportMessageCallback = $map['IsSmsReportMessageCallback'];
        }

        if (isset($map['IsSmsUpMessageCallback'])) {
            $model->isSmsUpMessageCallback = $map['IsSmsUpMessageCallback'];
        }

        if (isset($map['IsTemplateReportCallback'])) {
            $model->isTemplateReportCallback = $map['IsTemplateReportCallback'];
        }

        if (isset($map['IsVoiceAsrCallBack'])) {
            $model->isVoiceAsrCallBack = $map['IsVoiceAsrCallBack'];
        }

        if (isset($map['IsVoiceCallMidStateCallBack'])) {
            $model->isVoiceCallMidStateCallBack = $map['IsVoiceCallMidStateCallBack'];
        }

        if (isset($map['IsVoiceCallRecordCallBack'])) {
            $model->isVoiceCallRecordCallBack = $map['IsVoiceCallRecordCallBack'];
        }

        if (isset($map['IsVoiceRecordingCallBack'])) {
            $model->isVoiceRecordingCallBack = $map['IsVoiceRecordingCallBack'];
        }

        if (isset($map['ReportCallbackUrl'])) {
            $model->reportCallbackUrl = $map['ReportCallbackUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecretCallbackUrl'])) {
            $model->secretCallbackUrl = $map['SecretCallbackUrl'];
        }

        if (isset($map['SecretSmsCallbackUrl'])) {
            $model->secretSmsCallbackUrl = $map['SecretSmsCallbackUrl'];
        }

        if (isset($map['ShortLinkCallBackUrl'])) {
            $model->shortLinkCallBackUrl = $map['ShortLinkCallBackUrl'];
        }

        if (isset($map['SignReportCallbackUrl'])) {
            $model->signReportCallbackUrl = $map['SignReportCallbackUrl'];
        }

        if (isset($map['SmartCallAsrCallBackUrl'])) {
            $model->smartCallAsrCallBackUrl = $map['SmartCallAsrCallBackUrl'];
        }

        if (isset($map['TemplateReportCallbackUrl'])) {
            $model->templateReportCallbackUrl = $map['TemplateReportCallbackUrl'];
        }

        if (isset($map['UpCallbackUrl'])) {
            $model->upCallbackUrl = $map['UpCallbackUrl'];
        }

        if (isset($map['VoiceAsrCallBackUrl'])) {
            $model->voiceAsrCallBackUrl = $map['VoiceAsrCallBackUrl'];
        }

        if (isset($map['VoiceCallMidStateCallBackUrl'])) {
            $model->voiceCallMidStateCallBackUrl = $map['VoiceCallMidStateCallBackUrl'];
        }

        if (isset($map['VoiceCallRecordCallBackUrl'])) {
            $model->voiceCallRecordCallBackUrl = $map['VoiceCallRecordCallBackUrl'];
        }

        if (isset($map['VoiceRecordingCallBackUrl'])) {
            $model->voiceRecordingCallBackUrl = $map['VoiceRecordingCallBackUrl'];
        }

        return $model;
    }
}
