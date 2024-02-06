<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @description The number of disks that you can purchase.
     *
     * @example 2
     *
     * @var int
     */
    public $canBuyCount;

    /**
     * @description The type of the disk.
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: all-flash disk.
     *   local_hdd: local HDD.
     *   local_ssd: local SSD.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The default size of the disk. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $defaultDiskSize;

    /**
     * @description The maximum size of the disk. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $diskMaxSize;

    /**
     * @description The minimum size of the disk size. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $diskMinSize;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the task node.
     *
     * @var string
     */
    public $ensRegionName;
    protected $_name = [
        'canBuyCount'     => 'CanBuyCount',
        'category'        => 'Category',
        'defaultDiskSize' => 'DefaultDiskSize',
        'diskMaxSize'     => 'DiskMaxSize',
        'diskMinSize'     => 'DiskMinSize',
        'ensRegionId'     => 'EnsRegionId',
        'ensRegionName'   => 'EnsRegionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBuyCount) {
            $res['CanBuyCount'] = $this->canBuyCount;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->defaultDiskSize) {
            $res['DefaultDiskSize'] = $this->defaultDiskSize;
        }
        if (null !== $this->diskMaxSize) {
            $res['DiskMaxSize'] = $this->diskMaxSize;
        }
        if (null !== $this->diskMinSize) {
            $res['DiskMinSize'] = $this->diskMinSize;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionName) {
            $res['EnsRegionName'] = $this->ensRegionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanBuyCount'])) {
            $model->canBuyCount = $map['CanBuyCount'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DefaultDiskSize'])) {
            $model->defaultDiskSize = $map['DefaultDiskSize'];
        }
        if (isset($map['DiskMaxSize'])) {
            $model->diskMaxSize = $map['DiskMaxSize'];
        }
        if (isset($map['DiskMinSize'])) {
            $model->diskMinSize = $map['DiskMinSize'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionName'])) {
            $model->ensRegionName = $map['EnsRegionName'];
        }

        return $model;
    }
}
