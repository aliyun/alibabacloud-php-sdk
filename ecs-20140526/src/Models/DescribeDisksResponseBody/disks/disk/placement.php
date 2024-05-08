<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk;

use AlibabaCloud\Tea\Model;

class placement extends Model
{
    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return placement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
