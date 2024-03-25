<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Tea\Model;

class GroupCallShrinkRequest extends Model
{
    /**
     * @description 被叫号码。上限为5万个。
     *
     * @var string
     */
    public $calledNumberShrink;

    /**
     * @description 主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。
     *
     * @example 852****1111
     *
     * @var string
     */
    public $callerIdNumber;

    /**
     * @description 国家/地区二字码，ISO2。
     *
     * @example HK
     *
     * @var string
     */
    public $countryId;

    /**
     * @description 预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description 语音文件的播放次数。取值范围：1~3。
     *
     * @example 1
     *
     * @var int
     */
    public $playTimes;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。
     *
     * @example 3
     *
     * @var int
     */
    public $sendType;

    /**
     * @example s****************D
     *
     * @var string
     */
    public $signature;

    /**
     * @example l*********y
     *
     * @var string
     */
    public $signatureNonce;

    /**
     * @description 语速控制，取值范围：-500~500。  音频类型为TTS时必传。录音文件可不传。
     *
     * @example 94
     *
     * @var int
     */
    public $speed;

    /**
     * @description 任务名称。
     *
     * @example 群呼任务
     *
     * @var string
     */
    public $taskName;

    /**
     * @example 20**-**-******10Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description 2022-05-01T08:00:00+08:00
     *
     * @example 定时发送的时间。
     *
     * @var string
     */
    public $timingStart;

    /**
     * @description 文本转语音的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。
     *
     * @example 1****01
     *
     * @var string
     */
    public $ttsCode;

    /**
     * @description 模板中的变量参数，JSON格式。
     *
     * @example {"code":"1234"}
     *
     * @var string
     */
    public $ttsParam;

    /**
     * @description 语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。
     *
     * @example 2*****01
     *
     * @var string
     */
    public $voiceCode;

    /**
     * @description 语音文件播放的音量。取值范围：0~100，默认取值100。
     *
     * @example 11
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'calledNumberShrink'   => 'CalledNumber',
        'callerIdNumber'       => 'CallerIdNumber',
        'countryId'            => 'CountryId',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'playTimes'            => 'PlayTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sendType'             => 'SendType',
        'signature'            => 'Signature',
        'signatureNonce'       => 'SignatureNonce',
        'speed'                => 'Speed',
        'taskName'             => 'TaskName',
        'timestamp'            => 'Timestamp',
        'timingStart'          => 'TimingStart',
        'ttsCode'              => 'TtsCode',
        'ttsParam'             => 'TtsParam',
        'voiceCode'            => 'VoiceCode',
        'volume'               => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumberShrink) {
            $res['CalledNumber'] = $this->calledNumberShrink;
        }
        if (null !== $this->callerIdNumber) {
            $res['CallerIdNumber'] = $this->callerIdNumber;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->playTimes) {
            $res['PlayTimes'] = $this->playTimes;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sendType) {
            $res['SendType'] = $this->sendType;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signatureNonce) {
            $res['SignatureNonce'] = $this->signatureNonce;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->timingStart) {
            $res['TimingStart'] = $this->timingStart;
        }
        if (null !== $this->ttsCode) {
            $res['TtsCode'] = $this->ttsCode;
        }
        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupCallShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumberShrink = $map['CalledNumber'];
        }
        if (isset($map['CallerIdNumber'])) {
            $model->callerIdNumber = $map['CallerIdNumber'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SendType'])) {
            $model->sendType = $map['SendType'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignatureNonce'])) {
            $model->signatureNonce = $map['SignatureNonce'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TimingStart'])) {
            $model->timingStart = $map['TimingStart'];
        }
        if (isset($map['TtsCode'])) {
            $model->ttsCode = $map['TtsCode'];
        }
        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
