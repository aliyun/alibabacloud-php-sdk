<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class ChangeLogoRequest extends Model
{
    /**
     * @var bool
     */
    public $changeColor;

    /**
     * @var bool
     */
    public $changeFont;

    /**
     * @var bool
     */
    public $changeIcon;

    /**
     * @var bool
     */
    public $changeLayout;

    /**
     * @var string
     */
    public $goodsId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'changeColor'  => 'ChangeColor',
        'changeFont'   => 'ChangeFont',
        'changeIcon'   => 'ChangeIcon',
        'changeLayout' => 'ChangeLayout',
        'goodsId'      => 'GoodsId',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeColor) {
            $res['ChangeColor'] = $this->changeColor;
        }
        if (null !== $this->changeFont) {
            $res['ChangeFont'] = $this->changeFont;
        }
        if (null !== $this->changeIcon) {
            $res['ChangeIcon'] = $this->changeIcon;
        }
        if (null !== $this->changeLayout) {
            $res['ChangeLayout'] = $this->changeLayout;
        }
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeLogoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeColor'])) {
            $model->changeColor = $map['ChangeColor'];
        }
        if (isset($map['ChangeFont'])) {
            $model->changeFont = $map['ChangeFont'];
        }
        if (isset($map['ChangeIcon'])) {
            $model->changeIcon = $map['ChangeIcon'];
        }
        if (isset($map['ChangeLayout'])) {
            $model->changeLayout = $map['ChangeLayout'];
        }
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
