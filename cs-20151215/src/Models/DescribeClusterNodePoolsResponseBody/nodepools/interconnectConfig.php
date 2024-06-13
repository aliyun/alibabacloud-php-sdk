<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Tea\Model;

class interconnectConfig extends Model
{
    /**
     * @description This parameter is discontinued.
     *
     * The bandwidth of the enhanced edge node pool. Unit: Mbit/s.
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description This parameter is discontinued.
     *
     * The ID of the Cloud Connect Network (CCN) instance that is associated with the enhanced edge node pool.
     * @example ccn-qm5i0i0q9yi*******
     *
     * @var string
     */
    public $ccnId;

    /**
     * @description This parameter is discontinued.
     *
     * The region in which the CCN instance that is with the enhanced edge node pool resides.
     * @example cn-shanghai
     *
     * @var string
     */
    public $ccnRegionId;

    /**
     * @description This parameter is discontinued.
     *
     * The ID of the Cloud Enterprise Network (CEN) instance that is associated with the enhanced edge node pool.
     * @example cen-ey9k9nfhz0f*******
     *
     * @var string
     */
    public $cenId;

    /**
     * @description This parameter is discontinued.
     *
     * The subscription duration of the enhanced edge node pool. Unit: months.
     * @example 1
     *
     * @var string
     */
    public $improvedPeriod;
    protected $_name = [
        'bandwidth'      => 'bandwidth',
        'ccnId'          => 'ccn_id',
        'ccnRegionId'    => 'ccn_region_id',
        'cenId'          => 'cen_id',
        'improvedPeriod' => 'improved_period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ccnId) {
            $res['ccn_id'] = $this->ccnId;
        }
        if (null !== $this->ccnRegionId) {
            $res['ccn_region_id'] = $this->ccnRegionId;
        }
        if (null !== $this->cenId) {
            $res['cen_id'] = $this->cenId;
        }
        if (null !== $this->improvedPeriod) {
            $res['improved_period'] = $this->improvedPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interconnectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }
        if (isset($map['ccn_id'])) {
            $model->ccnId = $map['ccn_id'];
        }
        if (isset($map['ccn_region_id'])) {
            $model->ccnRegionId = $map['ccn_region_id'];
        }
        if (isset($map['cen_id'])) {
            $model->cenId = $map['cen_id'];
        }
        if (isset($map['improved_period'])) {
            $model->improvedPeriod = $map['improved_period'];
        }

        return $model;
    }
}
