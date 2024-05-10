<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CarApplyModifyRequest extends Model
{
    /**
     * @example 2022-07-12 16:12:53
     *
     * @var string
     */
    public $operateTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example IRGS1413
     *
     * @var string
     */
    public $thirdPartApplyId;

    /**
     * @description This parameter is required.
     *
     * @example open62141
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'operateTime'      => 'operate_time',
        'remark'           => 'remark',
        'status'           => 'status',
        'thirdPartApplyId' => 'third_part_apply_id',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thirdPartApplyId) {
            $res['third_part_apply_id'] = $this->thirdPartApplyId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CarApplyModifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operate_time'])) {
            $model->operateTime = $map['operate_time'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['third_part_apply_id'])) {
            $model->thirdPartApplyId = $map['third_part_apply_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
