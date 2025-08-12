<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeMetricDataResponseBody\streamDetailData;

use AlibabaCloud\Dara\Model;

class streamData extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $transcodeType;
    protected $_name = [
        'appName' => 'AppName',
        'duration' => 'Duration',
        'fps' => 'Fps',
        'region' => 'Region',
        'resolution' => 'Resolution',
        'streamName' => 'StreamName',
        'timeStamp' => 'TimeStamp',
        'transcodeType' => 'TranscodeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->transcodeType) {
            $res['TranscodeType'] = $this->transcodeType;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['TranscodeType'])) {
            $model->transcodeType = $map['TranscodeType'];
        }

        return $model;
    }
}
