<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponse\sceneList\scene\streamInfos;

use AlibabaCloud\Tea\Model;

class streamInfo extends Model
{
    /**
     * @var string
     */
    public $transcodeConfig;

    /**
     * @var string
     */
    public $videoFormat;

    /**
     * @var string
     */
    public $outputStreamUrl;
    protected $_name = [
        'transcodeConfig' => 'TranscodeConfig',
        'videoFormat'     => 'VideoFormat',
        'outputStreamUrl' => 'OutputStreamUrl',
    ];

    public function validate()
    {
        Model::validateRequired('transcodeConfig', $this->transcodeConfig, true);
        Model::validateRequired('videoFormat', $this->videoFormat, true);
        Model::validateRequired('outputStreamUrl', $this->outputStreamUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = $this->transcodeConfig;
        }
        if (null !== $this->videoFormat) {
            $res['VideoFormat'] = $this->videoFormat;
        }
        if (null !== $this->outputStreamUrl) {
            $res['OutputStreamUrl'] = $this->outputStreamUrl;
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
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = $map['TranscodeConfig'];
        }
        if (isset($map['VideoFormat'])) {
            $model->videoFormat = $map['VideoFormat'];
        }
        if (isset($map['OutputStreamUrl'])) {
            $model->outputStreamUrl = $map['OutputStreamUrl'];
        }

        return $model;
    }
}
