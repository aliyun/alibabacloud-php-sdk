<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkInfo\bandwidthWeighting\weightingInfos;

class bandwidthWeighting extends Model
{
    /**
     * @var weightingInfos
     */
    public $weightingInfos;
    protected $_name = [
        'weightingInfos' => 'WeightingInfos',
    ];

    public function validate()
    {
        if (null !== $this->weightingInfos) {
            $this->weightingInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->weightingInfos) {
            $res['WeightingInfos'] = null !== $this->weightingInfos ? $this->weightingInfos->toArray($noStream) : $this->weightingInfos;
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
        if (isset($map['WeightingInfos'])) {
            $model->weightingInfos = weightingInfos::fromMap($map['WeightingInfos']);
        }

        return $model;
    }
}
