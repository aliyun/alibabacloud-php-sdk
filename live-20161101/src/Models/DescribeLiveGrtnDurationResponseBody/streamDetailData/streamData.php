<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveGrtnDurationResponseBody\streamDetailData;

use AlibabaCloud\Tea\Model;

class streamData extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 4346289a-a790-4869-9e23-22766d5e****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The co-streaming duration. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $duration;

    /**
     * @description The media specification. Valid values:
     *
     *   0: audio-only. This is a basic specification.
     *   480P: standard definition (SD). The video resolution is 640 × 480 or lower.
     *   720P: high definition (HD). The video resolution is 1280 × 720 or lower.
     *   1080P: full HD. The video resolution is 1920 × 1080 or lower.
     *
     * @example 480P
     *
     * @var string
     */
    public $mediaProfile;

    /**
     * @description The media type. Valid values:
     *
     *   audio
     *   video
     *
     * @example audio
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2022-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'appId' => 'AppId',
        'duration' => 'Duration',
        'mediaProfile' => 'MediaProfile',
        'mediaType' => 'MediaType',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->mediaProfile) {
            $res['MediaProfile'] = $this->mediaProfile;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MediaProfile'])) {
            $model->mediaProfile = $map['MediaProfile'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
