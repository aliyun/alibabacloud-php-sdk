<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos\propertyDataInfo;
use AlibabaCloud\Tea\Model;

class propertyDataInfos extends Model
{
    /**
     * @var propertyDataInfo[]
     */
    public $propertyDataInfo;
    protected $_name = [
        'propertyDataInfo' => 'PropertyDataInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyDataInfo) {
            $res['PropertyDataInfo'] = [];
            if (null !== $this->propertyDataInfo && \is_array($this->propertyDataInfo)) {
                $n = 0;
                foreach ($this->propertyDataInfo as $item) {
                    $res['PropertyDataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyDataInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyDataInfo'])) {
            if (!empty($map['PropertyDataInfo'])) {
                $model->propertyDataInfo = [];
                $n                       = 0;
                foreach ($map['PropertyDataInfo'] as $item) {
                    $model->propertyDataInfo[$n++] = null !== $item ? propertyDataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
