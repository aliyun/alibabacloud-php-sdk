<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class StartBack2BackCallRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $broker;

    /**
     * @var string
     */
    public $additionalBroker;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'caller'           => 'Caller',
        'callee'           => 'Callee',
        'timeoutSeconds'   => 'TimeoutSeconds',
        'broker'           => 'Broker',
        'additionalBroker' => 'AdditionalBroker',
        'tags'             => 'Tags',
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
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->broker) {
            $res['Broker'] = $this->broker;
        }
        if (null !== $this->additionalBroker) {
            $res['AdditionalBroker'] = $this->additionalBroker;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartBack2BackCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['Broker'])) {
            $model->broker = $map['Broker'];
        }
        if (isset($map['AdditionalBroker'])) {
            $model->additionalBroker = $map['AdditionalBroker'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
