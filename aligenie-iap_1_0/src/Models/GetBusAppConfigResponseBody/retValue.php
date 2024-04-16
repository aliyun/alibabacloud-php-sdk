<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigResponseBody;

use AlibabaCloud\Tea\Model;

class retValue extends Model
{
    /**
     * @example https://******.com/*****\/******?appId=xxxxx
     *
     * @var string
     */
    public $cashier;

    /**
     * @example https://******.com/design/******?imageId=xxxxx
     *
     * @var string
     */
    public $shoppingBar;

    /**
     * @example https://******.com/design/******?imageId=xxxxx
     *
     * @var string
     */
    public $shoppingWindow;

    /**
     * @example https://******.com/design/******?imageId=xxxxx
     *
     * @var string
     */
    public $vipLabel;
    protected $_name = [
        'cashier'        => 'Cashier',
        'shoppingBar'    => 'ShoppingBar',
        'shoppingWindow' => 'ShoppingWindow',
        'vipLabel'       => 'VipLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cashier) {
            $res['Cashier'] = $this->cashier;
        }
        if (null !== $this->shoppingBar) {
            $res['ShoppingBar'] = $this->shoppingBar;
        }
        if (null !== $this->shoppingWindow) {
            $res['ShoppingWindow'] = $this->shoppingWindow;
        }
        if (null !== $this->vipLabel) {
            $res['VipLabel'] = $this->vipLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cashier'])) {
            $model->cashier = $map['Cashier'];
        }
        if (isset($map['ShoppingBar'])) {
            $model->shoppingBar = $map['ShoppingBar'];
        }
        if (isset($map['ShoppingWindow'])) {
            $model->shoppingWindow = $map['ShoppingWindow'];
        }
        if (isset($map['VipLabel'])) {
            $model->vipLabel = $map['VipLabel'];
        }

        return $model;
    }
}
