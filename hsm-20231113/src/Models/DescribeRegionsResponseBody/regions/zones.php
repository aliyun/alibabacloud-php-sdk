<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @example yes
     *
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $localName;

    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cluster'   => 'Cluster',
        'localName' => 'LocalName',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
