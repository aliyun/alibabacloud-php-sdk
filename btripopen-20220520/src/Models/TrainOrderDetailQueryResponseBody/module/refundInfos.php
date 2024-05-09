<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos\refundTrainInfo;
use AlibabaCloud\Tea\Model;

class refundInfos extends Model
{
    /**
     * @example 1111
     *
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @example 123456778
     *
     * @var string
     */
    public $outRefundId;

    /**
     * @description String
     *
     * @example 123456
     *
     * @var string
     */
    public $refundId;

    /**
     * @var refundTrainInfo[]
     */
    public $refundTrainInfo;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'failCode'        => 'fail_code',
        'failMsg'         => 'fail_msg',
        'outRefundId'     => 'out_refund_id',
        'refundId'        => 'refund_id',
        'refundTrainInfo' => 'refund_train_info',
        'status'          => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCode) {
            $res['fail_code'] = $this->failCode;
        }
        if (null !== $this->failMsg) {
            $res['fail_msg'] = $this->failMsg;
        }
        if (null !== $this->outRefundId) {
            $res['out_refund_id'] = $this->outRefundId;
        }
        if (null !== $this->refundId) {
            $res['refund_id'] = $this->refundId;
        }
        if (null !== $this->refundTrainInfo) {
            $res['refund_train_info'] = [];
            if (null !== $this->refundTrainInfo && \is_array($this->refundTrainInfo)) {
                $n = 0;
                foreach ($this->refundTrainInfo as $item) {
                    $res['refund_train_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fail_code'])) {
            $model->failCode = $map['fail_code'];
        }
        if (isset($map['fail_msg'])) {
            $model->failMsg = $map['fail_msg'];
        }
        if (isset($map['out_refund_id'])) {
            $model->outRefundId = $map['out_refund_id'];
        }
        if (isset($map['refund_id'])) {
            $model->refundId = $map['refund_id'];
        }
        if (isset($map['refund_train_info'])) {
            if (!empty($map['refund_train_info'])) {
                $model->refundTrainInfo = [];
                $n                      = 0;
                foreach ($map['refund_train_info'] as $item) {
                    $model->refundTrainInfo[$n++] = null !== $item ? refundTrainInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
