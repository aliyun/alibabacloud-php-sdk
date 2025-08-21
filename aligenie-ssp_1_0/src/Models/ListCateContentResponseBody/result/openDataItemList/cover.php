<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentResponseBody\result\openDataItemList;

use AlibabaCloud\Dara\Model;

class cover extends Model
{
    /**
     * @var string
     */
    public $img;

    /**
     * @var string
     */
    public $large;

    /**
     * @var string
     */
    public $mediam;

    /**
     * @var string
     */
    public $medium;

    /**
     * @var string
     */
    public $small;

    /**
     * @var bool
     */
    public $canResize;
    protected $_name = [
        'img' => 'Img',
        'large' => 'Large',
        'mediam' => 'Mediam',
        'medium' => 'Medium',
        'small' => 'Small',
        'canResize' => 'canResize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->img) {
            $res['Img'] = $this->img;
        }

        if (null !== $this->large) {
            $res['Large'] = $this->large;
        }

        if (null !== $this->mediam) {
            $res['Mediam'] = $this->mediam;
        }

        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }

        if (null !== $this->small) {
            $res['Small'] = $this->small;
        }

        if (null !== $this->canResize) {
            $res['canResize'] = $this->canResize;
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
        if (isset($map['Img'])) {
            $model->img = $map['Img'];
        }

        if (isset($map['Large'])) {
            $model->large = $map['Large'];
        }

        if (isset($map['Mediam'])) {
            $model->mediam = $map['Mediam'];
        }

        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }

        if (isset($map['Small'])) {
            $model->small = $map['Small'];
        }

        if (isset($map['canResize'])) {
            $model->canResize = $map['canResize'];
        }

        return $model;
    }
}
