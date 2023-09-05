<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDedicatedBlockStorageClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDedicatedBlockStorageClusterRequest extends Model
{
    /**
     * @description The ID of the zone in which to create the dedicated block storage cluster. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * @example cn-heyuan-b
     *
     * @var string
     */
    public $azone;

    /**
     * @description The capacity of the dedicated block storage cluster. Valid values: 61440 to 2334720. Unit: GiB. 2,334,720 GiB is equal to 2,280 TiB. The capacity increases in a minimum increment of 12,288 GB.
     *
     * >  If the capacity of a dedicated block storage cluster is less than 576 TiB, the maximum throughput supported per TiB does not exceed 52 MB/s. If the capacity of a dedicated block storage cluster is greater than 576 TiB, the maximum throughput supported per TiB does not exceed 26 MB/s.
     * @example 61440
     *
     * @var int
     */
    public $capacity;

    /**
     * @deprecated
     *
     * @var string
     */
    public $dbscId;

    /**
     * @description The name of the dedicated block storage cluster.
     *
     * @example myDBSCCluster
     *
     * @var string
     */
    public $dbscName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the region in which to create the dedicated block storage cluster. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmvs*******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the dedicated block storage cluster. Valid values:
     *
     *   Standard: basic type. When you set Type to Standard, enhanced SSDs (ESSDs) at performance level 0 (PL0 ESSDs) can be created in the dedicated block storage cluster.
     *   Premium: performance type. When you set Type to Premium, ESSDs at performance level 1 (PL1 ESSDs) can be created in the dedicated block storage cluster.
     *
     * For more information about ESSDs, see [ESSDs](~~122389~~).
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
