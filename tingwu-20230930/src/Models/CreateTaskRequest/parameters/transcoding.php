<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;

class transcoding extends Model
{
    /**
     * @var bool
     */
    public $spectrumEnabled;
    /**
     * @var string
     */
    public $targetAudioFormat;
    /**
     * @var string
     */
    public $targetVideoFormat;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
