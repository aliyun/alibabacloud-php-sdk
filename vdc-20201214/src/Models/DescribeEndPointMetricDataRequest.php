<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeEndPointMetricDataRequest extends Model
{
    /**
     * @description APP ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 创建频道时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 释放频道时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 订阅端用户ID。
     *
     * @var string
     */
    public $subUserId;

    /**
     * @description 发布端用户ID。
     *
     * @var string
     */
    public $pubUserId;

    /**
     * @description 发布端用户通信流的Call ID，多个用英文逗号（,）分隔。
     *
     * @var string
     */
    public $pubCallIdList;

    /**
     * @description 指标枚举列表，以半角逗号分隔，包括以下类型APP_CPU APPCPU SYSTEM_CPU 系统CPU APP_MEMORY APP内存 SYSTEM_MEMORY 系统占用内存 SYSTEM_TOTAL_MEMORY 系统总内存 AUDIO_LOST_RATE 音频丢包率 VIDEO_LOST_RATE 视频丢包率 AUDIO_RTT 音频延时 VIDEO_RTT 视频延时 AUDIO_END_TO_END_RTT 音频端到端延时 VIDEO_END_TO_END_RTT 视频端到端延时 AUDIO_BIT_RATE 音频码率 AUDIO_STUCK 音频卡顿 AUDIO_LEVEL 音量 VIDEO_BIT_RATE_CAMERA 视频码率 VIDEO_BIT_RATE_LARGE 视频码率（大画面） VIDEO_BIT_RATE_SMALL 视频码率（小画面） VIDEO_BIT_RATE_SUPER 视频码率（超大屏幕） VIDEO_BIT_RATE_SHARE 视频码率（屏幕分享） VIDEO_STUCK_CAMERA 视频卡顿 VIDEO_STUCK_LARGE 视频卡顿（大画面） VIDEO_STUCK_SMALL 视频卡顿（小画面） VIDEO_STUCK_SUPER 视频卡顿（超大屏幕） VIDEO_STUCK_SHARE 视频卡顿（屏幕分享） VIDEO_RESOLUTION_CAMERA 视频分辨率 VIDEO_RESOLUTION_LARGE 视频分辨率（大画面） VIDEO_RESOLUTION_SMALL 视频分辨率（小画面） VIDEO_RESOLUTION_SUPER 视频分辨率（超大屏幕） VIDEO_RESOLUTION_SHARE 视频分辨率（屏幕分享） VIDEO_FPS_CAMERA 视频帧率 VIDEO_FPS_LARGE 视频帧率（大画面） VIDEO_FPS_SMALL 视频帧率（小画面） VIDEO_FPS_SUPER 视频帧率（超大屏幕） VIDEO_FPS_SHARE 视频帧率（屏幕分享）
     *
     * @var string
     */
    public $metrics;
    protected $_name = [
        'appId'         => 'AppId',
        'channelId'     => 'ChannelId',
        'createdTs'     => 'CreatedTs',
        'destroyedTs'   => 'DestroyedTs',
        'subUserId'     => 'SubUserId',
        'pubUserId'     => 'PubUserId',
        'pubCallIdList' => 'PubCallIdList',
        'metrics'       => 'Metrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->pubUserId) {
            $res['PubUserId'] = $this->pubUserId;
        }
        if (null !== $this->pubCallIdList) {
            $res['PubCallIdList'] = $this->pubCallIdList;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndPointMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['PubUserId'])) {
            $model->pubUserId = $map['PubUserId'];
        }
        if (isset($map['PubCallIdList'])) {
            $model->pubCallIdList = $map['PubCallIdList'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        return $model;
    }
}
