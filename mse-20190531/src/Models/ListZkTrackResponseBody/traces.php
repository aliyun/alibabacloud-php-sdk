<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackResponseBody;

use AlibabaCloud\Tea\Model;

class traces extends Model
{
    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var string
     */
    public $logDate;

    /**
     * @var int
     */
    public $multiSize;

    /**
     * @var string
     */
    public $opType;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $traceType;

    /**
     * @var int
     */
    public $ttl;

    /**
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
