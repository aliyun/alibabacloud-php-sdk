<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $canBuyCount;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @example 20
     *
     * @var int
     */
    public $defaultDiskSize;

    /**
     * @example 80
     *
     * @var int
     */
    public $diskMaxSize;

    /**
     * @example 20
     *
     * @var int
     */
    public $diskMinSize;

    /**
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
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
