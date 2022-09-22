<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceResponseBody\instanceTypeResources;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceTypeResourceResponseBody\instanceTypeResources\instanceTypeResource\stockHealth;
use AlibabaCloud\Tea\Model;

class instanceTypeResource extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var stockHealth
     */
    public $stockHealth;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType'       => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'regionId'           => 'RegionId',
        'searchType'         => 'SearchType',
        'stockHealth'        => 'StockHealth',
        'totalQuota'         => 'TotalQuota',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->stockHealth) {
            $res['StockHealth'] = null !== $this->stockHealth ? $this->stockHealth->toMap() : null;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['StockHealth'])) {
            $model->stockHealth = stockHealth::fromMap($map['StockHealth']);
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
