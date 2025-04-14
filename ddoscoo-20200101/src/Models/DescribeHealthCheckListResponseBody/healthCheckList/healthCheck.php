<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckListResponseBody\healthCheckList;

use AlibabaCloud\Dara\Model;

class healthCheck extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $down;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $up;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'domain' => 'Domain',
        'down' => 'Down',
        'interval' => 'Interval',
        'port' => 'Port',
        'timeout' => 'Timeout',
        'type' => 'Type',
        'up' => 'Up',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
