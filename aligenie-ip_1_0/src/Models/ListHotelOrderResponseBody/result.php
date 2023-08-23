<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 21.5
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
     * @example 20220808180132000114508555527711
     *
     * @var string
     */
    public $orderNo;

    /**
     * @example 12
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 2001
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example INIT
     *
     * @var string
     */
    public $status;

    /**
     * @example REPAIR
     *
     * @var string
     */
    public $type;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/shebeiweixiu.png
     *
     * @var string
     */
    public $typeIconUrl;

    /**
     * @example 设备维修
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'applyAmt'    => 'ApplyAmt',
        'gmtCreate'   => 'GmtCreate',
        'orderNo'     => 'OrderNo',
        'quantity'    => 'Quantity',
        'roomNo'      => 'RoomNo',
        'status'      => 'Status',
        'type'        => 'Type',
        'typeIconUrl' => 'TypeIconUrl',
        'typeName'    => 'TypeName',
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
        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeIconUrl) {
            $res['TypeIconUrl'] = $this->typeIconUrl;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeIconUrl'])) {
            $model->typeIconUrl = $map['TypeIconUrl'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
