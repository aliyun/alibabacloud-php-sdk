<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDedicatedBlockStorageClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDedicatedBlockStorageClusterRequest extends Model
{
    /**
     * @description The ID of the zone in which to create the dedicated block storage cluster. You can call the [DescribeZones](https://help.aliyun.com/document_detail/25610.html) operation to query the most recent zone list.
     *
     * This parameter is required.
     * @example cn-heyuan-b
     *
     * @var string
     */
    public $azone;

    /**
     * @description The capacity of the dedicated block storage cluster. Valid values: 61440 to 2334720. Unit: GiB. 2,334,720 GiB is equal to 2,280 TiB. The capacity increases in a minimum increment of 12,288 GiB.
     *
     * This parameter is required.
     * @example 61440
     *
     * @var int
     */
    public $capacity;

    /**
     * @description This parameter is deprecated.
     *
     * @example test1233
     *
     * @deprecated
     *
     * @var string
     */
    public $dbscId;

    /**
     * @description The name of the dedicated block storage cluster.
     *
     * This parameter is required.
     * @example myDBSCCluster
     *
     * @var string
     */
    public $dbscName;

    /**
     * @description The subscription duration of the dedicated block storage cluster. Valid values: 6, 7, 8, 9, 10, 11, 12, 24, and 36.
     *
     * @example 12
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration specified by `Period`. Set the value to Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the region in which to create the dedicated block storage cluster. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the dedicated block storage cluster.
     *
     * @example rg-acfmvs*******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags to add to the dedicated block storage cluster. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the dedicated block storage cluster. Valid values:
     *
     *   Standard: basic dedicated block storage cluster. Enterprise SSDs (ESSDs) at performance level 0 (PL0 ESSDs) can be created in basic dedicated block storage clusters.
     *   Premium: performance dedicated block storage cluster. ESSDs at performance level 1 (PL1 ESSDs) can be created in performance dedicated block storage clusters.
     *
     * This parameter is required.
     * @example Premium
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'azone'           => 'Azone',
        'capacity'        => 'Capacity',
        'dbscId'          => 'DbscId',
        'dbscName'        => 'DbscName',
        'period'          => 'Period',
        'periodUnit'      => 'PeriodUnit',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag'             => 'Tag',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
        }
        if (null !== $this->dbscName) {
            $res['DbscName'] = $this->dbscName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedBlockStorageClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Azone'])) {
            $model->azone = $map['Azone'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
        }
        if (isset($map['DbscName'])) {
            $model->dbscName = $map['DbscName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
