<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectFaceAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectFace/DetectFace1.png
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example true
     *
     * @var bool
     */
    public $landmark;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxFaceNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $pose;

    /**
     * @example true
     *
     * @var bool
     */
    public $quality;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'landmark'       => 'Landmark',
        'maxFaceNumber'  => 'MaxFaceNumber',
        'pose'           => 'Pose',
        'quality'        => 'Quality',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DetectFaceAdvanceRequest
     */
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
