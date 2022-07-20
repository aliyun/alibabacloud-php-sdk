<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponseBody\recordTemplateList;

use AlibabaCloud\Tea\Model;

class recordFormatList extends Model
{
    /**
     * @description 录制周期时长
     *
     * @var int[]
     */
    public $cycleDuration;

    /**
     * @description 格式
     *
     * @var int[]
     */
    public $format;

    /**
     * @description Oss对象名
     *
     * @var int[]
     */
    public $ossObjectPrefix;

    /**
     * @description 切片时长
     *
     * @var int
     */
    public $sliceDuration;

    /**
     * @description 切片Oss对象名
     *
     * @var int[]
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
