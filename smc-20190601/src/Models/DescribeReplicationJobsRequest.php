<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeReplicationJobsRequest extends Model
{
    /**
     * @description The business status of the migration job. Valid values:
     *
     *   Preparing: The migration is being prepared.
     *   Syncing: Data is being synchronized.
     *   Processing: The migration is in progress.
     *   Cleaning: Intermediate resources are being released.
     *
     * @example Preparing
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The IDs of the destination Elastic Compute Service (ECS) instances.
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description The IDs of the migration jobs. You can specify a maximum of 50 IDs.
     *
     * @example j-bp19vlwm0tyigbmj****
     *
     * @var string[]
     */
    public $jobId;

    /**
     * @description The type of the migration job. Valid values:
     *
     *   0: server migration.
     *   1: operating system migration.
     *   2: cross-zone migration.
     *   3: agentless migration for a VMware VM.
     *
     * @example 0
     *
     * @var int
     */
    public $jobType;

    /**
     * @description The name of the migration job.
     *
     * @example testMigrationTaskName
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the Alibaba Cloud region to which you want to migrate the source server.
     *
     * For example, if you want to migrate a source server to the China (Hangzhou) region, set this parameter to `cn-hangzhou`. You can call the [DescribeRegions](~~25609~~) operation to query the latest regions.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmw3ty5y7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The IDs of the source servers. You can specify a maximum of 50 IDs.
     *
     * @example s-bp1e2fsl57knvuug****
     *
     * @var string[]
     */
    public $sourceId;

    /**
     * @description The status of the migration job. Valid values:
     *
     *   Ready: The migration job is not started.
     *   Running: The migration job is running.
     *   Stopped: The migration job is paused.
     *   InError: An error occurs in the migration job.
     *   Finished: The migration job is complete.
     *   Waiting: The migration job is waiting to run.
     *   Expired: The migration job has expired.
     *   Deleting: The migration job is being deleted.
     *
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about tags that are attached to the SMC resource.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'businessStatus'       => 'BusinessStatus',
        'instanceId'           => 'InstanceId',
        'jobId'                => 'JobId',
        'jobType'              => 'JobType',
        'name'                 => 'Name',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'sourceId'             => 'SourceId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReplicationJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['JobId'])) {
            if (!empty($map['JobId'])) {
                $model->jobId = $map['JobId'];
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = $map['SourceId'];
            }
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

        return $model;
    }
}
