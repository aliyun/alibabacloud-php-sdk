<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\GetRelationResponseBody\data;

use AlibabaCloud\Tea\Model;

class resellerProductRuleDO extends Model
{
    /**
     * @var string
     */
    public $class;

    /**
     * @var bool
     */
    public $commodityRoute;

    /**
     * @var bool
     */
    public $multiOrder;

    /**
     * @var string
     */
    public $payMode;
    protected $_name = [
        'class'          => 'Class',
        'commodityRoute' => 'CommodityRoute',
        'multiOrder'     => 'MultiOrder',
        'payMode'        => 'PayMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->commodityRoute) {
            $res['CommodityRoute'] = $this->commodityRoute;
        }
        if (null !== $this->multiOrder) {
            $res['MultiOrder'] = $this->multiOrder;
        }
        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resellerProductRuleDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['CommodityRoute'])) {
            $model->commodityRoute = $map['CommodityRoute'];
        }
        if (isset($map['MultiOrder'])) {
            $model->multiOrder = $map['MultiOrder'];
        }
        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }

        return $model;
    }
}
