<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig\recordFormat;

use AlibabaCloud\Tea\Model;

class recordFormat extends Model
{
    /**
     * @description The length of the recording.
     *
     * @example 3600
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The format of the recording.
     *
     * @example M3U8
     *
     * @var string
     */
    public $format;

    /**
     * @description The name of the recording.
     *
     * @example record/{liveApp****}/{liveStream****}
     *
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @description The name of the segment.
     *
     * @example record/{liveApp****}/{liveStream****}/{UnixTimestamp****}
     *
     * @var string
     */
    public $sliceOssObjectPrefix;
    protected $_name = [
        'cycleDuration' => 'CycleDuration',
        'format' => 'Format',
        'ossObjectPrefix' => 'OssObjectPrefix',
        'sliceOssObjectPrefix' => 'SliceOssObjectPrefix',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->ossObjectPrefix) {
            $res['OssObjectPrefix'] = $this->ossObjectPrefix;
        }
        if (null !== $this->sliceOssObjectPrefix) {
            $res['SliceOssObjectPrefix'] = $this->sliceOssObjectPrefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordFormat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['OssObjectPrefix'])) {
            $model->ossObjectPrefix = $map['OssObjectPrefix'];
        }
        if (isset($map['SliceOssObjectPrefix'])) {
            $model->sliceOssObjectPrefix = $map['SliceOssObjectPrefix'];
        }

        return $model;
    }
}
