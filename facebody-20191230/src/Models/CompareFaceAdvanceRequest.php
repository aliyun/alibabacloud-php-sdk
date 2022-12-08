<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CompareFaceAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $imageDataA;

    /**
     * @var string
     */
    public $imageDataB;

    /**
     * @var Stream
     */
    public $imageURLAObject;

    /**
     * @var Stream
     */
    public $imageURLBObject;

    /**
     * @var float
     */
    public $qualityScoreThreshold;
    protected $_name = [
        'imageDataA'            => 'ImageDataA',
        'imageDataB'            => 'ImageDataB',
        'imageURLAObject'       => 'ImageURLA',
        'imageURLBObject'       => 'ImageURLB',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageDataA) {
            $res['ImageDataA'] = $this->imageDataA;
        }
        if (null !== $this->imageDataB) {
            $res['ImageDataB'] = $this->imageDataB;
        }
        if (null !== $this->imageURLAObject) {
            $res['ImageURLA'] = $this->imageURLAObject;
        }
        if (null !== $this->imageURLBObject) {
            $res['ImageURLB'] = $this->imageURLBObject;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageDataA'])) {
            $model->imageDataA = $map['ImageDataA'];
        }
        if (isset($map['ImageDataB'])) {
            $model->imageDataB = $map['ImageDataB'];
        }
        if (isset($map['ImageURLA'])) {
            $model->imageURLAObject = $map['ImageURLA'];
        }
        if (isset($map['ImageURLB'])) {
            $model->imageURLBObject = $map['ImageURLB'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }

        return $model;
    }
}
