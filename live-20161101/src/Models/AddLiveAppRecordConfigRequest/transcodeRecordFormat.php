<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest;

use AlibabaCloud\Tea\Model;

class transcodeRecordFormat extends Model
{
    /**
     * @description The transcoded stream recording cycle. Unit: seconds. If you do not specify this parameter, the default value 6 hours is used.
     *
     * @example 21600
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The transcoded stream recording format. Supported formats include M3U8, FLV, MP4, and CMAF. Valid values:
     *
     * >  If you set this parameter to m3u8 or cmaf, you must also specify the TranscodeRecordFormat.N.SliceOssObjectPrefix and TranscodeRecordFormat.N.SliceDuration parameters.
     *
     *   m3u8
     *   flv
     *   mp4
     *   cmaf
     *
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @description The naming format of a transcoded stream recording to store in OSS.
     *
     *   The name must be less than 256 bytes in length and can contain the {AppName}, {StreamName}, {Sequence}, {StartTime}, {EndTime}, {EscapedStartTime}, and {EscapedEndTime} variables.
     *   The name must contain the {StartTime} and {EndTime} variables or the {EscapedStartTime} and {EscapedEndTime} variables.
     *
     * @example record/{AppName}/{StreamName}/{Sequence}_{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @description The duration of a single segment in a transcoded stream recording. Unit: seconds.
     *
     * >  This parameter takes effect only if you set the TranscodeRecordFormat.N.Format parameter to m3u8 or cmaf.
     *
     * If you do not specify this parameter, the default value 30 seconds is used. Valid values: 5 to 30.
     *
     * @example 30
     *
     * @var int
     */
    public $sliceDuration;

    /**
     * @description The naming format of a segment in a transcoded stream recording.
     *
     * >  This parameter is required only if you set the TranscodeRecordFormat.N.Format parameter to m3u8 or cmaf.
     *
     *   By default, the duration of a segment is 30 seconds. The segment name must be less than 256 bytes in length and can contain the {AppName}, {StreamName}, {UnixTimestamp}, and {Sequence} variables.
     *   The segment name must contain the {UnixTimestamp} and {Sequence} variables.
     *
     * @example record/{AppName}/{StreamName}/{UnixTimestamp}_{Sequence}
     *
     * @var string
     */
    public $sliceOssObjectPrefix;
    protected $_name = [
        'cycleDuration' => 'CycleDuration',
        'format' => 'Format',
        'ossObjectPrefix' => 'OssObjectPrefix',
        'sliceDuration' => 'SliceDuration',
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
     * @return transcodeRecordFormat
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
