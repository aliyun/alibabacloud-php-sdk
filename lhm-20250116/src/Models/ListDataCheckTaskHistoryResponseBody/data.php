<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListDataCheckTaskHistoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var string
     */
    public $biz;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $checkTableNum;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $cronExp;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var int
     */
    public $errorTableNum;

    /**
     * @var int
     */
    public $execStatus;

    /**
     * @var string
     */
    public $execTime;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $originBatchId;

    /**
     * @var float
     */
    public $passProcess;

    /**
     * @var string
     */
    public $passProcessExport;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $reportTime;

    /**
     * @var string
     */
    public $reportTitle;

    /**
     * @var int
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $seqId;

    /**
     * @var int
     */
    public $skipTableNum;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $successfulTableNum;
    protected $_name = [
        'batchId' => 'batchId',
        'biz' => 'biz',
        'checkResult' => 'checkResult',
        'checkTableNum' => 'checkTableNum',
        'concurrency' => 'concurrency',
        'creator' => 'creator',
        'cronExp' => 'cronExp',
        'endTime' => 'endTime',
        'errorMsg' => 'errorMsg',
        'errorTableNum' => 'errorTableNum',
        'execStatus' => 'execStatus',
        'execTime' => 'execTime',
        'extra' => 'extra',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'operator' => 'operator',
        'originBatchId' => 'originBatchId',
        'passProcess' => 'passProcess',
        'passProcessExport' => 'passProcessExport',
        'progress' => 'progress',
        'reportTime' => 'reportTime',
        'reportTitle' => 'reportTitle',
        'scheduleId' => 'scheduleId',
        'seqId' => 'seqId',
        'skipTableNum' => 'skipTableNum',
        'startTime' => 'startTime',
        'successfulTableNum' => 'successfulTableNum',
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

        if (null !== $this->biz) {
            $res['biz'] = $this->biz;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->checkTableNum) {
            $res['checkTableNum'] = $this->checkTableNum;
        }

        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->cronExp) {
            $res['cronExp'] = $this->cronExp;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->errorTableNum) {
            $res['errorTableNum'] = $this->errorTableNum;
        }

        if (null !== $this->execStatus) {
            $res['execStatus'] = $this->execStatus;
        }

        if (null !== $this->execTime) {
            $res['execTime'] = $this->execTime;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->originBatchId) {
            $res['originBatchId'] = $this->originBatchId;
        }

        if (null !== $this->passProcess) {
            $res['passProcess'] = $this->passProcess;
        }

        if (null !== $this->passProcessExport) {
            $res['passProcessExport'] = $this->passProcessExport;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->reportTime) {
            $res['reportTime'] = $this->reportTime;
        }

        if (null !== $this->reportTitle) {
            $res['reportTitle'] = $this->reportTitle;
        }

        if (null !== $this->scheduleId) {
            $res['scheduleId'] = $this->scheduleId;
        }

        if (null !== $this->seqId) {
            $res['seqId'] = $this->seqId;
        }

        if (null !== $this->skipTableNum) {
            $res['skipTableNum'] = $this->skipTableNum;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->successfulTableNum) {
            $res['successfulTableNum'] = $this->successfulTableNum;
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

        if (isset($map['biz'])) {
            $model->biz = $map['biz'];
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['checkTableNum'])) {
            $model->checkTableNum = $map['checkTableNum'];
        }

        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['cronExp'])) {
            $model->cronExp = $map['cronExp'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['errorTableNum'])) {
            $model->errorTableNum = $map['errorTableNum'];
        }

        if (isset($map['execStatus'])) {
            $model->execStatus = $map['execStatus'];
        }

        if (isset($map['execTime'])) {
            $model->execTime = $map['execTime'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['originBatchId'])) {
            $model->originBatchId = $map['originBatchId'];
        }

        if (isset($map['passProcess'])) {
            $model->passProcess = $map['passProcess'];
        }

        if (isset($map['passProcessExport'])) {
            $model->passProcessExport = $map['passProcessExport'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['reportTime'])) {
            $model->reportTime = $map['reportTime'];
        }

        if (isset($map['reportTitle'])) {
            $model->reportTitle = $map['reportTitle'];
        }

        if (isset($map['scheduleId'])) {
            $model->scheduleId = $map['scheduleId'];
        }

        if (isset($map['seqId'])) {
            $model->seqId = $map['seqId'];
        }

        if (isset($map['skipTableNum'])) {
            $model->skipTableNum = $map['skipTableNum'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['successfulTableNum'])) {
            $model->successfulTableNum = $map['successfulTableNum'];
        }

        return $model;
    }
}
