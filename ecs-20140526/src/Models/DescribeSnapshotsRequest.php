<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsRequest\filter;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description The category of the snapshot. Valid values:
     *
     *   Standard: normal snapshot
     *   Flash: local snapshot
     *
     * The local snapshot feature is replaced by the instant access feature. When you specify this parameter, take note of the following items:
     *
     *   If you have used local snapshots before December 14, 2020, you can use this parameter.
     *   If you have not used local snapshots before December 14, 2020, you cannot use this parameter.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The disk ID.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. The system checks your AccessKey pair, the permissions of the RAM user, and the required parameters. If the request passes the dry run, the DryRunOperation error code is returned. Otherwise, an error message is returned.
     *   false (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether the snapshot is encrypted. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The instance ID.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used for the data disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
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
     * @description The page number. Page starts from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the disk. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID. If you configure this parameter to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * > Resources in the default resource group are displayed in the response regardless of whether you configure this parameter.
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
     * @description The IDs of snapshots. You can specify a JSON array that consists of up to 100 snapshot IDs. Separate the snapshot IDs with commas (,).
     *
     * @example ["s-bp67acfmxazb4p****", "s-bp67acfmxazb5p****", … "s-bp67acfmxazb6p****"]
     *
     * @var string
     */
    public $snapshotIds;

    /**
     * @description The snapshot chain ID. You can specify a JSON array that contains up to 100 snapshot chain IDs. Separate the snapshot chain IDs with commas (,).
     *
     * @example ["sl-bp1grgphbcc9brb5****", "sl-bp1c4izumvq0i5bs****", … "sl-bp1akk7isz866dds****"]
     *
     * @var string
     */
    public $snapshotLinkId;

    /**
     * @description The name of the snapshot.
     *
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The type of the snapshot. Valid values:
     *
     *   auto: automatic snapshot
     *   user: manual snapshot
     *   all (default): all snapshot types
     *
     * @example all
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * >  The value of this parameter is not case-sensitive.
     * @example Data
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description The status of the snapshot. Valid values:
     *
     *   progressing: The snapshot is being created.
     *   accomplished: The snapshot is created.
     *   failed: The snapshot fails to be created.
     *   all (default): This value indicates all snapshot states.
     *
     * @example all
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the snapshot.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether the snapshot has been used to create custom images or disks. Valid values:
     *
     *   image: The snapshot has been used to create custom images.
     *   disk: The snapshot has been used to create disks.
     *   image_disk: The snapshot has been used to create both custom images and data disks.
     *   none: The snapshot has not been used to create custom images or disks.
     *
     * @example none
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'filter'               => 'Filter',
        'category'             => 'Category',
        'diskId'               => 'DiskId',
        'dryRun'               => 'DryRun',
        'encrypted'            => 'Encrypted',
        'instanceId'           => 'InstanceId',
        'KMSKeyId'             => 'KMSKeyId',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snapshotIds'          => 'SnapshotIds',
        'snapshotLinkId'       => 'SnapshotLinkId',
        'snapshotName'         => 'SnapshotName',
        'snapshotType'         => 'SnapshotType',
        'sourceDiskType'       => 'SourceDiskType',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'usage'                => 'Usage',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->snapshotLinkId) {
            $res['SnapshotLinkId'] = $this->snapshotLinkId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
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
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
        if (isset($map['SnapshotIds'])) {
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if (isset($map['SnapshotLinkId'])) {
            $model->snapshotLinkId = $map['SnapshotLinkId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
