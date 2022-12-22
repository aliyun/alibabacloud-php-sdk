<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\GetVideoTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskResult extends Model
{
    /**
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
     * @example xxx/xxxx/xx.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'failCode'     => 'FailCode',
        'failReason'   => 'FailReason',
        'subtitlesUrl' => 'SubtitlesUrl',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->subtitlesUrl) {
            $res['SubtitlesUrl'] = $this->subtitlesUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['SubtitlesUrl'])) {
            $model->subtitlesUrl = $map['SubtitlesUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
