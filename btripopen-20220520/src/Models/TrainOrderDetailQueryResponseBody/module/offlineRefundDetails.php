<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\offlineRefundDetails\offlineRefundInfos;

class offlineRefundDetails extends Model
{
    /**
     * @var string
     */
    public $offlineRefundId;

    /**
     * @var offlineRefundInfos[]
     */
    public $offlineRefundInfos;

    /**
     * @var string
     */
    public $offlineRefundType;

    /**
     * @var int
     */
    public $refundTotalPrice;
    protected $_name = [
        'offlineRefundId' => 'offline_refund_id',
        'offlineRefundInfos' => 'offline_refund_infos',
        'offlineRefundType' => 'offline_refund_type',
        'refundTotalPrice' => 'refund_total_price',
    ];

    public function validate()
    {
        if (\is_array($this->offlineRefundInfos)) {
            Model::validateArray($this->offlineRefundInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offlineRefundId) {
            $res['offline_refund_id'] = $this->offlineRefundId;
        }

        if (null !== $this->offlineRefundInfos) {
            if (\is_array($this->offlineRefundInfos)) {
                $res['offline_refund_infos'] = [];
                $n1 = 0;
                foreach ($this->offlineRefundInfos as $item1) {
                    $res['offline_refund_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['offline_refund_id'])) {
            $model->offlineRefundId = $map['offline_refund_id'];
        }

        if (isset($map['offline_refund_infos'])) {
            if (!empty($map['offline_refund_infos'])) {
                $model->offlineRefundInfos = [];
                $n1 = 0;
                foreach ($map['offline_refund_infos'] as $item1) {
                    $model->offlineRefundInfos[$n1] = offlineRefundInfos::fromMap($item1);
                    ++$n1;
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
