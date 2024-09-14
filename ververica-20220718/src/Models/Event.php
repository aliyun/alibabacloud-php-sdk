<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Event extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @example 00000000-0000-0000-0000-000000680003
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example 00000000-0000-0000-0000-000000000001
     *
     * @var string
     */
    public $eventId;

    /**
     * @example STATE_TRANSITION_IS_COMPLETED
     *
     * @var string
     */
    public $eventName;

    /**
     * @example 00000000-0000-0000-0000-000000005043
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $message;

    /**
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @example edcef******b4f
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createdAt'    => 'createdAt',
        'deploymentId' => 'deploymentId',
        'eventId'      => 'eventId',
        'eventName'    => 'eventName',
        'jobId'        => 'jobId',
        'message'      => 'message',
        'namespace'    => 'namespace',
        'workspace'    => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
