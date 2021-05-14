<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ExtractFingerPrintAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int[]
     */
    public $imageData;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'imageData'      => 'ImageData',
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
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractFingerPrintAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }

        return $model;
    }
}
