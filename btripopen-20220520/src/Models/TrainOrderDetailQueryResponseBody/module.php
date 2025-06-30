<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\bookInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\offlineRefundDetails;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\passengerInfoS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos;

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
     * @var string
     */
    public $orderId;

    /**
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
        'bookInfos' => 'book_infos',
        'changeInfos' => 'change_infos',
        'offlineRefundDetails' => 'offlineRefundDetails',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'passengerInfoS' => 'passenger_info_s',
        'refundInfos' => 'refund_infos',
    ];

    public function validate()
    {
        if (null !== $this->bookInfos) {
            $this->bookInfos->validate();
        }
        if (\is_array($this->changeInfos)) {
            Model::validateArray($this->changeInfos);
        }
        if (\is_array($this->offlineRefundDetails)) {
            Model::validateArray($this->offlineRefundDetails);
        }
        if (\is_array($this->passengerInfoS)) {
            Model::validateArray($this->passengerInfoS);
        }
        if (\is_array($this->refundInfos)) {
            Model::validateArray($this->refundInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookInfos) {
            $res['book_infos'] = null !== $this->bookInfos ? $this->bookInfos->toArray($noStream) : $this->bookInfos;
        }

        if (null !== $this->changeInfos) {
            if (\is_array($this->changeInfos)) {
                $res['change_infos'] = [];
                $n1 = 0;
                foreach ($this->changeInfos as $item1) {
                    $res['change_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->offlineRefundDetails) {
            if (\is_array($this->offlineRefundDetails)) {
                $res['offlineRefundDetails'] = [];
                $n1 = 0;
                foreach ($this->offlineRefundDetails as $item1) {
                    $res['offlineRefundDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->passengerInfoS)) {
                $res['passenger_info_s'] = [];
                $n1 = 0;
                foreach ($this->passengerInfoS as $item1) {
                    $res['passenger_info_s'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundInfos) {
            if (\is_array($this->refundInfos)) {
                $res['refund_infos'] = [];
                $n1 = 0;
                foreach ($this->refundInfos as $item1) {
                    $res['refund_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['book_infos'])) {
            $model->bookInfos = bookInfos::fromMap($map['book_infos']);
        }

        if (isset($map['change_infos'])) {
            if (!empty($map['change_infos'])) {
                $model->changeInfos = [];
                $n1 = 0;
                foreach ($map['change_infos'] as $item1) {
                    $model->changeInfos[$n1] = changeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['offlineRefundDetails'])) {
            if (!empty($map['offlineRefundDetails'])) {
                $model->offlineRefundDetails = [];
                $n1 = 0;
                foreach ($map['offlineRefundDetails'] as $item1) {
                    $model->offlineRefundDetails[$n1] = offlineRefundDetails::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['passenger_info_s'] as $item1) {
                    $model->passengerInfoS[$n1] = passengerInfoS::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_infos'])) {
            if (!empty($map['refund_infos'])) {
                $model->refundInfos = [];
                $n1 = 0;
                foreach ($map['refund_infos'] as $item1) {
                    $model->refundInfos[$n1] = refundInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
