<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateCabInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $callCenterInstanceId;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $maxConcurrentConversation;
    protected $_name = [
        'callCenterInstanceId'      => 'CallCenterInstanceId',
        'instanceDescription'       => 'InstanceDescription',
        'instanceName'              => 'InstanceName',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callCenterInstanceId) {
            $res['CallCenterInstanceId'] = $this->callCenterInstanceId;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
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
        if (isset($map['CallCenterInstanceId'])) {
            $model->callCenterInstanceId = $map['CallCenterInstanceId'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }

        return $model;
    }
}
