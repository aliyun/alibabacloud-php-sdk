<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene\streamInfos;

use AlibabaCloud\Tea\Model;

class streamInfo extends Model
{
    /**
     * @var string
     */
    public $videoFormat;

    /**
     * @var string
     */
    public $outputStreamUrl;

    /**
     * @var string
     */
    public $transcodeConfig;
    protected $_name = [
        'videoFormat'     => 'VideoFormat',
        'outputStreamUrl' => 'OutputStreamUrl',
        'transcodeConfig' => 'TranscodeConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }
        if (null !== $this->outputStreamUrl) {
            $res['OutputStreamUrl'] = $this->outputStreamUrl;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = $this->transcodeConfig;
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
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }
        if (isset($map['OutputStreamUrl'])) {
            $model->outputStreamUrl = $map['OutputStreamUrl'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = $map['TranscodeConfig'];
        }

        return $model;
    }
}
