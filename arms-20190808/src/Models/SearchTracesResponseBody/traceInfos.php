<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesResponseBody;

use AlibabaCloud\Dara\Model;

class traceInfos extends Model
{
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var string
     */
    public $serviceIp;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $spanID;
    /**
     * @var int
     */
    public $timestamp;
    /**
     * @var string
     */
    public $traceID;
    protected $_name = [
        'duration'      => 'Duration',
        'operationName' => 'OperationName',
        'serviceIp'     => 'ServiceIp',
        'serviceName'   => 'ServiceName',
        'spanID'        => 'SpanID',
        'timestamp'     => 'Timestamp',
        'traceID'       => 'TraceID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }

        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->spanID) {
            $res['SpanID'] = $this->spanID;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }

        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['SpanID'])) {
            $model->spanID = $map['SpanID'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
