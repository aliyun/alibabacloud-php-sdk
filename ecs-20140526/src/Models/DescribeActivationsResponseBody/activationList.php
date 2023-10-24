<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsResponseBody\activationList\tags;
use AlibabaCloud\Tea\Model;

class activationList extends Model
{
    /**
     * @description The ID of the activation code.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F1234****
     *
     * @var string
     */
    public $activationId;

    /**
     * @description The time when the activation code was created.
     *
     * @example 2021-01-20T06:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The number of instances that were deregistered.
     *
     * @example 1
     *
     * @var int
     */
    public $deregisteredCount;

    /**
     * @description The description of the activation code.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the activation code is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The maximum number of times that the activation code can be used to register managed instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The default instance name prefix.
     *
     * @example test-InstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The IP addresses of hosts that are allowed to use the activation code.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $ipAddressRange;

    /**
     * @description The number of instances that were registered.
     *
     * @example 1
     *
     * @var int
     */
    public $registeredCount;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the activation code.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The validity period of the activation code. Unit: hours.
     *
     * @example 4
     *
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
        'resourceGroupId'   => 'ResourceGroupId',
        'tags'              => 'Tags',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeToLiveInHours) {
            $res['TimeToLiveInHours'] = $this->timeToLiveInHours;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activationList
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeToLiveInHours'])) {
            $model->timeToLiveInHours = $map['TimeToLiveInHours'];
        }

        return $model;
    }
}
