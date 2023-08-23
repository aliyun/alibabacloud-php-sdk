<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $applyAmt;

    /**
     * @example 1659952892000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/weixiu/dianqilei/chuanglian.png
     *
     * @var string
     */
    public $itemUrl;

    /**
     * @example 窗帘
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;
    protected $_name = [
        'applyAmt'  => 'ApplyAmt',
        'gmtCreate' => 'GmtCreate',
        'itemUrl'   => 'ItemUrl',
        'name'      => 'Name',
        'quantity'  => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyAmt) {
            $res['ApplyAmt'] = $this->applyAmt;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->itemUrl) {
            $res['ItemUrl'] = $this->itemUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyAmt'])) {
            $model->applyAmt = $map['ApplyAmt'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ItemUrl'])) {
            $model->itemUrl = $map['ItemUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
