<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 500
     *
     * @var int
     */
    public $down;

    /**
     * @example 15
     *
     * @var int
     */
    public $interval;

    /**
     * @example 233
     *
     * @var int
     */
    public $port;

    /**
     * @example 1000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example tcp
     *
     * @var string
     */
    public $type;

    /**
     * @example 1000
     *
     * @var int
     */
    public $up;

    /**
     * @example /a/b/c
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
