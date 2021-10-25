<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListRegionsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListRegionsResponseBody\regions\regionInfo;
use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var regionInfo[]
     */
    public $regionInfo;
    protected $_name = [
        'regionInfo' => 'RegionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionInfo) {
            $res['RegionInfo'] = [];
            if (null !== $this->regionInfo && \is_array($this->regionInfo)) {
                $n = 0;
                foreach ($this->regionInfo as $item) {
                    $res['RegionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionInfo'])) {
            if (!empty($map['RegionInfo'])) {
                $model->regionInfo = [];
                $n                 = 0;
                foreach ($map['RegionInfo'] as $item) {
                    $model->regionInfo[$n++] = null !== $item ? regionInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
