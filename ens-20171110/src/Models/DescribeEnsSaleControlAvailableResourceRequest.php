<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeEnsSaleControlAvailableResourceRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $customAccount;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'customAccount' => 'CustomAccount',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->customAccount) {
            $res['CustomAccount'] = $this->customAccount;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CustomAccount'])) {
            $model->customAccount = $map['CustomAccount'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
