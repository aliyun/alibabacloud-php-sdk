<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateLoadBalancerRequest;

use AlibabaCloud\Dara\Model;

class monitor extends Model
{
    /**
     * @var int
     */
    public $consecutiveDown;
    /**
     * @var int
     */
    public $consecutiveUp;
    /**
     * @var string
     */
    public $expectedCodes;
    /**
     * @var bool
     */
    public $followRedirects;
    /**
     * @var mixed
     */
    public $header;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $path;
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
    protected $_name = [
        'consecutiveDown' => 'ConsecutiveDown',
        'consecutiveUp'   => 'ConsecutiveUp',
        'expectedCodes'   => 'ExpectedCodes',
        'followRedirects' => 'FollowRedirects',
        'header'          => 'Header',
        'interval'        => 'Interval',
        'method'          => 'Method',
        'path'            => 'Path',
        'port'            => 'Port',
        'timeout'         => 'Timeout',
        'type'            => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consecutiveDown) {
            $res['ConsecutiveDown'] = $this->consecutiveDown;
        }

        if (null !== $this->consecutiveUp) {
            $res['ConsecutiveUp'] = $this->consecutiveUp;
        }

        if (null !== $this->expectedCodes) {
            $res['ExpectedCodes'] = $this->expectedCodes;
        }

        if (null !== $this->followRedirects) {
            $res['FollowRedirects'] = $this->followRedirects;
        }

        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsecutiveDown'])) {
            $model->consecutiveDown = $map['ConsecutiveDown'];
        }

        if (isset($map['ConsecutiveUp'])) {
            $model->consecutiveUp = $map['ConsecutiveUp'];
        }

        if (isset($map['ExpectedCodes'])) {
            $model->expectedCodes = $map['ExpectedCodes'];
        }

        if (isset($map['FollowRedirects'])) {
            $model->followRedirects = $map['FollowRedirects'];
        }

        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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

        return $model;
    }
}
