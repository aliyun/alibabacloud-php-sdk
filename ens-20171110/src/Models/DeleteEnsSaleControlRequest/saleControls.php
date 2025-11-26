<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleControlRequest;

use AlibabaCloud\Dara\Model;

class saleControls extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
