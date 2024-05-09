<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\bookInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\offlineRefundDetails;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\passengerInfoS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var bookInfos
     */
    public $bookInfos;

    /**
     * @var changeInfos[]
     */
    public $changeInfos;

    /**
     * @var offlineRefundDetails[]
     */
    public $offlineRefundDetails;

    /**
     * @example 1017028198411054446
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 3703184209587306496
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerInfoS[]
     */
    public $passengerInfoS;

    /**
     * @var refundInfos[]
     */
    public $refundInfos;
    protected $_name = [
        'bookInfos'            => 'book_infos',
        'changeInfos'          => 'change_infos',
        'offlineRefundDetails' => 'offlineRefundDetails',
        'orderId'              => 'order_id',
        'outOrderId'           => 'out_order_id',
        'passengerInfoS'       => 'passenger_info_s',
        'refundInfos'          => 'refund_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookInfos) {
            $res['book_infos'] = null !== $this->bookInfos ? $this->bookInfos->toMap() : null;
        }
        if (null !== $this->changeInfos) {
            $res['change_infos'] = [];
            if (null !== $this->changeInfos && \is_array($this->changeInfos)) {
                $n = 0;
                foreach ($this->changeInfos as $item) {
                    $res['change_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->offlineRefundDetails) {
            $res['offlineRefundDetails'] = [];
            if (null !== $this->offlineRefundDetails && \is_array($this->offlineRefundDetails)) {
                $n = 0;
                foreach ($this->offlineRefundDetails as $item) {
                    $res['offlineRefundDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->passengerInfoS) {
            $res['passenger_info_s'] = [];
            if (null !== $this->passengerInfoS && \is_array($this->passengerInfoS)) {
                $n = 0;
                foreach ($this->passengerInfoS as $item) {
                    $res['passenger_info_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundInfos) {
            $res['refund_infos'] = [];
            if (null !== $this->refundInfos && \is_array($this->refundInfos)) {
                $n = 0;
                foreach ($this->refundInfos as $item) {
                    $res['refund_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_infos'])) {
            $model->bookInfos = bookInfos::fromMap($map['book_infos']);
        }
        if (isset($map['change_infos'])) {
            if (!empty($map['change_infos'])) {
                $model->changeInfos = [];
                $n                  = 0;
                foreach ($map['change_infos'] as $item) {
                    $model->changeInfos[$n++] = null !== $item ? changeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['offlineRefundDetails'])) {
            if (!empty($map['offlineRefundDetails'])) {
                $model->offlineRefundDetails = [];
                $n                           = 0;
                foreach ($map['offlineRefundDetails'] as $item) {
                    $model->offlineRefundDetails[$n++] = null !== $item ? offlineRefundDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['passenger_info_s'])) {
            if (!empty($map['passenger_info_s'])) {
                $model->passengerInfoS = [];
                $n                     = 0;
                foreach ($map['passenger_info_s'] as $item) {
                    $model->passengerInfoS[$n++] = null !== $item ? passengerInfoS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_infos'])) {
            if (!empty($map['refund_infos'])) {
                $model->refundInfos = [];
                $n                  = 0;
                foreach ($map['refund_infos'] as $item) {
                    $model->refundInfos[$n++] = null !== $item ? refundInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
