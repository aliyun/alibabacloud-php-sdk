<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskRequest extends Model
{
    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @example cn-chengdu-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example 20
     *
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'category'           => 'Category',
        'ensRegionId'        => 'EnsRegionId',
        'instanceChargeType' => 'InstanceChargeType',
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
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
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
