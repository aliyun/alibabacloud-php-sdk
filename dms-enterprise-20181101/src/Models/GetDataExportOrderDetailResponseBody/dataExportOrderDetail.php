<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail\keyInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail\orderDetail;
use AlibabaCloud\Tea\Model;

class dataExportOrderDetail extends Model
{
    /**
     * @description The status information of the data export ticket.
     *
     * @var keyInfo
     */
    public $keyInfo;

    /**
     * @description The details of the ticket.
     *
     * @var orderDetail
     */
    public $orderDetail;
    protected $_name = [
        'keyInfo'     => 'KeyInfo',
        'orderDetail' => 'OrderDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyInfo) {
            $res['KeyInfo'] = null !== $this->keyInfo ? $this->keyInfo->toMap() : null;
        }
        if (null !== $this->orderDetail) {
            $res['OrderDetail'] = null !== $this->orderDetail ? $this->orderDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataExportOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyInfo'])) {
            $model->keyInfo = keyInfo::fromMap($map['KeyInfo']);
        }
        if (isset($map['OrderDetail'])) {
            $model->orderDetail = orderDetail::fromMap($map['OrderDetail']);
        }

        return $model;
    }
}
