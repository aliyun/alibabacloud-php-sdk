<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTaskLogsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $msg;
    /**
     * @var int
     */
    public $sourceId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'action'     => 'action',
        'createTime' => 'createTime',
        'id'         => 'id',
        'msg'        => 'msg',
        'sourceId'   => 'sourceId',
        'status'     => 'status',
        'taskId'     => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
