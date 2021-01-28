<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponseBody\value\ispProportionData;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var ispProportionData[]
     */
    public $ispProportionData;
    protected $_name = [
        'ispProportionData' => 'IspProportionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispProportionData) {
            $res['IspProportionData'] = [];
            if (null !== $this->ispProportionData && \is_array($this->ispProportionData)) {
                $n = 0;
                foreach ($this->ispProportionData as $item) {
                    $res['IspProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['IspProportionData'])) {
            if (!empty($map['IspProportionData'])) {
                $model->ispProportionData = [];
                $n                        = 0;
                foreach ($map['IspProportionData'] as $item) {
                    $model->ispProportionData[$n++] = null !== $item ? ispProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
