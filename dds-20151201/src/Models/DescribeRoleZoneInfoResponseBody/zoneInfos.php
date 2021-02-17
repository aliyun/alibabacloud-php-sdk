<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody\zoneInfos\zoneInfo;
use AlibabaCloud\Tea\Model;

class zoneInfos extends Model
{
    /**
     * @var zoneInfo[]
     */
    public $zoneInfo;
    protected $_name = [
        'zoneInfo' => 'ZoneInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneInfo) {
            $res['ZoneInfo'] = [];
            if (null !== $this->zoneInfo && \is_array($this->zoneInfo)) {
                $n = 0;
                foreach ($this->zoneInfo as $item) {
                    $res['ZoneInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneInfo'])) {
            if (!empty($map['ZoneInfo'])) {
                $model->zoneInfo = [];
                $n               = 0;
                foreach ($map['ZoneInfo'] as $item) {
                    $model->zoneInfo[$n++] = null !== $item ? zoneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
