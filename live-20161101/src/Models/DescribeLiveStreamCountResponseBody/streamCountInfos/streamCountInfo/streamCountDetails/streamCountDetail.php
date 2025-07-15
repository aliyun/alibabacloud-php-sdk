<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo\streamCountDetails;

use AlibabaCloud\Tea\Model;

class streamCountDetail extends Model
{
    /**
     * @description The number of online streams.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The video codec. Valid values:
     *
     *   **h264**
     *   **h265**
     *
     * @example h264
     *
     * @var string
     */
    public $format;

    /**
     * @description The video bitrate. This parameter is returned only for transcoded streams.
     *
     * @example 390
     *
     * @var int
     */
    public $videoDataRate;
    protected $_name = [
        'count' => 'Count',
        'format' => 'Format',
        'videoDataRate' => 'VideoDataRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->videoDataRate) {
            $res['VideoDataRate'] = $this->videoDataRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['VideoDataRate'])) {
            $model->videoDataRate = $map['VideoDataRate'];
        }

        return $model;
    }
}
