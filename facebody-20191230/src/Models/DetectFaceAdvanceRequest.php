<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
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
     * @var bool
     */
    public $quality;

    /**
     * @var bool
     */
    public $pose;

    /**
     * @var int
     */
    public $maxFaceNumber;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'landmark'       => 'Landmark',
        'quality'        => 'Quality',
        'pose'           => 'Pose',
        'maxFaceNumber'  => 'MaxFaceNumber',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->landmark) {
            $res['Landmark'] = $this->landmark;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->pose) {
            $res['Pose'] = $this->pose;
        }
        if (null !== $this->maxFaceNumber) {
            $res['MaxFaceNumber'] = $this->maxFaceNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['Landmark'])) {
            $model->landmark = $map['Landmark'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['Pose'])) {
            $model->pose = $map['Pose'];
        }
        if (isset($map['MaxFaceNumber'])) {
            $model->maxFaceNumber = $map['MaxFaceNumber'];
        }

        return $model;
    }
}
