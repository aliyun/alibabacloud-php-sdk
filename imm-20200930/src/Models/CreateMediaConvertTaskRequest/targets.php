<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\segment;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetImage;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetSubtitle;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The audio processing settings.
     *
     * >  If you leave Audio empty and the first audio stream exists, the first audio stream is directly copied to the output file.
     * @var TargetAudio
     */
    public $audio;

    /**
     * @description The type of the media container.
     *
     *   Valid values for audio and video containers: mp4, mkv, mov, asf, avi, mxf, ts, and flv.
     *
     *   Valid values only for audio containers: mp3, aac, flac, oga, ac3, and opus.
     *
     **
     *
     **Note** Specify Container and URI at the same time. If you want to extract subtitles, capture frames, capture image sprites, or rotate media images, set Container and URI to null. In this case, Segment, Video, Audio, and Speed do not take effect.
     *
     * @example mp4
     *
     * @var string
     */
    public $container;

    /**
     * @description The frame capturing, sprite capturing, and media rotation settings.
     *
     * @var TargetImage
     */
    public $image;

    /**
     * @description The media segmentation settings. By default, no segmentation is performed.
     *
     * @var segment
     */
    public $segment;

    /**
     * @description The playback speed of the media. Valid values: 0.5 to 2. Default value: 1.0.
     *
     * >  This parameter specifies the ratio of the non-regular playback speed of the transcoded media file to the default playback speed of the source media file.
     * @example 1.0
     *
     * @var float
     */
    public $speed;

    /**
     * @description Specifies whether to remove the metadata, such as `title` and `album`, from the media file. Default value: false.
     *
     * @var bool
     */
    public $stripMetadata;

    /**
     * @description The subtitle processing settings.
     *
     * >  If you leave Subtitle empty and the first subtitle stream exists, the first subtitle stream is directly copied to the output file.
     * @var TargetSubtitle
     */
    public $subtitle;

    /**
     * @description The URI of the OSS bucket in which you want to store the media transcoding output file.
     *
     * Specify the value in the `oss://${Bucket}/${Object}` format. `${Bucket}` specifies the name of the OSS bucket that resides in the same region with the current project. `${Object}` specifies the complete path to the file whose name contains an extension.
     *
     *   If the value of **URI** contains an extension, the endpoint of the OSS bucket matches the URI. If multiple media transcoding output files exist, the endpoints of the correspodning OSS buckets may be overwritten.****
     *
     *   If the value of **URI** does not contain an extension, the endpoint of the OSS bucket consists of the following parameters: **URI**, **Container**, and **Segment**. In the following examples, the value of **URI** is `oss://examplebucket/outputVideo`.
     *
     *   If the value of **Container** is `mp4` and the value of **Segment** is null, the endpoint of the OSS bucket is `oss://examplebucket/outputVideo.mp4`.
     *   If the value of **Container** is `ts` and the value of **Format** in **Segment** is `hls`, the endpoint of the OSS bucket is `oss://examplebucket/outputVideo.m3u8`. In addition, multiple ts files prefixed with `oss://examplebucket/outputVideo` are generated.
     *
     * @example oss://test-bucket/targets
     *
     * @var string
     */
    public $URI;

    /**
     * @description The video processing settings.
     *
     * >  If you leave Video empty and the first video stream exists, the first video stream is directly copied to the output file.
     * @var TargetVideo
     */
    public $video;
    protected $_name = [
        'audio'         => 'Audio',
        'container'     => 'Container',
        'image'         => 'Image',
        'segment'       => 'Segment',
        'speed'         => 'Speed',
        'stripMetadata' => 'StripMetadata',
        'subtitle'      => 'Subtitle',
        'URI'           => 'URI',
        'video'         => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->segment) {
            $res['Segment'] = null !== $this->segment ? $this->segment->toMap() : null;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->stripMetadata) {
            $res['StripMetadata'] = $this->stripMetadata;
        }
        if (null !== $this->subtitle) {
            $res['Subtitle'] = null !== $this->subtitle ? $this->subtitle->toMap() : null;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audio'])) {
            $model->audio = TargetAudio::fromMap($map['Audio']);
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['Image'])) {
            $model->image = TargetImage::fromMap($map['Image']);
        }
        if (isset($map['Segment'])) {
            $model->segment = segment::fromMap($map['Segment']);
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['StripMetadata'])) {
            $model->stripMetadata = $map['StripMetadata'];
        }
        if (isset($map['Subtitle'])) {
            $model->subtitle = TargetSubtitle::fromMap($map['Subtitle']);
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['Video'])) {
            $model->video = TargetVideo::fromMap($map['Video']);
        }

        return $model;
    }
}
