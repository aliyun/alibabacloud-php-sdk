<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SingleCallByVoiceRequest extends Model
{
    /**
     * @description The number for receiving voice notifications.
     *
     * Number format:
     *
     *   In the Chinese mainland:
     *
     *   Mobile phone number, for example, 159\*\*\*\*0000.
     *   Landline number, for example, 0571\*\*\*\*5678.
     *
     *   Outside the Chinese mainland: country code + phone number, for example, 85200\*\*\*\*00.
     *
     * >
     *
     *   You can specify only one called number for a request. For more information, see [How to use voice notifications in the Chinese mainland](~~150016~~) or [How to use voice notifications in regions outside the Chinese mainland](~~268810~~).
     *
     *   Voice notifications are sent to a called number at the following frequency: one time per minute, five times per hour, and 20 times per 24 hours.
     *
     * @example 1590****000
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description The number displayed to the called party.
     *
     *   You do not need to specify this parameter if you use a voice notification file that uses the common outbound call mode. For more information, see [FAQ about the common outbound call mode](~~172104~~).
     *   If you use a voice notification file that uses the dedicated outbound call mode, you must specify a number that you purchased. You can specify only one number. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and choose **Real Number Service** > **Real Number Management** to view the number that you purchased.
     *
     * @example 0571****5678
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description The ID reserved for the caller. This ID is returned to the caller in a receipt message.
     *
     * The value must be of the STRING type and 1 to 15 bytes in length.
     * @example 22596****
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of times the voice notification file is played. Valid values: 1 to 3.
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
     * @description The playback speed of the voice notification file. Valid values: -500 to 500.
     *
     * @example 100
     *
     * @var int
     */
    public $speed;

    /**
     * @description The voice ID of the voice notification file.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications** or **Voice File Management**, and then click the **Voice Notification Files** tab to view the **voice ID**.
     * @example 2d4c-4e78-8d2a-afbb06cf****.wav
     *
     * @var string
     */
    public $voiceCode;

    /**
     * @description The playback volume of the voice notification file. Valid values: 0 to 100. Default value: 100.
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
        'voiceCode'            => 'VoiceCode',
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
     * @return SingleCallByVoiceRequest
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
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
