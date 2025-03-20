<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody\regions\subRegions;
use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description Primary region Chinese full name
     *
     * @example 东南亚
     *
     * @var string
     */
    public $regionCnName;

    /**
     * @description Primary region code
     *
     * @example SEAS
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description Primary region English full name
     *
     * @example South East Asia
     *
     * @var string
     */
    public $regionEnName;

    /**
     * @description List of secondary region information
     *
     * @var subRegions[]
     */
    public $subRegions;
    protected $_name = [
        'regionCnName' => 'RegionCnName',
        'regionCode' => 'RegionCode',
        'regionEnName' => 'RegionEnName',
        'subRegions' => 'SubRegions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionCnName) {
            $res['RegionCnName'] = $this->regionCnName;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->regionEnName) {
            $res['RegionEnName'] = $this->regionEnName;
        }
        if (null !== $this->subRegions) {
            $res['SubRegions'] = [];
            if (null !== $this->subRegions && \is_array($this->subRegions)) {
                $n = 0;
                foreach ($this->subRegions as $item) {
                    $res['SubRegions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionCnName'])) {
            $model->regionCnName = $map['RegionCnName'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['RegionEnName'])) {
            $model->regionEnName = $map['RegionEnName'];
        }
        if (isset($map['SubRegions'])) {
            if (!empty($map['SubRegions'])) {
                $model->subRegions = [];
                $n = 0;
                foreach ($map['SubRegions'] as $item) {
                    $model->subRegions[$n++] = null !== $item ? subRegions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
