<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Dara\Model;

class SendNotificationForPartnerRequest extends Model
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
     * @var string[]
     */
    public $paramMap;

    /**
     * @var string
     */
    public $sendTarget;

    /**
     * @var string[]
     */
    public $smartSubChannels;

    /**
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

    public function validate()
    {
        if (\is_array($this->paramMap)) {
            Model::validateArray($this->paramMap);
        }
        if (\is_array($this->smartSubChannels)) {
            Model::validateArray($this->smartSubChannels);
        }
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

        if (null !== $this->paramMap) {
            if (\is_array($this->paramMap)) {
                $res['ParamMap'] = [];
                foreach ($this->paramMap as $key1 => $value1) {
                    $res['ParamMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sendTarget) {
            $res['SendTarget'] = $this->sendTarget;
        }

        if (null !== $this->smartSubChannels) {
            if (\is_array($this->smartSubChannels)) {
                $res['SmartSubChannels'] = [];
                $n1 = 0;
                foreach ($this->smartSubChannels as $item1) {
                    $res['SmartSubChannels'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['ParamMap'])) {
                $model->paramMap = [];
                foreach ($map['ParamMap'] as $key1 => $value1) {
                    $model->paramMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['SendTarget'])) {
            $model->sendTarget = $map['SendTarget'];
        }

        if (isset($map['SmartSubChannels'])) {
            if (!empty($map['SmartSubChannels'])) {
                $model->smartSubChannels = [];
                $n1 = 0;
                foreach ($map['SmartSubChannels'] as $item1) {
                    $model->smartSubChannels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }

        return $model;
    }
}
