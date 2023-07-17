<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\GetStackResponseBody;

use AlibabaCloud\SDK\ARMS\V20210422\Models\GetStackResponseBody\stackInfo\extInfo;
use AlibabaCloud\Tea\Model;

class stackInfo extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $exception;

    /**
     * @var extInfo
     */
    public $extInfo;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $rpcId;

    /**
     * @var string
     */
    public $serviceName;

    /**
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
