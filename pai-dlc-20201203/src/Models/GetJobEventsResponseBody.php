<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobEventsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $events;

    /**
     * @example dlc-20210126170216-******
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 78F6FCE2-278F-4C4A-A6B7-DD8ECEA9C456
     *
     * @var int
     */
    public $requestId;
    protected $_name = [
        'events'    => 'Events',
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = $map['Events'];
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
