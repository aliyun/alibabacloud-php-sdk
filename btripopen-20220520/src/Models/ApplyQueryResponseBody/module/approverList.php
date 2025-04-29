<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class approverList extends Model
{
    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var int
     */
    public $order;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'note' => 'note',
        'operateTime' => 'operate_time',
        'order' => 'order',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->note) {
            $res['note'] = $this->note;
        }

        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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
        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        if (isset($map['operate_time'])) {
            $model->operateTime = $map['operate_time'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['status_desc'])) {
            $model->statusDesc = $map['status_desc'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
