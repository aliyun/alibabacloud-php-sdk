<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkInfo\bandwidthWeighting;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkInfo\bandwidthWeighting\weightingInfos\weightingInfo;

class weightingInfos extends Model
{
    /**
     * @var weightingInfo[]
     */
    public $weightingInfo;
    protected $_name = [
        'weightingInfo' => 'WeightingInfo',
    ];

    public function validate()
    {
        if (\is_array($this->weightingInfo)) {
            Model::validateArray($this->weightingInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->weightingInfo) {
            if (\is_array($this->weightingInfo)) {
                $res['WeightingInfo'] = [];
                $n1 = 0;
                foreach ($this->weightingInfo as $item1) {
                    $res['WeightingInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WeightingInfo'])) {
            if (!empty($map['WeightingInfo'])) {
                $model->weightingInfo = [];
                $n1 = 0;
                foreach ($map['WeightingInfo'] as $item1) {
                    $model->weightingInfo[$n1] = weightingInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
