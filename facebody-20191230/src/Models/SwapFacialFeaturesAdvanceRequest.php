<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SwapFacialFeaturesAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $editPart;

    /**
     * @var int[]
     */
    public $sourceImageData;

    /**
     * @var Stream
     */
    public $sourceImageURLObject;

    /**
     * @var int[]
     */
    public $targetImageData;

    /**
     * @var Stream
     */
    public $targetImageURLObject;
    protected $_name = [
        'editPart'             => 'EditPart',
        'sourceImageData'      => 'SourceImageData',
        'sourceImageURLObject' => 'SourceImageURL',
        'targetImageData'      => 'TargetImageData',
        'targetImageURLObject' => 'TargetImageURL',
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
        if (null !== $this->sourceImageURLObject) {
            $res['SourceImageURL'] = $this->sourceImageURLObject;
        }
        if (null !== $this->targetImageData) {
            $res['TargetImageData'] = $this->targetImageData;
        }
        if (null !== $this->targetImageURLObject) {
            $res['TargetImageURL'] = $this->targetImageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwapFacialFeaturesAdvanceRequest
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
            $model->sourceImageURLObject = $map['SourceImageURL'];
        }
        if (isset($map['TargetImageData'])) {
            $model->targetImageData = $map['TargetImageData'];
        }
        if (isset($map['TargetImageURL'])) {
            $model->targetImageURLObject = $map['TargetImageURL'];
        }

        return $model;
    }
}
