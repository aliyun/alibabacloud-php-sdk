<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListZkTrackResponseBody;

use AlibabaCloud\Tea\Model;

class traces extends Model
{
    /**
     * @description The access control list (ACL).
     *
     * @example world:anyone:cdrwa
     *
     * @var string
     */
    public $acl;

    /**
     * @description The data type. Valid values:
     *
     *   persist
     *   ephemeral
     *
     * @example persist
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The type of the event. Valid values: For tracks of the Notify type:
     *
     *   NodeCreated
     *   NodeDeleted
     *   NodeDataChanged
     *   NodeChildrenChanged
     *
     * @example NodeCreated
     *
     * @var string
     */
    public $eventType;

    /**
     * @description Indicates whether the transaction ended.
     *
     * @example true
     *
     * @var bool
     */
    public $finished;

    /**
     * @description The logging time.
     *
     * @example 2022-11-28 15:09:15,606
     *
     * @var string
     */
    public $logDate;

    /**
     * @description The transaction size.
     *
     * @example 3
     *
     * @var int
     */
    public $multiSize;

    /**
     * @description The operation type. For tracks of the Push type:
     *
     *   Create
     *   Update
     *   Delete
     *   SetAcl
     *   Multi
     *
     * For tracks of the Pull type:
     *
     *   GetData
     *   GetChild
     *   GetStat
     *
     * @example Create
     *
     * @var string
     */
    public $opType;

    /**
     * @description The path.
     *
     * @example /path
     *
     * @var string
     */
    public $path;

    /**
     * @description The result.
     *
     * @example success
     *
     * @var string
     */
    public $result;

    /**
     * @description The session ID.
     *
     * @example 0x301fdfbdbf00***
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The timestamp (not available).
     *
     * @example 1669619383000
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The type of the track. Valid values:
     *
     *   Push
     *   Pull
     *   Notify
     *
     * @example Push
     *
     * @var string
     */
    public $traceType;

    /**
     * @description The time to live (TTL).
     *
     * @example 0
     *
     * @var int
     */
    public $ttl;

    /**
     * @description Indicates whether to enable the monitoring feature.
     *
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
