<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateRequest;

use AlibabaCloud\Dara\Model;

class recordFormat extends Model
{
    /**
     * @var int
     */
    public $cycleDuration;
    /**
     * @var string
     */
    public $format;
    /**
     * @var string
     */
    public $ossObjectPrefix;
    /**
     * @var int
     */
    public $sliceDuration;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
