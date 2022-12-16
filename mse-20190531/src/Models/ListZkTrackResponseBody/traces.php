<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackResponseBody;

use AlibabaCloud\Tea\Model;

class traces extends Model
{
    /**
     * @description ACL。
     *
     * @example world:anyone:cdrwa
     *
     * @var string
     */
    public $acl;

    /**
     * @example persist
     *
     * @var string
     */
    public $dataType;

    /**
     * @example NodeCreated
     *
     * @var string
     */
    public $eventType;

    /**
     * @example true
     *
     * @var bool
     */
    public $finished;

    /**
     * @example 2022-11-28 15:09:15,606
     *
     * @var string
     */
    public $logDate;

    /**
     * @example 3
     *
     * @var int
     */
    public $multiSize;

    /**
     * @example Create
     *
     * @var string
     */
    public $opType;

    /**
     * @example /path
     *
     * @var string
     */
    public $path;

    /**
     * @example success
     *
     * @var string
     */
    public $result;

    /**
     * @description SessionId。
     *
     * @example 0x301fdfbdbf00***
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 1669619383000
     *
     * @var string
     */
    public $timestamp;

    /**
     * @example Push
     *
     * @var string
     */
    public $traceType;

    /**
     * @description TTL。
     *
     * @example 0
     *
     * @var int
     */
    public $ttl;

    /**
     * @example true
     *
     * @var bool
     */
    public $watch;
    protected $_name = [
        'acl'       => 'Acl',
        'dataType'  => 'DataType',
        'eventType' => 'EventType',
        'finished'  => 'Finished',
        'logDate'   => 'LogDate',
        'multiSize' => 'MultiSize',
        'opType'    => 'OpType',
        'path'      => 'Path',
        'result'    => 'Result',
        'sessionId' => 'SessionId',
        'timestamp' => 'Timestamp',
        'traceType' => 'TraceType',
        'ttl'       => 'Ttl',
        'watch'     => 'Watch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = $this->acl;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->logDate) {
            $res['LogDate'] = $this->logDate;
        }
        if (null !== $this->multiSize) {
            $res['MultiSize'] = $this->multiSize;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->traceType) {
            $res['TraceType'] = $this->traceType;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->watch) {
            $res['Watch'] = $this->watch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acl'])) {
            $model->acl = $map['Acl'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['LogDate'])) {
            $model->logDate = $map['LogDate'];
        }
        if (isset($map['MultiSize'])) {
            $model->multiSize = $map['MultiSize'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TraceType'])) {
            $model->traceType = $map['TraceType'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Watch'])) {
            $model->watch = $map['Watch'];
        }

        return $model;
    }
}
