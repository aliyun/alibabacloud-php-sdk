<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos\sceneInfo\streamInfos;

use AlibabaCloud\Tea\Model;

class streamInfo extends Model
{
    /**
     * @description The URL.
     *
     * @example rtmp://abclive/caster/example.net
     *
     * @var string
     */
    public $outputStreamUrl;

    /**
     * @description The transcoding configuration. Valid values:
     *
     *   **lsd**: standard definition
     *   **lld**: low definition
     *   **lud**: ultra-high definition
     *   **lhd**: high definition
     *
     * @example lld
     *
     * @var string
     */
    public $transcodeConfig;

    /**
     * @description The format. Valid values:
     *
     *   **flv**
     *   **rtmp**
     *   **m3u8**
     *
     * @example flv
     *
     * @var string
     */
    public $videoFormat;
    protected $_name = [
        'outputStreamUrl' => 'OutputStreamUrl',
        'transcodeConfig' => 'TranscodeConfig',
        'videoFormat' => 'VideoFormat',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputStreamUrl) {
            $res['OutputStreamUrl'] = $this->outputStreamUrl;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = $this->transcodeConfig;
        }
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputStreamUrl'])) {
            $model->outputStreamUrl = $map['OutputStreamUrl'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = $map['TranscodeConfig'];
        }
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }

        return $model;
    }
}
