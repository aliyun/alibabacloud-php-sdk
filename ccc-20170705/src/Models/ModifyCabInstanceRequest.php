<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifyCabInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var int
     */
    public $maxConcurrentConversation;

    /**
     * @var string
     */
    public $callCenterInstanceId;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'instanceDescription'       => 'InstanceDescription',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
        'callCenterInstanceId'      => 'CallCenterInstanceId',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
        }
        if (null !== $this->callCenterInstanceId) {
            $res['CallCenterInstanceId'] = $this->callCenterInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCabInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }
        if (isset($map['CallCenterInstanceId'])) {
            $model->callCenterInstanceId = $map['CallCenterInstanceId'];
        }

        return $model;
    }
}
