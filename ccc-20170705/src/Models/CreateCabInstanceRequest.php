<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateCabInstanceRequest extends Model
{
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
     * @return CreateCabInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
