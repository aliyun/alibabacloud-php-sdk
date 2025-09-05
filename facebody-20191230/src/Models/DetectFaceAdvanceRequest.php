<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class DetectFaceAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var bool
     */
    public $landmark;

    /**
     * @var int
     */
    public $maxFaceNumber;

    /**
     * @var bool
     */
    public $pose;

    /**
     * @var bool
     */
    public $quality;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'landmark' => 'Landmark',
        'maxFaceNumber' => 'MaxFaceNumber',
        'pose' => 'Pose',
        'quality' => 'Quality',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->landmark) {
            $res['Landmark'] = $this->landmark;
        }

        if (null !== $this->maxFaceNumber) {
            $res['MaxFaceNumber'] = $this->maxFaceNumber;
        }

        if (null !== $this->pose) {
            $res['Pose'] = $this->pose;
        }

        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
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
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['Landmark'])) {
            $model->landmark = $map['Landmark'];
        }

        if (isset($map['MaxFaceNumber'])) {
            $model->maxFaceNumber = $map['MaxFaceNumber'];
        }

        if (isset($map['Pose'])) {
            $model->pose = $map['Pose'];
        }

        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        return $model;
    }
}
