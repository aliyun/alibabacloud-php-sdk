<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody\recordTemplateList;

use AlibabaCloud\Tea\Model;

class recordFormatList extends Model
{
    /**
     * @description The duration of the recording cycle. Unit: seconds.
     *
     * @example 21600
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The output file format.
     *
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @description The name of the recording file that is stored in Object Storage Service (OSS).
     *
     * @example record/{JobId}/{Sequence}_{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @description The duration of a single segment. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $sliceDuration;

    /**
     * @description The name of the TS segment.
     *
     * @example record/{JobId}/{UnixTimestamp}_{Sequence}
     *
     * @var string
     */
    public $sliceOssObjectPrefix;
    protected $_name = [
        'cycleDuration'        => 'CycleDuration',
        'format'               => 'Format',
        'ossObjectPrefix'      => 'OssObjectPrefix',
        'sliceDuration'        => 'SliceDuration',
        'sliceOssObjectPrefix' => 'SliceOssObjectPrefix',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->sliceDuration) {
            $res['SliceDuration'] = $this->sliceDuration;
        }
        if (null !== $this->sliceOssObjectPrefix) {
            $res['SliceOssObjectPrefix'] = $this->sliceOssObjectPrefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordFormatList
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
        if (isset($map['SliceDuration'])) {
            $model->sliceDuration = $map['SliceDuration'];
        }
        if (isset($map['SliceOssObjectPrefix'])) {
            $model->sliceOssObjectPrefix = $map['SliceOssObjectPrefix'];
        }

        return $model;
    }
}
