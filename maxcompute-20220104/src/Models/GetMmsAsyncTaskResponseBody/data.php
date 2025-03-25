<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsAsyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-12-17 15:44:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-12-17 17:44:17
     *
     * @var string
     */
    public $endTime;

    /**
     * @example null
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 2523
     *
     * @var int
     */
    public $id;

    /**
     * @example 232
     *
     * @var int
     */
    public $objectId;

    /**
     * @example 0
     *
     * @var int
     */
    public $progress;

    /**
     * @example null
     *
     * @var string
     */
    public $result;

    /**
     * @example false
     *
     * @var bool
     */
    public $running;

    /**
     * @example 2000017
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example 2024-12-17 15:44:17
     *
     * @var string
     */
    public $startTime;

    /**
     * @example DONE
     *
     * @var string
     */
    public $status;

    /**
     * @example TASK_CREATE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'createTime',
        'endTime' => 'endTime',
        'errorMsg' => 'errorMsg',
        'id' => 'id',
        'objectId' => 'objectId',
        'progress' => 'progress',
        'result' => 'result',
        'running' => 'running',
        'sourceId' => 'sourceId',
        'startTime' => 'startTime',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->running) {
            $res['running'] = $this->running;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['running'])) {
            $model->running = $map['running'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
