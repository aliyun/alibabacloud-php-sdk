<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class HealthCheckConfig extends Model
{
    /**
     * @var int
     */
    public $checkInterval;

    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'checkInterval' => 'CheckInterval',
        'failureCount' => 'FailureCount',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'timeoutSeconds' => 'TimeoutSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkInterval) {
            $res['CheckInterval'] = $this->checkInterval;
        }

        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['CheckInterval'])) {
            $model->checkInterval = $map['CheckInterval'];
        }

        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
