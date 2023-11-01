<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryVideoTaskInfoResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class taskResult extends Model
{
    /**
     * @var string
     */
    public $alphaUrl;

    /**
     * @var string
     */
    public $attachmentUrl;

    /**
     * @example 10001001
     *
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $previewPic;

    /**
     * @example xxx/xxx/xxx.ass
     *
     * @var string
     */
    public $subtitlesUrl;

    /**
     * @example 1111
     *
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
     * @example xxx/xxx/xxx.ass
     *
     * @var string
     */
    public $wordSubtitlesUrl;
    protected $_name = [
        'alphaUrl'         => 'AlphaUrl',
        'attachmentUrl'    => 'AttachmentUrl',
        'failCode'         => 'FailCode',
        'failReason'       => 'FailReason',
        'previewPic'       => 'PreviewPic',
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
        if (null !== $this->attachmentUrl) {
            $res['AttachmentUrl'] = $this->attachmentUrl;
        }
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->previewPic) {
            $res['PreviewPic'] = $this->previewPic;
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
        if (isset($map['AttachmentUrl'])) {
            $model->attachmentUrl = $map['AttachmentUrl'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['PreviewPic'])) {
            $model->previewPic = $map['PreviewPic'];
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
