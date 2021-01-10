<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddLiveAppRecordConfigRequest;

use AlibabaCloud\Tea\Model;

class recordFormat extends Model
{
    /**
     * @var string
     */
    public $sliceOssObjectPrefix;

    /**
     * @var int
     */
    public $cycleDuration;

    /**
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'sliceOssObjectPrefix' => 'SliceOssObjectPrefix',
        'cycleDuration'        => 'CycleDuration',
        'ossObjectPrefix'      => 'OssObjectPrefix',
        'format'               => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sliceOssObjectPrefix) {
            $res['SliceOssObjectPrefix'] = $this->sliceOssObjectPrefix;
        }
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }
        if (null !== $this->ossObjectPrefix) {
            $res['OssObjectPrefix'] = $this->ossObjectPrefix;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
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
        if (isset($map['SliceOssObjectPrefix'])) {
            $model->sliceOssObjectPrefix = $map['SliceOssObjectPrefix'];
        }
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }
        if (isset($map['OssObjectPrefix'])) {
            $model->ossObjectPrefix = $map['OssObjectPrefix'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
