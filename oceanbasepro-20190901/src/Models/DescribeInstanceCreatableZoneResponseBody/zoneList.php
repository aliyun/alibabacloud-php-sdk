<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneResponseBody;

use AlibabaCloud\Tea\Model;

class zoneList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isInCluster;

    /**
     * @description DescribeInstanceCreatableZone
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'isInCluster' => 'IsInCluster',
        'zone'        => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isInCluster) {
            $res['IsInCluster'] = $this->isInCluster;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsInCluster'])) {
            $model->isInCluster = $map['IsInCluster'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
