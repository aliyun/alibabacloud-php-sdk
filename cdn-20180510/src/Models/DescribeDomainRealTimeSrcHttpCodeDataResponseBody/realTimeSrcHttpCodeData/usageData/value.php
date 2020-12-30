<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData\usageData;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData\usageData\value\realTimeSrcCodeProportionData;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeSrcCodeProportionData) {
            $res['RealTimeSrcCodeProportionData'] = [];
            if (null !== $this->realTimeSrcCodeProportionData && \is_array($this->realTimeSrcCodeProportionData)) {
                $n = 0;
                foreach ($this->realTimeSrcCodeProportionData as $item) {
                    $res['RealTimeSrcCodeProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return value
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealTimeSrcCodeProportionData'])) {
            if (!empty($map['RealTimeSrcCodeProportionData'])) {
                $model->realTimeSrcCodeProportionData = [];
                $n                                    = 0;
                foreach ($map['RealTimeSrcCodeProportionData'] as $item) {
                    $model->realTimeSrcCodeProportionData[$n++] = null !== $item ? realTimeSrcCodeProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
