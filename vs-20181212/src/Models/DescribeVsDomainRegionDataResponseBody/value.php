<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRegionDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRegionDataResponseBody\value\regionProportionData;

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
        if (\is_array($this->regionProportionData)) {
            Model::validateArray($this->regionProportionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionProportionData) {
            if (\is_array($this->regionProportionData)) {
                $res['RegionProportionData'] = [];
                $n1 = 0;
                foreach ($this->regionProportionData as $item1) {
                    $res['RegionProportionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionProportionData'])) {
            if (!empty($map['RegionProportionData'])) {
                $model->regionProportionData = [];
                $n1 = 0;
                foreach ($map['RegionProportionData'] as $item1) {
                    $model->regionProportionData[$n1] = regionProportionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
