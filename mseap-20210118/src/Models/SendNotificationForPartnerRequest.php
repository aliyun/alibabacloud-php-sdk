<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class SendNotificationForPartnerRequest extends Model
{
    /**
     * @example DMP
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1
     *
     * @var string
     */
    public $channelType;

    /**
     * @example MESSAGE
     *
     * @var string
     */
    public $notifyType;

    /**
     * @example dmp_website_xxx
     *
     * @var string
     */
    public $notifycationEventType;

    /**
     * @var string[]
     */
    public $paramMap;

    /**
     * @example 12312212312
     *
     * @var string
     */
    public $sendTarget;

    /**
     * @var string[]
     */
    public $smartSubChannels;

    /**
     * @example 5b29647n-a172-4ccd-ba33-73669896c287
     *
     * @var string
     */
    public $trackId;
    protected $_name = [
        'bizId' => 'BizId',
        'channelType' => 'ChannelType',
        'notifyType' => 'NotifyType',
        'notifycationEventType' => 'NotifycationEventType',
        'paramMap' => 'ParamMap',
        'sendTarget' => 'SendTarget',
        'smartSubChannels' => 'SmartSubChannels',
        'trackId' => 'TrackId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->paramMap) {
            $res['ParamMap'] = $this->paramMap;
        }
        if (null !== $this->sendTarget) {
            $res['SendTarget'] = $this->sendTarget;
        }
        if (null !== $this->smartSubChannels) {
            $res['SmartSubChannels'] = $this->smartSubChannels;
        }
        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendNotificationForPartnerRequest
     */
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
            $model->paramMap = $map['ParamMap'];
        }
        if (isset($map['SendTarget'])) {
            $model->sendTarget = $map['SendTarget'];
        }
        if (isset($map['SmartSubChannels'])) {
            if (!empty($map['SmartSubChannels'])) {
                $model->smartSubChannels = $map['SmartSubChannels'];
            }
        }
        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }

        return $model;
    }
}
