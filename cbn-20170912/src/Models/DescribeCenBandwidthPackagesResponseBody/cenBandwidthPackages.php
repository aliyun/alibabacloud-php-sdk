<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage;
use AlibabaCloud\Tea\Model;

class cenBandwidthPackages extends Model
{
    /**
     * @var cenBandwidthPackage[]
     */
    public $cenBandwidthPackage;
    protected $_name = [
        'cenBandwidthPackage' => 'CenBandwidthPackage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenBandwidthPackage) {
            $res['CenBandwidthPackage'] = [];
            if (null !== $this->cenBandwidthPackage && \is_array($this->cenBandwidthPackage)) {
                $n = 0;
                foreach ($this->cenBandwidthPackage as $item) {
                    $res['CenBandwidthPackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenBandwidthPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenBandwidthPackage'])) {
            if (!empty($map['CenBandwidthPackage'])) {
                $model->cenBandwidthPackage = [];
                $n                          = 0;
                foreach ($map['CenBandwidthPackage'] as $item) {
                    $model->cenBandwidthPackage[$n++] = null !== $item ? cenBandwidthPackage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
