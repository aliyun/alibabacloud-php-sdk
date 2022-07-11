<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DisableActivationResponseBody;

use AlibabaCloud\Tea\Model;

class activation extends Model
{
    /**
     * @var string
     */
    public $activationId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $deregisteredCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var int
     */
    public $instanceCount;

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
    public $registeredCount;

    /**
     * @var int
     */
    public $timeToLiveInHours;
    protected $_name = [
        'activationId'      => 'ActivationId',
        'creationTime'      => 'CreationTime',
        'deregisteredCount' => 'DeregisteredCount',
        'description'       => 'Description',
        'disabled'          => 'Disabled',
        'instanceCount'     => 'InstanceCount',
        'instanceName'      => 'InstanceName',
        'ipAddressRange'    => 'IpAddressRange',
        'registeredCount'   => 'RegisteredCount',
        'timeToLiveInHours' => 'TimeToLiveInHours',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationId) {
            $res['ActivationId'] = $this->activationId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deregisteredCount) {
            $res['DeregisteredCount'] = $this->deregisteredCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ipAddressRange) {
            $res['IpAddressRange'] = $this->ipAddressRange;
        }
        if (null !== $this->registeredCount) {
            $res['RegisteredCount'] = $this->registeredCount;
        }
        if (null !== $this->timeToLiveInHours) {
            $res['TimeToLiveInHours'] = $this->timeToLiveInHours;
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
        if (isset($map['ActivationId'])) {
            $model->activationId = $map['ActivationId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeregisteredCount'])) {
            $model->deregisteredCount = $map['DeregisteredCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IpAddressRange'])) {
            $model->ipAddressRange = $map['IpAddressRange'];
        }
        if (isset($map['RegisteredCount'])) {
            $model->registeredCount = $map['RegisteredCount'];
        }
        if (isset($map['TimeToLiveInHours'])) {
            $model->timeToLiveInHours = $map['TimeToLiveInHours'];
        }

        return $model;
    }
}
