<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BindAxnRequest extends Model
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
     * @example true
     *
     * @var bool
     */
    public $ASRStatus;

    /**
     * @description Re-sets the phone number display logic in the AXN binding. Fixed value: **1**, indicating that phone number X is displayed on both the calling phone and the called phone.
     *
     * >  Due to the regulatory restrictions imposed by carriers, the setting to display real phone numbers during calls does not take effect.
     * @example 1
     *
     * @var int
     */
    public $callDisplayType;

    /**
     * @description The status of one-way call restrictions. Valid values:
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
     * @description The maximum ringing duration for each number in sequential ringing. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $callTimeout;

    /**
     * @description Specifies the city to which phone number X to be selected belongs.
     *
     *   If no phone number for the specified city is available in the current phone number pool or this parameter is not specified, a phone number that belongs to another city is randomly selected from the current phone number pool and assigned as phone number X.
     *   If **Number X Assignment Mode** is set to **Strict Matching Mode** and no phone number meets the requirement, the system displays an allocation error.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $expectCity;

    /**
     * @description The expiration time of the AXN binding. Unit: seconds.
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
     * @description The type of the phone number.
     *
     * >  This parameter is applicable to the key accounts of Alibaba Cloud. This parameter can be ignored for Alibaba Cloud users.
     * @example AXB_170
     *
     * @var string
     */
    public $noType;

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
     * @description Phone number A in the AXN binding. Phone number A can be set to a mobile phone number or a landline phone number. The landline phone number must be added with an area code, and no hyphen is required between the area code and the landline phone number.
     *
     * This parameter is required.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoA;

    /**
     * @description Phone number B in the AXN binding. If phone number A is used to call phone number X, the call is forwarded to phone number B. Phone number B can be set to a mobile phone number or a landline phone number. The landline phone number must be added with an area code, and no hyphen is required between the area code and the landline phone number.
     *
     * >  If phone number B is not specified in the AXN binding, the system automatically generates a nonexistent number. If phone number A is used to call phone number X, the nonexistent number is returned. If you need to update phone number B, call the [UpdateSubscription](https://help.aliyun.com/document_detail/110253.html) operation.
     * @example 138****0000
     *
     * @var string
     */
    public $phoneNoB;

    /**
     * @description Phone number X in the AXN binding. Phone number X is the phone number that you purchased in the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account) or by using the [BuySecretNo](https://help.aliyun.com/document_detail/110266.html) operation before you bind a phone number. Phone number X is used to forward calls.
     *
     * >  If you do not specify this parameter, a random phone number is selected from the phone number pool based on the value of the ExpectCity parameter and is used as phone number X.
     * @example 139****0000
     *
     * @var string
     */
    public $phoneNoX;

    /**
     * @description The key of the phone number pool. Log on to the [Phone Number Protection console ](https://dypls.console.aliyun.com/dypls.htm#/account)and view the key of the phone number pool on the **Number Pool Management** page.
     *
     * @example FC2256****
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
     * @description Sets the ringtone code for enterprise Color Ring Back Tone (CRBT) in the AXN extension binding.
     *
     *   Ringtone setting (with a callback number) when phone number A is used to call phone number X in the AXN extension binding: AXNRing_AB
     *   Ringtone setting (without a callback number) when phone number A is used to call phone number X in the AXN extension binding: AXNRing_A
     *   Ringtone setting when an N-side number is used to call phone number X in the AXN extension binding: AXNRing_N
     *
     * Enterprise CRBT codes: Enterprise CRBT codes can be queried in the [Phone Number Protection console](https://dypls.console.aliyun.com/dypls.htm#/account). You can choose **Number Pool Management > Enterprise CRBT Management** to view enterprise CRBT codes. You can also upload, delete, or perform other operations on enterprise CRBT codes.
     *
     * >  The bound enterprise CRBTs are preferentially used. If no enterprise CRBT is set or the setting does not take effect, the enterprise CRBTs at the phone number pool level are used.
     * @example {"AXNRing_N":"100000001","AXNRing_A":"100000001"}
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
        'expectCity'           => 'ExpectCity',
        'expiration'           => 'Expiration',
        'isRecordingEnabled'   => 'IsRecordingEnabled',
        'noType'               => 'NoType',
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
        if (null !== $this->expectCity) {
            $res['ExpectCity'] = $this->expectCity;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->isRecordingEnabled) {
            $res['IsRecordingEnabled'] = $this->isRecordingEnabled;
        }
        if (null !== $this->noType) {
            $res['NoType'] = $this->noType;
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
     * @return BindAxnRequest
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
        if (isset($map['ExpectCity'])) {
            $model->expectCity = $map['ExpectCity'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['IsRecordingEnabled'])) {
            $model->isRecordingEnabled = $map['IsRecordingEnabled'];
        }
        if (isset($map['NoType'])) {
            $model->noType = $map['NoType'];
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
