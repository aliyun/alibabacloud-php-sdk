<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @var RegionInfo[]
     */
    public $regionInfos;
    protected $_name = [
        'regionInfos' => 'RegionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionInfos) {
            $res['RegionInfo'] = [];
            if (null !== $this->regionInfos && \is_array($this->regionInfos)) {
                $n = 0;
                foreach ($this->regionInfos as $item) {
                    $res['RegionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionInfo'])) {
            if (!empty($map['RegionInfo'])) {
                $model->regionInfos = [];
                $n                  = 0;
                foreach ($map['RegionInfo'] as $item) {
                    $model->regionInfos[$n++] = null !== $item ? RegionInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
