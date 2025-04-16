<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages\bandwidthPackage;

class bandwidthPackages extends Model
{
    /**
     * @var bandwidthPackage[]
     */
    public $bandwidthPackage;
    protected $_name = [
        'bandwidthPackage' => 'BandwidthPackage',
    ];

    public function validate()
    {
        if (\is_array($this->bandwidthPackage)) {
            Model::validateArray($this->bandwidthPackage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthPackage) {
            if (\is_array($this->bandwidthPackage)) {
                $res['BandwidthPackage'] = [];
                $n1 = 0;
                foreach ($this->bandwidthPackage as $item1) {
                    $res['BandwidthPackage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BandwidthPackage'])) {
            if (!empty($map['BandwidthPackage'])) {
                $model->bandwidthPackage = [];
                $n1 = 0;
                foreach ($map['BandwidthPackage'] as $item1) {
                    $model->bandwidthPackage[$n1++] = bandwidthPackage::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
