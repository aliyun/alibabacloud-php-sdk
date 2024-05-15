<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAutonomousNotifyEventContentRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The unique identifier of the event. You can call the [GetAutonomousNotifyEventsInRange](https://help.aliyun.com/document_detail/288371.html) operation to query the unique identifier returned by the SpanId response parameter.
     *
     * This parameter is required.
     * @example 7e7b2774-95b8-4fa3-bd9c-0ab47cb7****
     *
     * @var string
     */
    public $spanId;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $context;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'spanId'     => 'SpanId',
        'context'    => '__context',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->spanId) {
            $res['SpanId'] = $this->spanId;
        }
        if (null !== $this->context) {
            $res['__context'] = $this->context;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutonomousNotifyEventContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SpanId'])) {
            $model->spanId = $map['SpanId'];
        }
        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }

        return $model;
    }
}
