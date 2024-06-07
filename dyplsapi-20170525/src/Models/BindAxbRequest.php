<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BindAxbRequest extends Model
{
    /**
     * @description The ID of the ASR model. On the [Automatic Speech Recognition (ASR) Model Management](https://dyplsnext.console.aliyun.com/?spm=5176.12818093.categories-n-products.ddypls.22e616d0a0tEFC#/asr) page, you can view the ID of the ASR model.
     *
     * @example 7ee372834d2f4cc7ac0d0ab2d0ae1aac
     *
     * @var string
     */
    public $ASRModelId;

    /**
     * @description Specifies whether to enable automatic speech recognition (ASR). Valid values:
     *
     *   **false** (default): disables ASR.
     *   **true**: enables ASR.
     *
     * @example false
     *
     * @var bool
     */
    public $ASRStatus;

    /**
     * @description Re-sets the phone number display logic in the AXB binding. Fixed value: **1**, indicating that phone number X is displayed on both the calling phone and the called phone.
     *
     * >  Due to the regulatory restrictions imposed by carriers, the setting to display real phone numbers during calls does not take effect.
     * @example 1
     *
     * @var int
     */
    public $callDisplayType;

    /**
     * @description The status of the one-way call restriction. Valid values:
     *
     *   **CONTROL_AX_DISABLE**: Phone number A cannot be used to call phone number X.
     *   **CONTROL_BX_DISABLE**: Phone number B cannot be used to call phone number X.
     *
     * @example CONTROL_AX_DISABLE
     *
     * @var string
     */
    public $callRestrict;

    /**
     * @description The maximum ringing duration for each number in sequential ringing. Unit: seconds. The value ranges from 5 to 20.
     *
     * @example 10
     *
     * @var int
     */
    public $callTimeout;

    /**
     * @description Specifies the dual tone multiple frequency (DTMF) key configuration in the AXB binding. The following content can be configured:
     *
     *   endCallIvrPhoneNo: for whom the audio is played, user A or user B.
     *   waitingDtmfTime: the maximum waiting time after the first audio is played. The maximum waiting time is 30 seconds.
     *   maxLoop: the maximum number of loop playback times of the first audio if the DTMF key is not matched. The maximum number of loop playback times is 5.
     *   step1File: the name of the first audio.
     *   step2File: the name of the second audio.
     *   validKey: the valid key values, such as 1,2. Only two valid key values can be set, and the key values are separated by a comma (,).
     *   waitingEndCall: The waiting duration to hang up a call. The waiting duration is allowed by a carrier. The maximum waiting duration is 10 seconds.
     *
     * @example {
     * }
     * @var string
     */
    public $dtmfConfig;

    /**
     * @description Specifies the city to which phone number X to be selected belongs.
     *
     *   If no phone number for the specified city is available in the current phone number pool or this parameter is not specified, a phone number that belongs to another city is randomly selected from the current phone number pool and assigned as phone number X.
     *   If**Number X Assignment Mode** is set to **Strict Matching Mode** and no phone number meets the requirement, the system displays an allocation error.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $expectCity;

    /**
     * @description The expiration time of the AXB binding.
     *
     * This parameter is required.
     * @example 2021-09-05 12:00:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @description Specifies whether to record all calls made by the bound phone numbers. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $isRecordingEnabled;

    /**
     * @description The extension field for the external business. This parameter is returned in a call record receipt.
     *
     * @example abcdef
     *
     * @var string
     */
    public $outId;

    /**
     * @description The ID of the external business.
     *
     * @example 34553330****
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Phone number A in the AXB binding.
     *
     * This parameter is required.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoA;

    /**
     * @description Phone number B in the AXB binding. If phone number A is used to call phone number X, the call is forwarded to phone number B. Phone number B can be set to a mobile phone number or a landline phone number. The landline phone number must be added with an area code, and no hyphen is required between the area code and the landline phone number.
     *
     * >  If you need to update phone number B, call the [UpdateSubscription](https://help.aliyun.com/document_detail/110253.html) operation.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoB;

    /**
     * @description Phone number X in the AXB binding.
     *
     * If you do not specify this parameter, a random phone number is selected from the phone number pool based on the value of the ExpectCity parameter and is used as phone number X.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @description The key of the phone number pool.
     *
     * Log on to the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) and view the key of the phone number pool on the **Number Pool Management** page.
     * @example FC5526*****
     *
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Sets the ringtone code for enterprise Color Ring Back Tone (CRBT) in the AXB binding.
     *
     *   Ringtone setting when phone number A is used to call phone number X in the AXB binding: AXBRing_A
     *   Ringtone setting when phone number B is used to call phone number X in the AXB binding: AXBRing_B
     *
     * Enterprise CRBT codes: Enterprise CRBT codes can be queried in the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account). You can choose **Number Pool Management** > **Enterprise CRBT Management** to view enterprise CRBT codes. You can also upload, delete, or perform other operations on enterprise CRBT codes.
     *
     * >  The bound enterprise CRBTs are preferentially used. If no enterprise CRBT is set or the setting does not take effect, the enterprise CRBTs at the phone number pool level are used.
     * @example {"AXBRing_B":"1000****1","AXBRing_A":"1000****1"}
     *
     * @var string
     */
    public $ringConfig;
    protected $_name = [
        'ASRModelId'           => 'ASRModelId',
        'ASRStatus'            => 'ASRStatus',
        'callDisplayType'      => 'CallDisplayType',
        'callRestrict'         => 'CallRestrict',
        'callTimeout'          => 'CallTimeout',
        'dtmfConfig'           => 'DtmfConfig',
        'expectCity'           => 'ExpectCity',
        'expiration'           => 'Expiration',
        'isRecordingEnabled'   => 'IsRecordingEnabled',
        'outId'                => 'OutId',
        'outOrderId'           => 'OutOrderId',
        'ownerId'              => 'OwnerId',
        'phoneNoA'             => 'PhoneNoA',
        'phoneNoB'             => 'PhoneNoB',
        'phoneNoX'             => 'PhoneNoX',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ringConfig'           => 'RingConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASRModelId) {
            $res['ASRModelId'] = $this->ASRModelId;
        }
        if (null !== $this->ASRStatus) {
            $res['ASRStatus'] = $this->ASRStatus;
        }
        if (null !== $this->callDisplayType) {
            $res['CallDisplayType'] = $this->callDisplayType;
        }
        if (null !== $this->callRestrict) {
            $res['CallRestrict'] = $this->callRestrict;
        }
        if (null !== $this->callTimeout) {
            $res['CallTimeout'] = $this->callTimeout;
        }
        if (null !== $this->dtmfConfig) {
            $res['DtmfConfig'] = $this->dtmfConfig;
        }
        if (null !== $this->expectCity) {
            $res['ExpectCity'] = $this->expectCity;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->isRecordingEnabled) {
            $res['IsRecordingEnabled'] = $this->isRecordingEnabled;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->outOrderId) {
            $res['OutOrderId'] = $this->outOrderId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }
        if (null !== $this->phoneNoX) {
            $res['PhoneNoX'] = $this->phoneNoX;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ringConfig) {
            $res['RingConfig'] = $this->ringConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAxbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASRModelId'])) {
            $model->ASRModelId = $map['ASRModelId'];
        }
        if (isset($map['ASRStatus'])) {
            $model->ASRStatus = $map['ASRStatus'];
        }
        if (isset($map['CallDisplayType'])) {
            $model->callDisplayType = $map['CallDisplayType'];
        }
        if (isset($map['CallRestrict'])) {
            $model->callRestrict = $map['CallRestrict'];
        }
        if (isset($map['CallTimeout'])) {
            $model->callTimeout = $map['CallTimeout'];
        }
        if (isset($map['DtmfConfig'])) {
            $model->dtmfConfig = $map['DtmfConfig'];
        }
        if (isset($map['ExpectCity'])) {
            $model->expectCity = $map['ExpectCity'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['IsRecordingEnabled'])) {
            $model->isRecordingEnabled = $map['IsRecordingEnabled'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['OutOrderId'])) {
            $model->outOrderId = $map['OutOrderId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }
        if (isset($map['PhoneNoX'])) {
            $model->phoneNoX = $map['PhoneNoX'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RingConfig'])) {
            $model->ringConfig = $map['RingConfig'];
        }

        return $model;
    }
}
