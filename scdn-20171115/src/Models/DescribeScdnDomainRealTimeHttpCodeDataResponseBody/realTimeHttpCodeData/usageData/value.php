<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData\value\realTimeCodeProportionData;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var realTimeCodeProportionData[]
     */
    public $realTimeCodeProportionData;
    protected $_name = [
        'realTimeCodeProportionData' => 'RealTimeCodeProportionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeCodeProportionData) {
            $res['RealTimeCodeProportionData'] = [];
            if (null !== $this->realTimeCodeProportionData && \is_array($this->realTimeCodeProportionData)) {
                $n = 0;
                foreach ($this->realTimeCodeProportionData as $item) {
                    $res['RealTimeCodeProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RealTimeCodeProportionData'])) {
            if (!empty($map['RealTimeCodeProportionData'])) {
                $model->realTimeCodeProportionData = [];
                $n                                 = 0;
                foreach ($map['RealTimeCodeProportionData'] as $item) {
                    $model->realTimeCodeProportionData[$n++] = null !== $item ? realTimeCodeProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
