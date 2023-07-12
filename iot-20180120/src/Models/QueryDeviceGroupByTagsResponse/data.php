<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByTagsResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByTagsResponse\data\deviceGroup;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var deviceGroup[]
     */
    public $deviceGroup;
    protected $_name = [
        'deviceGroup' => 'DeviceGroup',
    ];

    public function validate()
    {
        Model::validateRequired('deviceGroup', $this->deviceGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroup) {
            $res['DeviceGroup'] = [];
            if (null !== $this->deviceGroup && \is_array($this->deviceGroup)) {
                $n = 0;
                foreach ($this->deviceGroup as $item) {
                    $res['DeviceGroup'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DeviceGroup'])) {
            if (!empty($map['DeviceGroup'])) {
                $model->deviceGroup = [];
                $n                  = 0;
                foreach ($map['DeviceGroup'] as $item) {
                    $model->deviceGroup[$n++] = null !== $item ? deviceGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
