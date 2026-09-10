<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ListDataCheckTaskHistoryRequest extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var string
     */
    public $createEndTime;

    /**
     * @var string
     */
    public $createStartTime;

    /**
     * @var string
     */
    public $execEndTime;

    /**
     * @var string
     */
    public $execStartTime;

    /**
     * @var int
     */
    public $execStatus;

    /**
     * @var string
     */
    public $finishEndTime;

    /**
     * @var string
     */
    public $finishStartTime;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId' => 'batchId',
        'checkResult' => 'checkResult',
        'createEndTime' => 'createEndTime',
        'createStartTime' => 'createStartTime',
        'execEndTime' => 'execEndTime',
        'execStartTime' => 'execStartTime',
        'execStatus' => 'execStatus',
        'finishEndTime' => 'finishEndTime',
        'finishStartTime' => 'finishStartTime',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }

        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }

        if (null !== $this->execEndTime) {
            $res['execEndTime'] = $this->execEndTime;
        }

        if (null !== $this->execStartTime) {
            $res['execStartTime'] = $this->execStartTime;
        }

        if (null !== $this->execStatus) {
            $res['execStatus'] = $this->execStatus;
        }

        if (null !== $this->finishEndTime) {
            $res['finishEndTime'] = $this->finishEndTime;
        }

        if (null !== $this->finishStartTime) {
            $res['finishStartTime'] = $this->finishStartTime;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }

        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }

        if (isset($map['execEndTime'])) {
            $model->execEndTime = $map['execEndTime'];
        }

        if (isset($map['execStartTime'])) {
            $model->execStartTime = $map['execStartTime'];
        }

        if (isset($map['execStatus'])) {
            $model->execStatus = $map['execStatus'];
        }

        if (isset($map['finishEndTime'])) {
            $model->finishEndTime = $map['finishEndTime'];
        }

        if (isset($map['finishStartTime'])) {
            $model->finishStartTime = $map['finishStartTime'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
