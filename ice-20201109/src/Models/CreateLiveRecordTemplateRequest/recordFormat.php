<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateRequest;

use AlibabaCloud\Tea\Model;

class recordFormat extends Model
{
    /**
     * @description The duration of the recording cycle. Unit: seconds. If you do not specify this parameter, the default value 6 hours is used.
     *
     * >
     *
     *   If a live stream is interrupted during a recording cycle but is resumed within 3 minutes, the stream is recorded in the same recording before and after the interruption.
     *
     *   If a live stream is interrupted for more than 3 minutes, a new recording is generated. To change the default stream interruption time, submit a ticket.
     *
     * @example 3600
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The format.
     *
     * This parameter is required.
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @description The name of the recording file that is stored in Object Storage Service (OSS).
     *
     *   The name must be less than 256 bytes in length and can contain the {JobId}, {Sequence}, {StartTime}, {EndTime}, {EscapedStartTime}, and {EscapedEndTime} variables.
     *   The name must contain the {StartTime} and {EndTime} variables or the {EscapedStartTime} and {EscapedEndTime} variables.
     *
     * @example record/{JobId}/{Sequence}_{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @description The duration of a single segment. Unit: seconds.
     *
     * If you do not specify this parameter, the default value 30 seconds is used. Valid values: 5 to 30.
     * @example 30
     *
     * @var int
     */
    public $sliceDuration;

    /**
     * @description The name of the TS segment.
     *
     * >  This parameter is required only if you set Format to m3u8.
     *
     *   By default, the duration of a segment is 30 seconds. The segment name must be less than 256 bytes in length and can contain the {JobId}, {UnixTimestamp}, and {Sequence} variables.
     *   The segment name must contain the {UnixTimestamp} and {Sequence} variables.
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
        if (isset($map['SliceDuration'])) {
            $model->sliceDuration = $map['SliceDuration'];
        }
        if (isset($map['SliceOssObjectPrefix'])) {
            $model->sliceOssObjectPrefix = $map['SliceOssObjectPrefix'];
        }

        return $model;
    }
}
