<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\disks;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\image;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\networkAttributes;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\resourceSpec;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The status of the server. Valid values:
     *
     *   Normal: The server is normal.
     *   Expired: The server expires.
     *   Overdue: The payment of the server is overdue.
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The billing method of the simple application server.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Indicates whether the simple application server uses a bundle plan.
     *
     * @example false
     *
     * @var bool
     */
    public $combination;

    /**
     * @description The ID of the simple application server that uses a bundle plan.
     *
     * @example com-f6c9a22****45b5b8de68ad608af1ba
     *
     * @var string
     */
    public $combinationInstanceId;

    /**
     * @description The time when the simple application server was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-03-08T05:31:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The DDoS protection status of the server. Valid values:
     *
     *   Normal: The DDoS protection status of the server is normal.
     *   BlackHole: The server is in blackhole filtering.
     *   Defense: The server is being scrubbed.
     *
     * @example Normal
     *
     * @var string
     */
    public $ddosStatus;

    /**
     * @description The reason why the server is disabled. Valid values:
     *
     *   FINANCIAL: The server is locked due to overdue payments.
     *   SECURITY: The server is locked for security reasons.
     *   EXPIRED: The server is expired.
     *
     * @example EXPIRED
     *
     * @var string
     */
    public $disableReason;

    /**
     * @description The information about the disks on the simple application server.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @description The time when the simple application server expires. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-05-08T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The description of the image.
     *
     * @var image
     */
    public $image;

    /**
     * @description The ID of the image.
     *
     * @example fe9c66133a9d4688872869726b52****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The private IP address of the simple application server.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $innerIpAddress;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2ad1ae67295445f598017499dc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the simple application server.
     *
     * @example test-InstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var networkAttributes[]
     */
    public $networkAttributes;

    /**
     * @description The ID of the instance plan.
     *
     * @example swas.s2.c2m2s50b4t08
     *
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planType;

    /**
     * @description The public IP address.
     *
     * @example 42.1.XX.XX
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the server belongs.
     *
     * @example rg-aekz7jmhg5s****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The specifications of the resources on the simple application server.
     *
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @description The status of the simple application server. Valid values:
     *
     *   Pending: The server is being prepared.
     *   Starting: The server is being started.
     *   Running: The server is running.
     *   Stopping: The server is being stopped.
     *   Stopped: The server is stopped.
     *   Resetting: The server is being reset.
     *   Upgrading: The server is being upgraded.
     *   Disabled: The server is not available.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are added to the simple application server.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The universally unique identifier (UUID) of the simple application server.
     *
     * @example 41f30524-5df7-49c9-9c6e-32****489001
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'businessStatus' => 'BusinessStatus',
        'chargeType' => 'ChargeType',
        'combination' => 'Combination',
        'combinationInstanceId' => 'CombinationInstanceId',
        'creationTime' => 'CreationTime',
        'ddosStatus' => 'DdosStatus',
        'disableReason' => 'DisableReason',
        'disks' => 'Disks',
        'expiredTime' => 'ExpiredTime',
        'image' => 'Image',
        'imageId' => 'ImageId',
        'innerIpAddress' => 'InnerIpAddress',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'networkAttributes' => 'NetworkAttributes',
        'planId' => 'PlanId',
        'planType' => 'PlanType',
        'publicIpAddress' => 'PublicIpAddress',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceSpec' => 'ResourceSpec',
        'status' => 'Status',
        'tags' => 'Tags',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
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
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
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
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = [];
            if (null !== $this->networkAttributes && \is_array($this->networkAttributes)) {
                $n = 0;
                foreach ($this->networkAttributes as $item) {
                    $res['NetworkAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
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
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
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
                $n = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
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
        if (isset($map['NetworkAttributes'])) {
            if (!empty($map['NetworkAttributes'])) {
                $model->networkAttributes = [];
                $n = 0;
                foreach ($map['NetworkAttributes'] as $item) {
                    $model->networkAttributes[$n++] = null !== $item ? networkAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
