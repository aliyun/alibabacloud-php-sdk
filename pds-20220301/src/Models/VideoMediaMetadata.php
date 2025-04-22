<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class VideoMediaMetadata extends Model
{
    /**
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
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'height',
        'videoMediaAudioStream' => 'video_media_audio_stream',
        'videoMediaVideoStream' => 'video_media_video_stream',
        'width' => 'width',
    ];

    public function validate()
    {
        if (\is_array($this->videoMediaAudioStream)) {
            Model::validateArray($this->videoMediaAudioStream);
        }
        if (\is_array($this->videoMediaVideoStream)) {
            Model::validateArray($this->videoMediaVideoStream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->videoMediaAudioStream) {
            if (\is_array($this->videoMediaAudioStream)) {
                $res['video_media_audio_stream'] = [];
                $n1 = 0;
                foreach ($this->videoMediaAudioStream as $item1) {
                    $res['video_media_audio_stream'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->videoMediaVideoStream) {
            if (\is_array($this->videoMediaVideoStream)) {
                $res['video_media_video_stream'] = [];
                $n1 = 0;
                foreach ($this->videoMediaVideoStream as $item1) {
                    $res['video_media_video_stream'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['video_media_audio_stream'])) {
            if (!empty($map['video_media_audio_stream'])) {
                $model->videoMediaAudioStream = [];
                $n1 = 0;
                foreach ($map['video_media_audio_stream'] as $item1) {
                    $model->videoMediaAudioStream[$n1++] = VideoMediaAudioStream::fromMap($item1);
                }
            }
        }

        if (isset($map['video_media_video_stream'])) {
            if (!empty($map['video_media_video_stream'])) {
                $model->videoMediaVideoStream = [];
                $n1 = 0;
                foreach ($map['video_media_video_stream'] as $item1) {
                    $model->videoMediaVideoStream[$n1++] = VideoMediaVideoStream::fromMap($item1);
                }
            }
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
