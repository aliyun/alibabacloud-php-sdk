<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean\traceInfos;

use AlibabaCloud\Tea\Model;

class traceInfo extends Model
{
    /**
     * @description The time used to call the trace. Unit: milliseconds.
     *
     * @example 100
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the span.
     *
     * @example /api
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The IP address of the server where the span resides.
     *
     * @example 192.163.XXX.XXX
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The name of the application.
     *
     * @example service1
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The map of tags.
     *
     * @example {"env":"dev"}
     *
     * @var mixed[]
     */
    public $tagMap;

    /**
     * @description The time when the span was generated. Unit: microseconds.
     *
     * @example 1575561600000000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The ID of the trace.
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
