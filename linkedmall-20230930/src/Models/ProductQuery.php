<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ProductQuery extends Model
{
    /**
     * @var string
     */
    public $distributorShopId;
    /**
     * @var string
     */
    public $divisionCode;
    protected $_name = [
        'distributorShopId' => 'distributorShopId',
        'divisionCode'      => 'divisionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributorShopId) {
            $res['distributorShopId'] = $this->distributorShopId;
        }

        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
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
        if (isset($map['distributorShopId'])) {
            $model->distributorShopId = $map['distributorShopId'];
        }

        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        return $model;
    }
}
