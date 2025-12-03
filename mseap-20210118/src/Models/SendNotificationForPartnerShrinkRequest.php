<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Dara\Model;

class SendNotificationForPartnerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var string
     */
    public $notifycationEventType;

    /**
     * @var string
     */
    public $paramMapShrink;

    /**
     * @var string
     */
    public $sendTarget;

    /**
     * @var string
     */
    public $smartSubChannelsShrink;

    /**
     * @var string
     */
    public $trackId;
    protected $_name = [
        'bizId' => 'BizId',
        'channelType' => 'ChannelType',
        'notifyType' => 'NotifyType',
        'notifycationEventType' => 'NotifycationEventType',
        'paramMapShrink' => 'ParamMap',
        'sendTarget' => 'SendTarget',
        'smartSubChannelsShrink' => 'SmartSubChannels',
        'trackId' => 'TrackId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }

        if (null !== $this->notifycationEventType) {
            $res['NotifycationEventType'] = $this->notifycationEventType;
        }

        if (null !== $this->paramMapShrink) {
            $res['ParamMap'] = $this->paramMapShrink;
        }

        if (null !== $this->sendTarget) {
            $res['SendTarget'] = $this->sendTarget;
        }

        if (null !== $this->smartSubChannelsShrink) {
            $res['SmartSubChannels'] = $this->smartSubChannelsShrink;
        }

        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        if (isset($map['NotifycationEventType'])) {
            $model->notifycationEventType = $map['NotifycationEventType'];
        }

        if (isset($map['ParamMap'])) {
            $model->paramMapShrink = $map['ParamMap'];
        }

        if (isset($map['SendTarget'])) {
            $model->sendTarget = $map['SendTarget'];
        }

        if (isset($map['SmartSubChannels'])) {
            $model->smartSubChannelsShrink = $map['SmartSubChannels'];
        }

        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }

        return $model;
    }
}
