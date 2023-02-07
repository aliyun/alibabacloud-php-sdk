<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @example 186****0000
     *
     * @var string
     */
    public $called;

    /**
     * @example 136****0000
     *
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $direction;

    /**
     * @example 30
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2021-05-20 00:03:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 123456
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $retryCurTimes;

    /**
     * @example 1
     *
     * @var int
     */
    public $retryTimes;

    /**
     * @example 2021-05-20 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 00001
     *
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusCodeDesc;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'called'         => 'Called',
        'caller'         => 'Caller',
        'direction'      => 'Direction',
        'duration'       => 'Duration',
        'endTime'        => 'EndTime',
        'id'             => 'Id',
        'retryCurTimes'  => 'RetryCurTimes',
        'retryTimes'     => 'RetryTimes',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'statusCode'     => 'StatusCode',
        'statusCodeDesc' => 'StatusCodeDesc',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->retryCurTimes) {
            $res['RetryCurTimes'] = $this->retryCurTimes;
        }
        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusCodeDesc) {
            $res['StatusCodeDesc'] = $this->statusCodeDesc;
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
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RetryCurTimes'])) {
            $model->retryCurTimes = $map['RetryCurTimes'];
        }
        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusCodeDesc'])) {
            $model->statusCodeDesc = $map['StatusCodeDesc'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
