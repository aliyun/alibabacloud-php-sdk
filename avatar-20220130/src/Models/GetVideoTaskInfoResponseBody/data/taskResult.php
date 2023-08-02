<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskResult extends Model
{
    /**
     * @var string
     */
    public $alphaUrl;

    /**
     * @example 20002
     *
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @example xxx/xxx/xxx.ass
     *
     * @var string
     */
    public $subtitlesUrl;

    /**
     * @var int
     */
    public $videoDuration;

    /**
     * @example xxx/xxxx/xx.mp4
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description 字粒度的时间戳文件，特定任务支持
     *
     * @example xxx/xxx/xxx.ass
     *
     * @var string
     */
    public $wordSubtitlesUrl;
    protected $_name = [
        'alphaUrl'         => 'AlphaUrl',
        'failCode'         => 'FailCode',
        'failReason'       => 'FailReason',
        'subtitlesUrl'     => 'SubtitlesUrl',
        'videoDuration'    => 'VideoDuration',
        'videoUrl'         => 'VideoUrl',
        'wordSubtitlesUrl' => 'WordSubtitlesUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alphaUrl) {
            $res['AlphaUrl'] = $this->alphaUrl;
        }
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->subtitlesUrl) {
            $res['SubtitlesUrl'] = $this->subtitlesUrl;
        }
        if (null !== $this->videoDuration) {
            $res['VideoDuration'] = $this->videoDuration;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->wordSubtitlesUrl) {
            $res['WordSubtitlesUrl'] = $this->wordSubtitlesUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlphaUrl'])) {
            $model->alphaUrl = $map['AlphaUrl'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['SubtitlesUrl'])) {
            $model->subtitlesUrl = $map['SubtitlesUrl'];
        }
        if (isset($map['VideoDuration'])) {
            $model->videoDuration = $map['VideoDuration'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['WordSubtitlesUrl'])) {
            $model->wordSubtitlesUrl = $map['WordSubtitlesUrl'];
        }

        return $model;
    }
}
