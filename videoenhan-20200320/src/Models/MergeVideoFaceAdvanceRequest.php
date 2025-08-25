<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoFaceAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $addWatermark;

    /**
     * @var bool
     */
    public $enhance;

    /**
     * @var Stream
     */
    public $referenceURLObject;

    /**
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'addWatermark' => 'AddWatermark',
        'enhance' => 'Enhance',
        'referenceURLObject' => 'ReferenceURL',
        'videoURLObject' => 'VideoURL',
        'watermarkType' => 'WatermarkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addWatermark) {
            $res['AddWatermark'] = $this->addWatermark;
        }

        if (null !== $this->enhance) {
            $res['Enhance'] = $this->enhance;
        }

        if (null !== $this->referenceURLObject) {
            $res['ReferenceURL'] = $this->referenceURLObject;
        }

        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
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
        if (isset($map['AddWatermark'])) {
            $model->addWatermark = $map['AddWatermark'];
        }

        if (isset($map['Enhance'])) {
            $model->enhance = $map['Enhance'];
        }

        if (isset($map['ReferenceURL'])) {
            $model->referenceURLObject = $map['ReferenceURL'];
        }

        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
