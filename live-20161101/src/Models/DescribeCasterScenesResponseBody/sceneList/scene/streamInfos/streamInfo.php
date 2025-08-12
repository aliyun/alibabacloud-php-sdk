<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene\streamInfos;

use AlibabaCloud\Dara\Model;

class streamInfo extends Model
{
    /**
     * @var string
     */
    public $outputStreamUrl;

    /**
     * @var string
     */
    public $transcodeConfig;

    /**
     * @var string
     */
    public $videoFormat;
    protected $_name = [
        'outputStreamUrl' => 'OutputStreamUrl',
        'transcodeConfig' => 'TranscodeConfig',
        'videoFormat' => 'VideoFormat',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
