<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones\zone\networkTypes;

class zone extends Model
{
    /**
     * @var networkTypes
     */
    public $networkTypes;
    /**
     * @var string
     */
    public $zoneNo;
    protected $_name = [
        'networkTypes' => 'NetworkTypes',
        'zoneNo'       => 'ZoneNo',
    ];

    public function validate()
    {
        if (null !== $this->networkTypes) {
            $this->networkTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = null !== $this->networkTypes ? $this->networkTypes->toArray($noStream) : $this->networkTypes;
        }

        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
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
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = networkTypes::fromMap($map['NetworkTypes']);
        }

        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }

        return $model;
    }
}
