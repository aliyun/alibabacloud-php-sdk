<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody\zoneInfos\zoneInfo;

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
        if (\is_array($this->zoneInfo)) {
            Model::validateArray($this->zoneInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zoneInfo) {
            if (\is_array($this->zoneInfo)) {
                $res['ZoneInfo'] = [];
                $n1 = 0;
                foreach ($this->zoneInfo as $item1) {
                    $res['ZoneInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ZoneInfo'])) {
            if (!empty($map['ZoneInfo'])) {
                $model->zoneInfo = [];
                $n1 = 0;
                foreach ($map['ZoneInfo'] as $item1) {
                    $model->zoneInfo[$n1] = zoneInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
