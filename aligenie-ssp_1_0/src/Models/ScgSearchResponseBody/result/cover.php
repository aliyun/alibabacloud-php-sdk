<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchResponseBody\result;

use AlibabaCloud\Tea\Model;

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
        'img'       => 'Img',
        'large'     => 'Large',
        'medium'    => 'Medium',
        'small'     => 'Small',
        'canResize' => 'canResize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->img) {
            $res['Img'] = $this->img;
        }
        if (null !== $this->large) {
            $res['Large'] = $this->large;
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

    /**
     * @param array $map
     *
     * @return cover
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Img'])) {
            $model->img = $map['Img'];
        }
        if (isset($map['Large'])) {
            $model->large = $map['Large'];
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
