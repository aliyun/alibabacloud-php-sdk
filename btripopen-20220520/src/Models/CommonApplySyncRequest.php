<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class CommonApplySyncRequest extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var int
     */
    public $bizCategory;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $thirdpartyFlowId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyId' => 'apply_id',
        'bizCategory' => 'biz_category',
        'remark' => 'remark',
        'status' => 'status',
        'thirdpartyFlowId' => 'thirdparty_flow_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
