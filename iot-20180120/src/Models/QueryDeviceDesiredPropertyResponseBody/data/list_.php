<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDesiredPropertyResponseBody\data\list_\desiredPropertyInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var desiredPropertyInfo[]
     */
    public $desiredPropertyInfo;
    protected $_name = [
        'desiredPropertyInfo' => 'DesiredPropertyInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desiredPropertyInfo) {
            $res['DesiredPropertyInfo'] = [];
            if (null !== $this->desiredPropertyInfo && \is_array($this->desiredPropertyInfo)) {
                $n = 0;
                foreach ($this->desiredPropertyInfo as $item) {
                    $res['DesiredPropertyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DesiredPropertyInfo'])) {
            if (!empty($map['DesiredPropertyInfo'])) {
                $model->desiredPropertyInfo = [];
                $n                          = 0;
                foreach ($map['DesiredPropertyInfo'] as $item) {
                    $model->desiredPropertyInfo[$n++] = null !== $item ? desiredPropertyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
