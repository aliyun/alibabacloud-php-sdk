<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponse\recordConfig\recordFormat;

use AlibabaCloud\Tea\Model;

class recordFormat extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @var string
     */
    public $sliceOssObjectPrefix;

    /**
     * @var int
     */
    public $cycleDuration;
    protected $_name = [
        'format'               => 'Format',
        'ossObjectPrefix'      => 'OssObjectPrefix',
        'sliceOssObjectPrefix' => 'SliceOssObjectPrefix',
        'cycleDuration'        => 'CycleDuration',
    ];

    public function validate()
    {
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('ossObjectPrefix', $this->ossObjectPrefix, true);
        Model::validateRequired('sliceOssObjectPrefix', $this->sliceOssObjectPrefix, true);
        Model::validateRequired('cycleDuration', $this->cycleDuration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->ossObjectPrefix) {
            $res['OssObjectPrefix'] = $this->ossObjectPrefix;
        }
        if (null !== $this->sliceOssObjectPrefix) {
            $res['SliceOssObjectPrefix'] = $this->sliceOssObjectPrefix;
        }
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
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
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['OssObjectPrefix'])) {
            $model->ossObjectPrefix = $map['OssObjectPrefix'];
        }
        if (isset($map['SliceOssObjectPrefix'])) {
            $model->sliceOssObjectPrefix = $map['SliceOssObjectPrefix'];
        }
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }

        return $model;
    }
}
