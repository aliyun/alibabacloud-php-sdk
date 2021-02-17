<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody\data\regionDo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var regionDo[]
     */
    public $regionDo;
    protected $_name = [
        'regionDo' => 'RegionDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionDo) {
            $res['RegionDo'] = [];
            if (null !== $this->regionDo && \is_array($this->regionDo)) {
                $n = 0;
                foreach ($this->regionDo as $item) {
                    $res['RegionDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionDo'])) {
            if (!empty($map['RegionDo'])) {
                $model->regionDo = [];
                $n               = 0;
                foreach ($map['RegionDo'] as $item) {
                    $model->regionDo[$n++] = null !== $item ? regionDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
