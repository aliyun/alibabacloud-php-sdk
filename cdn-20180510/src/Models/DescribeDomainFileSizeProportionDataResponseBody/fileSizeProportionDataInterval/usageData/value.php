<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval\usageData;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataResponseBody\fileSizeProportionDataInterval\usageData\value\fileSizeProportionData;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var fileSizeProportionData[]
     */
    public $fileSizeProportionData;
    protected $_name = [
        'fileSizeProportionData' => 'FileSizeProportionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSizeProportionData) {
            $res['FileSizeProportionData'] = [];
            if (null !== $this->fileSizeProportionData && \is_array($this->fileSizeProportionData)) {
                $n = 0;
                foreach ($this->fileSizeProportionData as $item) {
                    $res['FileSizeProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['FileSizeProportionData'])) {
            if (!empty($map['FileSizeProportionData'])) {
                $model->fileSizeProportionData = [];
                $n                             = 0;
                foreach ($map['FileSizeProportionData'] as $item) {
                    $model->fileSizeProportionData[$n++] = null !== $item ? fileSizeProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
