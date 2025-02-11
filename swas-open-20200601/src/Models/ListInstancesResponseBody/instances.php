<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\disks;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\image;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\resourceSpec;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\tags;

class instances extends Model
{
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var bool
     */
    public $combination;
    /**
     * @var string
     */
    public $combinationInstanceId;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $ddosStatus;
    /**
     * @var string
     */
    public $disableReason;
    /**
     * @var disks[]
     */
    public $disks;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var image
     */
    public $image;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $innerIpAddress;
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
    public $planId;
    /**
     * @var string
     */
    public $publicIpAddress;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'businessStatus'        => 'BusinessStatus',
        'chargeType'            => 'ChargeType',
        'combination'           => 'Combination',
        'combinationInstanceId' => 'CombinationInstanceId',
        'creationTime'          => 'CreationTime',
        'ddosStatus'            => 'DdosStatus',
        'disableReason'         => 'DisableReason',
        'disks'                 => 'Disks',
        'expiredTime'           => 'ExpiredTime',
        'image'                 => 'Image',
        'imageId'               => 'ImageId',
        'innerIpAddress'        => 'InnerIpAddress',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'planId'                => 'PlanId',
        'publicIpAddress'       => 'PublicIpAddress',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceSpec'          => 'ResourceSpec',
        'status'                => 'Status',
        'tags'                  => 'Tags',
        'uuid'                  => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        if (null !== $this->image) {
            $this->image->validate();
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->combination) {
            $res['Combination'] = $this->combination;
        }

        if (null !== $this->combinationInstanceId) {
            $res['CombinationInstanceId'] = $this->combinationInstanceId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }

        if (null !== $this->disableReason) {
            $res['DisableReason'] = $this->disableReason;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1           = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Combination'])) {
            $model->combination = $map['Combination'];
        }

        if (isset($map['CombinationInstanceId'])) {
            $model->combinationInstanceId = $map['CombinationInstanceId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }

        if (isset($map['DisableReason'])) {
            $model->disableReason = $map['DisableReason'];
        }

        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1           = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = $map['InnerIpAddress'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
