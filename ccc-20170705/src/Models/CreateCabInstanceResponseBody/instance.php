<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateCabInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $callCenterInstanceId;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $maxConcurrentConversation;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceDescription;
    protected $_name = [
        'creationTime'              => 'CreationTime',
        'callCenterInstanceId'      => 'CallCenterInstanceId',
        'owner'                     => 'Owner',
        'instanceName'              => 'InstanceName',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
        'instanceId'                => 'InstanceId',
        'instanceDescription'       => 'InstanceDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->callCenterInstanceId) {
            $res['CallCenterInstanceId'] = $this->callCenterInstanceId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CallCenterInstanceId'])) {
            $model->callCenterInstanceId = $map['CallCenterInstanceId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        return $model;
    }
}
