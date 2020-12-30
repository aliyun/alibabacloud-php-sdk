<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody\appDeviceStats\appDeviceStat;
use AlibabaCloud\Tea\Model;

class appDeviceStats extends Model
{
    /**
     * @var appDeviceStat[]
     */
    public $appDeviceStat;
    protected $_name = [
        'appDeviceStat' => 'AppDeviceStat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDeviceStat) {
            $res['AppDeviceStat'] = [];
            if (null !== $this->appDeviceStat && \is_array($this->appDeviceStat)) {
                $n = 0;
                foreach ($this->appDeviceStat as $item) {
                    $res['AppDeviceStat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appDeviceStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDeviceStat'])) {
            if (!empty($map['AppDeviceStat'])) {
                $model->appDeviceStat = [];
                $n                    = 0;
                foreach ($map['AppDeviceStat'] as $item) {
                    $model->appDeviceStat[$n++] = null !== $item ? appDeviceStat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
