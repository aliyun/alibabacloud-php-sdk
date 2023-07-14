<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class traceInfos extends Model
{
    /**
     * @description The amount of time consumed by the trace. Unit: milliseconds.
     *
     * @example 679
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the traced span.
     *
     * @example /demo/queryException/12
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The IP address of the host where the application resides.
     *
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The name of the application.
     *
     * @example arms-k8s-demo-subcomponent
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The timestamp.
     *
     * @example 1595174436994
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The trace ID.
     *
     * @example ac1400a115951744369947025d****
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'duration'      => 'Duration',
        'operationName' => 'OperationName',
        'serviceIp'     => 'ServiceIp',
        'serviceName'   => 'ServiceName',
        'timestamp'     => 'Timestamp',
        'traceID'       => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceInfos
     */
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
