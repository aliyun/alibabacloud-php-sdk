<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponseBody\data;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var string
     */
    public $zoneNo;

    /**
     * @var string[]
     */
    public $networkTypes;
    protected $_name = [
        'zoneNo'       => 'ZoneNo',
        'networkTypes' => 'NetworkTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = $this->networkTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }
        if (isset($map['NetworkTypes'])) {
            if (!empty($map['NetworkTypes'])) {
                $model->networkTypes = $map['NetworkTypes'];
            }
        }

        return $model;
    }
}
