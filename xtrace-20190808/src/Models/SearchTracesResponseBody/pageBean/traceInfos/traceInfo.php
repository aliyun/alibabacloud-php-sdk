<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean\traceInfos;

use AlibabaCloud\Tea\Model;

class traceInfo extends Model
{
    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $traceID;
    protected $_name = [
        'operationName' => 'OperationName',
        'serviceIp'     => 'ServiceIp',
        'duration'      => 'Duration',
        'timestamp'     => 'Timestamp',
        'serviceName'   => 'ServiceName',
        'traceID'       => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
