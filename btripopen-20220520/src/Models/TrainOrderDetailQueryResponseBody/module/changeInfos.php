<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\changeInfos\changeTrainInfos;
use AlibabaCloud\Tea\Model;

class changeInfos extends Model
{
    /**
     * @example 1234567890
     *
     * @var string
     */
    public $changeApplyId;

    /**
     * @var changeTrainInfos[]
     */
    public $changeTrainInfos;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $limitPayTime;

    /**
     * @example 12345
     *
     * @var string
     */
    public $outChangeApplyId;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'changeApplyId'    => 'change_apply_id',
        'changeTrainInfos' => 'change_train_infos',
        'limitPayTime'     => 'limit_pay_time',
        'outChangeApplyId' => 'out_change_apply_id',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeApplyId) {
            $res['change_apply_id'] = $this->changeApplyId;
        }
        if (null !== $this->changeTrainInfos) {
            $res['change_train_infos'] = [];
            if (null !== $this->changeTrainInfos && \is_array($this->changeTrainInfos)) {
                $n = 0;
                foreach ($this->changeTrainInfos as $item) {
                    $res['change_train_infos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return changeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_apply_id'])) {
            $model->changeApplyId = $map['change_apply_id'];
        }
        if (isset($map['change_train_infos'])) {
            if (!empty($map['change_train_infos'])) {
                $model->changeTrainInfos = [];
                $n                       = 0;
                foreach ($map['change_train_infos'] as $item) {
                    $model->changeTrainInfos[$n++] = null !== $item ? changeTrainInfos::fromMap($item) : $item;
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
