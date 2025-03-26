<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage;

class commonBandwidthPackages extends Model
{
    /**
     * @var commonBandwidthPackage[]
     */
    public $commonBandwidthPackage;
    protected $_name = [
        'commonBandwidthPackage' => 'CommonBandwidthPackage',
    ];

    public function validate()
    {
        if (\is_array($this->commonBandwidthPackage)) {
            Model::validateArray($this->commonBandwidthPackage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonBandwidthPackage) {
            if (\is_array($this->commonBandwidthPackage)) {
                $res['CommonBandwidthPackage'] = [];
                $n1 = 0;
                foreach ($this->commonBandwidthPackage as $item1) {
                    $res['CommonBandwidthPackage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CommonBandwidthPackage'])) {
            if (!empty($map['CommonBandwidthPackage'])) {
                $model->commonBandwidthPackage = [];
                $n1 = 0;
                foreach ($map['CommonBandwidthPackage'] as $item1) {
                    $model->commonBandwidthPackage[$n1++] = commonBandwidthPackage::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
