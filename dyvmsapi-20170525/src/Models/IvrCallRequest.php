<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest\menuKeyMap;
use AlibabaCloud\Tea\Model;

class IvrCallRequest extends Model
{
    /**
     * @description The end voice.
     *
     *   If you use a voice notification file, this parameter specifies the voice ID. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications**, and then click the **Voice Notification Files** tab to view the voice ID.
     *   If you use a TTS template, this parameter specifies the template ID. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications**, and then click the **TTS Template** tab to view the template ID.
     *
     * > The value of the ByeCode parameter must be of the same type as the value of the StartCode parameter. This means that both parameters must specify voice IDs or TTS template IDs.
     * @example TTS_1234****
     *
     * @var string
     */
    public $byeCode;

    /**
     * @description The variables in the TTS template, in the JSON format.
     *
     * > This parameter is required when the ByeCode parameter is set to the ID of a TTS template that contains variables.
     * @example {"name":"xxx","code":"123"}
     *
     * @var string
     */
    public $byeTtsParams;

    /**
     * @description The called number.
     *
     * Only phone numbers in the Chinese mainland are supported. Each request supports only one called number.
     * @example 1590****000
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description The calling number.
     *
     * The value must be a number you purchased. Each request supports only one calling number. In most cases, a calling number is configured with the maximum number of concurrent requests. New requests fail if the maximum number of concurrent requests is reached. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home) and choose **Real Number Service > Real Number Management** to view the number you purchased.
     * @example 0571****5678
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description The information about the key pressed by the subscriber.
     *
     * @var menuKeyMap[]
     */
    public $menuKeyMap;

    /**
     * @description The ID that is reserved for the caller of the operation. This ID is returned to the caller in a receipt message.
     *
     * The value is of the STRING type and must be 1 to 15 bytes in length.
     * @example PR0210428****
     *
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of replay times. Valid values: 1 to 3.
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
     * @description The voice that is played when the call begins.
     *
     *   If you use a voice notification file, this parameter specifies the voice ID. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > Voice Notifications, and then click the **Voice Notification Files** tab to view the voice ID.
     *   If you use a text-to-speech (TTS) template, this parameter specifies the template ID. You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Voice Messages** > **Voice Notifications**, and then click the **TTS Template** tab to view the template ID.
     *
     * @example TTS_1234****
     *
     * @var string
     */
    public $startCode;

    /**
     * @description The variables in the TTS template, in the JSON format.
     *
     * > This parameter is required when the StartCode parameter is set to the ID of a TTS template that contains variables.
     * @example {"name":"xxx","code":"123"}
     *
     * @var string
     */
    public $startTtsParams;

    /**
     * @description The timeout period for the subscriber to press a key. Unit: milliseconds.
     *
     * @example 3000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'byeCode'              => 'ByeCode',
        'byeTtsParams'         => 'ByeTtsParams',
        'calledNumber'         => 'CalledNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'menuKeyMap'           => 'MenuKeyMap',
        'outId'                => 'OutId',
        'ownerId'              => 'OwnerId',
        'playTimes'            => 'PlayTimes',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startCode'            => 'StartCode',
        'startTtsParams'       => 'StartTtsParams',
        'timeout'              => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->byeCode) {
            $res['ByeCode'] = $this->byeCode;
        }
        if (null !== $this->byeTtsParams) {
            $res['ByeTtsParams'] = $this->byeTtsParams;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->menuKeyMap) {
            $res['MenuKeyMap'] = [];
            if (null !== $this->menuKeyMap && \is_array($this->menuKeyMap)) {
                $n = 0;
                foreach ($this->menuKeyMap as $item) {
                    $res['MenuKeyMap'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->startCode) {
            $res['StartCode'] = $this->startCode;
        }
        if (null !== $this->startTtsParams) {
            $res['StartTtsParams'] = $this->startTtsParams;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IvrCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByeCode'])) {
            $model->byeCode = $map['ByeCode'];
        }
        if (isset($map['ByeTtsParams'])) {
            $model->byeTtsParams = $map['ByeTtsParams'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['MenuKeyMap'])) {
            if (!empty($map['MenuKeyMap'])) {
                $model->menuKeyMap = [];
                $n                 = 0;
                foreach ($map['MenuKeyMap'] as $item) {
                    $model->menuKeyMap[$n++] = null !== $item ? menuKeyMap::fromMap($item) : $item;
                }
            }
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
        if (isset($map['StartCode'])) {
            $model->startCode = $map['StartCode'];
        }
        if (isset($map['StartTtsParams'])) {
            $model->startTtsParams = $map['StartTtsParams'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
