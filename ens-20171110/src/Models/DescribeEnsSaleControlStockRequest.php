<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsSaleControlStockRequest extends Model
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
    public $moduleCode;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'aliUidAccount' => 'AliUidAccount',
        'commodityCode' => 'CommodityCode',
        'moduleCode'    => 'ModuleCode',
        'orderType'     => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUidAccount) {
            $res['AliUidAccount'] = $this->aliUidAccount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsSaleControlStockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUidAccount'])) {
            $model->aliUidAccount = $map['AliUidAccount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
