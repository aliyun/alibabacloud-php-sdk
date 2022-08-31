<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainRegionDataResponseBody;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainRegionDataResponseBody\value\regionProportionData;
use AlibabaCloud\Tea\Model;

class value extends Model
{
    /**
     * @var regionProportionData[]
     */
    public $regionProportionData;
    protected $_name = [
        'regionProportionData' => 'RegionProportionData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionProportionData) {
            $res['RegionProportionData'] = [];
            if (null !== $this->regionProportionData && \is_array($this->regionProportionData)) {
                $n = 0;
                foreach ($this->regionProportionData as $item) {
                    $res['RegionProportionData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['RegionProportionData'])) {
            if (!empty($map['RegionProportionData'])) {
                $model->regionProportionData = [];
                $n                           = 0;
                foreach ($map['RegionProportionData'] as $item) {
                    $model->regionProportionData[$n++] = null !== $item ? regionProportionData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
