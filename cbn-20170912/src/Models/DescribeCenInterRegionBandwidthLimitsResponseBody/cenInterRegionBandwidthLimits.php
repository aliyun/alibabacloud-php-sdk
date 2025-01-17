<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits\cenInterRegionBandwidthLimit;

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
        if (\is_array($this->cenInterRegionBandwidthLimit)) {
            Model::validateArray($this->cenInterRegionBandwidthLimit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenInterRegionBandwidthLimit) {
            if (\is_array($this->cenInterRegionBandwidthLimit)) {
                $res['CenInterRegionBandwidthLimit'] = [];
                $n1                                  = 0;
                foreach ($this->cenInterRegionBandwidthLimit as $item1) {
                    $res['CenInterRegionBandwidthLimit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CenInterRegionBandwidthLimit'])) {
            if (!empty($map['CenInterRegionBandwidthLimit'])) {
                $model->cenInterRegionBandwidthLimit = [];
                $n1                                  = 0;
                foreach ($map['CenInterRegionBandwidthLimit'] as $item1) {
                    $model->cenInterRegionBandwidthLimit[$n1++] = cenInterRegionBandwidthLimit::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
