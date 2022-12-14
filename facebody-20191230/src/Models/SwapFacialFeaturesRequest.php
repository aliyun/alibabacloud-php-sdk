<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SwapFacialFeaturesRequest extends Model
{
    /**
     * @example chin
     *
     * @var string
     */
    public $editPart;

    /**
     * @example 9j/4AAQSkZJRgABAQAAAQABAAD/2****
     *
     * @var int[]
     */
    public $sourceImageData;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/SwapFacialFeatures/SwapFacialFeatures1.png
     *
     * @var string
     */
    public $sourceImageURL;

    /**
     * @example 9j/4AAQSkZJRgABAQAAAQABAAD/3****
     *
     * @var int[]
     */
    public $targetImageData;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/SwapFacialFeatures/SwapFacialFeatures6.png
     *
     * @var string
     */
    public $targetImageURL;
    protected $_name = [
        'editPart'        => 'EditPart',
        'sourceImageData' => 'SourceImageData',
        'sourceImageURL'  => 'SourceImageURL',
        'targetImageData' => 'TargetImageData',
        'targetImageURL'  => 'TargetImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editPart) {
            $res['EditPart'] = $this->editPart;
        }
        if (null !== $this->sourceImageData) {
            $res['SourceImageData'] = $this->sourceImageData;
        }
        if (null !== $this->sourceImageURL) {
            $res['SourceImageURL'] = $this->sourceImageURL;
        }
        if (null !== $this->targetImageData) {
            $res['TargetImageData'] = $this->targetImageData;
        }
        if (null !== $this->targetImageURL) {
            $res['TargetImageURL'] = $this->targetImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwapFacialFeaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditPart'])) {
            $model->editPart = $map['EditPart'];
        }
        if (isset($map['SourceImageData'])) {
            $model->sourceImageData = $map['SourceImageData'];
        }
        if (isset($map['SourceImageURL'])) {
            $model->sourceImageURL = $map['SourceImageURL'];
        }
        if (isset($map['TargetImageData'])) {
            $model->targetImageData = $map['TargetImageData'];
        }
        if (isset($map['TargetImageURL'])) {
            $model->targetImageURL = $map['TargetImageURL'];
        }

        return $model;
    }
}
