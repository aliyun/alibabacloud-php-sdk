<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSDGStatusResponseBody;

use AlibabaCloud\Dara\Model;

class deploymentStatus extends Model
{
    /**
     * @var int
     */
    public $blockRwSplitSize;

    /**
     * @var int
     */
    public $cacheSize;

    /**
     * @var string
     */
    public $diskAccessProtocol;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mountType;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $SDGId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'blockRwSplitSize' => 'BlockRwSplitSize',
        'cacheSize' => 'CacheSize',
        'diskAccessProtocol' => 'DiskAccessProtocol',
        'diskType' => 'DiskType',
        'ensRegionId' => 'EnsRegionId',
        'instanceId' => 'InstanceId',
        'mountType' => 'MountType',
        'phase' => 'Phase',
        'SDGId' => 'SDGId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockRwSplitSize) {
            $res['BlockRwSplitSize'] = $this->blockRwSplitSize;
        }

        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
        }

        if (null !== $this->diskAccessProtocol) {
            $res['DiskAccessProtocol'] = $this->diskAccessProtocol;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mountType) {
            $res['MountType'] = $this->mountType;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['BlockRwSplitSize'])) {
            $model->blockRwSplitSize = $map['BlockRwSplitSize'];
        }

        if (isset($map['CacheSize'])) {
            $model->cacheSize = $map['CacheSize'];
        }

        if (isset($map['DiskAccessProtocol'])) {
            $model->diskAccessProtocol = $map['DiskAccessProtocol'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MountType'])) {
            $model->mountType = $map['MountType'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
