<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits\orginInterRegionBandwidthLimit;

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
        if (\is_array($this->orginInterRegionBandwidthLimit)) {
            Model::validateArray($this->orginInterRegionBandwidthLimit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orginInterRegionBandwidthLimit) {
            if (\is_array($this->orginInterRegionBandwidthLimit)) {
                $res['OrginInterRegionBandwidthLimit'] = [];
                $n1 = 0;
                foreach ($this->orginInterRegionBandwidthLimit as $item1) {
                    $res['OrginInterRegionBandwidthLimit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OrginInterRegionBandwidthLimit'])) {
            if (!empty($map['OrginInterRegionBandwidthLimit'])) {
                $model->orginInterRegionBandwidthLimit = [];
                $n1 = 0;
                foreach ($map['OrginInterRegionBandwidthLimit'] as $item1) {
                    $model->orginInterRegionBandwidthLimit[$n1++] = orginInterRegionBandwidthLimit::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
