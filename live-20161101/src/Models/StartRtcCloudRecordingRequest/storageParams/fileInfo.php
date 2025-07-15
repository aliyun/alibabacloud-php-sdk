<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest\storageParams;

use AlibabaCloud\Tea\Model;

class fileInfo extends Model
{
    /**
     * @example {AppId}_{ChannelId}_{StartTime}_{UserId}
     *
     * @var string
     */
    public $fileNamePattern;

    /**
     * @description This parameter is required.
     *
     * @example HLS
     *
     * @var string
     */
    public $format;

    /**
     * @example {AppId}_{ChannelId}_{StartTime}_{Sequence}
     *
     * @var string
     */
    public $sliceNamePattern;
    protected $_name = [
        'fileNamePattern' => 'FileNamePattern',
        'format' => 'Format',
        'sliceNamePattern' => 'SliceNamePattern',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileNamePattern) {
            $res['FileNamePattern'] = $this->fileNamePattern;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->sliceNamePattern) {
            $res['SliceNamePattern'] = $this->sliceNamePattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileNamePattern'])) {
            $model->fileNamePattern = $map['FileNamePattern'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['SliceNamePattern'])) {
            $model->sliceNamePattern = $map['SliceNamePattern'];
        }

        return $model;
    }
}
