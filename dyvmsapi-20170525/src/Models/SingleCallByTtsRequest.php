<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SingleCallByTtsRequest extends Model
{
    /**
     * @description The mobile phone number that receives voice notifications.
     *
     *   Number format in the Chinese mainland:
     *
     *   Mobile phone number, for example, 159\*\*\*\*0000.
     *   Landline number, for example, 0571\*\*\*\*5678.
     *
     *   Number format outside the Chinese mainland: country code + phone number, for example, 85200\*\*\*\*00.
     *
     * >
     *
     *   Each request supports only one called number. For more information, see [How to use voice notifications in the Chinese mainland](~~150016~~) or [How to use voice verification codes in regions outside the Chinese mainland](~~270044~~).
     *
     *   Voice verification codes are sent to a called number at the following frequency: one time per minute, five times per hour, and 20 times per 24 hours.
     *
     * @example 1590****000
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description The number displayed to the called party.
     *
     *   You do not need to specify this parameter if you use the text-to-speech (TTS) notification template or voice verification code template for outbound calls in the common mode. For more information, see [FAQ about the common outbound call mode](~~172104~~).
     *   If you use the TTS notification template or voice verification code template for outbound calls in the dedicated mode, you must specify a number you purchased and only one number can be specified. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and choose **Voice Numbers** > **Real Number Management** to view the number you purchased.
     *
     * @example 0571****5678
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description The custom ID that is reserved for the caller of the operation when the request is initiated. This ID is returned to the caller in a receipt message.
     *
     * The value is of the STRING type and must be 1 to 15 bytes in length.
     * @example 225869*****
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of times a voice notification is played back in a call. Valid values: 1 to 3. Default value: 3.
     *
     * @example 3
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
     * @description The playback speed. Valid value: -500 to 500.
     *
     * @example 5
     *
     * @var int
     */
    public $speed;

    /**
     * @description The ID of the approved TTS notification template or voice verification code template.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), and choose **Voice Messages** > **Voice Verification Codes** or choose **Voice Messages** > **Voice Notifications** to view the **template ID**.
     *
     * > The account to which the TTS template belongs must be the same as the account that is used to call the SingleCallByTts operation.
     * @example TTS_100****
     *
     * @var string
     */
    public $ttsCode;

    /**
     * @description The variables in the template, in the JSON format.
     *
     * > The variables in the template must be less than 250 characters in length. The length of each single variable is not limited. These variables do not support URLs. The variables in the verification code template support only digits and letters.
     * @example {"AckNum":"123456"}
     *
     * @var string
     */
    public $ttsParam;

    /**
     * @description The playback volume of the voice notification. Valid values: 0 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'calledNumber'         => 'CalledNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'playTimes'            => 'PlayTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'speed'                => 'Speed',
        'ttsCode'              => 'TtsCode',
        'ttsParam'             => 'TtsParam',
        'volume'               => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
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
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->ttsCode) {
            $res['TtsCode'] = $this->ttsCode;
        }
        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SingleCallByTtsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
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
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['TtsCode'])) {
            $model->ttsCode = $map['TtsCode'];
        }
        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
