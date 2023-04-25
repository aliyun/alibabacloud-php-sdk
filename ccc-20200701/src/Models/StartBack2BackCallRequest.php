<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class StartBack2BackCallRequest extends Model
{
    /**
     * @example 0102156****
     *
     * @var string
     */
    public $additionalBroker;

    /**
     * @example 0102157****
     *
     * @var string
     */
    public $broker;

    /**
     * @example 1372168****
     *
     * @var string
     */
    public $callee;

    /**
     * @example 1391814****
     *
     * @var string
     */
    public $caller;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @example 30
     *
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'additionalBroker' => 'AdditionalBroker',
        'broker'           => 'Broker',
        'callee'           => 'Callee',
        'caller'           => 'Caller',
        'instanceId'       => 'InstanceId',
        'tags'             => 'Tags',
        'timeoutSeconds'   => 'TimeoutSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalBroker) {
            $res['AdditionalBroker'] = $this->additionalBroker;
        }
        if (null !== $this->broker) {
            $res['Broker'] = $this->broker;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
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
        if (isset($map['AdditionalBroker'])) {
            $model->additionalBroker = $map['AdditionalBroker'];
        }
        if (isset($map['Broker'])) {
            $model->broker = $map['Broker'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
