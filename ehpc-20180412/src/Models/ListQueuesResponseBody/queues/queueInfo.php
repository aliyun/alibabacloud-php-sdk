<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\computeInstanceType;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponseBody\queues\queueInfo\spotInstanceTypes;
use AlibabaCloud\Tea\Model;

class queueInfo extends Model
{
    /**
     * @var computeInstanceType
     */
    public $computeInstanceType;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var spotInstanceTypes
     */
    public $spotInstanceTypes;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'computeInstanceType' => 'ComputeInstanceType',
        'enableAutoGrow'      => 'EnableAutoGrow',
        'hostNamePrefix'      => 'HostNamePrefix',
        'hostNameSuffix'      => 'HostNameSuffix',
        'imageId'             => 'ImageId',
        'queueName'           => 'QueueName',
        'resourceGroupId'     => 'ResourceGroupId',
        'spotInstanceTypes'   => 'SpotInstanceTypes',
        'spotStrategy'        => 'SpotStrategy',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeInstanceType) {
            $res['ComputeInstanceType'] = null !== $this->computeInstanceType ? $this->computeInstanceType->toMap() : null;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spotInstanceTypes) {
            $res['SpotInstanceTypes'] = null !== $this->spotInstanceTypes ? $this->spotInstanceTypes->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeInstanceType'])) {
            $model->computeInstanceType = computeInstanceType::fromMap($map['ComputeInstanceType']);
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SpotInstanceTypes'])) {
            $model->spotInstanceTypes = spotInstanceTypes::fromMap($map['SpotInstanceTypes']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
