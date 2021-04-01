<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckListResponse\listeners;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $uri;

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
     * @var int
     */
    public $up;
    protected $_name = [
        'type'     => 'Type',
        'domain'   => 'Domain',
        'uri'      => 'Uri',
        'down'     => 'Down',
        'interval' => 'Interval',
        'port'     => 'Port',
        'timeout'  => 'Timeout',
        'up'       => 'Up',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('uri', $this->uri, true);
        Model::validateRequired('down', $this->down, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('up', $this->up, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (null !== $this->up) {
            $res['Up'] = $this->up;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
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
        if (isset($map['Up'])) {
            $model->up = $map['Up'];
        }

        return $model;
    }
}
