<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppRecordConfigRequest;

use AlibabaCloud\Tea\Model;

class transcodeRecordFormat extends Model
{
    /**
     * @description The transcoded stream recording cycle. Unit: seconds If you do not specify this parameter, the default value 6 hours is used.
     *
     * @example 21600
     *
     * @var int
     */
    public $cycleDuration;

    /**
     * @description The format of the transcoded stream recording. Supported formats include M3U8, FLV, MP4, and CMAF. Valid values:
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
     * @description The duration of a single segment in the transcoded stream recording. Unit: seconds.
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
    protected $_name = [
        'cycleDuration' => 'CycleDuration',
        'format' => 'Format',
        'sliceDuration' => 'SliceDuration',
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
        if (null !== $this->sliceDuration) {
            $res['SliceDuration'] = $this->sliceDuration;
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
        if (isset($map['SliceDuration'])) {
            $model->sliceDuration = $map['SliceDuration'];
        }

        return $model;
    }
}
