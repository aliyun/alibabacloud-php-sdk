<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupByTagsResponseBody\data\deviceGroup;

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
        if (\is_array($this->deviceGroup)) {
            Model::validateArray($this->deviceGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceGroup) {
            if (\is_array($this->deviceGroup)) {
                $res['DeviceGroup'] = [];
                $n1 = 0;
                foreach ($this->deviceGroup as $item1) {
                    $res['DeviceGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroup'])) {
            if (!empty($map['DeviceGroup'])) {
                $model->deviceGroup = [];
                $n1 = 0;
                foreach ($map['DeviceGroup'] as $item1) {
                    $model->deviceGroup[$n1] = deviceGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
