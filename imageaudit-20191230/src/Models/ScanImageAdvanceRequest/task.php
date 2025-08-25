<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageAdvanceRequest;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

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
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $maxFrames;
    protected $_name = [
        'dataId' => 'DataId',
        'imageTimeMillisecond' => 'ImageTimeMillisecond',
        'imageURLObject' => 'ImageURL',
        'interval' => 'Interval',
        'maxFrames' => 'MaxFrames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->imageTimeMillisecond) {
            $res['ImageTimeMillisecond'] = $this->imageTimeMillisecond;
        }

        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->maxFrames) {
            $res['MaxFrames'] = $this->maxFrames;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['ImageTimeMillisecond'])) {
            $model->imageTimeMillisecond = $map['ImageTimeMillisecond'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
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
