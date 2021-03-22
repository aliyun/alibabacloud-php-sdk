<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteActivationResponseBody;

use AlibabaCloud\Tea\Model;

class activation extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $deregisteredCount;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $registeredCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ipAddressRange;

    /**
     * @var int
     */
    public $timeToLiveInHours;

    /**
     * @var string
     */
    public $activationId;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'deregisteredCount' => 'DeregisteredCount',
        'instanceCount'     => 'InstanceCount',
        'description'       => 'Description',
        'registeredCount'   => 'RegisteredCount',
        'instanceName'      => 'InstanceName',
        'ipAddressRange'    => 'IpAddressRange',
        'timeToLiveInHours' => 'TimeToLiveInHours',
        'activationId'      => 'ActivationId',
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
        if (null !== $this->deregisteredCount) {
            $res['DeregisteredCount'] = $this->deregisteredCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->registeredCount) {
            $res['RegisteredCount'] = $this->registeredCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ipAddressRange) {
            $res['IpAddressRange'] = $this->ipAddressRange;
        }
        if (null !== $this->timeToLiveInHours) {
            $res['TimeToLiveInHours'] = $this->timeToLiveInHours;
        }
        if (null !== $this->activationId) {
            $res['ActivationId'] = $this->activationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeregisteredCount'])) {
            $model->deregisteredCount = $map['DeregisteredCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegisteredCount'])) {
            $model->registeredCount = $map['RegisteredCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IpAddressRange'])) {
            $model->ipAddressRange = $map['IpAddressRange'];
        }
        if (isset($map['TimeToLiveInHours'])) {
            $model->timeToLiveInHours = $map['TimeToLiveInHours'];
        }
        if (isset($map['ActivationId'])) {
            $model->activationId = $map['ActivationId'];
        }

        return $model;
    }
}
