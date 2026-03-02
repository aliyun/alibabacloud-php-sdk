<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class StackInfo extends Model
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
     * @var StackInfoExtInfo
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
        'api' => 'api',
        'duration' => 'duration',
        'exception' => 'exception',
        'extInfo' => 'extInfo',
        'line' => 'line',
        'rpcId' => 'rpcId',
        'serviceName' => 'serviceName',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (null !== $this->extInfo) {
            $this->extInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = $this->api;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->exception) {
            $res['exception'] = $this->exception;
        }

        if (null !== $this->extInfo) {
            $res['extInfo'] = null !== $this->extInfo ? $this->extInfo->toArray($noStream) : $this->extInfo;
        }

        if (null !== $this->line) {
            $res['line'] = $this->line;
        }

        if (null !== $this->rpcId) {
            $res['rpcId'] = $this->rpcId;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['api'])) {
            $model->api = $map['api'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['exception'])) {
            $model->exception = $map['exception'];
        }

        if (isset($map['extInfo'])) {
            $model->extInfo = StackInfoExtInfo::fromMap($map['extInfo']);
        }

        if (isset($map['line'])) {
            $model->line = $map['line'];
        }

        if (isset($map['rpcId'])) {
            $model->rpcId = $map['rpcId'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
