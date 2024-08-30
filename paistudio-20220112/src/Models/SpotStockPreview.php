<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SpotStockPreview extends Model
{
    /**
     * @example ml.gu8xf.8xlarge-gu108
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $spotDiscount;

    /**
     * @example WithStock
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SpotStockPreview
     */
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
