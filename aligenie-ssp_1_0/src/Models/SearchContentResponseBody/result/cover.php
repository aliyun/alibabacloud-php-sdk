<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentResponseBody\result;

use AlibabaCloud\Dara\Model;

class cover extends Model
{
    /**
     * @var bool
     */
    public $canResize;

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
    protected $_name = [
        'canResize' => 'CanResize',
        'img' => 'Img',
        'large' => 'Large',
        'mediam' => 'Mediam',
        'medium' => 'Medium',
        'small' => 'Small',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canResize) {
            $res['CanResize'] = $this->canResize;
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanResize'])) {
            $model->canResize = $map['CanResize'];
        }

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

        return $model;
    }
}
