<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SegmentClothRequest extends Model
{
    /**
     * @var string[]
     */
    public $clothClass;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentCloth/SegmentCloth1.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $returnForm;
    protected $_name = [
        'clothClass' => 'ClothClass',
        'imageURL'   => 'ImageURL',
        'returnForm' => 'ReturnForm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clothClass) {
            $res['ClothClass'] = $this->clothClass;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->returnForm) {
            $res['ReturnForm'] = $this->returnForm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentClothRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClothClass'])) {
            if (!empty($map['ClothClass'])) {
                $model->clothClass = $map['ClothClass'];
            }
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ReturnForm'])) {
            $model->returnForm = $map['ReturnForm'];
        }

        return $model;
    }
}
