<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage;

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
        if (\is_array($this->cenBandwidthPackage)) {
            Model::validateArray($this->cenBandwidthPackage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenBandwidthPackage) {
            if (\is_array($this->cenBandwidthPackage)) {
                $res['CenBandwidthPackage'] = [];
                $n1                         = 0;
                foreach ($this->cenBandwidthPackage as $item1) {
                    $res['CenBandwidthPackage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CenBandwidthPackage'])) {
            if (!empty($map['CenBandwidthPackage'])) {
                $model->cenBandwidthPackage = [];
                $n1                         = 0;
                foreach ($map['CenBandwidthPackage'] as $item1) {
                    $model->cenBandwidthPackage[$n1++] = cenBandwidthPackage::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
