<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetAutonomousNotifyEventContentRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $spanId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
