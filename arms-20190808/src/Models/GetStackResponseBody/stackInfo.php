<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponseBody\stackInfo\extInfo;
use AlibabaCloud\Tea\Model;

class stackInfo extends Model
{
    /**
     * @description The name of the operation.
     *
     * @example Tomcat Servlet Process
     *
     * @var string
     */
    public $api;

    /**
     * @description The duration. Unit: milliseconds.
     *
     * @example 32
     *
     * @var int
     */
    public $duration;

    /**
     * @description The error message.
     *
     * @example java.lang.NullPointerException
     *
     * @var string
     */
    public $exception;

    /**
     * @description The information about the array object.
     *
     * @var extInfo
     */
    public $extInfo;

    /**
     * @description The number of rows in the method stack information.
     *
     * @example 34
     *
     * @var string
     */
    public $line;

    /**
     * @description The ID of the RPC mode.
     *
     * @example 0.1
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description The name of the service.
     *
     * @example /com/test
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The start time of the call method.
     *
     * @example 1653555396
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'api'         => 'Api',
        'duration'    => 'Duration',
        'exception'   => 'Exception',
        'extInfo'     => 'ExtInfo',
        'line'        => 'Line',
        'rpcId'       => 'RpcId',
        'serviceName' => 'ServiceName',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = null !== $this->extInfo ? $this->extInfo->toMap() : null;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = extInfo::fromMap($map['ExtInfo']);
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
