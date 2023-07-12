<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicesHotStorageDataStatusResponse\data\list_\propertyStatusDataInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var propertyStatusDataInfo[]
     */
    public $propertyStatusDataInfo;
    protected $_name = [
        'propertyStatusDataInfo' => 'PropertyStatusDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('propertyStatusDataInfo', $this->propertyStatusDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyStatusDataInfo) {
            $res['PropertyStatusDataInfo'] = [];
            if (null !== $this->propertyStatusDataInfo && \is_array($this->propertyStatusDataInfo)) {
                $n = 0;
                foreach ($this->propertyStatusDataInfo as $item) {
                    $res['PropertyStatusDataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PropertyStatusDataInfo'])) {
            if (!empty($map['PropertyStatusDataInfo'])) {
                $model->propertyStatusDataInfo = [];
                $n                             = 0;
                foreach ($map['PropertyStatusDataInfo'] as $item) {
                    $model->propertyStatusDataInfo[$n++] = null !== $item ? propertyStatusDataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
