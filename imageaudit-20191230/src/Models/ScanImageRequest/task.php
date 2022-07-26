<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageRequest;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var int
     */
    public $imageTimeMillisecond;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $maxFrames;
    protected $_name = [
        'dataId'               => 'DataId',
        'imageTimeMillisecond' => 'ImageTimeMillisecond',
        'imageURL'             => 'ImageURL',
        'interval'             => 'Interval',
        'maxFrames'            => 'MaxFrames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->imageTimeMillisecond) {
            $res['ImageTimeMillisecond'] = $this->imageTimeMillisecond;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->maxFrames) {
            $res['MaxFrames'] = $this->maxFrames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ImageTimeMillisecond'])) {
            $model->imageTimeMillisecond = $map['ImageTimeMillisecond'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['MaxFrames'])) {
            $model->maxFrames = $map['MaxFrames'];
        }

        return $model;
    }
}
