<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeModificationPriceRequest\resourceSpecs;

class DescribeModificationPriceRequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @var resourceSpecs[]
     */
    public $resourceSpecs;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
        'resourceSpecs' => 'ResourceSpecs',
        'resourceType' => 'ResourceType',
        'rootDiskSizeGib' => 'RootDiskSizeGib',
        'userDiskSizeGib' => 'UserDiskSizeGib',
    ];

    public function validate()
    {
        if (\is_array($this->resourceSpecs)) {
            Model::validateArray($this->resourceSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
        }

        if (null !== $this->resourceSpecs) {
            if (\is_array($this->resourceSpecs)) {
                $res['ResourceSpecs'] = [];
                $n1 = 0;
                foreach ($this->resourceSpecs as $item1) {
                    $res['ResourceSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }

        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }

        if (isset($map['ResourceSpecs'])) {
            if (!empty($map['ResourceSpecs'])) {
                $model->resourceSpecs = [];
                $n1 = 0;
                foreach ($map['ResourceSpecs'] as $item1) {
                    $model->resourceSpecs[$n1++] = resourceSpecs::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }

        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
