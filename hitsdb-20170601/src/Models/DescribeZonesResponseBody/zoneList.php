<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesResponseBody;

use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesResponseBody\zoneList\zoneModel;
use AlibabaCloud\Tea\Model;

class zoneList extends Model
{
    /**
     * @var zoneModel[]
     */
    public $zoneModel;
    protected $_name = [
        'zoneModel' => 'ZoneModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneModel) {
            $res['ZoneModel'] = [];
            if (null !== $this->zoneModel && \is_array($this->zoneModel)) {
                $n = 0;
                foreach ($this->zoneModel as $item) {
                    $res['ZoneModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ZoneModel'])) {
            if (!empty($map['ZoneModel'])) {
                $model->zoneModel = [];
                $n                = 0;
                foreach ($map['ZoneModel'] as $item) {
                    $model->zoneModel[$n++] = null !== $item ? zoneModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
