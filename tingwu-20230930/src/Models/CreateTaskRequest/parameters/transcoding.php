<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Tea\Model;

class transcoding extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $spectrumEnabled;

    /**
     * @example mp3
     *
     * @var string
     */
    public $targetAudioFormat;

    /**
     * @example mp4
     *
     * @var string
     */
    public $targetVideoFormat;

    /**
     * @example false
     *
     * @var bool
     */
    public $videoThumbnailEnabled;
    protected $_name = [
        'spectrumEnabled'       => 'SpectrumEnabled',
        'targetAudioFormat'     => 'TargetAudioFormat',
        'targetVideoFormat'     => 'TargetVideoFormat',
        'videoThumbnailEnabled' => 'VideoThumbnailEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spectrumEnabled) {
            $res['SpectrumEnabled'] = $this->spectrumEnabled;
        }
        if (null !== $this->targetAudioFormat) {
            $res['TargetAudioFormat'] = $this->targetAudioFormat;
        }
        if (null !== $this->targetVideoFormat) {
            $res['TargetVideoFormat'] = $this->targetVideoFormat;
        }
        if (null !== $this->videoThumbnailEnabled) {
            $res['VideoThumbnailEnabled'] = $this->videoThumbnailEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcoding
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpectrumEnabled'])) {
            $model->spectrumEnabled = $map['SpectrumEnabled'];
        }
        if (isset($map['TargetAudioFormat'])) {
            $model->targetAudioFormat = $map['TargetAudioFormat'];
        }
        if (isset($map['TargetVideoFormat'])) {
            $model->targetVideoFormat = $map['TargetVideoFormat'];
        }
        if (isset($map['VideoThumbnailEnabled'])) {
            $model->videoThumbnailEnabled = $map['VideoThumbnailEnabled'];
        }

        return $model;
    }
}
