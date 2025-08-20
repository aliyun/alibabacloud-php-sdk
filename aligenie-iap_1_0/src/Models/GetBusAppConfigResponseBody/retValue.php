<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigResponseBody;

use AlibabaCloud\Dara\Model;

class retValue extends Model
{
    /**
     * @var string
     */
    public $cashier;

    /**
     * @var string
     */
    public $shoppingBar;

    /**
     * @var string
     */
    public $shoppingWindow;

    /**
     * @var string
     */
    public $vipLabel;
    protected $_name = [
        'cashier' => 'Cashier',
        'shoppingBar' => 'ShoppingBar',
        'shoppingWindow' => 'ShoppingWindow',
        'vipLabel' => 'VipLabel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
