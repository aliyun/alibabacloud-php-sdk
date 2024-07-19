<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SegmentClothAdvanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $clothClass;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/SegmentCloth/SegmentCloth1.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $outMode;

    /**
     * @var string
     */
    public $returnForm;
    protected $_name = [
        'clothClass'     => 'ClothClass',
        'imageURLObject' => 'ImageURL',
        'outMode'        => 'OutMode',
        'returnForm'     => 'ReturnForm',
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
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->outMode) {
            $res['OutMode'] = $this->outMode;
        }
        if (null !== $this->returnForm) {
            $res['ReturnForm'] = $this->returnForm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentClothAdvanceRequest
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
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['OutMode'])) {
            $model->outMode = $map['OutMode'];
        }
        if (isset($map['ReturnForm'])) {
            $model->returnForm = $map['ReturnForm'];
        }

        return $model;
    }
}
