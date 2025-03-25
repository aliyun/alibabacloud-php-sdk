<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTaskLogsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example create schema if not exists mms_test.default;
     *
     * @var string
     */
    public $action;

    /**
     * @example 2024-12-17 15:44:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 10000
     *
     * @var int
     */
    public $id;

    /**
     * @example ok
     *
     * @var string
     */
    public $msg;

    /**
     * @example 2000015
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example DATA_DOING
     *
     * @var string
     */
    public $status;

    /**
     * @example 4023
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'action' => 'action',
        'createTime' => 'createTime',
        'id' => 'id',
        'msg' => 'msg',
        'sourceId' => 'sourceId',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
