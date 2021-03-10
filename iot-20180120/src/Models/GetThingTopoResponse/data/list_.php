<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetThingTopoResponse\data\list_\deviceInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var deviceInfo[]
     */
    public $deviceInfo;
    protected $_name = [
        'deviceInfo' => 'deviceInfo',
    ];

    public function validate()
    {
        Model::validateRequired('deviceInfo', $this->deviceInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['deviceInfo'] = [];
            if (null !== $this->deviceInfo && \is_array($this->deviceInfo)) {
                $n = 0;
                foreach ($this->deviceInfo as $item) {
                    $res['deviceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceInfo'])) {
            if (!empty($map['deviceInfo'])) {
                $model->deviceInfo = [];
                $n                 = 0;
                foreach ($map['deviceInfo'] as $item) {
                    $model->deviceInfo[$n++] = null !== $item ? deviceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
