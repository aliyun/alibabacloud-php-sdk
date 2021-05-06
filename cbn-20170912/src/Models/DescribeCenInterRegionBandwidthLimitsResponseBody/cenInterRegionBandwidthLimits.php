<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits\cenInterRegionBandwidthLimit;
use AlibabaCloud\Tea\Model;

class cenInterRegionBandwidthLimits extends Model
{
    /**
     * @var cenInterRegionBandwidthLimit[]
     */
    public $cenInterRegionBandwidthLimit;
    protected $_name = [
        'cenInterRegionBandwidthLimit' => 'CenInterRegionBandwidthLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenInterRegionBandwidthLimit) {
            $res['CenInterRegionBandwidthLimit'] = [];
            if (null !== $this->cenInterRegionBandwidthLimit && \is_array($this->cenInterRegionBandwidthLimit)) {
                $n = 0;
                foreach ($this->cenInterRegionBandwidthLimit as $item) {
                    $res['CenInterRegionBandwidthLimit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenInterRegionBandwidthLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenInterRegionBandwidthLimit'])) {
            if (!empty($map['CenInterRegionBandwidthLimit'])) {
                $model->cenInterRegionBandwidthLimit = [];
                $n                                   = 0;
                foreach ($map['CenInterRegionBandwidthLimit'] as $item) {
                    $model->cenInterRegionBandwidthLimit[$n++] = null !== $item ? cenInterRegionBandwidthLimit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
