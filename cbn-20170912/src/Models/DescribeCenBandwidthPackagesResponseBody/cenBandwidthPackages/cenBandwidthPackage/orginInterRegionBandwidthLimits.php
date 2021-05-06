<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits\orginInterRegionBandwidthLimit;
use AlibabaCloud\Tea\Model;

class orginInterRegionBandwidthLimits extends Model
{
    /**
     * @var orginInterRegionBandwidthLimit[]
     */
    public $orginInterRegionBandwidthLimit;
    protected $_name = [
        'orginInterRegionBandwidthLimit' => 'OrginInterRegionBandwidthLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orginInterRegionBandwidthLimit) {
            $res['OrginInterRegionBandwidthLimit'] = [];
            if (null !== $this->orginInterRegionBandwidthLimit && \is_array($this->orginInterRegionBandwidthLimit)) {
                $n = 0;
                foreach ($this->orginInterRegionBandwidthLimit as $item) {
                    $res['OrginInterRegionBandwidthLimit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orginInterRegionBandwidthLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrginInterRegionBandwidthLimit'])) {
            if (!empty($map['OrginInterRegionBandwidthLimit'])) {
                $model->orginInterRegionBandwidthLimit = [];
                $n                                     = 0;
                foreach ($map['OrginInterRegionBandwidthLimit'] as $item) {
                    $model->orginInterRegionBandwidthLimit[$n++] = null !== $item ? orginInterRegionBandwidthLimit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
