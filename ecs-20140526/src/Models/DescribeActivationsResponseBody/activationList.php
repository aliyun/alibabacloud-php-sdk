<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeActivationsResponseBody\activationList\tags;

class activationList extends Model
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
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $timeToLiveInHours;
    protected $_name = [
        'activationId' => 'ActivationId',
        'creationTime' => 'CreationTime',
        'deregisteredCount' => 'DeregisteredCount',
        'description' => 'Description',
        'disabled' => 'Disabled',
        'instanceCount' => 'InstanceCount',
        'instanceName' => 'InstanceName',
        'ipAddressRange' => 'IpAddressRange',
        'registeredCount' => 'RegisteredCount',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'timeToLiveInHours' => 'TimeToLiveInHours',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeToLiveInHours) {
            $res['TimeToLiveInHours'] = $this->timeToLiveInHours;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TimeToLiveInHours'])) {
            $model->timeToLiveInHours = $map['TimeToLiveInHours'];
        }

        return $model;
    }
}
