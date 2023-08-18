<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CompareFaceAdvanceRequest extends Model
{
    /**
     * @example /9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgK****
     *
     * @var string
     */
    public $imageDataA;

    /**
     * @example /9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgQ****
     *
     * @var string
     */
    public $imageDataB;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFace/CompareFace-right1.png
     *
     * @var Stream
     */
    public $imageURLAObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFace/CompareFace-left1.png
     *
     * @var Stream
     */
    public $imageURLBObject;

    /**
     * @example 75.12
     *
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
