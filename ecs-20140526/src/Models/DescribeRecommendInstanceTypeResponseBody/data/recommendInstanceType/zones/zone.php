<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data\recommendInstanceType\zones\zone\networkTypes;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description Details of network types of the alternative instance types.
     *
     * @var networkTypes
     */
    public $networkTypes;

    /**
     * @description The zone ID of the specified instance type.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneNo;
    protected $_name = [
        'networkTypes' => 'NetworkTypes',
        'zoneNo'       => 'ZoneNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = null !== $this->networkTypes ? $this->networkTypes->toMap() : null;
        }
        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
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
