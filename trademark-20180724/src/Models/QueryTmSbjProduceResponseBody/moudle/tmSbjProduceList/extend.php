<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceResponseBody\moudle\tmSbjProduceList;

use AlibabaCloud\Tea\Model;

class extend extends Model
{
    /**
     * @var int
     */
    public $bid;

    /**
     * @var bool
     */
    public $blackIcon;

    /**
     * @var string
     */
    public $loaOssKey;

    /**
     * @var string
     */
    public $logoGoodsId;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $submitCount;

    /**
     * @var int
     */
    public $tmNametype;
    protected $_name = [
        'bid'         => 'Bid',
        'blackIcon'   => 'BlackIcon',
        'loaOssKey'   => 'LoaOssKey',
        'logoGoodsId' => 'LogoGoodsId',
        'materialId'  => 'MaterialId',
        'submitCount' => 'SubmitCount',
        'tmNametype'  => 'TmNametype',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->blackIcon) {
            $res['BlackIcon'] = $this->blackIcon;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->logoGoodsId) {
            $res['LogoGoodsId'] = $this->logoGoodsId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->submitCount) {
            $res['SubmitCount'] = $this->submitCount;
        }
        if (null !== $this->tmNametype) {
            $res['TmNametype'] = $this->tmNametype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['BlackIcon'])) {
            $model->blackIcon = $map['BlackIcon'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['LogoGoodsId'])) {
            $model->logoGoodsId = $map['LogoGoodsId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['SubmitCount'])) {
            $model->submitCount = $map['SubmitCount'];
        }
        if (isset($map['TmNametype'])) {
            $model->tmNametype = $map['TmNametype'];
        }

        return $model;
    }
}
