<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksRequest\filter;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDisksRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description The additional attributes. Set the value to `Placement`, which indicates the data storage locations of the disk.
     *
     * >  This attribute is valid only for Regional Enterprise SSDs (ESSDs).
     *
     * @example IOPS
     *
     * @var string[]
     */
    public $additionalAttributes;

    /**
     * @description The ID of the automatic snapshot policy that is applied to the cloud disk.
     *
     * @example sp-m5e2w2jutw8bv31****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The disk category. Valid values:
     *
     *   all: all disk categories
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: Enterprise SSD (ESSD)
     *   cloud_auto: ESSD AutoPL disk
     *   cloud_regional_disk_auto: Regional ESSD
     *   cloud_essd_entry: ESSD Entry disk
     *   elastic_ephemeral_disk_standard: standard elastic ephemeral disk
     *   elastic_ephemeral_disk_premium: premium elastic ephemeral disk
     *   local_ssd_pro: I/O-intensive local disk
     *   local_hdd_pro: throughput-intensive local disk
     *   ephemeral: retired local disk
     *   ephemeral_ssd: retired local SSD
     *
     * Default value: all.
     *
     * Enumerated values:
     *
     *   all: all disks categories
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   local_ssd_pro: I/O-intensive local disk
     *   ephemeral: retired local disk
     *   cloud_essd_entry: ESSD Entry disk
     *   elastic_ephemeral_disk_premium: premium elastic ephemeral disk
     *   cloud: basic disk
     *   ephemeral_ssd: retired local SSD
     *   cloud_auto: ESSD AutoPL disk
     *   cloud_regional_disk_auto: Regional ESSD
     *   cloud_essd: ESSD
     *   elastic_ephemeral_disk_standard: standard elastic ephemeral disk
     *   local_hdd_pro: throughput-intensive local disk
     *
     * @example all
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to delete the automatic snapshots of the cloud disk after the disk is released.
     *
     *   true
     *   false
     *
     * Default value: false
     *
     * @example false
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description Specifies whether the disk is released when the associated instance is released. Valid values:
     *
     *   true: The disk is released when the associated instance is released.
     *   false: The disk is retained as a pay-as-you-go data disk when the associated instance is released.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The billing method of the disk. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description The IDs of cloud disks, local disks, or elastic ephemeral disks. The value is a JSON array that consists of up to 100 disk IDs. Separate the disk IDs with commas (,).
     *
     * @example ["d-bp67acfmxazb4p****", "d-bp67acfmxazb4g****", … "d-bp67acfmxazb4d****"]
     *
     * @var string
     */
    public $diskIds;

    /**
     * @description The name of the disk. The name must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * @example testDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The type of the disk. Valid values:
     *
     *   all: system disk and data disk
     *   system: system disk
     *   data: data disk
     *
     * Default value: all.
     *
     * >  Elastic ephemeral disks cannot be used as system disks.
     *
     * @example all
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specifies whether to perform only a dry run without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. The systems checks whether your AccessKey pair is valid, whether RAM users are granted permissions, and whether the required parameters are specified. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   false: performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * Default value: false
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether the automatic snapshot policy feature is enabled for the cloud disk. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter is deprecated. By default, the automatic snapshot policy feature is enabled for cloud disks. You need to only apply an automatic snapshot policy to a cloud disk before you can use the automatic snapshot policy.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @description Specifies whether an automatic snapshot policy is applied to the cloud disk.
     *
     *   true: An automatic snapshot policy is applied to the cloud disk.
     *   false: No automatic snapshot policy is applied to the cloud disk.
     *
     * Default value: false
     *
     * @example false
     *
     * @var bool
     */
    public $enableAutomatedSnapshotPolicy;

    /**
     * @description Specifies whether the disk is a Shared Block Storage device.
     *
     * @example false
     *
     * @var bool
     */
    public $enableShared;

    /**
     * @description Specifies whether to query only encrypted cloud disks.
     *
     *   true: queries only encrypted cloud disks.
     *   false: does not query encrypted cloud disks.
     *
     * Default value: false
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance to which the disk is attached.
     *
     * @example i-bp67acfmxazb4q****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used by the cloud disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The reason why the disk is locked. Valid values:
     *
     *   financial: The disk is locked due to overdue payments.
     *   security: The disk is locked due to security reasons.
     *
     * @example recycling
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The maximum number of entries per page. Valid values: 10 to 500.
     *
     * Default value:
     *
     *   If you do not specify this parameter or you set this parameter to a value less than 10, the default value is 10.
     *   If you set this parameter to a value greater than 500, the default value is 500.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Specifies whether the multi-attach feature is enabled for the disk. Valid values:
     *
     *   Disabled: The multi-attach feature is not enabled for the disk.
     *   Enabled: The multi-attach feature is enabled for the disk.
     *   LegacyShared: Shared Block Storage devices are queried.
     *
     * The multi-attach feature is available to select users. To use this feature, [submit a ticket](https://workorder-intl.console.aliyun.com/console.htm#/ticket/list).
     *
     * @example Disabled
     *
     * @var string
     */
    public $multiAttach;

    /**
     * @description The query token. Set the value to the `NextToken` value that was returned in the last call to this operation.
     *
     * For more information about how to check the responses returned by this operation, see the preceding "Description" section.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you use `NextToken` and `MaxResults` for a paged query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you use `NextToken` and `MaxResults` for a paged query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the disk is removable. Valid values:
     *
     *   true: The disk is removable. A removable disk can independently exist and can be attached to or detached from an instance within the same zone.
     *   false: The disk is not removable. A disk that is not removable cannot independently exist or be attached to or detached from an instance within the same zone.
     *
     * The `Portable` attribute of the following types of disks is `false`, and these types of disks share the same lifecycle with their associated instances:
     *
     *   Local disks
     *   Local SSDs
     *   Subscription data disks
     *
     * @example false
     *
     * @var bool
     */
    public $portable;

    /**
     * @description The region ID of the disk. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the disk belongs. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * >  Resources in the default resource group are displayed in the response regardless of the value specified for this parameter.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the snapshot from which you create the cloud disk.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The status of the disk. For more information, see [Disk states](https://help.aliyun.com/document_detail/25689.html). Valid values:
     *
     *   In_use
     *   Available
     *   Attaching
     *   Detaching
     *   Creating
     *   ReIniting
     *   All
     *
     * Default value: All.
     *
     * @example All
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the disk.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'filter' => 'Filter',
        'additionalAttributes' => 'AdditionalAttributes',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'category' => 'Category',
        'deleteAutoSnapshot' => 'DeleteAutoSnapshot',
        'deleteWithInstance' => 'DeleteWithInstance',
        'diskChargeType' => 'DiskChargeType',
        'diskIds' => 'DiskIds',
        'diskName' => 'DiskName',
        'diskType' => 'DiskType',
        'dryRun' => 'DryRun',
        'enableAutoSnapshot' => 'EnableAutoSnapshot',
        'enableAutomatedSnapshotPolicy' => 'EnableAutomatedSnapshotPolicy',
        'enableShared' => 'EnableShared',
        'encrypted' => 'Encrypted',
        'instanceId' => 'InstanceId',
        'KMSKeyId' => 'KMSKeyId',
        'lockReason' => 'LockReason',
        'maxResults' => 'MaxResults',
        'multiAttach' => 'MultiAttach',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'portable' => 'Portable',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'snapshotId' => 'SnapshotId',
        'status' => 'Status',
        'tag' => 'Tag',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->additionalAttributes) {
            $res['AdditionalAttributes'] = $this->additionalAttributes;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }
        if (null !== $this->enableAutomatedSnapshotPolicy) {
            $res['EnableAutomatedSnapshotPolicy'] = $this->enableAutomatedSnapshotPolicy;
        }
        if (null !== $this->enableShared) {
            $res['EnableShared'] = $this->enableShared;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->multiAttach) {
            $res['MultiAttach'] = $this->multiAttach;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AdditionalAttributes'])) {
            if (!empty($map['AdditionalAttributes'])) {
                $model->additionalAttributes = $map['AdditionalAttributes'];
            }
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['DiskIds'])) {
            $model->diskIds = $map['DiskIds'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }
        if (isset($map['EnableAutomatedSnapshotPolicy'])) {
            $model->enableAutomatedSnapshotPolicy = $map['EnableAutomatedSnapshotPolicy'];
        }
        if (isset($map['EnableShared'])) {
            $model->enableShared = $map['EnableShared'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MultiAttach'])) {
            $model->multiAttach = $map['MultiAttach'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
