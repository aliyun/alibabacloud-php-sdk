<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataResponseBody\httpCodeData\usageData;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataResponseBody\httpCodeData\usageData\value\codeProportionData;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var codeProportionData[]
     */
    public $codeProportionData;
    protected $_name = [
        'codeProportionData' => 'CodeProportionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeProportionData) {
            $res['CodeProportionData'] = [];
            if (null !== $this->codeProportionData && \is_array($this->codeProportionData)) {
                $n = 0;
                foreach ($this->codeProportionData as $item) {
                    $res['CodeProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CodeProportionData'])) {
            if (!empty($map['CodeProportionData'])) {
                $model->codeProportionData = [];
                $n                         = 0;
                foreach ($map['CodeProportionData'] as $item) {
                    $model->codeProportionData[$n++] = null !== $item ? codeProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
