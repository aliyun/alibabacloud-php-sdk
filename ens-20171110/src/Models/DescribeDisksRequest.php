<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDisksRequest extends Model
{
    /**
     * @description The category of the disk.
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: all-flash disk.
     *   local_hdd: local HDD.
     *   local_ssd: local SSD.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The billing method.
     *
     *   prePay: subscription.
     *   postpay: pay-as-you-go.
     *
     * @example prepay
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description The ID of the disk.
     *
     * @example d-5soak1gqa507lyfzvz0xo****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the disk.
     *
     * @example [\"d-wz99njena32z90ki****\"]
     *
     * @var string
     */
    public $diskIds;

    /**
     * @description The name of the disk.
     *
     * @example DiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The purchase method of the disk. Valid values:
     *
     *   ServiceDisk: The disk is purchased when ENS is activated.
     *   ResoureDisk: The disk is purchased when the instance is created.
     *   PostPayDisk: The disk is separately purchased.
     *
     * @example PostPayDisk
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-kunming-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The node information.
     *
     * @example ["cn-suzhou-telecom","cn-chengdu-telecom"]
     *
     * @var string
     */
    public $ensRegionIds;

    /**
     * @description The instance to which the disk is attached.
     *
     * @example i-5t77rb0yoz79m28ku60sx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The order in which you want to sort the returned data. Example: {"EnsRegionId":"desc"}. By default, the nodes are sorted by IDs in descending order.
     *
     * @example { "DiskNameSort":"desc","EnsRegionIdSort":"asc" }
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @description The number of the page to return. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **50**.
     *
     * Default value: **10**.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-897654321****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The status of the disk. Valid values:
     *
     *   In-use: The disk is in use.
     *   Available: The disk can be attached.
     *   Attaching: The disk is being attached.
     *   Detaching: The disk is being detached.
     *   Creating: The image is being created.
     *   ReIniting: The disk is being reset.
     *   Deleting: The disk is being released.
     *   Deleted: The disk is released.
     *   Expiring: The disk is about to expire.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the disk. Valid values:
     *
     *   system: system disk.
     *   data: data disk.
     *
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'       => 'Category',
        'diskChargeType' => 'DiskChargeType',
        'diskId'         => 'DiskId',
        'diskIds'        => 'DiskIds',
        'diskName'       => 'DiskName',
        'diskType'       => 'DiskType',
        'ensRegionId'    => 'EnsRegionId',
        'ensRegionIds'   => 'EnsRegionIds',
        'instanceId'     => 'InstanceId',
        'orderByParams'  => 'OrderByParams',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'snapshotId'     => 'SnapshotId',
        'status'         => 'Status',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIds = $map['EnsRegionIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
