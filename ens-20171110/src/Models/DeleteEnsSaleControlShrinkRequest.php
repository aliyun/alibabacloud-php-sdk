<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteEnsSaleControlShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aliUidAccount;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $customAccount;

    /**
     * @var string
     */
    public $saleControlsShrink;
    protected $_name = [
        'aliUidAccount' => 'AliUidAccount',
        'commodityCode' => 'CommodityCode',
        'customAccount' => 'CustomAccount',
        'saleControlsShrink' => 'SaleControls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUidAccount) {
            $res['AliUidAccount'] = $this->aliUidAccount;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->customAccount) {
            $res['CustomAccount'] = $this->customAccount;
        }

        if (null !== $this->saleControlsShrink) {
            $res['SaleControls'] = $this->saleControlsShrink;
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
        if (isset($map['AliUidAccount'])) {
            $model->aliUidAccount = $map['AliUidAccount'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CustomAccount'])) {
            $model->customAccount = $map['CustomAccount'];
        }

        if (isset($map['SaleControls'])) {
            $model->saleControlsShrink = $map['SaleControls'];
        }

        return $model;
    }
}
