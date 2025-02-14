<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ServiceHealthCheck extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var int
     */
    public $healthyThreshold;
    /**
     * @var string
     */
    public $httpHost;
    /**
     * @var string
     */
    public $httpPath;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'enable'             => 'enable',
        'healthyThreshold'   => 'healthyThreshold',
        'httpHost'           => 'httpHost',
        'httpPath'           => 'httpPath',
        'interval'           => 'interval',
        'protocol'           => 'protocol',
        'timeout'            => 'timeout',
        'unhealthyThreshold' => 'unhealthyThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->healthyThreshold) {
            $res['healthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->httpHost) {
            $res['httpHost'] = $this->httpHost;
        }

        if (null !== $this->httpPath) {
            $res['httpPath'] = $this->httpPath;
        }

        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->unhealthyThreshold) {
            $res['unhealthyThreshold'] = $this->unhealthyThreshold;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['healthyThreshold'])) {
            $model->healthyThreshold = $map['healthyThreshold'];
        }

        if (isset($map['httpHost'])) {
            $model->httpHost = $map['httpHost'];
        }

        if (isset($map['httpPath'])) {
            $model->httpPath = $map['httpPath'];
        }

        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['unhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['unhealthyThreshold'];
        }

        return $model;
    }
}
