<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SwapFacialFeaturesAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $sourceImageURLObject;

    /**
     * @var string
     */
    public $editPart;

    /**
     * @var string
     */
    public $targetImageURL;
    protected $_name = [
        'sourceImageURLObject' => 'SourceImageURLObject',
        'editPart'             => 'EditPart',
        'targetImageURL'       => 'TargetImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('sourceImageURLObject', $this->sourceImageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceImageURLObject) {
            $res['SourceImageURLObject'] = $this->sourceImageURLObject;
        }
        if (null !== $this->editPart) {
            $res['EditPart'] = $this->editPart;
        }
        if (null !== $this->targetImageURL) {
            $res['TargetImageURL'] = $this->targetImageURL;
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
        if (isset($map['SourceImageURLObject'])) {
            $model->sourceImageURLObject = $map['SourceImageURLObject'];
        }
        if (isset($map['EditPart'])) {
            $model->editPart = $map['EditPart'];
        }
        if (isset($map['TargetImageURL'])) {
            $model->targetImageURL = $map['TargetImageURL'];
        }

        return $model;
    }
}
