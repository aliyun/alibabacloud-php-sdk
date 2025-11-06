<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartViewShrinkRequest\bgColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartViewShrinkRequest\regionColor;

class StartViewShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bgColor
     */
    public $bgColor;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $cropMode;

    /**
     * @var regionColor
     */
    public $regionColor;

    /**
     * @var bool
     */
    public $startWithoutChannel;

    /**
     * @var int
     */
    public $startWithoutChannelWaitTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $viewContent;

    /**
     * @var string
     */
    public $viewSubscribersShrink;
    protected $_name = [
        'appId' => 'AppId',
        'bgColor' => 'BgColor',
        'channelId' => 'ChannelId',
        'cropMode' => 'CropMode',
        'regionColor' => 'RegionColor',
        'startWithoutChannel' => 'StartWithoutChannel',
        'startWithoutChannelWaitTime' => 'StartWithoutChannelWaitTime',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'viewContent' => 'ViewContent',
        'viewSubscribersShrink' => 'ViewSubscribers',
    ];

    public function validate()
    {
        if (null !== $this->bgColor) {
            $this->bgColor->validate();
        }
        if (null !== $this->regionColor) {
            $this->regionColor->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->bgColor) {
            $res['BgColor'] = null !== $this->bgColor ? $this->bgColor->toArray($noStream) : $this->bgColor;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }

        if (null !== $this->regionColor) {
            $res['RegionColor'] = null !== $this->regionColor ? $this->regionColor->toArray($noStream) : $this->regionColor;
        }

        if (null !== $this->startWithoutChannel) {
            $res['StartWithoutChannel'] = $this->startWithoutChannel;
        }

        if (null !== $this->startWithoutChannelWaitTime) {
            $res['StartWithoutChannelWaitTime'] = $this->startWithoutChannelWaitTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->viewContent) {
            $res['ViewContent'] = $this->viewContent;
        }

        if (null !== $this->viewSubscribersShrink) {
            $res['ViewSubscribers'] = $this->viewSubscribersShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BgColor'])) {
            $model->bgColor = bgColor::fromMap($map['BgColor']);
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }

        if (isset($map['RegionColor'])) {
            $model->regionColor = regionColor::fromMap($map['RegionColor']);
        }

        if (isset($map['StartWithoutChannel'])) {
            $model->startWithoutChannel = $map['StartWithoutChannel'];
        }

        if (isset($map['StartWithoutChannelWaitTime'])) {
            $model->startWithoutChannelWaitTime = $map['StartWithoutChannelWaitTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['ViewContent'])) {
            $model->viewContent = $map['ViewContent'];
        }

        if (isset($map['ViewSubscribers'])) {
            $model->viewSubscribersShrink = $map['ViewSubscribers'];
        }

        return $model;
    }
}
