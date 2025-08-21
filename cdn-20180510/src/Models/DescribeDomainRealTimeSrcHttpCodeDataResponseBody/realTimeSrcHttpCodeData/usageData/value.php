<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData\usageData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData\usageData\value\realTimeSrcCodeProportionData;

class value extends Model
{
    /**
     * @var realTimeSrcCodeProportionData[]
     */
    public $realTimeSrcCodeProportionData;
    protected $_name = [
        'realTimeSrcCodeProportionData' => 'RealTimeSrcCodeProportionData',
    ];

    public function validate()
    {
        if (\is_array($this->realTimeSrcCodeProportionData)) {
            Model::validateArray($this->realTimeSrcCodeProportionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realTimeSrcCodeProportionData) {
            if (\is_array($this->realTimeSrcCodeProportionData)) {
                $res['RealTimeSrcCodeProportionData'] = [];
                $n1 = 0;
                foreach ($this->realTimeSrcCodeProportionData as $item1) {
                    $res['RealTimeSrcCodeProportionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RealTimeSrcCodeProportionData'])) {
            if (!empty($map['RealTimeSrcCodeProportionData'])) {
                $model->realTimeSrcCodeProportionData = [];
                $n1 = 0;
                foreach ($map['RealTimeSrcCodeProportionData'] as $item1) {
                    $model->realTimeSrcCodeProportionData[$n1] = realTimeSrcCodeProportionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
