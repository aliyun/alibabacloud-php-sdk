<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean\traceInfos;

use AlibabaCloud\Tea\Model;

class traceInfo extends Model
{
    /**
     * @description The execution duration. Unit: seconds.
     *
     * @example 100
     *
     * @var int
     */
    public $duration;

    /**
     * @description The span name.
     *
     * @example /api
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The IP address or name of the server on which the span is running.
     *
     * @example 192.163.XXX.XXX
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The service name.
     *
     * @example service1
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @description The tag information.
     *
     * @example {"env":"dev"}
     *
     * @var mixed[]
     */
    public $tagMap;

    /**
     * @description The timestamp when the span was generated. Unit: millisecond.
     *
     * @example 1575561600000000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The trace ID.
     *
     * @example 1c6881aab84191a4
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'duration'      => 'Duration',
        'operationName' => 'OperationName',
        'serviceIp'     => 'ServiceIp',
        'serviceName'   => 'ServiceName',
        'statusCode'    => 'StatusCode',
        'tagMap'        => 'TagMap',
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
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->tagMap) {
            $res['TagMap'] = $this->tagMap;
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
     * @return traceInfo
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
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['TagMap'])) {
            $model->tagMap = $map['TagMap'];
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
