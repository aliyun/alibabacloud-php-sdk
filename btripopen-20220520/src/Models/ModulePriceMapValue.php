<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ModulePriceMapValue extends Model
{
    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $serviceNo;
    protected $_name = [
        'price' => 'price',
        'serviceNo' => 'service_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->serviceNo) {
            $res['service_no'] = $this->serviceNo;
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
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['service_no'])) {
            $model->serviceNo = $map['service_no'];
        }

        return $model;
    }
}
