<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SegmentHDCommonImageAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageUrlObject;
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrlObject) {
            $res['ImageUrlObject'] = $this->imageUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentHDCommonImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrlObject'])) {
            $model->imageUrlObject = $map['ImageUrlObject'];
        }

        return $model;
    }
}
