<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Dara\Model;

class SegmentClothRequest extends Model
{
    /**
     * @var string[]
     */
    public $clothClass;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var int
     */
    public $outMode;

    /**
     * @var string
     */
    public $returnForm;
    protected $_name = [
        'clothClass' => 'ClothClass',
        'imageURL' => 'ImageURL',
        'outMode' => 'OutMode',
        'returnForm' => 'ReturnForm',
    ];

    public function validate()
    {
        if (\is_array($this->clothClass)) {
            Model::validateArray($this->clothClass);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothClass) {
            if (\is_array($this->clothClass)) {
                $res['ClothClass'] = [];
                $n1 = 0;
                foreach ($this->clothClass as $item1) {
                    $res['ClothClass'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->outMode) {
            $res['OutMode'] = $this->outMode;
        }

        if (null !== $this->returnForm) {
            $res['ReturnForm'] = $this->returnForm;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClothClass'])) {
            if (!empty($map['ClothClass'])) {
                $model->clothClass = [];
                $n1 = 0;
                foreach ($map['ClothClass'] as $item1) {
                    $model->clothClass[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
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
