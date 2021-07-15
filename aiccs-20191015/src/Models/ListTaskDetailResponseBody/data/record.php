<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $retryCurTimes;

    /**
     * @var string
     */
    public $called;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusCodeDesc;

    /**
     * @var int
     */
    public $retryTimes;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'status'         => 'Status',
        'retryCurTimes'  => 'RetryCurTimes',
        'called'         => 'Called',
        'caller'         => 'Caller',
        'duration'       => 'Duration',
        'id'             => 'Id',
        'statusCode'     => 'StatusCode',
        'statusCodeDesc' => 'StatusCodeDesc',
        'retryTimes'     => 'RetryTimes',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'direction'      => 'Direction',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->retryCurTimes) {
            $res['RetryCurTimes'] = $this->retryCurTimes;
        }
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusCodeDesc) {
            $res['StatusCodeDesc'] = $this->statusCodeDesc;
        }
        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return record
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RetryCurTimes'])) {
            $model->retryCurTimes = $map['RetryCurTimes'];
        }
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusCodeDesc'])) {
            $model->statusCodeDesc = $map['StatusCodeDesc'];
        }
        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
