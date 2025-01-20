<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail\keyInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail\orderDetail;

class dataExportOrderDetail extends Model
{
    /**
     * @var keyInfo
     */
    public $keyInfo;
    /**
     * @var orderDetail
     */
    public $orderDetail;
    protected $_name = [
        'keyInfo'     => 'KeyInfo',
        'orderDetail' => 'OrderDetail',
    ];

    public function validate()
    {
        if (null !== $this->keyInfo) {
            $this->keyInfo->validate();
        }
        if (null !== $this->orderDetail) {
            $this->orderDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyInfo) {
            $res['KeyInfo'] = null !== $this->keyInfo ? $this->keyInfo->toArray($noStream) : $this->keyInfo;
        }

        if (null !== $this->orderDetail) {
            $res['OrderDetail'] = null !== $this->orderDetail ? $this->orderDetail->toArray($noStream) : $this->orderDetail;
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
        if (isset($map['KeyInfo'])) {
            $model->keyInfo = keyInfo::fromMap($map['KeyInfo']);
        }

        if (isset($map['OrderDetail'])) {
            $model->orderDetail = orderDetail::fromMap($map['OrderDetail']);
        }

        return $model;
    }
}
