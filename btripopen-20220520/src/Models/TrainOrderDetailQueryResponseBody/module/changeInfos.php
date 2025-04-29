<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos\changeTrainInfos;

class changeInfos extends Model
{
    /**
     * @var string
     */
    public $changeApplyId;

    /**
     * @var changeTrainInfos[]
     */
    public $changeTrainInfos;

    /**
     * @var string
     */
    public $limitPayTime;

    /**
     * @var string
     */
    public $outChangeApplyId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'changeApplyId' => 'change_apply_id',
        'changeTrainInfos' => 'change_train_infos',
        'limitPayTime' => 'limit_pay_time',
        'outChangeApplyId' => 'out_change_apply_id',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->changeTrainInfos)) {
            Model::validateArray($this->changeTrainInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeApplyId) {
            $res['change_apply_id'] = $this->changeApplyId;
        }

        if (null !== $this->changeTrainInfos) {
            if (\is_array($this->changeTrainInfos)) {
                $res['change_train_infos'] = [];
                $n1 = 0;
                foreach ($this->changeTrainInfos as $item1) {
                    $res['change_train_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->limitPayTime) {
            $res['limit_pay_time'] = $this->limitPayTime;
        }

        if (null !== $this->outChangeApplyId) {
            $res['out_change_apply_id'] = $this->outChangeApplyId;
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
        if (isset($map['change_apply_id'])) {
            $model->changeApplyId = $map['change_apply_id'];
        }

        if (isset($map['change_train_infos'])) {
            if (!empty($map['change_train_infos'])) {
                $model->changeTrainInfos = [];
                $n1 = 0;
                foreach ($map['change_train_infos'] as $item1) {
                    $model->changeTrainInfos[$n1++] = changeTrainInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['limit_pay_time'])) {
            $model->limitPayTime = $map['limit_pay_time'];
        }

        if (isset($map['out_change_apply_id'])) {
            $model->outChangeApplyId = $map['out_change_apply_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
