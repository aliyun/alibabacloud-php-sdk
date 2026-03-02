<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class TraceInfo extends Model
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
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'duration' => 'duration',
        'operationName' => 'operationName',
        'serviceIp' => 'serviceIp',
        'serviceName' => 'serviceName',
        'timestamp' => 'timestamp',
        'traceId' => 'traceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->operationName) {
            $res['operationName'] = $this->operationName;
        }

        if (null !== $this->serviceIp) {
            $res['serviceIp'] = $this->serviceIp;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['operationName'])) {
            $model->operationName = $map['operationName'];
        }

        if (isset($map['serviceIp'])) {
            $model->serviceIp = $map['serviceIp'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
