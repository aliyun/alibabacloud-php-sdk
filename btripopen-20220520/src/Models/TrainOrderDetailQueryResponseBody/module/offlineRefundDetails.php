<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\offlineRefundDetails\offlineRefundInfos;
use AlibabaCloud\Tea\Model;

class offlineRefundDetails extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $offlineRefundId;

    /**
     * @var offlineRefundInfos[]
     */
    public $offlineRefundInfos;

    /**
     * @example 1
     *
     * @var string
     */
    public $offlineRefundType;

    /**
     * @example 10000
     *
     * @var int
     */
    public $refundTotalPrice;
    protected $_name = [
        'offlineRefundId'    => 'offline_refund_id',
        'offlineRefundInfos' => 'offline_refund_infos',
        'offlineRefundType'  => 'offline_refund_type',
        'refundTotalPrice'   => 'refund_total_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offlineRefundId) {
            $res['offline_refund_id'] = $this->offlineRefundId;
        }
        if (null !== $this->offlineRefundInfos) {
            $res['offline_refund_infos'] = [];
            if (null !== $this->offlineRefundInfos && \is_array($this->offlineRefundInfos)) {
                $n = 0;
                foreach ($this->offlineRefundInfos as $item) {
                    $res['offline_refund_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->offlineRefundType) {
            $res['offline_refund_type'] = $this->offlineRefundType;
        }
        if (null !== $this->refundTotalPrice) {
            $res['refund_total_price'] = $this->refundTotalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offlineRefundDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['offline_refund_id'])) {
            $model->offlineRefundId = $map['offline_refund_id'];
        }
        if (isset($map['offline_refund_infos'])) {
            if (!empty($map['offline_refund_infos'])) {
                $model->offlineRefundInfos = [];
                $n                         = 0;
                foreach ($map['offline_refund_infos'] as $item) {
                    $model->offlineRefundInfos[$n++] = null !== $item ? offlineRefundInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['offline_refund_type'])) {
            $model->offlineRefundType = $map['offline_refund_type'];
        }
        if (isset($map['refund_total_price'])) {
            $model->refundTotalPrice = $map['refund_total_price'];
        }

        return $model;
    }
}
