<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\configDetail;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\orderDetail;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;

class dataCorrectOrderDetail extends Model
{
    /**
     * @var configDetail
     */
    public $configDetail;

    /**
     * @var databaseList
     */
    public $databaseList;

    /**
     * @var string
     */
    public $execMode;

    /**
     * @var orderDetail
     */
    public $orderDetail;

    /**
     * @var preCheckDetail
     */
    public $preCheckDetail;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configDetail' => 'ConfigDetail',
        'databaseList' => 'DatabaseList',
        'execMode' => 'ExecMode',
        'orderDetail' => 'OrderDetail',
        'preCheckDetail' => 'PreCheckDetail',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->configDetail) {
            $this->configDetail->validate();
        }
        if (null !== $this->databaseList) {
            $this->databaseList->validate();
        }
        if (null !== $this->orderDetail) {
            $this->orderDetail->validate();
        }
        if (null !== $this->preCheckDetail) {
            $this->preCheckDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configDetail) {
            $res['ConfigDetail'] = null !== $this->configDetail ? $this->configDetail->toArray($noStream) : $this->configDetail;
        }

        if (null !== $this->databaseList) {
            $res['DatabaseList'] = null !== $this->databaseList ? $this->databaseList->toArray($noStream) : $this->databaseList;
        }

        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }

        if (null !== $this->orderDetail) {
            $res['OrderDetail'] = null !== $this->orderDetail ? $this->orderDetail->toArray($noStream) : $this->orderDetail;
        }

        if (null !== $this->preCheckDetail) {
            $res['PreCheckDetail'] = null !== $this->preCheckDetail ? $this->preCheckDetail->toArray($noStream) : $this->preCheckDetail;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ConfigDetail'])) {
            $model->configDetail = configDetail::fromMap($map['ConfigDetail']);
        }

        if (isset($map['DatabaseList'])) {
            $model->databaseList = databaseList::fromMap($map['DatabaseList']);
        }

        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }

        if (isset($map['OrderDetail'])) {
            $model->orderDetail = orderDetail::fromMap($map['OrderDetail']);
        }

        if (isset($map['PreCheckDetail'])) {
            $model->preCheckDetail = preCheckDetail::fromMap($map['PreCheckDetail']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
