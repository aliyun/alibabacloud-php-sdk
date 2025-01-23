<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class SpotStockPreview extends Model
{
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var float
     */
    public $spotDiscount;
    /**
     * @var string
     */
    public $stockStatus;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'spotDiscount' => 'SpotDiscount',
        'stockStatus'  => 'StockStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->spotDiscount) {
            $res['SpotDiscount'] = $this->spotDiscount;
        }

        if (null !== $this->stockStatus) {
            $res['StockStatus'] = $this->stockStatus;
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['SpotDiscount'])) {
            $model->spotDiscount = $map['SpotDiscount'];
        }

        if (isset($map['StockStatus'])) {
            $model->stockStatus = $map['StockStatus'];
        }

        return $model;
    }
}
