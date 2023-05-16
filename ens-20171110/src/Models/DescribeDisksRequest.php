<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDisksRequest extends Model
{
    /**
     * @example local_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @example prepay
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskIds;

    /**
     * @example DiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @example PostPayDisk
     *
     * @var string
     */
    public $diskType;

    /**
     * @example cn-kunming-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example ["cn-suzhou-telecom","cn-chengdu-telecom"]
     *
     * @var string
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderByParams;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
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
