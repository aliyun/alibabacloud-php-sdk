<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseReadyFlagRequest\batchInfoList;
use AlibabaCloud\Tea\Model;

class SubmitInternalPurchaseReadyFlagRequest extends Model
{
    /**
     * @var batchInfoList[]
     */
    public $batchInfoList;

    /**
     * @var string
     */
    public $chargeDate;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var int
     */
    public $orderTotalCount;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'batchInfoList'   => 'BatchInfoList',
        'chargeDate'      => 'ChargeDate',
        'gameId'          => 'GameId',
        'orderTotalCount' => 'OrderTotalCount',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchInfoList) {
            $res['BatchInfoList'] = [];
            if (null !== $this->batchInfoList && \is_array($this->batchInfoList)) {
                $n = 0;
                foreach ($this->batchInfoList as $item) {
                    $res['BatchInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chargeDate) {
            $res['ChargeDate'] = $this->chargeDate;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->orderTotalCount) {
            $res['OrderTotalCount'] = $this->orderTotalCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitInternalPurchaseReadyFlagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchInfoList'])) {
            if (!empty($map['BatchInfoList'])) {
                $model->batchInfoList = [];
                $n                    = 0;
                foreach ($map['BatchInfoList'] as $item) {
                    $model->batchInfoList[$n++] = null !== $item ? batchInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChargeDate'])) {
            $model->chargeDate = $map['ChargeDate'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['OrderTotalCount'])) {
            $model->orderTotalCount = $map['OrderTotalCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
