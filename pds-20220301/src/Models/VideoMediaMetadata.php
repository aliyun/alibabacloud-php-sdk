<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class VideoMediaMetadata extends Model
{
    /**
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @var VideoMediaAudioStream[]
     */
    public $videoMediaAudioStream;

    /**
     * @var VideoMediaVideoStream[]
     */
    public $videoMediaVideoStream;

    /**
     * @example 1920
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'                => 'height',
        'videoMediaAudioStream' => 'video_media_audio_stream',
        'videoMediaVideoStream' => 'video_media_video_stream',
        'width'                 => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->videoMediaAudioStream) {
            $res['video_media_audio_stream'] = [];
            if (null !== $this->videoMediaAudioStream && \is_array($this->videoMediaAudioStream)) {
                $n = 0;
                foreach ($this->videoMediaAudioStream as $item) {
                    $res['video_media_audio_stream'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoMediaVideoStream) {
            $res['video_media_video_stream'] = [];
            if (null !== $this->videoMediaVideoStream && \is_array($this->videoMediaVideoStream)) {
                $n = 0;
                foreach ($this->videoMediaVideoStream as $item) {
                    $res['video_media_video_stream'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoMediaMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['video_media_audio_stream'])) {
            if (!empty($map['video_media_audio_stream'])) {
                $model->videoMediaAudioStream = [];
                $n                            = 0;
                foreach ($map['video_media_audio_stream'] as $item) {
                    $model->videoMediaAudioStream[$n++] = null !== $item ? VideoMediaAudioStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['video_media_video_stream'])) {
            if (!empty($map['video_media_video_stream'])) {
                $model->videoMediaVideoStream = [];
                $n                            = 0;
                foreach ($map['video_media_video_stream'] as $item) {
                    $model->videoMediaVideoStream[$n++] = null !== $item ? VideoMediaVideoStream::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
