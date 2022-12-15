<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CommonApplySyncRequest extends Model
{
    /**
     * @example 1003366164
     *
     * @var int
     */
    public $applyId;

    /**
     * @example 3
     *
     * @var int
     */
    public $bizCategory;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example asfa
     *
     * @var string
     */
    public $thirdpartyFlowId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyId'          => 'apply_id',
        'bizCategory'      => 'biz_category',
        'remark'           => 'remark',
        'status'           => 'status',
        'thirdpartyFlowId' => 'thirdparty_flow_id',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->bizCategory) {
            $res['biz_category'] = $this->bizCategory;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thirdpartyFlowId) {
            $res['thirdparty_flow_id'] = $this->thirdpartyFlowId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonApplySyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['biz_category'])) {
            $model->bizCategory = $map['biz_category'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['thirdparty_flow_id'])) {
            $model->thirdpartyFlowId = $map['thirdparty_flow_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
