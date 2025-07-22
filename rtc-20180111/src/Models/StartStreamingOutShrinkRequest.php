<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\bgColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\panes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\regionColor;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutShrinkRequest\texts;
use AlibabaCloud\Tea\Model;

class StartStreamingOutShrinkRequest extends Model
{
    /**
     * @example disable
     *
     * @var string
     */
    public $annotation;

    /**
     * @description This parameter is required.
     *
     * @example eo85****
     *
     * @var string
     */
    public $appId;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var bgColor
     */
    public $bgColor;

    /**
     * @description This parameter is required.
     *
     * @example testid
     *
     * @var string
     */
    public $channelId;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;

    /**
     * @example 2
     *
     * @var int
     */
    public $cropMode;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var string
     */
    public $layoutSpecifiedUsersShrink;

    /**
     * @var panes[]
     */
    public $panes;

    /**
     * @var regionColor
     */
    public $regionColor;

    /**
     * @var bool
     */
    public $reservePaneForNoCameraUser;

    /**
     * @var bool
     */
    public $showDefaultBackgroundOnMute;

    /**
     * @var string[]
     */
    public $specMixedUserList;

    /**
     * @var bool
     */
    public $startWithoutChannel;

    /**
     * @example 30
     *
     * @var int
     */
    public $startWithoutChannelWaitTime;

    /**
     * @var bool
     */
    public $subHighResolutionStream;

    /**
     * @example 123
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example 567
     *
     * @var string
     */
    public $templateId;

    /**
     * @var texts[]
     */
    public $texts;

    /**
     * @description This parameter is required.
     *
     * @example rtmp://example.com/live/stream
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'annotation' => 'Annotation',
        'appId' => 'AppId',
        'backgrounds' => 'Backgrounds',
        'bgColor' => 'BgColor',
        'channelId' => 'ChannelId',
        'clockWidgets' => 'ClockWidgets',
        'cropMode' => 'CropMode',
        'images' => 'Images',
        'layoutSpecifiedUsersShrink' => 'LayoutSpecifiedUsers',
        'panes' => 'Panes',
        'regionColor' => 'RegionColor',
        'reservePaneForNoCameraUser' => 'ReservePaneForNoCameraUser',
        'showDefaultBackgroundOnMute' => 'ShowDefaultBackgroundOnMute',
        'specMixedUserList' => 'SpecMixedUserList',
        'startWithoutChannel' => 'StartWithoutChannel',
        'startWithoutChannelWaitTime' => 'StartWithoutChannelWaitTime',
        'subHighResolutionStream' => 'SubHighResolutionStream',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'texts' => 'Texts',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotation) {
            $res['Annotation'] = $this->annotation;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->backgrounds) {
            $res['Backgrounds'] = [];
            if (null !== $this->backgrounds && \is_array($this->backgrounds)) {
                $n = 0;
                foreach ($this->backgrounds as $item) {
                    $res['Backgrounds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bgColor) {
            $res['BgColor'] = null !== $this->bgColor ? $this->bgColor->toMap() : null;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->clockWidgets) {
            $res['ClockWidgets'] = [];
            if (null !== $this->clockWidgets && \is_array($this->clockWidgets)) {
                $n = 0;
                foreach ($this->clockWidgets as $item) {
                    $res['ClockWidgets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->layoutSpecifiedUsersShrink) {
            $res['LayoutSpecifiedUsers'] = $this->layoutSpecifiedUsersShrink;
        }
        if (null !== $this->panes) {
            $res['Panes'] = [];
            if (null !== $this->panes && \is_array($this->panes)) {
                $n = 0;
                foreach ($this->panes as $item) {
                    $res['Panes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionColor) {
            $res['RegionColor'] = null !== $this->regionColor ? $this->regionColor->toMap() : null;
        }
        if (null !== $this->reservePaneForNoCameraUser) {
            $res['ReservePaneForNoCameraUser'] = $this->reservePaneForNoCameraUser;
        }
        if (null !== $this->showDefaultBackgroundOnMute) {
            $res['ShowDefaultBackgroundOnMute'] = $this->showDefaultBackgroundOnMute;
        }
        if (null !== $this->specMixedUserList) {
            $res['SpecMixedUserList'] = $this->specMixedUserList;
        }
        if (null !== $this->startWithoutChannel) {
            $res['StartWithoutChannel'] = $this->startWithoutChannel;
        }
        if (null !== $this->startWithoutChannelWaitTime) {
            $res['StartWithoutChannelWaitTime'] = $this->startWithoutChannelWaitTime;
        }
        if (null !== $this->subHighResolutionStream) {
            $res['SubHighResolutionStream'] = $this->subHighResolutionStream;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->texts) {
            $res['Texts'] = [];
            if (null !== $this->texts && \is_array($this->texts)) {
                $n = 0;
                foreach ($this->texts as $item) {
                    $res['Texts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartStreamingOutShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotation'])) {
            $model->annotation = $map['Annotation'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n = 0;
                foreach ($map['Backgrounds'] as $item) {
                    $model->backgrounds[$n++] = null !== $item ? backgrounds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BgColor'])) {
            $model->bgColor = bgColor::fromMap($map['BgColor']);
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n = 0;
                foreach ($map['ClockWidgets'] as $item) {
                    $model->clockWidgets[$n++] = null !== $item ? clockWidgets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LayoutSpecifiedUsers'])) {
            $model->layoutSpecifiedUsersShrink = $map['LayoutSpecifiedUsers'];
        }
        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n = 0;
                foreach ($map['Panes'] as $item) {
                    $model->panes[$n++] = null !== $item ? panes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionColor'])) {
            $model->regionColor = regionColor::fromMap($map['RegionColor']);
        }
        if (isset($map['ReservePaneForNoCameraUser'])) {
            $model->reservePaneForNoCameraUser = $map['ReservePaneForNoCameraUser'];
        }
        if (isset($map['ShowDefaultBackgroundOnMute'])) {
            $model->showDefaultBackgroundOnMute = $map['ShowDefaultBackgroundOnMute'];
        }
        if (isset($map['SpecMixedUserList'])) {
            if (!empty($map['SpecMixedUserList'])) {
                $model->specMixedUserList = $map['SpecMixedUserList'];
            }
        }
        if (isset($map['StartWithoutChannel'])) {
            $model->startWithoutChannel = $map['StartWithoutChannel'];
        }
        if (isset($map['StartWithoutChannelWaitTime'])) {
            $model->startWithoutChannelWaitTime = $map['StartWithoutChannelWaitTime'];
        }
        if (isset($map['SubHighResolutionStream'])) {
            $model->subHighResolutionStream = $map['SubHighResolutionStream'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n = 0;
                foreach ($map['Texts'] as $item) {
                    $model->texts[$n++] = null !== $item ? texts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
