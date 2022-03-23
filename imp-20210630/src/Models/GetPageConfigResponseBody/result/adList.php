<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetPageConfigResponseBody\result;

use AlibabaCloud\Tea\Model;

class adList extends Model
{
    /**
     * @description 是否不可购买
     *
     * @var bool
     */
    public $canNotBeenBought;

    /**
     * @description 页面详情
     *
     * @var string
     */
    public $detail;

    /**
     * @description 页面图标
     *
     * @var string
     */
    public $icon;

    /**
     * @description 跳转购买链接
     *
     * @var string
     */
    public $jumpBuyLink;

    /**
     * @description 页面子标题
     *
     * @var string
     */
    public $subTitle;

    /**
     * @description 页面标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'canNotBeenBought' => 'CanNotBeenBought',
        'detail'           => 'Detail',
        'icon'             => 'Icon',
        'jumpBuyLink'      => 'JumpBuyLink',
        'subTitle'         => 'SubTitle',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canNotBeenBought) {
            $res['CanNotBeenBought'] = $this->canNotBeenBought;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->jumpBuyLink) {
            $res['JumpBuyLink'] = $this->jumpBuyLink;
        }
        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanNotBeenBought'])) {
            $model->canNotBeenBought = $map['CanNotBeenBought'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['JumpBuyLink'])) {
            $model->jumpBuyLink = $map['JumpBuyLink'];
        }
        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
