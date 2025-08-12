<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData\value\realTimeCodeProportionData;

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
        if (\is_array($this->realTimeCodeProportionData)) {
            Model::validateArray($this->realTimeCodeProportionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realTimeCodeProportionData) {
            if (\is_array($this->realTimeCodeProportionData)) {
                $res['RealTimeCodeProportionData'] = [];
                $n1 = 0;
                foreach ($this->realTimeCodeProportionData as $item1) {
                    $res['RealTimeCodeProportionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RealTimeCodeProportionData'])) {
            if (!empty($map['RealTimeCodeProportionData'])) {
                $model->realTimeCodeProportionData = [];
                $n1 = 0;
                foreach ($map['RealTimeCodeProportionData'] as $item1) {
                    $model->realTimeCodeProportionData[$n1] = realTimeCodeProportionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
