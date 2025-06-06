<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ModelTask extends Model
{
    /**
     * @var string
     */
    public $currentBytes;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var mixed
     */
    public $extra;

    /**
     * @var float
     */
    public $fileSize;

    /**
     * @var float
     */
    public $finishTime;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var float
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $params;

    /**
     * @var mixed
     */
    public $result;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var float
     */
    public $total;

    /**
     * @var string
     */
    public $totalBytes;

    /**
     * @var float
     */
    public $updateTime;
    protected $_name = [
        'currentBytes' => 'currentBytes',
        'errCode' => 'errCode',
        'errMsg' => 'errMsg',
        'extra' => 'extra',
        'fileSize' => 'fileSize',
        'finishTime' => 'finishTime',
        'finished' => 'finished',
        'finishedTime' => 'finishedTime',
        'id' => 'id',
        'params' => 'params',
        'result' => 'result',
        'speed' => 'speed',
        'startTime' => 'startTime',
        'status' => 'status',
        'taskId' => 'taskId',
        'taskType' => 'taskType',
        'total' => 'total',
        'totalBytes' => 'totalBytes',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentBytes) {
            $res['currentBytes'] = $this->currentBytes;
        }

        if (null !== $this->errCode) {
            $res['errCode'] = $this->errCode;
        }

        if (null !== $this->errMsg) {
            $res['errMsg'] = $this->errMsg;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->finished) {
            $res['finished'] = $this->finished;
        }

        if (null !== $this->finishedTime) {
            $res['finishedTime'] = $this->finishedTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->speed) {
            $res['speed'] = $this->speed;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->totalBytes) {
            $res['totalBytes'] = $this->totalBytes;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['currentBytes'])) {
            $model->currentBytes = $map['currentBytes'];
        }

        if (isset($map['errCode'])) {
            $model->errCode = $map['errCode'];
        }

        if (isset($map['errMsg'])) {
            $model->errMsg = $map['errMsg'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['finished'])) {
            $model->finished = $map['finished'];
        }

        if (isset($map['finishedTime'])) {
            $model->finishedTime = $map['finishedTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['speed'])) {
            $model->speed = $map['speed'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['totalBytes'])) {
            $model->totalBytes = $map['totalBytes'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
