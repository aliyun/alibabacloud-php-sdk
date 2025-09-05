<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;

class DetectFaceRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

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
        'imageURL' => 'ImageURL',
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
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
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
            $model->imageURL = $map['ImageURL'];
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
