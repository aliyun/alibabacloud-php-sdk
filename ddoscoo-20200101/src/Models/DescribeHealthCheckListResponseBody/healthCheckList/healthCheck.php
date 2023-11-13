<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponseBody\healthCheckList;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @description The domain name.
     *
     * > This parameter is returned only when the Layer 7 health check configuration is queried.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The number of consecutive failed health checks that must occur before a port is declared unhealthy. Valid values: **1** to **10**.
     *
     * @example 3
     *
     * @var int
     */
    public $down;

    /**
     * @description The interval at which checks are performed. Valid values: **1** to **30**. Unit: seconds.
     *
     * @example 15
     *
     * @var int
     */
    public $interval;

    /**
     * @description The port that was checked.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The response timeout period. Valid values: **1** to **30**. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **tcp**: The Layer 4 health check configuration was queried.
     *   **http**: The Layer 7 health check configuration was queried.
     *
     * @example tcp
     *
     * @var string
     */
    public $type;

    /**
     * @description The number of consecutive successful health checks that must occur before a port is declared healthy. Valid values: **1** to **10**.
     *
     * @example 3
     *
     * @var int
     */
    public $up;

    /**
     * @description The check path.
     *
     * > This parameter is returned only when the Layer 7 health check configuration is queried.
     * @example /abc
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'domain'   => 'Domain',
        'down'     => 'Down',
        'interval' => 'Interval',
        'port'     => 'Port',
        'timeout'  => 'Timeout',
        'type'     => 'Type',
        'up'       => 'Up',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->down) {
            $res['Down'] = $this->down;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->up) {
            $res['Up'] = $this->up;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Down'])) {
            $model->down = $map['Down'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Up'])) {
            $model->up = $map['Up'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
