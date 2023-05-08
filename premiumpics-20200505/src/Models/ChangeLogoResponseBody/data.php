<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\ChangeLogoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $collect;

    /**
     * @var bool
     */
    public $enableChangeColor;

    /**
     * @var bool
     */
    public $enableChangeFont;

    /**
     * @var bool
     */
    public $enableChangeIcon;

    /**
     * @var bool
     */
    public $enableChangeLayout;

    /**
     * @var string
     */
    public $goodsId;

    /**
     * @var int
     */
    public $tagId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'collect'            => 'Collect',
        'enableChangeColor'  => 'EnableChangeColor',
        'enableChangeFont'   => 'EnableChangeFont',
        'enableChangeIcon'   => 'EnableChangeIcon',
        'enableChangeLayout' => 'EnableChangeLayout',
        'goodsId'            => 'GoodsId',
        'tagId'              => 'TagId',
        'url'                => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collect) {
            $res['Collect'] = $this->collect;
        }
        if (null !== $this->enableChangeColor) {
            $res['EnableChangeColor'] = $this->enableChangeColor;
        }
        if (null !== $this->enableChangeFont) {
            $res['EnableChangeFont'] = $this->enableChangeFont;
        }
        if (null !== $this->enableChangeIcon) {
            $res['EnableChangeIcon'] = $this->enableChangeIcon;
        }
        if (null !== $this->enableChangeLayout) {
            $res['EnableChangeLayout'] = $this->enableChangeLayout;
        }
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collect'])) {
            $model->collect = $map['Collect'];
        }
        if (isset($map['EnableChangeColor'])) {
            $model->enableChangeColor = $map['EnableChangeColor'];
        }
        if (isset($map['EnableChangeFont'])) {
            $model->enableChangeFont = $map['EnableChangeFont'];
        }
        if (isset($map['EnableChangeIcon'])) {
            $model->enableChangeIcon = $map['EnableChangeIcon'];
        }
        if (isset($map['EnableChangeLayout'])) {
            $model->enableChangeLayout = $map['EnableChangeLayout'];
        }
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
