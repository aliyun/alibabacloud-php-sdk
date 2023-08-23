<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCateContentResponseBody\result\openDataItemList;

use AlibabaCloud\Tea\Model;

class cover extends Model
{
    /**
     * @example http://pic.qtfm.cn/2017/0207/2017020718285.jpg
     *
     * @var string
     */
    public $img;

    /**
     * @example http://pic.qtfm.cn/2017/0207/2017020718275.jpg
     *
     * @var string
     */
    public $large;

    /**
     * @example http://pic.qtfm.cn/2017/0207/2017020718275.jpg
     *
     * @var string
     */
    public $mediam;

    /**
     * @example http://pic.qtfm.cn/2017/0207/20170207175.jpg
     *
     * @var string
     */
    public $medium;

    /**
     * @example http://pic.qtfm.cn/2017/0207/2017020675.jpg
     *
     * @var string
     */
    public $small;

    /**
     * @example false
     *
     * @var bool
     */
    public $canResize;
    protected $_name = [
        'img'       => 'Img',
        'large'     => 'Large',
        'mediam'    => 'Mediam',
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
