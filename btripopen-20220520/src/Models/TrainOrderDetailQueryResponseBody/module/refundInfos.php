<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\refundInfos\refundTrainInfo;

class refundInfos extends Model
{
    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @var string
     */
    public $outRefundId;

    /**
     * @var string
     */
    public $refundId;

    /**
     * @var refundTrainInfo[]
     */
    public $refundTrainInfo;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'failCode' => 'fail_code',
        'failMsg' => 'fail_msg',
        'outRefundId' => 'out_refund_id',
        'refundId' => 'refund_id',
        'refundTrainInfo' => 'refund_train_info',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->refundTrainInfo)) {
            Model::validateArray($this->refundTrainInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->refundTrainInfo)) {
                $res['refund_train_info'] = [];
                $n1 = 0;
                foreach ($this->refundTrainInfo as $item1) {
                    $res['refund_train_info'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
                $n1 = 0;
                foreach ($map['refund_train_info'] as $item1) {
                    $model->refundTrainInfo[$n1++] = refundTrainInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
