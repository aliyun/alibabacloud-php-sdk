<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfo;

use AlibabaCloud\Tea\Model;

class cabinClassInfo extends Model
{
    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $className;

    /**
     * @description inner_cabin_class
     *
     * @example 1
     *
     * @var int
     */
    public $innerCabinClass;

    /**
     * @var string
     */
    public $quantity;
    protected $_name = [
        'cabinClass'      => 'cabin_class',
        'className'       => 'class_name',
        'innerCabinClass' => 'inner_cabin_class',
        'quantity'        => 'quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        if (null !== $this->innerCabinClass) {
            $res['inner_cabin_class'] = $this->innerCabinClass;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cabinClassInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['class_name'])) {
            $model->className = $map['class_name'];
        }
        if (isset($map['inner_cabin_class'])) {
            $model->innerCabinClass = $map['inner_cabin_class'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        return $model;
    }
}
